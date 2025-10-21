<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Endpoint;

/**
 * Request builder for individual Endpoint item
 */
class EndpointItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Endpoint item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Endpoint
     */
    public function get(?array $queryParameters = null): Endpoint
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Endpoint::class);
    }

    /**
     * Update Endpoint item
     *
     * @param Endpoint $item The item with updated properties
     * @return Endpoint
     */
    public function patch(Endpoint $item): Endpoint
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Endpoint::class);
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
