<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\PlannerTask;

/**
 * Request builder for individual PlannerTask item
 */
class PlannerTaskItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get PlannerTask item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return PlannerTask
     */
    public function get(?array $queryParameters = null): PlannerTask
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, PlannerTask::class);
    }

    /**
     * Update PlannerTask item
     *
     * @param PlannerTask $item The item with updated properties
     * @return PlannerTask
     */
    public function patch(PlannerTask $item): PlannerTask
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, PlannerTask::class);
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
