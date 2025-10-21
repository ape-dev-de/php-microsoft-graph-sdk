<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ServicePrincipal;
use ApeDevDe\MicrosoftGraphSdk\Models\ServicePrincipalCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ServicePrincipalQueryOptions;

/**
 * Request builder for ServicePrincipal
 */
class ServicePrincipalsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ServicePrincipalQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param ServicePrincipalQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ServicePrincipalCollectionResponse
     */
    public function get(?ServicePrincipalQueryOptions $options = null, ?array $queryParameters = null): ServicePrincipalCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ServicePrincipalCollectionResponse::class);
    }

    /**
     * Create a new ServicePrincipal
     *
     * @param ServicePrincipal $item The item to create
     * @return ServicePrincipal
     */
    public function post(ServicePrincipal $item): ServicePrincipal
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, ServicePrincipal::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return ServicePrincipalItemRequestBuilder
     */
    public function byId(string $id): ServicePrincipalItemRequestBuilder
    {
        return new ServicePrincipalItemRequestBuilder($this->client, $this->buildPath($id));
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
