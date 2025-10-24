<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\BackupRestoreRoot;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\DriveInclusionRulesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\DriveProtectionUnitsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\DriveProtectionUnitsBulkAdditionJobsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\ExchangeProtectionPoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\ExchangeRestoreSessionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\MailboxInclusionRulesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\MailboxProtectionUnitsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\MailboxProtectionUnitsBulkAdditionJobsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\EnableRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\OneDriveForBusinessProtectionPoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\OneDriveForBusinessRestoreSessionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\ProtectionPoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\ProtectionUnitsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\RestorePointsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\RestoreSessionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\ServiceAppsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\SharePointProtectionPoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\SharePointRestoreSessionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\SiteInclusionRulesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\SiteProtectionUnitsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\SiteProtectionUnitsBulkAdditionJobsRequestBuilder;

/**
 * Request builder for /solutions/backupRestore
 */
class BackupRestoreRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get backupRestoreRoot
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return BackupRestoreRoot
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): BackupRestoreRoot
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
     * Deserialize response to BackupRestoreRoot
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
        return new BackupRestoreRoot($data);
    }
    /**
     * Update the navigation property backupRestore in solutions
     * @param BackupRestoreRoot $body Request body
     * @return BackupRestoreRoot
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(BackupRestoreRoot $body): BackupRestoreRoot
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to BackupRestoreRoot
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
        return new BackupRestoreRoot($data);
    }
    /**
     * Delete navigation property backupRestore for solutions
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
    /**
     * Navigate to exchangeProtectionPolicies
     *
     * @return ExchangeProtectionPoliciesRequestBuilder
     */
    public function exchangeProtectionPolicies(): ExchangeProtectionPoliciesRequestBuilder
    {
        return new ExchangeProtectionPoliciesRequestBuilder($this->client, $this->requestUrl . '/exchangeProtectionPolicies');
    }
    /**
     * Navigate to exchangeRestoreSessions
     *
     * @return ExchangeRestoreSessionsRequestBuilder
     */
    public function exchangeRestoreSessions(): ExchangeRestoreSessionsRequestBuilder
    {
        return new ExchangeRestoreSessionsRequestBuilder($this->client, $this->requestUrl . '/exchangeRestoreSessions');
    }
    /**
     * Navigate to mailboxInclusionRules
     *
     * @return MailboxInclusionRulesRequestBuilder
     */
    public function mailboxInclusionRules(): MailboxInclusionRulesRequestBuilder
    {
        return new MailboxInclusionRulesRequestBuilder($this->client, $this->requestUrl . '/mailboxInclusionRules');
    }
    /**
     * Navigate to mailboxProtectionUnits
     *
     * @return MailboxProtectionUnitsRequestBuilder
     */
    public function mailboxProtectionUnits(): MailboxProtectionUnitsRequestBuilder
    {
        return new MailboxProtectionUnitsRequestBuilder($this->client, $this->requestUrl . '/mailboxProtectionUnits');
    }
    /**
     * Navigate to mailboxProtectionUnitsBulkAdditionJobs
     *
     * @return MailboxProtectionUnitsBulkAdditionJobsRequestBuilder
     */
    public function mailboxProtectionUnitsBulkAdditionJobs(): MailboxProtectionUnitsBulkAdditionJobsRequestBuilder
    {
        return new MailboxProtectionUnitsBulkAdditionJobsRequestBuilder($this->client, $this->requestUrl . '/mailboxProtectionUnitsBulkAdditionJobs');
    }
    /**
     * Navigate to enable
     *
     * @return EnableRequestBuilder
     */
    public function enable(): EnableRequestBuilder
    {
        return new EnableRequestBuilder($this->client, $this->requestUrl . '/enable');
    }
    /**
     * Navigate to oneDriveForBusinessProtectionPolicies
     *
     * @return OneDriveForBusinessProtectionPoliciesRequestBuilder
     */
    public function oneDriveForBusinessProtectionPolicies(): OneDriveForBusinessProtectionPoliciesRequestBuilder
    {
        return new OneDriveForBusinessProtectionPoliciesRequestBuilder($this->client, $this->requestUrl . '/oneDriveForBusinessProtectionPolicies');
    }
    /**
     * Navigate to oneDriveForBusinessRestoreSessions
     *
     * @return OneDriveForBusinessRestoreSessionsRequestBuilder
     */
    public function oneDriveForBusinessRestoreSessions(): OneDriveForBusinessRestoreSessionsRequestBuilder
    {
        return new OneDriveForBusinessRestoreSessionsRequestBuilder($this->client, $this->requestUrl . '/oneDriveForBusinessRestoreSessions');
    }
    /**
     * Navigate to protectionPolicies
     *
     * @return ProtectionPoliciesRequestBuilder
     */
    public function protectionPolicies(): ProtectionPoliciesRequestBuilder
    {
        return new ProtectionPoliciesRequestBuilder($this->client, $this->requestUrl . '/protectionPolicies');
    }
    /**
     * Navigate to protectionUnits
     *
     * @return ProtectionUnitsRequestBuilder
     */
    public function protectionUnits(): ProtectionUnitsRequestBuilder
    {
        return new ProtectionUnitsRequestBuilder($this->client, $this->requestUrl . '/protectionUnits');
    }
    /**
     * Navigate to restorePoints
     *
     * @return RestorePointsRequestBuilder
     */
    public function restorePoints(): RestorePointsRequestBuilder
    {
        return new RestorePointsRequestBuilder($this->client, $this->requestUrl . '/restorePoints');
    }
    /**
     * Navigate to restoreSessions
     *
     * @return RestoreSessionsRequestBuilder
     */
    public function restoreSessions(): RestoreSessionsRequestBuilder
    {
        return new RestoreSessionsRequestBuilder($this->client, $this->requestUrl . '/restoreSessions');
    }
    /**
     * Navigate to serviceApps
     *
     * @return ServiceAppsRequestBuilder
     */
    public function serviceApps(): ServiceAppsRequestBuilder
    {
        return new ServiceAppsRequestBuilder($this->client, $this->requestUrl . '/serviceApps');
    }
    /**
     * Navigate to sharePointProtectionPolicies
     *
     * @return SharePointProtectionPoliciesRequestBuilder
     */
    public function sharePointProtectionPolicies(): SharePointProtectionPoliciesRequestBuilder
    {
        return new SharePointProtectionPoliciesRequestBuilder($this->client, $this->requestUrl . '/sharePointProtectionPolicies');
    }
    /**
     * Navigate to sharePointRestoreSessions
     *
     * @return SharePointRestoreSessionsRequestBuilder
     */
    public function sharePointRestoreSessions(): SharePointRestoreSessionsRequestBuilder
    {
        return new SharePointRestoreSessionsRequestBuilder($this->client, $this->requestUrl . '/sharePointRestoreSessions');
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
