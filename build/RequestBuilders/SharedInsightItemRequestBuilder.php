<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SharedInsight;

/**
 * Request builder for individual SharedInsight item
 */
class SharedInsightItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get SharedInsight item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return SharedInsight
     */
    public function get(?array $queryParameters = null): SharedInsight
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, SharedInsight::class);
    }

    /**
     * Update SharedInsight item
     *
     * @param SharedInsight $item The item with updated properties
     * @return SharedInsight
     */
    public function patch(SharedInsight $item): SharedInsight
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, SharedInsight::class);
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
