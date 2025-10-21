<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ServiceStorageQuotaBreakdown;
use ApeDevDe\MicrosoftGraphSdk\Models\ServiceStorageQuotaBreakdownCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ServiceStorageQuotaBreakdownQueryOptions;

/**
 * Request builder for ServiceStorageQuotaBreakdown
 */
class ServicesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ServiceStorageQuotaBreakdownQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param ServiceStorageQuotaBreakdownQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ServiceStorageQuotaBreakdownCollectionResponse
     */
    public function get(?ServiceStorageQuotaBreakdownQueryOptions $options = null, ?array $queryParameters = null): ServiceStorageQuotaBreakdownCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ServiceStorageQuotaBreakdownCollectionResponse::class);
    }

    /**
     * Create a new ServiceStorageQuotaBreakdown
     *
     * @param ServiceStorageQuotaBreakdown $item The item to create
     * @return ServiceStorageQuotaBreakdown
     */
    public function post(ServiceStorageQuotaBreakdown $item): ServiceStorageQuotaBreakdown
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, ServiceStorageQuotaBreakdown::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return ServiceStorageQuotaBreakdownItemRequestBuilder
     */
    public function byId(string $id): ServiceStorageQuotaBreakdownItemRequestBuilder
    {
        return new ServiceStorageQuotaBreakdownItemRequestBuilder($this->client, $this->buildPath($id));
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
