<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Search;

/**
 * Request builder for individual Search item
 */
class SearchItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Search item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Search
     */
    public function get(?array $queryParameters = null): Search
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Search::class);
    }

    /**
     * Update Search item
     *
     * @param Search $item The item with updated properties
     * @return Search
     */
    public function patch(Search $item): Search
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Search::class);
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
