<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Me;

/**
 * Request builder for individual Me item
 */
class MeItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Me item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Me
     */
    public function get(?array $queryParameters = null): Me
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Me::class);
    }

    /**
     * Update Me item
     *
     * @param Me $item The item with updated properties
     * @return Me
     */
    public function patch(Me $item): Me
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Me::class);
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
