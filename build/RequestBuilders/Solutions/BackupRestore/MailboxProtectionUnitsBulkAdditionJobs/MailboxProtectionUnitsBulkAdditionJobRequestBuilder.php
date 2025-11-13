<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\MailboxProtectionUnitsBulkAdditionJobs;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\MailboxProtectionUnitsBulkAdditionJob;

/**
 * Request builder for /solutions/backupRestore/mailboxProtectionUnitsBulkAdditionJobs/{mailboxProtectionUnitsBulkAdditionJob-id}
 */
class MailboxProtectionUnitsBulkAdditionJobRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get mailboxProtectionUnitsBulkAdditionJobs from solutions
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return MailboxProtectionUnitsBulkAdditionJob|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): MailboxProtectionUnitsBulkAdditionJob|null
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
     * Deserialize response to MailboxProtectionUnitsBulkAdditionJob|null
     */
    private function deserializeGet(string $body): MailboxProtectionUnitsBulkAdditionJob|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new MailboxProtectionUnitsBulkAdditionJob($data);
    }
    /**
     * Update the navigation property mailboxProtectionUnitsBulkAdditionJobs in solutions
     * @param MailboxProtectionUnitsBulkAdditionJob $body Request body
     * @return MailboxProtectionUnitsBulkAdditionJob|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(MailboxProtectionUnitsBulkAdditionJob $body): MailboxProtectionUnitsBulkAdditionJob|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to MailboxProtectionUnitsBulkAdditionJob|null
     */
    private function deserializePatch(string $body): MailboxProtectionUnitsBulkAdditionJob|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new MailboxProtectionUnitsBulkAdditionJob($data);
    }
    /**
     * Delete navigation property mailboxProtectionUnitsBulkAdditionJobs for solutions
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
}
