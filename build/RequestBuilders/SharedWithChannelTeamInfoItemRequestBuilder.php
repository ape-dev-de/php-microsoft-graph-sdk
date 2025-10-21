<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SharedWithChannelTeamInfo;

/**
 * Request builder for individual SharedWithChannelTeamInfo item
 */
class SharedWithChannelTeamInfoItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get SharedWithChannelTeamInfo item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return SharedWithChannelTeamInfo
     */
    public function get(?array $queryParameters = null): SharedWithChannelTeamInfo
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, SharedWithChannelTeamInfo::class);
    }

    /**
     * Update SharedWithChannelTeamInfo item
     *
     * @param SharedWithChannelTeamInfo $item The item with updated properties
     * @return SharedWithChannelTeamInfo
     */
    public function patch(SharedWithChannelTeamInfo $item): SharedWithChannelTeamInfo
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, SharedWithChannelTeamInfo::class);
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
