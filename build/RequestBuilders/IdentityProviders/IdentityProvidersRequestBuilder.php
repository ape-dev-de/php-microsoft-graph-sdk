<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityProviders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityProviderCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityProvider;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityProviders\IdentityProviders\IdentityProviderRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityProviders\IdentityProviders\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityProviders\IdentityProviders\AvailableProviderTypesRequestBuilder;

/**
 * Request builder for /identityProviders
 */
class IdentityProvidersRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List identityProviders (deprecated)
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return IdentityProviderCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): IdentityProviderCollectionResponse
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
     * Deserialize response to IdentityProviderCollectionResponse
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
            $items[] = new IdentityProvider($item);
        }
        $collection = new IdentityProviderCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create identityProvider (deprecated)
     * @param IdentityProvider $body Request body
     * @return IdentityProvider
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(IdentityProvider $body): IdentityProvider
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to IdentityProvider
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
        return new IdentityProvider($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $identityProviderId The item ID
     * @return IdentityProviderRequestBuilder
     */
    public function byId(string $identityProviderId): IdentityProviderRequestBuilder
    {
        return new IdentityProviderRequestBuilder($this->client, $this->requestUrl . '/' . $identityProviderId);
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
