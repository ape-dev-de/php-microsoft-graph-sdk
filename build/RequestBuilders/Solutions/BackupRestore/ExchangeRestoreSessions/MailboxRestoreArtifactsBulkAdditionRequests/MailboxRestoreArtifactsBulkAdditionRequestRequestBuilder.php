<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\ExchangeRestoreSessions\MailboxRestoreArtifactsBulkAdditionRequests;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\MailboxRestoreArtifactsBulkAdditionRequest;

/**
 * Request builder for /solutions/backupRestore/exchangeRestoreSessions/{exchangeRestoreSession-id}/mailboxRestoreArtifactsBulkAdditionRequests/{mailboxRestoreArtifactsBulkAdditionRequest-id}
 */
class MailboxRestoreArtifactsBulkAdditionRequestRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get mailboxRestoreArtifactsBulkAdditionRequest
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return MailboxRestoreArtifactsBulkAdditionRequest|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): MailboxRestoreArtifactsBulkAdditionRequest|null
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
     * Deserialize response to MailboxRestoreArtifactsBulkAdditionRequest|null
     */
    private function deserializeGet(string $body): MailboxRestoreArtifactsBulkAdditionRequest|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new MailboxRestoreArtifactsBulkAdditionRequest($data);
    }
    /**
     * Update the navigation property mailboxRestoreArtifactsBulkAdditionRequests in solutions
     * @param MailboxRestoreArtifactsBulkAdditionRequest $body Request body
     * @return MailboxRestoreArtifactsBulkAdditionRequest|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(MailboxRestoreArtifactsBulkAdditionRequest $body): MailboxRestoreArtifactsBulkAdditionRequest|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to MailboxRestoreArtifactsBulkAdditionRequest|null
     */
    private function deserializePatch(string $body): MailboxRestoreArtifactsBulkAdditionRequest|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new MailboxRestoreArtifactsBulkAdditionRequest($data);
    }
    /**
     * Delete mailboxRestoreArtifactsBulkAdditionRequest
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
