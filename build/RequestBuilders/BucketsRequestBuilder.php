<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\PlannerBucket;
use ApeDevDe\MicrosoftGraphSdk\Models\PlannerBucketCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\PlannerBucketQueryOptions;

/**
 * Request builder for PlannerBucket
 */
class BucketsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new PlannerBucketQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param PlannerBucketQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return PlannerBucketCollectionResponse
     */
    public function get(?PlannerBucketQueryOptions $options = null, ?array $queryParameters = null): PlannerBucketCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, PlannerBucketCollectionResponse::class);
    }

    /**
     * Create a new PlannerBucket
     *
     * @param PlannerBucket $item The item to create
     * @return PlannerBucket
     */
    public function post(PlannerBucket $item): PlannerBucket
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, PlannerBucket::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return PlannerBucketItemRequestBuilder
     */
    public function byId(string $id): PlannerBucketItemRequestBuilder
    {
        return new PlannerBucketItemRequestBuilder($this->client, $this->buildPath($id));
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
