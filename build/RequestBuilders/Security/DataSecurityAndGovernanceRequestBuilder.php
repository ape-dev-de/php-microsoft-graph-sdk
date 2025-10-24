<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\TenantDataSecurityAndGovernance;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\DataSecurityAndGovernance\ProcessContentAsyncRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\DataSecurityAndGovernance\ProtectionScopesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\DataSecurityAndGovernance\SensitivityLabelsRequestBuilder;

/**
 * Request builder for /security/dataSecurityAndGovernance
 */
class DataSecurityAndGovernanceRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get dataSecurityAndGovernance from security
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return TenantDataSecurityAndGovernance
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): TenantDataSecurityAndGovernance
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
     * Deserialize response to TenantDataSecurityAndGovernance
     */
    private function deserializeGet(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new TenantDataSecurityAndGovernance($data);
    }
    /**
     * Update the navigation property dataSecurityAndGovernance in security
     * @param TenantDataSecurityAndGovernance $body Request body
     * @return TenantDataSecurityAndGovernance
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(TenantDataSecurityAndGovernance $body): TenantDataSecurityAndGovernance
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to TenantDataSecurityAndGovernance
     */
    private function deserializePatch(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new TenantDataSecurityAndGovernance($data);
    }
    /**
     * Delete navigation property dataSecurityAndGovernance for security
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
    private function deserializeDelete(string $body): mixed
    {
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
     * Navigate to processContentAsync
     *
     * @return ProcessContentAsyncRequestBuilder
     */
    public function processContentAsync(): ProcessContentAsyncRequestBuilder
    {
        return new ProcessContentAsyncRequestBuilder($this->client, $this->requestUrl . '/processContentAsync');
    }
    /**
     * Navigate to protectionScopes
     *
     * @return ProtectionScopesRequestBuilder
     */
    public function protectionScopes(): ProtectionScopesRequestBuilder
    {
        return new ProtectionScopesRequestBuilder($this->client, $this->requestUrl . '/protectionScopes');
    }
    /**
     * Navigate to sensitivityLabels
     *
     * @return SensitivityLabelsRequestBuilder
     */
    public function sensitivityLabels(): SensitivityLabelsRequestBuilder
    {
        return new SensitivityLabelsRequestBuilder($this->client, $this->requestUrl . '/sensitivityLabels');
    }
}
