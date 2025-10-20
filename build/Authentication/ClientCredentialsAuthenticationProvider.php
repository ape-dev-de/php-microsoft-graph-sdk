<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Authentication;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;

class ClientCredentialsAuthenticationProvider implements AuthenticationProvider
{
    private string $tenantId;
    private string $clientId;
    private string $clientSecret;
    private ?string $cachedToken = null;
    private ?int $tokenExpiry = null;
    private ClientInterface $httpClient;
    private RequestFactoryInterface $requestFactory;
    private StreamFactoryInterface $streamFactory;

    public function __construct(
        string $tenantId,
        string $clientId,
        string $clientSecret,
        ClientInterface $httpClient,
        RequestFactoryInterface $requestFactory,
        StreamFactoryInterface $streamFactory
    ) {
        $this->tenantId = $tenantId;
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->httpClient = $httpClient;
        $this->requestFactory = $requestFactory;
        $this->streamFactory = $streamFactory;
    }

    public function authenticate(RequestInterface $request): RequestInterface
    {
        $token = $this->getAccessToken();
        return $request->withHeader('Authorization', 'Bearer ' . $token);
    }

    private function getAccessToken(): string
    {
        if ($this->cachedToken !== null && $this->tokenExpiry !== null && time() < $this->tokenExpiry) {
            return $this->cachedToken;
        }

        $tokenUrl = "https://login.microsoftonline.com/{$this->tenantId}/oauth2/v2.0/token";
        
        $body = http_build_query([
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
            'scope' => 'https://graph.microsoft.com/.default',
            'grant_type' => 'client_credentials',
        ]);

        $request = $this->requestFactory->createRequest('POST', $tokenUrl);
        $stream = $this->streamFactory->createStream($body);
        $request = $request->withBody($stream)
            ->withHeader('Content-Type', 'application/x-www-form-urlencoded');

        $response = $this->httpClient->sendRequest($request);
        $data = json_decode((string) $response->getBody(), true);

        if (!isset($data['access_token'])) {
            throw new \RuntimeException('Failed to obtain access token');
        }

        $this->cachedToken = $data['access_token'];
        $this->tokenExpiry = time() + ($data['expires_in'] ?? 3600) - 300; // 5 min buffer

        return $this->cachedToken;
    }
}