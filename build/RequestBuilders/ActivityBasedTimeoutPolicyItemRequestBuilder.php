<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ActivityBasedTimeoutPolicy;

/**
 * Request builder for individual ActivityBasedTimeoutPolicy item
 */
class ActivityBasedTimeoutPolicyItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get ActivityBasedTimeoutPolicy item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return ActivityBasedTimeoutPolicy
     */
    public function get(?array $queryParameters = null): ActivityBasedTimeoutPolicy
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, ActivityBasedTimeoutPolicy::class);
    }

    /**
     * Update ActivityBasedTimeoutPolicy item
     *
     * @param ActivityBasedTimeoutPolicy $item The item with updated properties
     * @return ActivityBasedTimeoutPolicy
     */
    public function patch(ActivityBasedTimeoutPolicy $item): ActivityBasedTimeoutPolicy
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, ActivityBasedTimeoutPolicy::class);
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
