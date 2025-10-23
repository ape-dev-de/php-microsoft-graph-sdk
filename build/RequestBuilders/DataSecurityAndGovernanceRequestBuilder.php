<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\UserDataSecurityAndGovernance;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ActivitiesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ProcessContentRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ProtectionScopesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SensitivityLabelsRequestBuilder;

/**
 * Request builder for dataSecurityAndGovernance
 */
class DataSecurityAndGovernanceRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get dataSecurityAndGovernance from me
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return UserDataSecurityAndGovernance
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): UserDataSecurityAndGovernance
    {
        $queryParams = [];
        if ($select !== null) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to UserDataSecurityAndGovernance
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
        return new UserDataSecurityAndGovernance($data);
    }
    /**
     * Update the navigation property dataSecurityAndGovernance in me
     * @param UserDataSecurityAndGovernance $body Request body
     * @return UserDataSecurityAndGovernance
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(UserDataSecurityAndGovernance $body): UserDataSecurityAndGovernance
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to UserDataSecurityAndGovernance
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
        return new UserDataSecurityAndGovernance($data);
    }
    /**
     * Delete navigation property dataSecurityAndGovernance for me
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null) {
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
     * Navigate to activities
     *
     * @return ActivitiesRequestBuilder
     */
    public function activities(): ActivitiesRequestBuilder
    {
        return new ActivitiesRequestBuilder($this->client, $this->requestUrl . '/activities');
    }
    /**
     * Navigate to processContent
     *
     * @return ProcessContentRequestBuilder
     */
    public function processContent(): ProcessContentRequestBuilder
    {
        return new ProcessContentRequestBuilder($this->client, $this->requestUrl . '/processContent');
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
