<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WindowsSetting;

/**
 * Request builder for individual WindowsSetting item
 */
class WindowsSettingItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get WindowsSetting item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return WindowsSetting
     */
    public function get(?array $queryParameters = null): WindowsSetting
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, WindowsSetting::class);
    }

    /**
     * Update WindowsSetting item
     *
     * @param WindowsSetting $item The item with updated properties
     * @return WindowsSetting
     */
    public function patch(WindowsSetting $item): WindowsSetting
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, WindowsSetting::class);
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
