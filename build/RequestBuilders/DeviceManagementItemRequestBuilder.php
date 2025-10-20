<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceManagement;

/**
 * Request builder for individual DeviceManagement item
 */
class DeviceManagementItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get DeviceManagement item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return DeviceManagement
     */
    public function get(?array $queryParameters = null): DeviceManagement
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, DeviceManagement::class);
    }

    /**
     * Update DeviceManagement item
     *
     * @param DeviceManagement $item The item with updated properties
     * @return DeviceManagement
     */
    public function patch(DeviceManagement $item): DeviceManagement
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, DeviceManagement::class);
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
