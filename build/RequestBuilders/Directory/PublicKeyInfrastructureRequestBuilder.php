<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\PublicKeyInfrastructureRoot;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory\PublicKeyInfrastructure\CertificateBasedAuthConfigurationsRequestBuilder;

/**
 * Request builder for /directory/publicKeyInfrastructure
 */
class PublicKeyInfrastructureRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get publicKeyInfrastructure from directory
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return PublicKeyInfrastructureRoot|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): PublicKeyInfrastructureRoot|null
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to PublicKeyInfrastructureRoot|null
     */
    private function deserializeGet(string $body): PublicKeyInfrastructureRoot|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new PublicKeyInfrastructureRoot($data);
    }
    /**
     * Update the navigation property publicKeyInfrastructure in directory
     * @param PublicKeyInfrastructureRoot $body Request body
     * @return PublicKeyInfrastructureRoot|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(PublicKeyInfrastructureRoot $body): PublicKeyInfrastructureRoot|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to PublicKeyInfrastructureRoot|null
     */
    private function deserializePatch(string $body): PublicKeyInfrastructureRoot|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new PublicKeyInfrastructureRoot($data);
    }
    /**
     * Delete navigation property publicKeyInfrastructure for directory
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null && $ifMatch !== '') {
            $queryParams['If-Match'] = $ifMatch;
        }
        $response = $this->client->delete($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeDelete($responseBody);
    }

    /**
     * Deserialize response to mixed
     */
    private function deserializeDelete(string $body): mixed    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return $data;
    }
    /**
     * Navigate to certificateBasedAuthConfigurations
     *
     * @return CertificateBasedAuthConfigurationsRequestBuilder
     */
    public function certificateBasedAuthConfigurations(): CertificateBasedAuthConfigurationsRequestBuilder
    {
        return new CertificateBasedAuthConfigurationsRequestBuilder($this->client, $this->requestUrl . '/certificateBasedAuthConfigurations');
    }
}
