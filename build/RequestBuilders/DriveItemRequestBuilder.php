<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Drive;

/**
 * Request builder for individual Drive item
 */
class DriveItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Drive item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Drive
     */
    public function get(?array $queryParameters = null): Drive
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Drive::class);
    }

    /**
     * Update Drive item
     *
     * @param Drive $item The item with updated properties
     * @return Drive
     */
    public function patch(Drive $item): Drive
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Drive::class);
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
