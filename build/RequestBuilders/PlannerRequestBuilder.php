<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\PlannerGroup;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\PlannerGroupQueryOptions;

/**
 * Request builder for PlannerGroup
 */
class PlannerRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
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
     * @param PlannerGroupQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return PlannerGroup
     */
    public function get(?PlannerGroupQueryOptions $options = null, ?array $queryParameters = null): PlannerGroup
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, PlannerGroup::class);
    }

    /**
     * Create a new PlannerGroup
     *
     * @param PlannerGroup $item The item to create
     * @return PlannerGroup
     */
    public function post(PlannerGroup $item): PlannerGroup
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, PlannerGroup::class);
    }
    /**
     * Get plans request builder
     *
     * @return PlansRequestBuilder
     */
    public function plans(): PlansRequestBuilder
    {
        return new PlansRequestBuilder($this->client, $this->buildPath('plans'));
    }

}
