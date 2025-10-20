<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Admin;

/**
 * Request builder for individual Admin item
 */
class AdminItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Admin item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Admin
     */
    public function get(?array $queryParameters = null): Admin
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Admin::class);
    }

    /**
     * Update Admin item
     *
     * @param Admin $item The item with updated properties
     * @return Admin
     */
    public function patch(Admin $item): Admin
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Admin::class);
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
