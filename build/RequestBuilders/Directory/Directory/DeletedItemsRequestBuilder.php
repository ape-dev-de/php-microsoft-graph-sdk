<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory\Directory;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\DirectoryObjectCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\DirectoryObject;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory\Directory\DeletedItems\DirectoryObjectRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory\Directory\DeletedItems\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory\Directory\DeletedItems\GraphAdministrativeUnitRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory\Directory\DeletedItems\GraphApplicationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory\Directory\DeletedItems\GraphDeviceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory\Directory\DeletedItems\GetAvailableExtensionPropertiesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory\Directory\DeletedItems\GetByIdsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory\Directory\DeletedItems\GraphGroupRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory\Directory\DeletedItems\GraphServicePrincipalRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory\Directory\DeletedItems\GraphUserRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory\Directory\DeletedItems\ValidatePropertiesRequestBuilder;

/**
 * Request builder for /directory/deletedItems
 */
class DeletedItemsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get deleted item (directory object)
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return DirectoryObjectCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): DirectoryObjectCollectionResponse
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        if ($top !== null) {
            $queryParams['$top'] = $top;
        }
        if ($skip !== null) {
            $queryParams['$skip'] = $skip;
        }
        if ($search !== null && $search !== '') {
            $queryParams['$search'] = $search;
        }
        if ($filter !== null && $filter !== '') {
            $queryParams['$filter'] = $filter;
        }
        if ($count !== null) {
            $queryParams['$count'] = $count ? 'true' : 'false';
        }
        if ($orderby !== null && $orderby !== []) {
            $queryParams['$orderby'] = implode(',', $orderby);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to DirectoryObjectCollectionResponse
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
            $items[] = new DirectoryObject($item);
        }
        $collection = new DirectoryObjectCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $directoryObjectId The item ID
     * @return DirectoryObjectRequestBuilder
     */
    public function byId(string $directoryObjectId): DirectoryObjectRequestBuilder
    {
        return new DirectoryObjectRequestBuilder($this->client, $this->requestUrl . '/' . $directoryObjectId);
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
     * Navigate to graph.administrativeUnit
     *
     * @return GraphAdministrativeUnitRequestBuilder
     */
    public function graphAdministrativeUnit(): GraphAdministrativeUnitRequestBuilder
    {
        return new GraphAdministrativeUnitRequestBuilder($this->client, $this->requestUrl . '/graph.administrativeUnit');
    }
    /**
     * Navigate to graph.application
     *
     * @return GraphApplicationRequestBuilder
     */
    public function graphApplication(): GraphApplicationRequestBuilder
    {
        return new GraphApplicationRequestBuilder($this->client, $this->requestUrl . '/graph.application');
    }
    /**
     * Navigate to graph.device
     *
     * @return GraphDeviceRequestBuilder
     */
    public function graphDevice(): GraphDeviceRequestBuilder
    {
        return new GraphDeviceRequestBuilder($this->client, $this->requestUrl . '/graph.device');
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
     * Navigate to graph.group
     *
     * @return GraphGroupRequestBuilder
     */
    public function graphGroup(): GraphGroupRequestBuilder
    {
        return new GraphGroupRequestBuilder($this->client, $this->requestUrl . '/graph.group');
    }
    /**
     * Navigate to graph.servicePrincipal
     *
     * @return GraphServicePrincipalRequestBuilder
     */
    public function graphServicePrincipal(): GraphServicePrincipalRequestBuilder
    {
        return new GraphServicePrincipalRequestBuilder($this->client, $this->requestUrl . '/graph.servicePrincipal');
    }
    /**
     * Navigate to graph.user
     *
     * @return GraphUserRequestBuilder
     */
    public function graphUser(): GraphUserRequestBuilder
    {
        return new GraphUserRequestBuilder($this->client, $this->requestUrl . '/graph.user');
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
