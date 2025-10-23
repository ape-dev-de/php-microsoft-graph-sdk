<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\Device;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeltaRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetAvailableExtensionPropertiesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetByIdsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ValidatePropertiesRequestBuilder;

/**
 * Request builder for devices
 */
class DevicesRequestBuilder extends BaseRequestBuilder
{
    /**
     * List devices
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param string|null $consistencyLevel Indicates the requested consistency level. Documentation URL: https://docs.microsoft.com/graph/aad-advanced-queries
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return DeviceCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?string $consistencyLevel = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): DeviceCollectionResponse
    {
        $queryParams = [];
        if ($select !== null) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        if ($consistencyLevel !== null) {
            $queryParams['ConsistencyLevel'] = $consistencyLevel;
        }
        if ($top !== null) {
            $queryParams['$top'] = $top;
        }
        if ($skip !== null) {
            $queryParams['$skip'] = $skip;
        }
        if ($search !== null) {
            $queryParams['$search'] = $search;
        }
        if ($filter !== null) {
            $queryParams['$filter'] = $filter;
        }
        if ($count !== null) {
            $queryParams['$count'] = $count;
        }
        if ($orderby !== null) {
            $queryParams['$orderby'] = implode(',', $orderby);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to DeviceCollectionResponse
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
            $items[] = new Device($item);
        }
        $collection = new DeviceCollectionResponse([]);
        $collection->value = $items;
        $collection->odataContext = $data['@odata.context'] ?? null;
        $collection->odataNextLink = $data['@odata.nextLink'] ?? null;
        $collection->odataCount = $data['@odata.count'] ?? null;
        return $collection;
    }
    /**
     * Create device
     * @param Device $body Request body
     * @return Device
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(Device $body): Device
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to Device
     */
    private function deserializePost(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new Device($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $deviceId The item ID
     * @return DeviceRequestBuilder
     */
    public function byId(string $deviceId): DeviceRequestBuilder
    {
        return new DeviceRequestBuilder($this->client, $this->requestUrl . '/' . $deviceId);
    }
    /**
     * Navigate to $count
     *
     * @return CountRequestBuilder
     */
    public function count(): CountRequestBuilder
    {
        return new CountRequestBuilder($this->client, $this->requestUrl . '/$count');
    }
    /**
     * Navigate to delta()
     *
     * @return DeltaRequestBuilder
     */
    public function delta(): DeltaRequestBuilder
    {
        return new DeltaRequestBuilder($this->client, $this->requestUrl . '/delta()');
    }
    /**
     * Navigate to getAvailableExtensionProperties
     *
     * @return GetAvailableExtensionPropertiesRequestBuilder
     */
    public function getAvailableExtensionProperties(): GetAvailableExtensionPropertiesRequestBuilder
    {
        return new GetAvailableExtensionPropertiesRequestBuilder($this->client, $this->requestUrl . '/getAvailableExtensionProperties');
    }
    /**
     * Navigate to getByIds
     *
     * @return GetByIdsRequestBuilder
     */
    public function getByIds(): GetByIdsRequestBuilder
    {
        return new GetByIdsRequestBuilder($this->client, $this->requestUrl . '/getByIds');
    }
    /**
     * Navigate to validateProperties
     *
     * @return ValidatePropertiesRequestBuilder
     */
    public function validateProperties(): ValidatePropertiesRequestBuilder
    {
        return new ValidatePropertiesRequestBuilder($this->client, $this->requestUrl . '/validateProperties');
    }
}
