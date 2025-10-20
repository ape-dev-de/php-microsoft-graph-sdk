<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\GroupSetting;

/**
 * Request builder for individual GroupSetting item
 */
class GroupSettingItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get GroupSetting item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return GroupSetting
     */
    public function get(?array $queryParameters = null): GroupSetting
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, GroupSetting::class);
    }

    /**
     * Update GroupSetting item
     *
     * @param GroupSetting $item The item with updated properties
     * @return GroupSetting
     */
    public function patch(GroupSetting $item): GroupSetting
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, GroupSetting::class);
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
