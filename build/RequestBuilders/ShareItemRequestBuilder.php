<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Share;

/**
 * Request builder for individual Share item
 */
class ShareItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Share item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Share
     */
    public function get(?array $queryParameters = null): Share
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Share::class);
    }

    /**
     * Update Share item
     *
     * @param Share $item The item with updated properties
     * @return Share
     */
    public function patch(Share $item): Share
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Share::class);
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
