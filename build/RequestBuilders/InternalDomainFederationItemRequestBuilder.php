<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\InternalDomainFederation;

/**
 * Request builder for individual InternalDomainFederation item
 */
class InternalDomainFederationItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get InternalDomainFederation item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return InternalDomainFederation
     */
    public function get(?array $queryParameters = null): InternalDomainFederation
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, InternalDomainFederation::class);
    }

    /**
     * Update InternalDomainFederation item
     *
     * @param InternalDomainFederation $item The item with updated properties
     * @return InternalDomainFederation
     */
    public function patch(InternalDomainFederation $item): InternalDomainFederation
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, InternalDomainFederation::class);
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
