<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Planner;
use ApeDevDe\MicrosoftGraphSdk\Models\PlannerCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\PlannerQueryOptions;

/**
 * Request builder for Planner collection
 */
class PlannerRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new PlannerQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param PlannerQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return PlannerCollectionResponse
     */
    public function get(?PlannerQueryOptions $options = null, ?array $queryParameters = null): PlannerCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, PlannerCollectionResponse::class);
    }

    /**
     * Create a new Planner
     *
     * @param Planner $item The item to create
     * @return Planner
     */
    public function post(Planner $item): Planner
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Planner::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return PlannerItemRequestBuilder
     */
    public function byId(string $id): PlannerItemRequestBuilder
    {
        return new PlannerItemRequestBuilder($this->client, $this->buildPath($id));
    }

    /**
     * Get count of items in collection
     *
     * @return int
     */
    public function count(): int
    {
        $response = $this->client->get($this->buildPath('$count'));
        return (int) $response->getBody()->getContents();
    }

}
