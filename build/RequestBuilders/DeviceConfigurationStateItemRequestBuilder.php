<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceConfigurationState;

/**
 * Request builder for individual DeviceConfigurationState item
 */
class DeviceConfigurationStateItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get DeviceConfigurationState item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return DeviceConfigurationState
     */
    public function get(?array $queryParameters = null): DeviceConfigurationState
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, DeviceConfigurationState::class);
    }

    /**
     * Update DeviceConfigurationState item
     *
     * @param DeviceConfigurationState $item The item with updated properties
     * @return DeviceConfigurationState
     */
    public function patch(DeviceConfigurationState $item): DeviceConfigurationState
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, DeviceConfigurationState::class);
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
