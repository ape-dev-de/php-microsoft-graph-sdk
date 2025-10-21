<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AuthenticationMethodConfiguration;
use ApeDevDe\MicrosoftGraphSdk\Models\AuthenticationMethodConfigurationCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\AuthenticationMethodConfigurationQueryOptions;

/**
 * Request builder for AuthenticationMethodConfiguration
 */
class AuthenticationMethodConfigurationsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new AuthenticationMethodConfigurationQueryOptions())->top(10)->select(['displayName', 'mail']))
     * 2. Array parameters: get(queryParameters: ['$top' => 10, '$select' => 'displayName,mail'])
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $filter: Filter results
     * - $orderby: Order results
     * - $top: Limit number of results
     * - $skip: Skip number of results
     * - $expand: Expand related resources
     * - $search: Search query
     * - $count: Include count of items
     *
     * @param AuthenticationMethodConfigurationQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return AuthenticationMethodConfigurationCollectionResponse
     */
    public function get(?AuthenticationMethodConfigurationQueryOptions $options = null, ?array $queryParameters = null): AuthenticationMethodConfigurationCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, AuthenticationMethodConfigurationCollectionResponse::class);
    }

    /**
     * Create a new AuthenticationMethodConfiguration
     *
     * @param AuthenticationMethodConfiguration $item The item to create
     * @return AuthenticationMethodConfiguration
     */
    public function post(AuthenticationMethodConfiguration $item): AuthenticationMethodConfiguration
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, AuthenticationMethodConfiguration::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return AuthenticationMethodConfigurationItemRequestBuilder
     */
    public function byId(string $id): AuthenticationMethodConfigurationItemRequestBuilder
    {
        return new AuthenticationMethodConfigurationItemRequestBuilder($this->client, $this->buildPath($id));
    }

    /**
     * Get count of items in collection
     *
     * @return int
     */
    public function count(): int
    {
        $response = $this->client->get($this->getFullPath() . '/$count');
        return (int) $response->getBody()->getContents();
    }

}
