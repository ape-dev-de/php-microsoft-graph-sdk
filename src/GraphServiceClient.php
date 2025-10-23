<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk;

use ApeDevDe\MicrosoftGraphSdk\Authentication\AuthenticationProvider;
use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GraphRequestBuilder;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Main entry point for Microsoft Graph SDK
 *
 * This class provides a factory method to create a fully configured
 * Graph API client with request builders, serialization, and authentication.
 */
class GraphServiceClient
{
    private GraphRequestBuilder $requestBuilder;

    private function __construct(GraphRequestBuilder $requestBuilder)
    {
        $this->requestBuilder = $requestBuilder;
    }

    /**
     * Create a new Graph Service Client
     *
     * @param ClientInterface $httpClient PSR-18 HTTP client
     * @param RequestFactoryInterface $requestFactory PSR-17 request factory
     * @param StreamFactoryInterface $streamFactory PSR-17 stream factory
     * @param AuthenticationProvider $authProvider Authentication provider
     * @return self
     */
    public static function create(
        ClientInterface         $httpClient,
        RequestFactoryInterface $requestFactory,
        StreamFactoryInterface  $streamFactory,
        AuthenticationProvider  $authProvider,
    ): self
    {

        // Create Graph HTTP client
        $graphClient = new GraphClient(
            $httpClient,
            $requestFactory,
            $streamFactory,
            $authProvider
        );

        // Create root request builder
        $requestBuilder = new GraphRequestBuilder($graphClient);

        return new self($requestBuilder);
    }

    /**
     * Magic method to forward all calls to the underlying GraphRequestBuilder
     * This allows access to all root namespaces without explicitly defining them
     * 
     * @param array<int, mixed> $arguments
     * @return mixed
     */
    public function __call(string $name, array $arguments): mixed
    {
        if (method_exists($this->requestBuilder, $name)) {
            return $this->requestBuilder->$name(...$arguments);
        }

        throw new \BadMethodCallException("Method {$name} does not exist on GraphServiceClient");
    }

    /**
     * Get the underlying request builder for advanced usage
     */
    public function getRequestBuilder(): GraphRequestBuilder
    {
        return $this->requestBuilder;
    }
}
