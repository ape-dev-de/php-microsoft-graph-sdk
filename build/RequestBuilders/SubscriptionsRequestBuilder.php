<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\CompanySubscriptionCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\CompanySubscription;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CompanySubscriptionRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CountRequestBuilder;

/**
 * Request builder for subscriptions
 */
class SubscriptionsRequestBuilder extends BaseRequestBuilder
{
    /**
     * List subscriptions
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return CompanySubscriptionCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): CompanySubscriptionCollectionResponse
    {
        $queryParams = [];
        if ($select !== null && $select !== '') {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== '') {
            $queryParams['$expand'] = implode(',', $expand);
        }
        if ($top !== null && $top !== '') {
            $queryParams['$top'] = $top;
        }
        if ($skip !== null && $skip !== '') {
            $queryParams['$skip'] = $skip;
        }
        if ($search !== null && $search !== '') {
            $queryParams['$search'] = $search;
        }
        if ($filter !== null && $filter !== '') {
            $queryParams['$filter'] = $filter;
        }
        if ($count !== null && $count !== '') {
            $queryParams['$count'] = $count;
        }
        if ($orderby !== null && $orderby !== '') {
            $queryParams['$orderby'] = implode(',', $orderby);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to CompanySubscriptionCollectionResponse
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
            $items[] = new CompanySubscription($item);
        }
        $collection = new CompanySubscriptionCollectionResponse([]);
        $collection->value = $items;
        $collection->odataContext = $data['@odata.context'] ?? null;
        $collection->odataNextLink = $data['@odata.nextLink'] ?? null;
        $collection->odataCount = $data['@odata.count'] ?? null;
        return $collection;
    }
    /**
     * Create new navigation property to subscriptions for directory
     * @param CompanySubscription $body Request body
     * @return CompanySubscription
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(CompanySubscription $body): CompanySubscription
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to CompanySubscription
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
        return new CompanySubscription($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $companySubscriptionId The item ID
     * @return CompanySubscriptionRequestBuilder
     */
    public function byId(string $companySubscriptionId): CompanySubscriptionRequestBuilder
    {
        return new CompanySubscriptionRequestBuilder($this->client, $this->requestUrl . '/' . $companySubscriptionId);
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
