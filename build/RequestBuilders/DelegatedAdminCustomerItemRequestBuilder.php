<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DelegatedAdminCustomer;

/**
 * Request builder for individual DelegatedAdminCustomer item
 */
class DelegatedAdminCustomerItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get DelegatedAdminCustomer item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return DelegatedAdminCustomer
     */
    public function get(?array $queryParameters = null): DelegatedAdminCustomer
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, DelegatedAdminCustomer::class);
    }

    /**
     * Update DelegatedAdminCustomer item
     *
     * @param DelegatedAdminCustomer $item The item with updated properties
     * @return DelegatedAdminCustomer
     */
    public function patch(DelegatedAdminCustomer $item): DelegatedAdminCustomer
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, DelegatedAdminCustomer::class);
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
