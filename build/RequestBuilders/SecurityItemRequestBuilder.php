<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Security;

/**
 * Request builder for individual Security item
 */
class SecurityItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Security item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Security
     */
    public function get(?array $queryParameters = null): Security
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Security::class);
    }

    /**
     * Update Security item
     *
     * @param Security $item The item with updated properties
     * @return Security
     */
    public function patch(Security $item): Security
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Security::class);
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
