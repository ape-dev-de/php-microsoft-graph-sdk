<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\ManagedDevices\LogCollectionRequests;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceLogCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceLog;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\ManagedDevices\LogCollectionRequests\CreateDownloadUrlRequestBuilder;

/**
 * Request builder for /me/managedDevices/{managedDevice-id}/logCollectionRequests/{deviceLogCollectionResponse-id}
 */
class DeviceLogCollectionResponseRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get logCollectionRequests from me
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return DeviceLogCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): DeviceLogCollectionResponse
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
     * Deserialize response to DeviceLogCollectionResponse
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
        
        // Collection response
        $items = [];
        foreach ($data['value'] ?? [] as $item) {
            $items[] = new DeviceLog($item);
        }
        $collection = new DeviceLogCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Update the navigation property logCollectionRequests in me
     * @param DeviceLogCollectionResponse $body Request body
     * @return DeviceLogCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(DeviceLogCollectionResponse $body): DeviceLogCollectionResponse
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to DeviceLogCollectionResponse
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
        
        // Collection response
        $items = [];
        foreach ($data['value'] ?? [] as $item) {
            $items[] = new DeviceLog($item);
        }
        $collection = new DeviceLogCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Delete navigation property logCollectionRequests for me
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
     * Navigate to createDownloadUrl
     *
     * @return CreateDownloadUrlRequestBuilder
     */
    public function createDownloadUrl(): CreateDownloadUrlRequestBuilder
    {
        return new CreateDownloadUrlRequestBuilder($this->client, $this->requestUrl . '/createDownloadUrl');
    }
}
