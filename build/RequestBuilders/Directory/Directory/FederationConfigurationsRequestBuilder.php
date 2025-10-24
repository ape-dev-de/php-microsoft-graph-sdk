<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory\Directory;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityProviderBaseCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityProviderBase;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory\Directory\FederationConfigurations\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory\Directory\FederationConfigurations\AvailableProviderTypesRequestBuilder;

/**
 * Request builder for /directory/federationConfigurations
 */
class FederationConfigurationsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get federationConfigurations from directory
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return IdentityProviderBaseCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): IdentityProviderBaseCollectionResponse
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
     * Deserialize response to IdentityProviderBaseCollectionResponse
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
            $items[] = new IdentityProviderBase($item);
        }
        $collection = new IdentityProviderBaseCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to federationConfigurations for directory
     * @param IdentityProviderBase $body Request body
     * @return IdentityProviderBase
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(IdentityProviderBase $body): IdentityProviderBase
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to IdentityProviderBase
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
        return new IdentityProviderBase($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $identityProviderBaseId The item ID
     * @return IdentityProviderBaseRequestBuilder
     */
    public function byId(string $identityProviderBaseId): IdentityProviderBaseRequestBuilder
    {
        return new IdentityProviderBaseRequestBuilder($this->client, $this->requestUrl . '/' . $identityProviderBaseId);
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
     * Navigate to availableProviderTypes()
     *
     * @return AvailableProviderTypesRequestBuilder
     */
    public function availableProviderTypes(): AvailableProviderTypesRequestBuilder
    {
        return new AvailableProviderTypesRequestBuilder($this->client, $this->requestUrl . '/availableProviderTypes()');
    }
}
