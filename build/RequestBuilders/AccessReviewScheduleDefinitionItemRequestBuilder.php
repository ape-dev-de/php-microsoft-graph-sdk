<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AccessReviewScheduleDefinition;

/**
 * Request builder for individual AccessReviewScheduleDefinition item
 */
class AccessReviewScheduleDefinitionItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get AccessReviewScheduleDefinition item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return AccessReviewScheduleDefinition
     */
    public function get(?array $queryParameters = null): AccessReviewScheduleDefinition
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, AccessReviewScheduleDefinition::class);
    }

    /**
     * Update AccessReviewScheduleDefinition item
     *
     * @param AccessReviewScheduleDefinition $item The item with updated properties
     * @return AccessReviewScheduleDefinition
     */
    public function patch(AccessReviewScheduleDefinition $item): AccessReviewScheduleDefinition
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, AccessReviewScheduleDefinition::class);
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
