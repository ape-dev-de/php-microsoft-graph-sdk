<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\OneDriveForBusinessRestoreSessions;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\OneDriveForBusinessRestoreSession;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\OneDriveForBusinessRestoreSessions\DriveRestoreArtifactsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\OneDriveForBusinessRestoreSessions\DriveRestoreArtifactsBulkAdditionRequestsRequestBuilder;

/**
 * Request builder for /solutions/backupRestore/oneDriveForBusinessRestoreSessions/{oneDriveForBusinessRestoreSession-id}
 */
class OneDriveForBusinessRestoreSessionRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get oneDriveForBusinessRestoreSessions from solutions
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return OneDriveForBusinessRestoreSession|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): OneDriveForBusinessRestoreSession|null
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
     * Deserialize response to OneDriveForBusinessRestoreSession|null
     */
    private function deserializeGet(string $body): OneDriveForBusinessRestoreSession|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new OneDriveForBusinessRestoreSession($data);
    }
    /**
     * Update oneDriveForBusinessRestoreSession
     * @param OneDriveForBusinessRestoreSession $body Request body
     * @return OneDriveForBusinessRestoreSession|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(OneDriveForBusinessRestoreSession $body): OneDriveForBusinessRestoreSession|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to OneDriveForBusinessRestoreSession|null
     */
    private function deserializePatch(string $body): OneDriveForBusinessRestoreSession|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new OneDriveForBusinessRestoreSession($data);
    }
    /**
     * Delete navigation property oneDriveForBusinessRestoreSessions for solutions
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
     * Navigate to driveRestoreArtifacts
     *
     * @return DriveRestoreArtifactsRequestBuilder
     */
    public function driveRestoreArtifacts(): DriveRestoreArtifactsRequestBuilder
    {
        return new DriveRestoreArtifactsRequestBuilder($this->client, $this->requestUrl . '/driveRestoreArtifacts');
    }
    /**
     * Navigate to driveRestoreArtifactsBulkAdditionRequests
     *
     * @return DriveRestoreArtifactsBulkAdditionRequestsRequestBuilder
     */
    public function driveRestoreArtifactsBulkAdditionRequests(): DriveRestoreArtifactsBulkAdditionRequestsRequestBuilder
    {
        return new DriveRestoreArtifactsBulkAdditionRequestsRequestBuilder($this->client, $this->requestUrl . '/driveRestoreArtifactsBulkAdditionRequests');
    }
}
