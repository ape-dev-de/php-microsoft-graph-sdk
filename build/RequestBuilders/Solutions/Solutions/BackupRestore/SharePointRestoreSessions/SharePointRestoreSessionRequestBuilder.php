<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\Solutions\BackupRestore\SharePointRestoreSessions;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SharePointRestoreSession;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\Solutions\BackupRestore\SharePointRestoreSessions\SiteRestoreArtifactsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\Solutions\BackupRestore\SharePointRestoreSessions\SiteRestoreArtifactsBulkAdditionRequestsRequestBuilder;

/**
 * Request builder for /solutions/backupRestore/sharePointRestoreSessions/{sharePointRestoreSession-id}
 */
class SharePointRestoreSessionRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get sharePointRestoreSessions from solutions
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SharePointRestoreSession
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SharePointRestoreSession
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
     * Deserialize response to SharePointRestoreSession
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
        return new SharePointRestoreSession($data);
    }
    /**
     * Update the navigation property sharePointRestoreSessions in solutions
     * @param SharePointRestoreSession $body Request body
     * @return SharePointRestoreSession
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(SharePointRestoreSession $body): SharePointRestoreSession
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to SharePointRestoreSession
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
        return new SharePointRestoreSession($data);
    }
    /**
     * Delete navigation property sharePointRestoreSessions for solutions
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
     * Navigate to siteRestoreArtifacts
     *
     * @return SiteRestoreArtifactsRequestBuilder
     */
    public function siteRestoreArtifacts(): SiteRestoreArtifactsRequestBuilder
    {
        return new SiteRestoreArtifactsRequestBuilder($this->client, $this->requestUrl . '/siteRestoreArtifacts');
    }
    /**
     * Navigate to siteRestoreArtifactsBulkAdditionRequests
     *
     * @return SiteRestoreArtifactsBulkAdditionRequestsRequestBuilder
     */
    public function siteRestoreArtifactsBulkAdditionRequests(): SiteRestoreArtifactsBulkAdditionRequestsRequestBuilder
    {
        return new SiteRestoreArtifactsBulkAdditionRequestsRequestBuilder($this->client, $this->requestUrl . '/siteRestoreArtifactsBulkAdditionRequests');
    }
}
