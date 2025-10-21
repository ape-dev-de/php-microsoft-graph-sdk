<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TargetDeviceGroup;

/**
 * Request builder for individual TargetDeviceGroup item
 */
class TargetDeviceGroupItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get TargetDeviceGroup item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return TargetDeviceGroup
     */
    public function get(?array $queryParameters = null): TargetDeviceGroup
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, TargetDeviceGroup::class);
    }

    /**
     * Update TargetDeviceGroup item
     *
     * @param TargetDeviceGroup $item The item with updated properties
     * @return TargetDeviceGroup
     */
    public function patch(TargetDeviceGroup $item): TargetDeviceGroup
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, TargetDeviceGroup::class);
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
