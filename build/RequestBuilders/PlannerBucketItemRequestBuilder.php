<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\PlannerBucket;

/**
 * Request builder for individual PlannerBucket item
 */
class PlannerBucketItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get PlannerBucket item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return PlannerBucket
     */
    public function get(?array $queryParameters = null): PlannerBucket
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, PlannerBucket::class);
    }

    /**
     * Update PlannerBucket item
     *
     * @param PlannerBucket $item The item with updated properties
     * @return PlannerBucket
     */
    public function patch(PlannerBucket $item): PlannerBucket
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, PlannerBucket::class);
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
