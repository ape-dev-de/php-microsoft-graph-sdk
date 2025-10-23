<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ResourceSpecificPermissionGrantCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\ResourceSpecificPermissionGrant;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ResourceSpecificPermissionGrantRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeltaRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetAvailableExtensionPropertiesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetByIdsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ValidatePropertiesRequestBuilder;

/**
 * Request builder for permissionGrants
 */
class PermissionGrantsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get entities from permissionGrants
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return ResourceSpecificPermissionGrantCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): ResourceSpecificPermissionGrantCollectionResponse
    {
        $queryParams = [];
        if ($select !== null) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null) {
            $queryParams['$expand'] = implode(',', $expand);
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
     * Deserialize response to ResourceSpecificPermissionGrantCollectionResponse
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
            $items[] = new ResourceSpecificPermissionGrant($item);
        }
        $collection = new ResourceSpecificPermissionGrantCollectionResponse([]);
        $collection->value = $items;
        $collection->odataContext = $data['@odata.context'] ?? null;
        $collection->odataNextLink = $data['@odata.nextLink'] ?? null;
        $collection->odataCount = $data['@odata.count'] ?? null;
        return $collection;
    }
    /**
     * Add new entity to permissionGrants
     * @param ResourceSpecificPermissionGrant $body Request body
     * @return ResourceSpecificPermissionGrant
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(ResourceSpecificPermissionGrant $body): ResourceSpecificPermissionGrant
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to ResourceSpecificPermissionGrant
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
        return new ResourceSpecificPermissionGrant($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $resourceSpecificPermissionGrantId The item ID
     * @return ResourceSpecificPermissionGrantRequestBuilder
     */
    public function byId(string $resourceSpecificPermissionGrantId): ResourceSpecificPermissionGrantRequestBuilder
    {
        return new ResourceSpecificPermissionGrantRequestBuilder($this->client, $this->requestUrl . '/' . $resourceSpecificPermissionGrantId);
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
