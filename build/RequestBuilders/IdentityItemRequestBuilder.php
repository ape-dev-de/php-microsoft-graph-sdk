<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Identity;

/**
 * Request builder for individual Identity item
 */
class IdentityItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Identity item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Identity
     */
    public function get(?array $queryParameters = null): Identity
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Identity::class);
    }

    /**
     * Update Identity item
     *
     * @param Identity $item The item with updated properties
     * @return Identity
     */
    public function patch(Identity $item): Identity
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Identity::class);
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
