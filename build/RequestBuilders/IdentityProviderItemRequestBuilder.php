<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityProvider;

/**
 * Request builder for individual IdentityProvider item
 */
class IdentityProviderItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get IdentityProvider item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return IdentityProvider
     */
    public function get(?array $queryParameters = null): IdentityProvider
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, IdentityProvider::class);
    }

    /**
     * Update IdentityProvider item
     *
     * @param IdentityProvider $item The item with updated properties
     * @return IdentityProvider
     */
    public function patch(IdentityProvider $item): IdentityProvider
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, IdentityProvider::class);
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
