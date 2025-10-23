<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\RiskyUserCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\RiskyUser;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RiskyUserRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ConfirmCompromisedRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ConfirmSafeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DismissRequestBuilder;

/**
 * Request builder for riskyUsers
 */
class RiskyUsersRequestBuilder extends BaseRequestBuilder
{
    /**
     * List riskyUsers
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return RiskyUserCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): RiskyUserCollectionResponse
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
     * Deserialize response to RiskyUserCollectionResponse
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
            $items[] = new RiskyUser($item);
        }
        $collection = new RiskyUserCollectionResponse([]);
        $collection->value = $items;
        $collection->odataContext = $data['@odata.context'] ?? null;
        $collection->odataNextLink = $data['@odata.nextLink'] ?? null;
        $collection->odataCount = $data['@odata.count'] ?? null;
        return $collection;
    }
    /**
     * Create new navigation property to riskyUsers for identityProtection
     * @param RiskyUser $body Request body
     * @return RiskyUser
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(RiskyUser $body): RiskyUser
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to RiskyUser
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
        return new RiskyUser($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $riskyUserId The item ID
     * @return RiskyUserRequestBuilder
     */
    public function byId(string $riskyUserId): RiskyUserRequestBuilder
    {
        return new RiskyUserRequestBuilder($this->client, $this->requestUrl . '/' . $riskyUserId);
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
