<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TenantRelationships\TenantRelationships;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\DelegatedAdminCustomerCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\DelegatedAdminCustomer;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TenantRelationships\TenantRelationships\DelegatedAdminCustomers\DelegatedAdminCustomerRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TenantRelationships\TenantRelationships\DelegatedAdminCustomers\CountRequestBuilder;

/**
 * Request builder for /tenantRelationships/delegatedAdminCustomers
 */
class DelegatedAdminCustomersRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List delegatedAdminCustomers
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return DelegatedAdminCustomerCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): DelegatedAdminCustomerCollectionResponse
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
     * Deserialize response to DelegatedAdminCustomerCollectionResponse
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
            $items[] = new DelegatedAdminCustomer($item);
        }
        $collection = new DelegatedAdminCustomerCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to delegatedAdminCustomers for tenantRelationships
     * @param DelegatedAdminCustomer $body Request body
     * @return DelegatedAdminCustomer
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(DelegatedAdminCustomer $body): DelegatedAdminCustomer
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to DelegatedAdminCustomer
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
        return new DelegatedAdminCustomer($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $delegatedAdminCustomerId The item ID
     * @return DelegatedAdminCustomerRequestBuilder
     */
    public function byId(string $delegatedAdminCustomerId): DelegatedAdminCustomerRequestBuilder
    {
        return new DelegatedAdminCustomerRequestBuilder($this->client, $this->requestUrl . '/' . $delegatedAdminCustomerId);
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
}
