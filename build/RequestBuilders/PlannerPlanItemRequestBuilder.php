<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\PlannerPlan;

/**
 * Request builder for individual PlannerPlan item
 */
class PlannerPlanItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get PlannerPlan item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return PlannerPlan
     */
    public function get(?array $queryParameters = null): PlannerPlan
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, PlannerPlan::class);
    }

    /**
     * Update PlannerPlan item
     *
     * @param PlannerPlan $item The item with updated properties
     * @return PlannerPlan
     */
    public function patch(PlannerPlan $item): PlannerPlan
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, PlannerPlan::class);
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
