<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ThumbnailSet;

/**
 * Request builder for individual ThumbnailSet item
 */
class ThumbnailSetItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get ThumbnailSet item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return ThumbnailSet
     */
    public function get(?array $queryParameters = null): ThumbnailSet
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, ThumbnailSet::class);
    }

    /**
     * Update ThumbnailSet item
     *
     * @param ThumbnailSet $item The item with updated properties
     * @return ThumbnailSet
     */
    public function patch(ThumbnailSet $item): ThumbnailSet
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, ThumbnailSet::class);
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
