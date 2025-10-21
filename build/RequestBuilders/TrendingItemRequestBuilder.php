<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Trending;

/**
 * Request builder for individual Trending item
 */
class TrendingItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Trending item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Trending
     */
    public function get(?array $queryParameters = null): Trending
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Trending::class);
    }

    /**
     * Update Trending item
     *
     * @param Trending $item The item with updated properties
     * @return Trending
     */
    public function patch(Trending $item): Trending
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Trending::class);
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
