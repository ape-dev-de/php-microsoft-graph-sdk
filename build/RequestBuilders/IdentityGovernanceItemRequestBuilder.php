<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityGovernance;

/**
 * Request builder for individual IdentityGovernance item
 */
class IdentityGovernanceItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get IdentityGovernance item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return IdentityGovernance
     */
    public function get(?array $queryParameters = null): IdentityGovernance
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, IdentityGovernance::class);
    }

    /**
     * Update IdentityGovernance item
     *
     * @param IdentityGovernance $item The item with updated properties
     * @return IdentityGovernance
     */
    public function patch(IdentityGovernance $item): IdentityGovernance
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, IdentityGovernance::class);
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
