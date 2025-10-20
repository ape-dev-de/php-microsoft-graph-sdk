<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceAppManagement;

/**
 * Request builder for individual DeviceAppManagement item
 */
class DeviceAppManagementItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get DeviceAppManagement item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return DeviceAppManagement
     */
    public function get(?array $queryParameters = null): DeviceAppManagement
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, DeviceAppManagement::class);
    }

    /**
     * Update DeviceAppManagement item
     *
     * @param DeviceAppManagement $item The item with updated properties
     * @return DeviceAppManagement
     */
    public function patch(DeviceAppManagement $item): DeviceAppManagement
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, DeviceAppManagement::class);
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
