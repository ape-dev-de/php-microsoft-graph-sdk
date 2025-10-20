<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Device;

/**
 * Request builder for individual Device item
 */
class DeviceItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Device item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Device
     */
    public function get(?array $queryParameters = null): Device
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Device::class);
    }

    /**
     * Update Device item
     *
     * @param Device $item The item with updated properties
     * @return Device
     */
    public function patch(Device $item): Device
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Device::class);
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
