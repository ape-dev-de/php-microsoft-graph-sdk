<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityProtection;

/**
 * Request builder for individual IdentityProtection item
 */
class IdentityProtectionItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get IdentityProtection item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return IdentityProtection
     */
    public function get(?array $queryParameters = null): IdentityProtection
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, IdentityProtection::class);
    }

    /**
     * Update IdentityProtection item
     *
     * @param IdentityProtection $item The item with updated properties
     * @return IdentityProtection
     */
    public function patch(IdentityProtection $item): IdentityProtection
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, IdentityProtection::class);
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
