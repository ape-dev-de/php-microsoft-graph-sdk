<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceManagementTroubleshootingEvent;

/**
 * Request builder for individual DeviceManagementTroubleshootingEvent item
 */
class DeviceManagementTroubleshootingEventItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get DeviceManagementTroubleshootingEvent item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return DeviceManagementTroubleshootingEvent
     */
    public function get(?array $queryParameters = null): DeviceManagementTroubleshootingEvent
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, DeviceManagementTroubleshootingEvent::class);
    }

    /**
     * Update DeviceManagementTroubleshootingEvent item
     *
     * @param DeviceManagementTroubleshootingEvent $item The item with updated properties
     * @return DeviceManagementTroubleshootingEvent
     */
    public function patch(DeviceManagementTroubleshootingEvent $item): DeviceManagementTroubleshootingEvent
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, DeviceManagementTroubleshootingEvent::class);
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
