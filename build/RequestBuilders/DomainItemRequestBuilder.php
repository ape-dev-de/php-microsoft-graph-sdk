<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Domain;

/**
 * Request builder for individual Domain item
 */
class DomainItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Domain item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Domain
     */
    public function get(?array $queryParameters = null): Domain
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Domain::class);
    }

    /**
     * Update Domain item
     *
     * @param Domain $item The item with updated properties
     * @return Domain
     */
    public function patch(Domain $item): Domain
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Domain::class);
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
