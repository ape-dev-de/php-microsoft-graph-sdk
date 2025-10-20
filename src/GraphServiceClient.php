<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk;

use ApeDevDe\MicrosoftGraphSdk\Authentication\AuthenticationProvider;
use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GraphRequestBuilder;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
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
     * @param SerializerInterface|null $serializer Optional custom serializer
     * @return self
     */
    public static function create(
        ClientInterface $httpClient,
        RequestFactoryInterface $requestFactory,
        StreamFactoryInterface $streamFactory,
        AuthenticationProvider $authProvider,
        ?SerializerInterface $serializer = null
    ): self {
        // Create default serializer if not provided
        if ($serializer === null) {
            $serializer = self::createDefaultSerializer();
        }

        // Create Graph HTTP client
        $graphClient = new GraphClient(
            $httpClient,
            $requestFactory,
            $streamFactory,
            $serializer,
            $authProvider
        );

        // Create root request builder
        $requestBuilder = new GraphRequestBuilder($graphClient);

        return new self($requestBuilder);
    }

    /**
     * Access the /me endpoint
     */
    public function me(): RequestBuilders\MeRequestBuilder
    {
        return $this->requestBuilder->me();
    }

    /**
     * Access the /users endpoint
     */
    public function users(): RequestBuilders\UsersRequestBuilder
    {
        return $this->requestBuilder->users();
    }

    /**
     * Access the /groups endpoint
     */
    public function groups(): RequestBuilders\GroupsRequestBuilder
    {
        return $this->requestBuilder->groups();
    }

    /**
     * Access the /applications endpoint
     */
    public function applications(): RequestBuilders\ApplicationsRequestBuilder
    {
        return $this->requestBuilder->applications();
    }

    /**
     * Get the underlying request builder for advanced usage
     */
    public function getRequestBuilder(): GraphRequestBuilder
    {
        return $this->requestBuilder;
    }

    /**
     * Create a default Symfony serializer configured for Graph API
     */
    private static function createDefaultSerializer(): SerializerInterface
    {
        // Property info extractors for type detection
        $phpDocExtractor = new PhpDocExtractor();
        $reflectionExtractor = new ReflectionExtractor();
        
        $propertyTypeExtractor = new PropertyInfoExtractor(
            [$reflectionExtractor],
            [$phpDocExtractor, $reflectionExtractor],
            [$phpDocExtractor],
            [$reflectionExtractor],
            [$reflectionExtractor]
        );

        // Property accessor for nested properties
        $propertyAccessor = PropertyAccess::createPropertyAccessor();

        // Normalizers
        $normalizers = [
            new DateTimeNormalizer([
                DateTimeNormalizer::FORMAT_KEY => \DateTimeInterface::RFC3339_EXTENDED,
            ]),
            new ArrayDenormalizer(),
            new ObjectNormalizer(
                null,
                null,
                $propertyAccessor,
                $propertyTypeExtractor
            ),
        ];

        // Encoders
        $encoders = [new JsonEncoder()];

        return new Serializer($normalizers, $encoders);
    }
}
