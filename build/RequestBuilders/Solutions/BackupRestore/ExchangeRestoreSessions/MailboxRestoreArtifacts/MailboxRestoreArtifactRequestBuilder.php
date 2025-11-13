<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\ExchangeRestoreSessions\MailboxRestoreArtifacts;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\MailboxRestoreArtifact;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\ExchangeRestoreSessions\MailboxRestoreArtifacts\RestorePointRequestBuilder;

/**
 * Request builder for /solutions/backupRestore/exchangeRestoreSessions/{exchangeRestoreSession-id}/mailboxRestoreArtifacts/{mailboxRestoreArtifact-id}
 */
class MailboxRestoreArtifactRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get mailboxRestoreArtifacts from solutions
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return MailboxRestoreArtifact|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): MailboxRestoreArtifact|null
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
     * Deserialize response to MailboxRestoreArtifact|null
     */
    private function deserializeGet(string $body): MailboxRestoreArtifact|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new MailboxRestoreArtifact($data);
    }
    /**
     * Update the navigation property mailboxRestoreArtifacts in solutions
     * @param MailboxRestoreArtifact $body Request body
     * @return MailboxRestoreArtifact|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(MailboxRestoreArtifact $body): MailboxRestoreArtifact|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to MailboxRestoreArtifact|null
     */
    private function deserializePatch(string $body): MailboxRestoreArtifact|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new MailboxRestoreArtifact($data);
    }
    /**
     * Delete navigation property mailboxRestoreArtifacts for solutions
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
     * Navigate to restorePoint
     *
     * @return RestorePointRequestBuilder
     */
    public function restorePoint(): RestorePointRequestBuilder
    {
        return new RestorePointRequestBuilder($this->client, $this->requestUrl . '/restorePoint');
    }
}
