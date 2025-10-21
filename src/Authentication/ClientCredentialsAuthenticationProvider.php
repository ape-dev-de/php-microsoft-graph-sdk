<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Authentication;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

/**
 * OAuth 2.0 Client Credentials authentication provider
 */
class ClientCredentialsAuthenticationProvider implements AuthenticationProvider
{
    private string $tenantId;
    private string $clientId;
    private string $clientSecret;
    private ?string $cachedToken = null;
    private ?int $tokenExpiry = null;

    public function __construct(string $tenantId, string $clientId, string $clientSecret)
    {
        $this->tenantId = $tenantId;
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
    }

    public function getAccessToken(): string
    {
        // Return cached token if still valid
        if ($this->cachedToken && $this->tokenExpiry && time() < $this->tokenExpiry) {
            return $this->cachedToken;
        }

        // Request new token
        $this->cachedToken = $this->requestToken();
        
        return $this->cachedToken;
    }

    private function requestToken(): string
    {
        $client = new Client();
        $tokenUrl = "https://login.microsoftonline.com/{$this->tenantId}/oauth2/v2.0/token";

        try {
            $response = $client->post($tokenUrl, [
                'form_params' => [
                    'client_id' => $this->clientId,
                    'client_secret' => $this->clientSecret,
                    'scope' => 'https://graph.microsoft.com/.default',
                    'grant_type' => 'client_credentials',
                ],
            ]);

            $data = json_decode($response->getBody()->getContents(), true);
            
            if (isset($data['access_token'])) {
                // Cache token with expiry (subtract 5 minutes for safety)
                $this->tokenExpiry = time() + ($data['expires_in'] ?? 3600) - 300;
                return $data['access_token'];
            }

            throw new \RuntimeException('No access token in response');
        } catch (GuzzleException $e) {
            throw new \RuntimeException('Failed to obtain access token: ' . $e->getMessage(), 0, $e);
        }
    }
}
