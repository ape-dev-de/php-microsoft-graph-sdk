<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\ExchangeRestoreSessions;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ExchangeRestoreSession;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\ExchangeRestoreSessions\GranularMailboxRestoreArtifactsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\ExchangeRestoreSessions\MailboxRestoreArtifactsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\ExchangeRestoreSessions\MailboxRestoreArtifactsBulkAdditionRequestsRequestBuilder;

/**
 * Request builder for /solutions/backupRestore/exchangeRestoreSessions/{exchangeRestoreSession-id}
 */
class ExchangeRestoreSessionRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get exchangeRestoreSessions from solutions
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ExchangeRestoreSession
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ExchangeRestoreSession
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
     * Deserialize response to ExchangeRestoreSession
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
        return new ExchangeRestoreSession($data);
    }
    /**
     * Update exchangeRestoreSession
     * @param ExchangeRestoreSession $body Request body
     * @return ExchangeRestoreSession
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(ExchangeRestoreSession $body): ExchangeRestoreSession
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to ExchangeRestoreSession
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
        return new ExchangeRestoreSession($data);
    }
    /**
     * Delete navigation property exchangeRestoreSessions for solutions
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
     * Navigate to granularMailboxRestoreArtifacts
     *
     * @return GranularMailboxRestoreArtifactsRequestBuilder
     */
    public function granularMailboxRestoreArtifacts(): GranularMailboxRestoreArtifactsRequestBuilder
    {
        return new GranularMailboxRestoreArtifactsRequestBuilder($this->client, $this->requestUrl . '/granularMailboxRestoreArtifacts');
    }
    /**
     * Navigate to mailboxRestoreArtifacts
     *
     * @return MailboxRestoreArtifactsRequestBuilder
     */
    public function mailboxRestoreArtifacts(): MailboxRestoreArtifactsRequestBuilder
    {
        return new MailboxRestoreArtifactsRequestBuilder($this->client, $this->requestUrl . '/mailboxRestoreArtifacts');
    }
    /**
     * Navigate to mailboxRestoreArtifactsBulkAdditionRequests
     *
     * @return MailboxRestoreArtifactsBulkAdditionRequestsRequestBuilder
     */
    public function mailboxRestoreArtifactsBulkAdditionRequests(): MailboxRestoreArtifactsBulkAdditionRequestsRequestBuilder
    {
        return new MailboxRestoreArtifactsBulkAdditionRequestsRequestBuilder($this->client, $this->requestUrl . '/mailboxRestoreArtifactsBulkAdditionRequests');
    }
}
