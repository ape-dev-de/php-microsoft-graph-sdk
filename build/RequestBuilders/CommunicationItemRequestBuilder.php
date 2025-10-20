<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Communication;

/**
 * Request builder for individual Communication item
 */
class CommunicationItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Communication item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Communication
     */
    public function get(?array $queryParameters = null): Communication
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Communication::class);
    }

    /**
     * Update Communication item
     *
     * @param Communication $item The item with updated properties
     * @return Communication
     */
    public function patch(Communication $item): Communication
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Communication::class);
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
