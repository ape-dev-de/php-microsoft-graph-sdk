<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\OneDriveForBusinessProtectionPolicy;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DriveInclusionRulesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DriveProtectionUnitsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DriveProtectionUnitsBulkAdditionJobsRequestBuilder;

/**
 * Request builder for {oneDriveForBusinessProtectionPolicy-id}
 */
class OneDriveForBusinessProtectionPolicyRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get oneDriveForBusinessProtectionPolicies from solutions
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return OneDriveForBusinessProtectionPolicy
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): OneDriveForBusinessProtectionPolicy
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
     * Deserialize response to OneDriveForBusinessProtectionPolicy
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
        return new OneDriveForBusinessProtectionPolicy($data);
    }
    /**
     * Update oneDriveForBusinessProtectionPolicy
     * @param OneDriveForBusinessProtectionPolicy $body Request body
     * @return OneDriveForBusinessProtectionPolicy
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(OneDriveForBusinessProtectionPolicy $body): OneDriveForBusinessProtectionPolicy
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to OneDriveForBusinessProtectionPolicy
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
        return new OneDriveForBusinessProtectionPolicy($data);
    }
    /**
     * Delete navigation property oneDriveForBusinessProtectionPolicies for solutions
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
     * Navigate to driveInclusionRules
     *
     * @return DriveInclusionRulesRequestBuilder
     */
    public function driveInclusionRules(): DriveInclusionRulesRequestBuilder
    {
        return new DriveInclusionRulesRequestBuilder($this->client, $this->requestUrl . '/driveInclusionRules');
    }
    /**
     * Navigate to driveProtectionUnits
     *
     * @return DriveProtectionUnitsRequestBuilder
     */
    public function driveProtectionUnits(): DriveProtectionUnitsRequestBuilder
    {
        return new DriveProtectionUnitsRequestBuilder($this->client, $this->requestUrl . '/driveProtectionUnits');
    }
    /**
     * Navigate to driveProtectionUnitsBulkAdditionJobs
     *
     * @return DriveProtectionUnitsBulkAdditionJobsRequestBuilder
     */
    public function driveProtectionUnitsBulkAdditionJobs(): DriveProtectionUnitsBulkAdditionJobsRequestBuilder
    {
        return new DriveProtectionUnitsBulkAdditionJobsRequestBuilder($this->client, $this->requestUrl . '/driveProtectionUnitsBulkAdditionJobs');
    }
}
