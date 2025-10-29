<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\ExchangeProtectionPolicies;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ExchangeProtectionPolicy;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\ExchangeProtectionPolicies\MailboxInclusionRulesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\ExchangeProtectionPolicies\MailboxProtectionUnitsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\ExchangeProtectionPolicies\MailboxProtectionUnitsBulkAdditionJobsRequestBuilder;

/**
 * Request builder for /solutions/backupRestore/exchangeProtectionPolicies/{exchangeProtectionPolicy-id}
 */
class ExchangeProtectionPolicyRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get exchangeProtectionPolicies from solutions
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ExchangeProtectionPolicy
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ExchangeProtectionPolicy
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
     * Deserialize response to ExchangeProtectionPolicy
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
        return new ExchangeProtectionPolicy($data);
    }
    /**
     * Update exchangeProtectionPolicy
     * @param ExchangeProtectionPolicy $body Request body
     * @return ExchangeProtectionPolicy
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(ExchangeProtectionPolicy $body): ExchangeProtectionPolicy
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to ExchangeProtectionPolicy
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
        return new ExchangeProtectionPolicy($data);
    }
    /**
     * Delete navigation property exchangeProtectionPolicies for solutions
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
}
