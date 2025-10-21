<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\UserActivity;

/**
 * Request builder for individual UserActivity item
 */
class UserActivityItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get UserActivity item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return UserActivity
     */
    public function get(?array $queryParameters = null): UserActivity
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, UserActivity::class);
    }

    /**
     * Update UserActivity item
     *
     * @param UserActivity $item The item with updated properties
     * @return UserActivity
     */
    public function patch(UserActivity $item): UserActivity
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, UserActivity::class);
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
