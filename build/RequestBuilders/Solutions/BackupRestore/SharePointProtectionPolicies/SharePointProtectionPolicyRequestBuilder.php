<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\SharePointProtectionPolicies;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SharePointProtectionPolicy;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\SharePointProtectionPolicies\SiteInclusionRulesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\SharePointProtectionPolicies\SiteProtectionUnitsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\SharePointProtectionPolicies\SiteProtectionUnitsBulkAdditionJobsRequestBuilder;

/**
 * Request builder for /solutions/backupRestore/sharePointProtectionPolicies/{sharePointProtectionPolicy-id}
 */
class SharePointProtectionPolicyRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get sharePointProtectionPolicies from solutions
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SharePointProtectionPolicy
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SharePointProtectionPolicy
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
     * Deserialize response to SharePointProtectionPolicy
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
        return new SharePointProtectionPolicy($data);
    }
    /**
     * Update sharePointProtectionPolicy
     * @param SharePointProtectionPolicy $body Request body
     * @return SharePointProtectionPolicy
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(SharePointProtectionPolicy $body): SharePointProtectionPolicy
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to SharePointProtectionPolicy
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
        return new SharePointProtectionPolicy($data);
    }
    /**
     * Delete navigation property sharePointProtectionPolicies for solutions
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
     * Navigate to siteInclusionRules
     *
     * @return SiteInclusionRulesRequestBuilder
     */
    public function siteInclusionRules(): SiteInclusionRulesRequestBuilder
    {
        return new SiteInclusionRulesRequestBuilder($this->client, $this->requestUrl . '/siteInclusionRules');
    }
    /**
     * Navigate to siteProtectionUnits
     *
     * @return SiteProtectionUnitsRequestBuilder
     */
    public function siteProtectionUnits(): SiteProtectionUnitsRequestBuilder
    {
        return new SiteProtectionUnitsRequestBuilder($this->client, $this->requestUrl . '/siteProtectionUnits');
    }
    /**
     * Navigate to siteProtectionUnitsBulkAdditionJobs
     *
     * @return SiteProtectionUnitsBulkAdditionJobsRequestBuilder
     */
    public function siteProtectionUnitsBulkAdditionJobs(): SiteProtectionUnitsBulkAdditionJobsRequestBuilder
    {
        return new SiteProtectionUnitsBulkAdditionJobsRequestBuilder($this->client, $this->requestUrl . '/siteProtectionUnitsBulkAdditionJobs');
    }
}
