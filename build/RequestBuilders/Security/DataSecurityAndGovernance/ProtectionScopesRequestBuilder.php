<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\DataSecurityAndGovernance;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\TenantProtectionScopeContainer;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\DataSecurityAndGovernance\ProtectionScopes\ComputeRequestBuilder;

/**
 * Request builder for /security/dataSecurityAndGovernance/protectionScopes
 */
class ProtectionScopesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get protectionScopes from security
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return TenantProtectionScopeContainer|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): TenantProtectionScopeContainer|null
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
     * Deserialize response to TenantProtectionScopeContainer|null
     */
    private function deserializeGet(string $body): TenantProtectionScopeContainer|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new TenantProtectionScopeContainer($data);
    }
    /**
     * Update the navigation property protectionScopes in security
     * @param TenantProtectionScopeContainer $body Request body
     * @return TenantProtectionScopeContainer|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(TenantProtectionScopeContainer $body): TenantProtectionScopeContainer|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to TenantProtectionScopeContainer|null
     */
    private function deserializePatch(string $body): TenantProtectionScopeContainer|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new TenantProtectionScopeContainer($data);
    }
    /**
     * Delete navigation property protectionScopes for security
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
     * Navigate to compute
     *
     * @return ComputeRequestBuilder
     */
    public function compute(): ComputeRequestBuilder
    {
        return new ComputeRequestBuilder($this->client, $this->requestUrl . '/compute');
    }
}
