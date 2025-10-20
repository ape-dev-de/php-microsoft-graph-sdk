<?php

declare(strict_types=1);

/**
 * Shared generator functions
 */

/**
 * Normalize model name from OpenAPI schema reference
 * Converts "microsoft.graph.user" to "User"
 */
function normalizeModelName(string $name): string
{
    // Remove namespace prefix (microsoft.graph.)
    $name = preg_replace('/^microsoft\.graph\./', '', $name);
    
    // Remove any remaining dots and convert to PascalCase
    $parts = explode('.', $name);
    $parts = array_map('ucfirst', $parts);
    $name = implode('', $parts);
    
    // Ensure first letter is uppercase
    return ucfirst($name);
}

/**
 * Generate base HTTP client and serialization classes
 */
function generateBaseClasses(string $buildDir): void
{
    $httpDir = $buildDir . '/Http';
    if (!is_dir($httpDir)) {
        mkdir($httpDir, 0755, true);
    }

    // Graph Client with simple JSON serialization
    $graphClient = <<<'PHP'
<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Http;

use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Symfony\Component\Serializer\SerializerInterface;
use ApeDevDe\MicrosoftGraphSdk\Authentication\AuthenticationProvider;

class GraphClient
{
    private const BASE_URL = 'https://graph.microsoft.com/v1.0';

    private ClientInterface $httpClient;
    private RequestFactoryInterface $requestFactory;
    private StreamFactoryInterface $streamFactory;
    private SerializerInterface $serializer;
    private AuthenticationProvider $authProvider;

    public function __construct(
        ClientInterface $httpClient,
        RequestFactoryInterface $requestFactory,
        StreamFactoryInterface $streamFactory,
        SerializerInterface $serializer,
        AuthenticationProvider $authProvider
    ) {
        $this->httpClient = $httpClient;
        $this->requestFactory = $requestFactory;
        $this->streamFactory = $streamFactory;
        $this->serializer = $serializer;
        $this->authProvider = $authProvider;
    }

    public function get(string $path, ?array $queryParameters = null): ResponseInterface
    {
        $url = $this->buildUrl($path, $queryParameters);
        $request = $this->requestFactory->createRequest('GET', $url);
        $request = $this->authProvider->authenticate($request);

        return $this->httpClient->sendRequest($request);
    }

    public function post(string $path, mixed $body, ?array $queryParameters = null): ResponseInterface
    {
        $url = $this->buildUrl($path, $queryParameters);
        $request = $this->requestFactory->createRequest('POST', $url);
        $request = $this->authProvider->authenticate($request);

        $serializedBody = $this->serializer->serialize($body, 'json');
        $stream = $this->streamFactory->createStream($serializedBody);
        $request = $request->withBody($stream)
            ->withHeader('Content-Type', 'application/json');

        return $this->httpClient->sendRequest($request);
    }

    public function patch(string $path, mixed $body, ?array $queryParameters = null): ResponseInterface
    {
        $url = $this->buildUrl($path, $queryParameters);
        $request = $this->requestFactory->createRequest('PATCH', $url);
        $request = $this->authProvider->authenticate($request);

        $serializedBody = $this->serializer->serialize($body, 'json');
        $stream = $this->streamFactory->createStream($serializedBody);
        $request = $request->withBody($stream)
            ->withHeader('Content-Type', 'application/json');

        return $this->httpClient->sendRequest($request);
    }

    public function put(string $path, mixed $body, ?array $queryParameters = null): ResponseInterface
    {
        $url = $this->buildUrl($path, $queryParameters);
        $request = $this->requestFactory->createRequest('PUT', $url);
        $request = $this->authProvider->authenticate($request);

        $serializedBody = $this->serializer->serialize($body, 'json');
        $stream = $this->streamFactory->createStream($serializedBody);
        $request = $request->withBody($stream)
            ->withHeader('Content-Type', 'application/json');

        return $this->httpClient->sendRequest($request);
    }

    public function delete(string $path, ?array $queryParameters = null): ResponseInterface
    {
        $url = $this->buildUrl($path, $queryParameters);
        $request = $this->requestFactory->createRequest('DELETE', $url);
        $request = $this->authProvider->authenticate($request);

        return $this->httpClient->sendRequest($request);
    }

    public function deserialize(ResponseInterface $response, string $type): mixed
    {
        $content = (string) $response->getBody();
        
        if ($response->getStatusCode() >= 400) {
            throw new GraphException(
                "Graph API request failed with status {$response->getStatusCode()}: {$content}",
                $response->getStatusCode()
            );
        }

        if (empty($content)) {
            return null;
        }

        return $this->serializer->deserialize($content, $type, 'json');
    }

    private function buildUrl(string $path, ?array $queryParameters = null): string
    {
        $url = self::BASE_URL . $path;

        if ($queryParameters !== null && count($queryParameters) > 0) {
            $url .= '?' . http_build_query($queryParameters);
        }

        return $url;
    }
}
PHP;

    file_put_contents($httpDir . '/GraphClient.php', $graphClient);

    // Graph Exception
    $graphException = <<<'PHP'
<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Http;

use RuntimeException;

class GraphException extends RuntimeException
{
}
PHP;

    file_put_contents($httpDir . '/GraphException.php', $graphException);
}

/**
 * Generate authentication layer
 */
function generateAuthenticationLayer(string $buildDir): void
{
    $authDir = $buildDir . '/Authentication';
    if (!is_dir($authDir)) {
        mkdir($authDir, 0755, true);
    }

    // Authentication Provider Interface
    $authProvider = <<<'PHP'
<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Authentication;

use Psr\Http\Message\RequestInterface;

interface AuthenticationProvider
{
    public function authenticate(RequestInterface $request): RequestInterface;
}
PHP;

    file_put_contents($authDir . '/AuthenticationProvider.php', $authProvider);

    // Bearer Token Authentication
    $bearerAuth = <<<'PHP'
<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Authentication;

use Psr\Http\Message\RequestInterface;

class BearerTokenAuthenticationProvider implements AuthenticationProvider
{
    private string $accessToken;

    public function __construct(string $accessToken)
    {
        $this->accessToken = $accessToken;
    }

    public function authenticate(RequestInterface $request): RequestInterface
    {
        return $request->withHeader('Authorization', 'Bearer ' . $this->accessToken);
    }
}
PHP;

    file_put_contents($authDir . '/BearerTokenAuthenticationProvider.php', $bearerAuth);

    // Client Credentials Authentication
    $clientCredentialsAuth = <<<'PHP'
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
PHP;

    file_put_contents($authDir . '/ClientCredentialsAuthenticationProvider.php', $clientCredentialsAuth);
}
