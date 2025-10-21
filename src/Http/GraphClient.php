<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Http;

use ApeDevDe\MicrosoftGraphSdk\Authentication\AuthenticationProvider;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * HTTP client for Microsoft Graph API
 */
class GraphClient
{
    private ClientInterface $httpClient;
    private RequestFactoryInterface $requestFactory;
    private StreamFactoryInterface $streamFactory;
    private SerializerInterface $serializer;
    private AuthenticationProvider $authProvider;
    private string $baseUrl;

    public function __construct(
        ClientInterface $httpClient,
        RequestFactoryInterface $requestFactory,
        StreamFactoryInterface $streamFactory,
        SerializerInterface $serializer,
        AuthenticationProvider $authProvider,
        string $baseUrl = 'https://graph.microsoft.com/v1.0'
    ) {
        $this->httpClient = $httpClient;
        $this->requestFactory = $requestFactory;
        $this->streamFactory = $streamFactory;
        $this->serializer = $serializer;
        $this->authProvider = $authProvider;
        $this->baseUrl = rtrim($baseUrl, '/');
    }

    public function get(string $path, array $queryParams = []): ResponseInterface
    {
        $url = $this->buildUrl($path, $queryParams);
        $request = $this->requestFactory->createRequest('GET', $url);
        
        $token = $this->authProvider->getAccessToken();
        $request = $request->withHeader('Authorization', 'Bearer ' . $token);
        
        return $this->httpClient->sendRequest($request);
    }

    public function post(string $path, $body): ResponseInterface
    {
        $url = $this->buildUrl($path);
        $request = $this->requestFactory->createRequest('POST', $url);
        
        $token = $this->authProvider->getAccessToken();
        $request = $request->withHeader('Authorization', 'Bearer ' . $token);
        $request = $request->withHeader('Content-Type', 'application/json');
        
        $stream = $this->streamFactory->createStream(json_encode($body));
        $request = $request->withBody($stream);
        
        return $this->httpClient->sendRequest($request);
    }

    public function patch(string $path, $body): ResponseInterface
    {
        $url = $this->buildUrl($path);
        $request = $this->requestFactory->createRequest('PATCH', $url);
        
        $token = $this->authProvider->getAccessToken();
        $request = $request->withHeader('Authorization', 'Bearer ' . $token);
        $request = $request->withHeader('Content-Type', 'application/json');
        
        $stream = $this->streamFactory->createStream(json_encode($body));
        $request = $request->withBody($stream);
        
        return $this->httpClient->sendRequest($request);
    }

    public function delete(string $path): ResponseInterface
    {
        $url = $this->buildUrl($path);
        $request = $this->requestFactory->createRequest('DELETE', $url);
        
        $token = $this->authProvider->getAccessToken();
        $request = $request->withHeader('Authorization', 'Bearer ' . $token);
        
        return $this->httpClient->sendRequest($request);
    }

    public function deserialize(ResponseInterface $response, string $class)
    {
        $body = (string) $response->getBody();
        
        // Use the serializer to deserialize
        return $this->serializer->deserialize($body, $class, 'json');
    }

    private function buildUrl(string $path, array $queryParams = []): string
    {
        $url = $this->baseUrl . $path;
        
        if (!empty($queryParams)) {
            $url .= '?' . http_build_query($queryParams);
        }
        
        return $url;
    }
}
