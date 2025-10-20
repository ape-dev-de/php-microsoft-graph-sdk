<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\User;

/**
 * Request builder for individual User item
 */
class UserItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get User item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return User
     */
    public function get(?array $queryParameters = null): User
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, User::class);
    }

    /**
     * Update User item
     *
     * @param User $item The item with updated properties
     * @return User
     */
    public function patch(User $item): User
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, User::class);
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
