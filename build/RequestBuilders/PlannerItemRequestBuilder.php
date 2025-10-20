<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Planner;

/**
 * Request builder for individual Planner item
 */
class PlannerItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Planner item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Planner
     */
    public function get(?array $queryParameters = null): Planner
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Planner::class);
    }

    /**
     * Update Planner item
     *
     * @param Planner $item The item with updated properties
     * @return Planner
     */
    public function patch(Planner $item): Planner
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Planner::class);
    }

    /**
     * Delete item
     *
     * @return void
     */
    public function delete(): void
    {
        $this->client->delete($this->getFullPath());
    }

}
