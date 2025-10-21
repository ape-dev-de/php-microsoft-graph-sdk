<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Community;

/**
 * Request builder for individual Community item
 */
class CommunityItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Community item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Community
     */
    public function get(?array $queryParameters = null): Community
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Community::class);
    }

    /**
     * Update Community item
     *
     * @param Community $item The item with updated properties
     * @return Community
     */
    public function patch(Community $item): Community
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Community::class);
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
