<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\PlannerPlan;
use ApeDevDe\MicrosoftGraphSdk\Models\PlannerPlanCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\PlannerPlanQueryOptions;

/**
 * Request builder for PlannerPlan
 */
class PlansRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new PlannerPlanQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param PlannerPlanQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return PlannerPlanCollectionResponse
     */
    public function get(?PlannerPlanQueryOptions $options = null, ?array $queryParameters = null): PlannerPlanCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, PlannerPlanCollectionResponse::class);
    }

    /**
     * Create a new PlannerPlan
     *
     * @param PlannerPlan $item The item to create
     * @return PlannerPlan
     */
    public function post(PlannerPlan $item): PlannerPlan
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, PlannerPlan::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return PlannerPlanItemRequestBuilder
     */
    public function byId(string $id): PlannerPlanItemRequestBuilder
    {
        return new PlannerPlanItemRequestBuilder($this->client, $this->buildPath($id));
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
