<?php

declare(strict_types=1);

/**
 * Interactive Graph API Tinker Shell
 * 
 * Usage: php tinker.php
 * 
 * Examples:
 *   $client->users()->get()
 *   $client->me()->get()
 *   $client->users()->byId('user-id')->get()
 */

require_once __DIR__ . '/vendor/autoload.php';

use ApeDevDe\MicrosoftGraphSdk\GraphServiceClient;
use ApeDevDe\MicrosoftGraphSdk\Authentication\ClientCredentialsAuthenticationProvider;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Psr7\HttpFactory;

// Load environment variables
if (file_exists(__DIR__ . '/.env')) {
    $env = parse_ini_file(__DIR__ . '/.env');
    foreach ($env as $key => $value) {
        $_ENV[$key] = $value;
    }
}

echo "\n";
echo "╔══════════════════════════════════════════════════════════════╗\n";
echo "║         Microsoft Graph SDK - Interactive Tinker            ║\n";
echo "╚══════════════════════════════════════════════════════════════╝\n";
echo "\n";

// Check authentication method
$authMethod = $_ENV['GRAPH_AUTH_METHOD'] ?? 'client_credentials';

echo "🔐 Authenticating ({$authMethod})...\n";

try {
    $httpClient = new HttpClient(['timeout' => 30]);
    $httpFactory = new HttpFactory();
    
    if ($authMethod === 'bearer') {
        // Bearer token authentication (from device login)
        $bearerToken = $_ENV['GRAPH_BEARER_TOKEN'] ?? '';
        
        if (empty($bearerToken)) {
            echo "❌ Missing GRAPH_BEARER_TOKEN in .env file\n";
            echo "Please run: php auth-setup.php\n\n";
            exit(1);
        }
        
        $authProvider = new \ApeDevDe\MicrosoftGraphSdk\Authentication\BearerTokenAuthenticationProvider($bearerToken);
        
    } else {
        // Client credentials authentication
        $tenantId = $_ENV['GRAPH_TENANT_ID'] ?? '';
        $clientId = $_ENV['GRAPH_CLIENT_ID'] ?? '';
        $clientSecret = $_ENV['GRAPH_CLIENT_SECRET'] ?? '';
        
        if (empty($tenantId) || empty($clientId) || empty($clientSecret)) {
            echo "❌ Missing credentials in .env file\n";
            echo "Please run: php auth-setup.php\n\n";
            exit(1);
        }
        
        $authProvider = new ClientCredentialsAuthenticationProvider(
            $tenantId,
            $clientId,
            $clientSecret
        );
    }
    
    $client = GraphServiceClient::create(
        $httpClient,
        $httpFactory,
        $httpFactory,
        $authProvider
    );
    
    // Test connection
    $me = $client->me()->get();
    
    echo "✅ Connected to Microsoft Graph API\n";
    if ($authMethod === 'bearer') {
        echo "👤 User: " . ($me->getDisplayName() ?? 'Unknown') . "\n";
        if (method_exists($me, 'getUserPrincipalName')) {
            echo "📧 UPN: " . ($me->getUserPrincipalName() ?? 'N/A') . "\n";
        }
    } else {
        $tenantId = $_ENV['GRAPH_TENANT_ID'] ?? '';
        echo "📊 Tenant: {$tenantId}\n";
    }
    echo "\n";
} catch (\Exception $e) {
    echo "❌ Authentication failed: " . $e->getMessage() . "\n";
    echo "Please check your credentials in .env\n";
    echo "Run: php auth-setup.php\n\n";
    exit(1);
}

echo "Available variables:\n";
echo "  \$client - GraphServiceClient instance\n";
echo "\n";
echo "Example commands:\n";
echo "  \$client->users()->get()\n";
echo "  \$client->me()->get()\n";
echo "  \$client->users()->byId('user-id')->get()\n";
echo "  \$client->groups()->get(queryParameters: ['\$top' => 5])\n";
echo "\n";
echo "Special commands:\n";
echo "  .help    - Show this help\n";
echo "  .exit    - Exit tinker (or Ctrl+D)\n";
echo "  .clear   - Clear screen\n";
echo "  .vars    - Show available variables\n";
echo "\n";
echo "Tips:\n";
echo "  • Use arrow keys to navigate history\n";
echo "  • Press Ctrl+C to interrupt long-running commands\n";
echo "  • Press Tab for command completion\n";
echo "\n";
echo "═══════════════════════════════════════════════════════════════\n";
echo "\n";

// History file
$historyFile = __DIR__ . '/.tinker_history';

// Check if readline is available
$hasReadline = function_exists('readline');

if ($hasReadline) {
    // Load history
    if (file_exists($historyFile)) {
        $historyLines = file($historyFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($historyLines as $line) {
            readline_add_history($line);
        }
    }
    
    // Enable readline completion (optional)
    readline_completion_function(function($input, $index) {
        $commands = ['.help', '.exit', '.clear', '.vars', '$client'];
        return array_filter($commands, fn($cmd) => str_starts_with($cmd, $input));
    });
} else {
    echo "\033[33m⚠ Readline not available - arrow keys won't work. Install php-readline for better experience.\033[0m\n\n";
}

// REPL loop
$lineNumber = 1;
while (true) {
    if ($hasReadline) {
        $input = readline("[\033[36m{$lineNumber}\033[0m] > ");
        if ($input === false) {
            // EOF (Ctrl+D)
            echo "\n\n👋 Goodbye!\n\n";
            break;
        }
        $input = trim($input);
    } else {
        echo "[\033[36m{$lineNumber}\033[0m] > ";
        $input = trim(fgets(STDIN));
    }
    
    if (empty($input)) {
        continue;
    }
    
    // Save to history
    if ($hasReadline) {
        readline_add_history($input);
    }
    file_put_contents($historyFile, $input . "\n", FILE_APPEND);
    
    // Special commands
    if ($input === '.exit' || $input === 'exit' || $input === 'quit') {
        echo "\n👋 Goodbye!\n\n";
        break;
    }
    
    if ($input === '.help' || $input === 'help') {
        echo "\n";
        echo "Available commands:\n";
        echo "  \$client->users()->get()                           - Get all users\n";
        echo "  \$client->me()->get()                              - Get current user\n";
        echo "  \$client->users()->byId(\$id)->get()                - Get user by ID\n";
        echo "  \$client->users()->byId(\$id)->activities()->get()  - Get user activities\n";
        echo "  \$client->groups()->get()                          - Get all groups\n";
        echo "\n";
        echo "Query parameters:\n";
        echo "  \$client->users()->get(queryParameters: ['\$top' => 5])\n";
        echo "  \$client->users()->get(queryParameters: ['\$select' => 'id,displayName'])\n";
        echo "  \$client->users()->get(queryParameters: ['\$filter' => \"startsWith(displayName,'A')\"])\n";
        echo "\n";
        echo "Helpers:\n";
        echo "  json_encode(\$result, JSON_PRETTY_PRINT)           - Pretty print JSON\n";
        echo "  var_dump(\$result)                                 - Dump variable\n";
        echo "  print_r(\$result)                                  - Print variable\n";
        echo "\n";
        continue;
    }
    
    if ($input === '.clear' || $input === 'clear') {
        system('clear');
        continue;
    }
    
    if ($input === '.vars') {
        echo "\n";
        echo "Available variables:\n";
        echo "  \$client (GraphServiceClient)\n";
        echo "  \$lineNumber (int) = {$lineNumber}\n";
        echo "\n";
        continue;
    }
    
    // Execute PHP code
    try {
        // Add semicolon if missing
        if (!str_ends_with($input, ';')) {
            $input .= ';';
        }
        
        // Capture output
        ob_start();
        
        // Set error handler to catch warnings/notices
        set_error_handler(function($errno, $errstr, $errfile, $errline) {
            throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
        });
        
        // Evaluate the code
        $result = @eval("return {$input}");
        
        // Restore error handler
        restore_error_handler();
        
        $output = ob_get_clean();


        // Display output if any
        if (!empty($output)) {
            echo $output;
        }
        
        // Display result
        if ($result !== null) {
            echo "\n";
            echo "\033[32m"; // Green color
            
            // Pretty print based on type
            if (is_object($result)) {
                echo "=> " . get_class($result) . " {\n";
                
                // Try to show some useful info
                if (method_exists($result, 'getValue')) {
                    $values = $result->getValue();
                    echo "   count: " . count($values) . "\n";
                    if (!empty($values)) {
                        echo "   first: ";
                        if (is_object($values[0]) && method_exists($values[0], 'getId')) {
                            echo "id=" . $values[0]->getId();
                            if (method_exists($values[0], 'getDisplayName')) {
                                echo ", displayName=" . $values[0]->getDisplayName();
                            }
                        } else {
                            echo get_class($values[0]);
                        }
                        echo "\n";
                    }
                } elseif (method_exists($result, 'getId')) {
                    echo "   id: " . $result->getId() . "\n";
                    if (method_exists($result, 'getDisplayName')) {
                        echo "   displayName: " . $result->getDisplayName() . "\n";
                    }
                    if (method_exists($result, 'getUserPrincipalName')) {
                        echo "   userPrincipalName: " . $result->getUserPrincipalName() . "\n";
                    }
                }
                
                echo "}\n";
                echo "\n";
                echo "\033[90m"; // Gray color
                echo "Tip: Use json_encode(\$result, JSON_PRETTY_PRINT) for full output\n";
                echo "     Or var_dump(\$result) for detailed inspection\n";
            } elseif (is_array($result)) {
                echo "=> array(" . count($result) . ") ";
                print_r($result);
            } elseif (is_bool($result)) {
                echo "=> " . ($result ? 'true' : 'false') . "\n";
            } elseif (is_string($result)) {
                echo "=> \"{$result}\"\n";
            } else {
                echo "=> ";
                var_dump($result);
            }
            
            echo "\033[0m"; // Reset color
        }
        
        echo "\n";
        
    } catch (\ParseError $e) {
        // Clean up output buffer if still active
        if (ob_get_level() > 0) {
            ob_end_clean();
        }
        restore_error_handler();
        
        echo "\n";
        echo "\033[31m"; // Red color
        echo "Parse Error: " . $e->getMessage() . "\n";
        echo "\033[0m";
        echo "\n";
    } catch (\ErrorException $e) {
        // Clean up output buffer if still active
        if (ob_get_level() > 0) {
            ob_end_clean();
        }
        restore_error_handler();
        
        echo "\n";
        echo "\033[31m"; // Red color
        echo "Error: " . $e->getMessage() . "\n";
        echo "\033[0m";
        echo "\n";
    } catch (\Exception $e) {
        // Clean up output buffer if still active
        if (ob_get_level() > 0) {
            ob_end_clean();
        }
        restore_error_handler();
        
        echo "\n";
        echo "\033[31m"; // Red color
        echo "Error: " . $e->getMessage() . "\n";
        echo "File: " . $e->getFile() . ":" . $e->getLine() . "\n";
        echo "\033[90m"; // Gray
        echo "\nStack trace:\n";
        echo $e->getTraceAsString() . "\n";
        echo "\033[0m";
        echo "\n";
    } catch (\Throwable $e) {
        // Clean up output buffer if still active
        if (ob_get_level() > 0) {
            ob_end_clean();
        }
        restore_error_handler();
        
        echo "\n";
        echo "\033[31m"; // Red color
        echo get_class($e) . ": " . $e->getMessage() . "\n";
        echo "\033[0m";
        echo "\n";
    }
    
    $lineNumber++;
}
