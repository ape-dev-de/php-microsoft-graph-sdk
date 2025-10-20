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