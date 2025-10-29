<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Storage\FileStorage\Containers;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\FileStorageContainer;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Storage\FileStorage\Containers\ColumnsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Storage\FileStorage\Containers\DriveRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Storage\FileStorage\Containers\ActivateRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Storage\FileStorage\Containers\LockRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Storage\FileStorage\Containers\PermanentDeleteRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Storage\FileStorage\Containers\RestoreRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Storage\FileStorage\Containers\UnlockRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Storage\FileStorage\Containers\PermissionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Storage\FileStorage\Containers\RecycleBinRequestBuilder;

/**
 * Request builder for /storage/fileStorage/containers/{fileStorageContainer-id}
 */
class FileStorageContainerRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get containers from storage
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return FileStorageContainer
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): FileStorageContainer
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
     * Deserialize response to FileStorageContainer
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
        return new FileStorageContainer($data);
    }
    /**
     * Update the navigation property containers in storage
     * @param FileStorageContainer $body Request body
     * @return FileStorageContainer
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(FileStorageContainer $body): FileStorageContainer
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to FileStorageContainer
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
        return new FileStorageContainer($data);
    }
    /**
     * Delete navigation property containers for storage
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
     * Navigate to columns
     *
     * @return ColumnsRequestBuilder
     */
    public function columns(): ColumnsRequestBuilder
    {
        return new ColumnsRequestBuilder($this->client, $this->requestUrl . '/columns');
    }
    /**
     * Navigate to drive
     *
     * @return DriveRequestBuilder
     */
    public function drive(): DriveRequestBuilder
    {
        return new DriveRequestBuilder($this->client, $this->requestUrl . '/drive');
    }
    /**
     * Navigate to activate
     *
     * @return ActivateRequestBuilder
     */
    public function activate(): ActivateRequestBuilder
    {
        return new ActivateRequestBuilder($this->client, $this->requestUrl . '/activate');
    }
    /**
     * Navigate to lock
     *
     * @return LockRequestBuilder
     */
    public function lock(): LockRequestBuilder
    {
        return new LockRequestBuilder($this->client, $this->requestUrl . '/lock');
    }
    /**
     * Navigate to permanentDelete
     *
     * @return PermanentDeleteRequestBuilder
     */
    public function permanentDelete(): PermanentDeleteRequestBuilder
    {
        return new PermanentDeleteRequestBuilder($this->client, $this->requestUrl . '/permanentDelete');
    }
    /**
     * Navigate to restore
     *
     * @return RestoreRequestBuilder
     */
    public function restore(): RestoreRequestBuilder
    {
        return new RestoreRequestBuilder($this->client, $this->requestUrl . '/restore');
    }
    /**
     * Navigate to unlock
     *
     * @return UnlockRequestBuilder
     */
    public function unlock(): UnlockRequestBuilder
    {
        return new UnlockRequestBuilder($this->client, $this->requestUrl . '/unlock');
    }
    /**
     * Navigate to permissions
     *
     * @return PermissionsRequestBuilder
     */
    public function permissions(): PermissionsRequestBuilder
    {
        return new PermissionsRequestBuilder($this->client, $this->requestUrl . '/permissions');
    }
    /**
     * Navigate to recycleBin
     *
     * @return RecycleBinRequestBuilder
     */
    public function recycleBin(): RecycleBinRequestBuilder
    {
        return new RecycleBinRequestBuilder($this->client, $this->requestUrl . '/recycleBin');
    }
}
