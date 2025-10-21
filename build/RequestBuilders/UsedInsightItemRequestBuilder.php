<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\UsedInsight;

/**
 * Request builder for individual UsedInsight item
 */
class UsedInsightItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get UsedInsight item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return UsedInsight
     */
    public function get(?array $queryParameters = null): UsedInsight
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, UsedInsight::class);
    }

    /**
     * Update UsedInsight item
     *
     * @param UsedInsight $item The item with updated properties
     * @return UsedInsight
     */
    public function patch(UsedInsight $item): UsedInsight
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, UsedInsight::class);
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
