<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityApiConnector;

/**
 * Request builder for individual IdentityApiConnector item
 */
class IdentityApiConnectorItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get IdentityApiConnector item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return IdentityApiConnector
     */
    public function get(?array $queryParameters = null): IdentityApiConnector
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, IdentityApiConnector::class);
    }

    /**
     * Update IdentityApiConnector item
     *
     * @param IdentityApiConnector $item The item with updated properties
     * @return IdentityApiConnector
     */
    public function patch(IdentityApiConnector $item): IdentityApiConnector
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, IdentityApiConnector::class);
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
