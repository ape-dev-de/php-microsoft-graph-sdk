<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Storage;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\FileStorageRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SettingsRequestBuilder;

/**
 * Request builder for storage
 */
class StorageRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get storage
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Storage
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Storage
    {
        $queryParams = [];
        if ($select !== null) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to Storage
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
        return new Storage($data);
    }
    /**
     * Update storage
     * @param Storage $body Request body
     * @return Storage
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(Storage $body): Storage
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to Storage
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
        return new Storage($data);
    }
    /**
     * Navigate to fileStorage
     *
     * @return FileStorageRequestBuilder
     */
    public function fileStorage(): FileStorageRequestBuilder
    {
        return new FileStorageRequestBuilder($this->client, $this->requestUrl . '/fileStorage');
    }
    /**
     * Navigate to settings
     *
     * @return SettingsRequestBuilder
     */
    public function settings(): SettingsRequestBuilder
    {
        return new SettingsRequestBuilder($this->client, $this->requestUrl . '/settings');
    }
}
