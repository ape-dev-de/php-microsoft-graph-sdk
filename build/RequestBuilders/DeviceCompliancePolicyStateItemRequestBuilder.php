<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceCompliancePolicyState;

/**
 * Request builder for individual DeviceCompliancePolicyState item
 */
class DeviceCompliancePolicyStateItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get DeviceCompliancePolicyState item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return DeviceCompliancePolicyState
     */
    public function get(?array $queryParameters = null): DeviceCompliancePolicyState
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, DeviceCompliancePolicyState::class);
    }

    /**
     * Update DeviceCompliancePolicyState item
     *
     * @param DeviceCompliancePolicyState $item The item with updated properties
     * @return DeviceCompliancePolicyState
     */
    public function patch(DeviceCompliancePolicyState $item): DeviceCompliancePolicyState
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, DeviceCompliancePolicyState::class);
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
