<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Http;

use ApeDevDe\MicrosoftGraphSdk\Authentication\AuthenticationProvider;
use ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * HTTP client for Microsoft Graph API
 */
class GraphClient
{
    private ClientInterface $httpClient;
    private RequestFactoryInterface $requestFactory;
    private StreamFactoryInterface $streamFactory;
    private AuthenticationProvider $authProvider;
    private string $baseUrl;

    public function __construct(
        ClientInterface $httpClient,
        RequestFactoryInterface $requestFactory,
        StreamFactoryInterface $streamFactory,
        AuthenticationProvider $authProvider,
        string $baseUrl = 'https://graph.microsoft.com/v1.0'
    ) {
        $this->httpClient = $httpClient;
        $this->requestFactory = $requestFactory;
        $this->streamFactory = $streamFactory;
        $this->authProvider = $authProvider;
        $this->baseUrl = rtrim($baseUrl, '/');
    }

    /**
     * @param string $path
     * @param array<string, mixed> $queryParams
     * @return ResponseInterface
     * @throws ClientExceptionInterface
     */
    public function get(string $path, array $queryParams = []): ResponseInterface
    {
        $url = $this->buildUrl($path, $queryParams);
        $request = $this->requestFactory->createRequest('GET', $url);
        
        $token = $this->authProvider->getAccessToken();
        $request = $request->withHeader('Authorization', 'Bearer ' . $token);
        
        return $this->httpClient->sendRequest($request);
    }

    /**
     * @param string $path
     * @param mixed $body
     * @return ResponseInterface
     * @throws ClientExceptionInterface
     */
    public function post(string $path, mixed $body): ResponseInterface
    {
        $url = $this->buildUrl($path);
        $request = $this->requestFactory->createRequest('POST', $url);
        
        $token = $this->authProvider->getAccessToken();
        $request = $request->withHeader('Authorization', 'Bearer ' . $token);
        $request = $request->withHeader('Content-Type', 'application/json');
        
        $json = json_encode($body);
        if ($json === false) {
            throw new \RuntimeException('Failed to encode body as JSON');
        }
        $stream = $this->streamFactory->createStream($json);
        $request = $request->withBody($stream);
        
        return $this->httpClient->sendRequest($request);
    }

    /**
     * @param string $path
     * @param mixed $body
     * @return ResponseInterface
     * @throws ClientExceptionInterface
     */
    public function patch(string $path, mixed $body): ResponseInterface
    {
        $url = $this->buildUrl($path);
        $request = $this->requestFactory->createRequest('PATCH', $url);
        
        $token = $this->authProvider->getAccessToken();
        $request = $request->withHeader('Authorization', 'Bearer ' . $token);
        $request = $request->withHeader('Content-Type', 'application/json');
        
        $json = json_encode($body);
        if ($json === false) {
            throw new \RuntimeException('Failed to encode body as JSON');
        }
        $stream = $this->streamFactory->createStream($json);
        $request = $request->withBody($stream);
        
        return $this->httpClient->sendRequest($request);
    }

    /**
     * @param string $path
     * @param mixed $body
     * @return ResponseInterface
     * @throws ClientExceptionInterface
     */
    public function put(string $path, mixed $body): ResponseInterface
    {
        $url = $this->buildUrl($path);
        $request = $this->requestFactory->createRequest('PUT', $url);
        
        $token = $this->authProvider->getAccessToken();
        $request = $request->withHeader('Authorization', 'Bearer ' . $token);
        $request = $request->withHeader('Content-Type', 'application/json');
        
        $json = json_encode($body);
        if ($json === false) {
            throw new \RuntimeException('Failed to encode body as JSON');
        }
        $stream = $this->streamFactory->createStream($json);
        $request = $request->withBody($stream);
        
        return $this->httpClient->sendRequest($request);
    }

    /**
     * @param string $path
     * @param array<string, mixed> $queryParams
     * @return ResponseInterface
     * @throws ClientExceptionInterface
     */
    public function delete(string $path, array $queryParams = []): ResponseInterface
    {
        $url = $this->buildUrl($path, $queryParams);
        $request = $this->requestFactory->createRequest('DELETE', $url);
        
        $token = $this->authProvider->getAccessToken();
        $request = $request->withHeader('Authorization', 'Bearer ' . $token);
        
        return $this->httpClient->sendRequest($request);
    }

    /**
     * Check response and throw exception on error
     */
    public function checkResponse(ResponseInterface $response): void
    {
        $statusCode = $response->getStatusCode();
        
        if ($statusCode < 200 || $statusCode >= 300) {
            $body = (string) $response->getBody();
            $data = json_decode($body, true);
            $error = (object)($data['error'] ?? ['message' => 'Unknown error', 'code' => 'UnknownError']);
            throw new GraphException($error->message ?? 'API Error', $statusCode, $error);
        }
    }


    /**
     * @param string $path
     * @param array<string,string> $queryParams
     * @return string
     */
    private function buildUrl(string $path, array $queryParams = []): string
    {
        $url = $this->baseUrl . $path;
        
        if (!empty($queryParams)) {
            $queryParts = [];
            foreach ($queryParams as $key => $value) {
                $queryParts[] = rawurlencode($key) . '=' . rawurlencode((string)$value);
            }
            $url .= '?' . implode('&', $queryParts);
        }

        return $url;
    }
}
