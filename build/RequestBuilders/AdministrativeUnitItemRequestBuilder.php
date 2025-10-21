<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AdministrativeUnit;

/**
 * Request builder for individual AdministrativeUnit item
 */
class AdministrativeUnitItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get AdministrativeUnit item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return AdministrativeUnit
     */
    public function get(?array $queryParameters = null): AdministrativeUnit
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, AdministrativeUnit::class);
    }

    /**
     * Update AdministrativeUnit item
     *
     * @param AdministrativeUnit $item The item with updated properties
     * @return AdministrativeUnit
     */
    public function patch(AdministrativeUnit $item): AdministrativeUnit
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, AdministrativeUnit::class);
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
