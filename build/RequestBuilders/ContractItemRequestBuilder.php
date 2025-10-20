<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Contract;

/**
 * Request builder for individual Contract item
 */
class ContractItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Contract item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Contract
     */
    public function get(?array $queryParameters = null): Contract
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Contract::class);
    }

    /**
     * Update Contract item
     *
     * @param Contract $item The item with updated properties
     * @return Contract
     */
    public function patch(Contract $item): Contract
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Contract::class);
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
