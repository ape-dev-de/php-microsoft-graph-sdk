<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ServicePrincipal;

/**
 * Request builder for individual ServicePrincipal item
 */
class ServicePrincipalItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get ServicePrincipal item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return ServicePrincipal
     */
    public function get(?array $queryParameters = null): ServicePrincipal
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, ServicePrincipal::class);
    }

    /**
     * Update ServicePrincipal item
     *
     * @param ServicePrincipal $item The item with updated properties
     * @return ServicePrincipal
     */
    public function patch(ServicePrincipal $item): ServicePrincipal
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, ServicePrincipal::class);
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
