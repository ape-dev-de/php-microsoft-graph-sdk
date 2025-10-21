<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ManagedDevice;

/**
 * Request builder for individual ManagedDevice item
 */
class ManagedDeviceItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get ManagedDevice item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return ManagedDevice
     */
    public function get(?array $queryParameters = null): ManagedDevice
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, ManagedDevice::class);
    }

    /**
     * Update ManagedDevice item
     *
     * @param ManagedDevice $item The item with updated properties
     * @return ManagedDevice
     */
    public function patch(ManagedDevice $item): ManagedDevice
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, ManagedDevice::class);
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
