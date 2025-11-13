<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\OneDriveForBusinessRestoreSessions\DriveRestoreArtifactsBulkAdditionRequests;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\DriveRestoreArtifactsBulkAdditionRequest;

/**
 * Request builder for /solutions/backupRestore/oneDriveForBusinessRestoreSessions/{oneDriveForBusinessRestoreSession-id}/driveRestoreArtifactsBulkAdditionRequests/{driveRestoreArtifactsBulkAdditionRequest-id}
 */
class DriveRestoreArtifactsBulkAdditionRequestRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get driveRestoreArtifactsBulkAdditionRequest
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return DriveRestoreArtifactsBulkAdditionRequest|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): DriveRestoreArtifactsBulkAdditionRequest|null
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
     * Deserialize response to DriveRestoreArtifactsBulkAdditionRequest|null
     */
    private function deserializeGet(string $body): DriveRestoreArtifactsBulkAdditionRequest|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new DriveRestoreArtifactsBulkAdditionRequest($data);
    }
    /**
     * Update the navigation property driveRestoreArtifactsBulkAdditionRequests in solutions
     * @param DriveRestoreArtifactsBulkAdditionRequest $body Request body
     * @return DriveRestoreArtifactsBulkAdditionRequest|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(DriveRestoreArtifactsBulkAdditionRequest $body): DriveRestoreArtifactsBulkAdditionRequest|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to DriveRestoreArtifactsBulkAdditionRequest|null
     */
    private function deserializePatch(string $body): DriveRestoreArtifactsBulkAdditionRequest|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new DriveRestoreArtifactsBulkAdditionRequest($data);
    }
    /**
     * Delete driveRestoreArtifactsBulkAdditionRequest
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
