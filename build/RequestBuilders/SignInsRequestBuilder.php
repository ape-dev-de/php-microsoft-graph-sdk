<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SignInCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\SignIn;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SignInRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ConfirmCompromisedRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ConfirmSafeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DismissRequestBuilder;

/**
 * Request builder for signIns
 */
class SignInsRequestBuilder extends BaseRequestBuilder
{
    /**
     * List signIns
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return SignInCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): SignInCollectionResponse
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
     * Deserialize response to SignInCollectionResponse
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
            $items[] = new SignIn($item);
        }
        $collection = new SignInCollectionResponse([]);
        $collection->value = $items;
        $collection->odataContext = $data['@odata.context'] ?? null;
        $collection->odataNextLink = $data['@odata.nextLink'] ?? null;
        $collection->odataCount = $data['@odata.count'] ?? null;
        return $collection;
    }
    /**
     * Create new navigation property to signIns for auditLogs
     * @param SignIn $body Request body
     * @return SignIn
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(SignIn $body): SignIn
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to SignIn
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
        return new SignIn($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $signInId The item ID
     * @return SignInRequestBuilder
     */
    public function byId(string $signInId): SignInRequestBuilder
    {
        return new SignInRequestBuilder($this->client, $this->requestUrl . '/' . $signInId);
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
     * Navigate to confirmCompromised
     *
     * @return ConfirmCompromisedRequestBuilder
     */
    public function confirmCompromised(): ConfirmCompromisedRequestBuilder
    {
        return new ConfirmCompromisedRequestBuilder($this->client, $this->requestUrl . '/confirmCompromised');
    }
    /**
     * Navigate to confirmSafe
     *
     * @return ConfirmSafeRequestBuilder
     */
    public function confirmSafe(): ConfirmSafeRequestBuilder
    {
        return new ConfirmSafeRequestBuilder($this->client, $this->requestUrl . '/confirmSafe');
    }
    /**
     * Navigate to dismiss
     *
     * @return DismissRequestBuilder
     */
    public function dismiss(): DismissRequestBuilder
    {
        return new DismissRequestBuilder($this->client, $this->requestUrl . '/dismiss');
    }
}
