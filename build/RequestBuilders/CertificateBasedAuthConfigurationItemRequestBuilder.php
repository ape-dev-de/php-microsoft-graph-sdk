<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\CertificateBasedAuthConfiguration;

/**
 * Request builder for individual CertificateBasedAuthConfiguration item
 */
class CertificateBasedAuthConfigurationItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get CertificateBasedAuthConfiguration item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return CertificateBasedAuthConfiguration
     */
    public function get(?array $queryParameters = null): CertificateBasedAuthConfiguration
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, CertificateBasedAuthConfiguration::class);
    }

    /**
     * Update CertificateBasedAuthConfiguration item
     *
     * @param CertificateBasedAuthConfiguration $item The item with updated properties
     * @return CertificateBasedAuthConfiguration
     */
    public function patch(CertificateBasedAuthConfiguration $item): CertificateBasedAuthConfiguration
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, CertificateBasedAuthConfiguration::class);
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
