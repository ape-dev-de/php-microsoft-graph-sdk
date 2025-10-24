<?php

declare(strict_types=1);

/**
 * Interactive OAuth Authentication Helper
 * 
 * This script helps you authenticate with Microsoft Graph API using:
 * 1. Device Code Flow (recommended for MFA)
 * 2. Authorization Code Flow (with local server)
 * 
 * It will save the credentials to .env file automatically.
 */

const REDIRECT_URI = 'http://localhost:8888/callback';
const SCOPES = 'User.Read.All Group.Read.All Application.Read.All Directory.Read.All offline_access Mail.ReadWrite Sites.ReadWrite.All Files.ReadWrite.All';

// Microsoft's public client IDs for development
const PUBLIC_CLIENT_IDS = [
    'graph_explorer' => '14d82eec-204b-4c2f-b7e8-296a70dab67e', // Microsoft Graph Explorer
    'azure_cli' => '04b07795-8ddb-461a-bbee-02f9e1bf7b46',      // Azure CLI
    'powershell' => '1950a258-227b-4e31-a9cf-717495945fc2',     // Azure PowerShell
];

class AuthSetup
{
    private string $tenantId;
    private string $clientId;
    private ?string $clientSecret;
    private string $authMethod;
    private bool $usePublicClient = false;

    public function __construct()
    {
        echo "\n";
        echo "╔════════════════════════════════════════════════════════════╗\n";
        echo "║   Microsoft Graph SDK - Authentication Setup              ║\n";
        echo "╚════════════════════════════════════════════════════════════╝\n";
        echo "\n";
    }

    public function run(): void
    {
        $this->showMenu();
    }

    private function showMenu(): void
    {
        echo "Choose authentication method:\n\n";
        echo "  1. Quick Start (no app registration needed!) ⭐\n";
        echo "  2. Device Code Flow (with your app)\n";
        echo "  3. Authorization Code Flow (with local server)\n";
        echo "  4. Client Credentials (service account)\n";
        echo "  5. Exit\n\n";

        $choice = $this->prompt("Enter choice (1-5)");

        switch ($choice) {
            case '1':
                $this->quickStart();
                break;
            case '2':
                $this->deviceCodeFlow();
                break;
            case '3':
                $this->authorizationCodeFlow();
                break;
            case '4':
                $this->clientCredentialsFlow();
                break;
            case '5':
                echo "Goodbye!\n";
                exit(0);
            default:
                echo "Invalid choice!\n";
                $this->showMenu();
        }
    }

    private function quickStart(): void
    {
        echo "\n";
        echo "═══════════════════════════════════════════════════════════\n";
        echo "  Quick Start - No App Registration Needed!\n";
        echo "═══════════════════════════════════════════════════════════\n\n";

        echo "This uses Microsoft's public client for testing.\n";
        echo "✅ No app registration required\n";
        echo "✅ Works with MFA\n";
        echo "✅ Perfect for testing and development\n\n";

        echo "⚠️  Note: For production, create your own app registration.\n\n";

        $continue = $this->prompt("Continue with quick start? (y/n)");
        if (strtolower($continue) !== 'y') {
            $this->showMenu();
            return;
        }

        // Use Microsoft Graph Explorer public client
        $this->clientId = PUBLIC_CLIENT_IDS['graph_explorer'];
        $this->tenantId = 'common'; // Will be auto-detected from user
        $this->usePublicClient = true;
        $this->authMethod = 'device_code';

        echo "\nUsing Microsoft Graph Explorer public client...\n";
        echo "Tenant will be auto-detected from your login.\n\n";

        // Request device code
        $deviceCodeData = $this->requestDeviceCode();

        if (!$deviceCodeData) {
            echo "❌ Failed to get device code.\n";
            return;
        }

        echo "╔════════════════════════════════════════════════════════════╗\n";
        echo "║  Please authenticate in your browser:                      ║\n";
        echo "╚════════════════════════════════════════════════════════════╝\n\n";
        echo "  1. Open: {$deviceCodeData['verification_uri']}\n";
        echo "  2. Enter code: {$deviceCodeData['user_code']}\n\n";
        echo "Waiting for authentication";

        // Poll for token
        $token = $this->pollForToken($deviceCodeData);

        if ($token) {
            echo "\n\n✅ Authentication successful!\n\n";
            
            // Auto-detect tenant from token
            $this->autoDetectTenant($token['access_token']);
            
            $this->saveToEnv($token);
        } else {
            echo "\n\n❌ Authentication failed or timed out.\n";
        }
    }

    private function autoDetectTenant(string $accessToken): void
    {
        try {
            // Decode JWT to get tenant ID
            $parts = explode('.', $accessToken);
            if (count($parts) !== 3) {
                echo "⚠️  Could not parse token for auto-detection\n";
                return;
            }
            
            // Base64 decode with URL-safe alphabet and add padding if needed
            $payload = $parts[1];
            $payload = strtr($payload, '-_', '+/');
            
            // Add padding if needed
            $remainder = strlen($payload) % 4;
            if ($remainder) {
                $payload .= str_repeat('=', 4 - $remainder);
            }
            
            $decoded = base64_decode($payload, true);
            if ($decoded === false) {
                echo "⚠️  Could not decode token payload\n";
                return;
            }
            
            $data = json_decode($decoded, true);
            if (!is_array($data)) {
                echo "⚠️  Could not parse token data\n";
                return;
            }
            
            // Extract tenant ID
            if (isset($data['tid'])) {
                $detectedTenant = $data['tid'];
                echo "Auto-detected tenant: {$detectedTenant}\n";
                $this->tenantId = $detectedTenant;
            } else {
                echo "⚠️  Tenant ID not found in token, using 'common'\n";
                $this->tenantId = 'common';
            }
            
            // Show user info
            if (isset($data['upn'])) {
                echo "Logged in as: {$data['upn']}\n";
            } elseif (isset($data['unique_name'])) {
                echo "Logged in as: {$data['unique_name']}\n";
            } elseif (isset($data['email'])) {
                echo "Logged in as: {$data['email']}\n";
            }
        } catch (\Exception $e) {
            echo "⚠️  Error auto-detecting tenant: {$e->getMessage()}\n";
            echo "Using 'common' as tenant ID\n";
            $this->tenantId = 'common';
        }
    }

    private function deviceCodeFlow(): void
    {
        echo "\n";
        echo "═══════════════════════════════════════════════════════════\n";
        echo "  Device Code Flow (Best for MFA)\n";
        echo "═══════════════════════════════════════════════════════════\n\n";

        echo "This method works great with MFA! You'll authenticate in your browser.\n\n";

        $this->tenantId = $this->prompt("Enter Tenant ID (or 'common')");
        $this->clientId = $this->prompt("Enter Client ID");
        $this->authMethod = 'device_code';

        echo "\nInitiating device code flow...\n\n";

        // Request device code
        $deviceCodeData = $this->requestDeviceCode();

        if (!$deviceCodeData) {
            echo "❌ Failed to get device code. Please check your Client ID.\n";
            return;
        }

        echo "╔════════════════════════════════════════════════════════════╗\n";
        echo "║  Please authenticate in your browser:                      ║\n";
        echo "╚════════════════════════════════════════════════════════════╝\n\n";
        echo "  1. Open: {$deviceCodeData['verification_uri']}\n";
        echo "  2. Enter code: {$deviceCodeData['user_code']}\n\n";
        echo "Waiting for authentication";

        // Poll for token
        $token = $this->pollForToken($deviceCodeData);

        if ($token) {
            echo "\n\n✅ Authentication successful!\n\n";
            $this->saveToEnv($token);
        } else {
            echo "\n\n❌ Authentication failed or timed out.\n";
        }
    }

    private function authorizationCodeFlow(): void
    {
        echo "\n";
        echo "═══════════════════════════════════════════════════════════\n";
        echo "  Authorization Code Flow (with local server)\n";
        echo "═══════════════════════════════════════════════════════════\n\n";

        $this->tenantId = $this->prompt("Enter Tenant ID (or 'common')");
        $this->clientId = $this->prompt("Enter Client ID");
        $this->clientSecret = $this->prompt("Enter Client Secret (optional, press Enter to skip)");
        $this->authMethod = 'authorization_code';

        if (empty($this->clientSecret)) {
            $this->clientSecret = null;
        }

        echo "\n⚠️  Important: Add this redirect URI to your app registration:\n";
        echo "   " . REDIRECT_URI . "\n\n";

        $continue = $this->prompt("Have you added the redirect URI? (y/n)");
        if (strtolower($continue) !== 'y') {
            echo "Please add the redirect URI and try again.\n";
            return;
        }

        // Start local server
        $this->startLocalServer();
    }

    private function clientCredentialsFlow(): void
    {
        echo "\n";
        echo "═══════════════════════════════════════════════════════════\n";
        echo "  Client Credentials Flow (Service Account)\n";
        echo "═══════════════════════════════════════════════════════════\n\n";

        echo "⚠️  Note: This method doesn't support MFA and requires admin consent.\n\n";

        $this->tenantId = $this->prompt("Enter Tenant ID");
        $this->clientId = $this->prompt("Enter Client ID");
        $this->clientSecret = $this->prompt("Enter Client Secret");
        $this->authMethod = 'client_credentials';

        // Test the credentials
        echo "\nTesting credentials...\n";

        $token = $this->getClientCredentialsToken();

        if ($token) {
            echo "✅ Credentials valid!\n\n";
            $this->saveToEnv(['access_token' => $token]);
        } else {
            echo "❌ Failed to authenticate. Please check your credentials.\n";
        }
    }

    private function requestDeviceCode(): ?array
    {
        $url = "https://login.microsoftonline.com/{$this->tenantId}/oauth2/v2.0/devicecode";

        $data = [
            'client_id' => $this->clientId,
            'scope' => SCOPES,
        ];

        $response = $this->httpPost($url, $data);

        return $response ? json_decode($response, true) : null;
    }

    private function pollForToken(array $deviceCodeData): ?array
    {
        $url = "https://login.microsoftonline.com/{$this->tenantId}/oauth2/v2.0/token";
        $interval = $deviceCodeData['interval'] ?? 5;
        $expiresIn = $deviceCodeData['expires_in'] ?? 900;
        $startTime = time();

        while (time() - $startTime < $expiresIn) {
            sleep($interval);
            echo ".";

            $data = [
                'grant_type' => 'urn:ietf:params:oauth:grant-type:device_code',
                'client_id' => $this->clientId,
                'device_code' => $deviceCodeData['device_code'],
            ];

            $response = $this->httpPost($url, $data);
            
            if (!$response) {
                echo "\n[DEBUG] No response from server\n";
                continue; // Network error, keep trying
            }
            
            $result = json_decode($response, true);
            
            if (!$result) {
                echo "\n[DEBUG] Failed to decode JSON response: " . substr($response, 0, 200) . "\n";
                continue;
            }

            if (isset($result['access_token'])) {
                echo "\n✅ Authentication successful!\n";
                return $result;
            }

            // Handle different error codes
            if (isset($result['error'])) {
                $error = $result['error'];
                
                // These errors mean we should keep waiting
                if (in_array($error, ['authorization_pending', 'authorization_declined', 'bad_verification_code'])) {
                    // authorization_pending: User hasn't completed auth yet
                    // authorization_declined: User declined (but we'll keep trying until timeout)
                    // bad_verification_code: Wrong code entered, but might retry
                    continue;
                }
                
                // Other errors are fatal
                echo "\n❌ Authentication error: {$error}\n";
                if (isset($result['error_description'])) {
                    echo "   {$result['error_description']}\n";
                }
                return null;
            }
        }

        echo "\n⏱️  Authentication timed out\n";
        return null;
    }

    private function startLocalServer(): void
    {
        $authUrl = $this->getAuthorizationUrl();

        echo "\n╔════════════════════════════════════════════════════════════╗\n";
        echo "║  Starting local server on http://localhost:8888           ║\n";
        echo "╚════════════════════════════════════════════════════════════╝\n\n";

        echo "Opening browser for authentication...\n\n";

        // Open browser
        $this->openBrowser($authUrl);

        // Start server
        $this->runLocalServer();
    }

    private function getAuthorizationUrl(): string
    {
        $params = [
            'client_id' => $this->clientId,
            'response_type' => 'code',
            'redirect_uri' => REDIRECT_URI,
            'scope' => SCOPES,
            'response_mode' => 'query',
        ];

        return "https://login.microsoftonline.com/{$this->tenantId}/oauth2/v2.0/authorize?" . http_build_query($params);
    }

    private function runLocalServer(): void
    {
        $socket = stream_socket_server("tcp://127.0.0.1:8888", $errno, $errstr);

        if (!$socket) {
            echo "❌ Failed to start server: $errstr\n";
            return;
        }

        echo "Waiting for authentication callback...\n";

        while ($conn = stream_socket_accept($socket, -1)) {
            $request = fread($conn, 1024);

            if (preg_match('/GET \/callback\?code=([^&\s]+)/', $request, $matches)) {
                $code = $matches[1];

                // Exchange code for token
                $token = $this->exchangeCodeForToken($code);

                if ($token) {
                    $response = "HTTP/1.1 200 OK\r\n";
                    $response .= "Content-Type: text/html\r\n\r\n";
                    $response .= "<html><body style='font-family: sans-serif; text-align: center; padding: 50px;'>";
                    $response .= "<h1 style='color: green;'>✅ Authentication Successful!</h1>";
                    $response .= "<p>You can close this window and return to the terminal.</p>";
                    $response .= "</body></html>";

                    fwrite($conn, $response);
                    fclose($conn);
                    fclose($socket);

                    echo "\n✅ Authentication successful!\n\n";
                    $this->saveToEnv($token);
                    return;
                } else {
                    $response = "HTTP/1.1 200 OK\r\n";
                    $response .= "Content-Type: text/html\r\n\r\n";
                    $response .= "<html><body style='font-family: sans-serif; text-align: center; padding: 50px;'>";
                    $response .= "<h1 style='color: red;'>❌ Authentication Failed</h1>";
                    $response .= "<p>Please check the terminal for details.</p>";
                    $response .= "</body></html>";

                    fwrite($conn, $response);
                    fclose($conn);
                }
            }

            fclose($conn);
        }

        fclose($socket);
    }

    private function exchangeCodeForToken(string $code): ?array
    {
        $url = "https://login.microsoftonline.com/{$this->tenantId}/oauth2/v2.0/token";

        $data = [
            'client_id' => $this->clientId,
            'scope' => SCOPES,
            'code' => $code,
            'redirect_uri' => REDIRECT_URI,
            'grant_type' => 'authorization_code',
        ];

        if ($this->clientSecret) {
            $data['client_secret'] = $this->clientSecret;
        }

        $response = $this->httpPost($url, $data);

        return $response ? json_decode($response, true) : null;
    }

    private function getClientCredentialsToken(): ?string
    {
        $url = "https://login.microsoftonline.com/{$this->tenantId}/oauth2/v2.0/token";

        $data = [
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
            'scope' => 'https://graph.microsoft.com/.default',
            'grant_type' => 'client_credentials',
        ];

        $response = $this->httpPost($url, $data);
        $result = json_decode($response, true);

        return $result['access_token'] ?? null;
    }

    private function saveToEnv(array $tokenData): void
    {
        $envFile = __DIR__ . '/.env';
        $envContent = [];

        // Read existing .env if it exists
        if (file_exists($envFile)) {
            $envContent = parse_ini_file($envFile);
        }

        // Update values
        $envContent['GRAPH_TENANT_ID'] = $this->tenantId;
        $envContent['GRAPH_CLIENT_ID'] = $this->clientId;

        if ($this->authMethod === 'client_credentials') {
            $envContent['GRAPH_AUTH_METHOD'] = 'client_credentials';
            $envContent['GRAPH_CLIENT_SECRET'] = $this->clientSecret;
        } else {
            $envContent['GRAPH_AUTH_METHOD'] = 'bearer';
            $envContent['GRAPH_BEARER_TOKEN'] = $tokenData['access_token'];

            if (isset($tokenData['refresh_token'])) {
                $envContent['GRAPH_REFRESH_TOKEN'] = $tokenData['refresh_token'];
            }
        }

        $envContent['GRAPH_API_VERSION'] = 'v1.0';
        $envContent['GRAPH_BASE_URL'] = 'https://graph.microsoft.com';
        $envContent['TEST_SKIP_DESTRUCTIVE'] = 'true';

        // Write .env file
        $lines = [];
        $lines[] = "# Microsoft Graph API Configuration";
        $lines[] = "# Generated by auth-setup.php on " . date('Y-m-d H:i:s');
        $lines[] = "";

        foreach ($envContent as $key => $value) {
            $lines[] = "{$key}={$value}";
        }

        file_put_contents($envFile, implode("\n", $lines) . "\n");

        echo "╔════════════════════════════════════════════════════════════╗\n";
        echo "║  Configuration saved to .env                               ║\n";
        echo "╚════════════════════════════════════════════════════════════╝\n\n";

        echo "Your .env file has been created with:\n";
        echo "  - Tenant ID: {$this->tenantId}\n";
        echo "  - Client ID: {$this->clientId}\n";
        echo "  - Auth Method: {$envContent['GRAPH_AUTH_METHOD']}\n\n";

        if (isset($tokenData['expires_in'])) {
            $expiresAt = date('Y-m-d H:i:s', time() + $tokenData['expires_in']);
            echo "⚠️  Token expires at: {$expiresAt}\n";
            if (isset($tokenData['refresh_token'])) {
                echo "✅ Refresh token saved - you can renew the token later\n";
            }
        }

        echo "\nYou can now run: composer test\n";
    }

    private function httpPost(string $url, array $data): ?string
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/x-www-form-urlencoded',
        ]);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        // Handle curl_exec() returning false on failure
        if ($response === false) {
            echo "Error: HTTP request failed\n";
            return null;
        }

        if ($httpCode >= 400) {
            $error = json_decode($response, true);
            if (isset($error['error_description'])) {
                echo "Error: {$error['error_description']}\n";
            }
            return null;
        }

        return $response;
    }

    private function openBrowser(string $url): void
    {
        $os = PHP_OS_FAMILY;

        if ($os === 'Darwin') {
            exec("open " . escapeshellarg($url));
        } elseif ($os === 'Windows') {
            exec("start " . escapeshellarg($url));
        } else {
            exec("xdg-open " . escapeshellarg($url));
        }
    }

    private function prompt(string $message): string
    {
        echo "{$message}: ";
        return trim(fgets(STDIN));
    }
}

// Run the setup
$setup = new AuthSetup();
$setup->run();
