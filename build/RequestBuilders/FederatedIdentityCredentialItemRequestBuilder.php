<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\FederatedIdentityCredential;

/**
 * Request builder for individual FederatedIdentityCredential item
 */
class FederatedIdentityCredentialItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get FederatedIdentityCredential item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return FederatedIdentityCredential
     */
    public function get(?array $queryParameters = null): FederatedIdentityCredential
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, FederatedIdentityCredential::class);
    }

    /**
     * Update FederatedIdentityCredential item
     *
     * @param FederatedIdentityCredential $item The item with updated properties
     * @return FederatedIdentityCredential
     */
    public function patch(FederatedIdentityCredential $item): FederatedIdentityCredential
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, FederatedIdentityCredential::class);
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
