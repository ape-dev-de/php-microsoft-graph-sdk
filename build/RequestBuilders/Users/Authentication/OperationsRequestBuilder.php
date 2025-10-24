<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Authentication;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\LongRunningOperationCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\LongRunningOperation;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Authentication\Operations\LongRunningOperationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Authentication\Operations\CountRequestBuilder;

/**
 * Request builder for /users/{user-id}/authentication/operations
 */
class OperationsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get longRunningOperation
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return LongRunningOperationCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): LongRunningOperationCollectionResponse
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
     * Deserialize response to LongRunningOperationCollectionResponse
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
            $items[] = new LongRunningOperation($item);
        }
        $collection = new LongRunningOperationCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to operations for users
     * @param LongRunningOperation $body Request body
     * @return LongRunningOperation
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(LongRunningOperation $body): LongRunningOperation
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to LongRunningOperation
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
        return new LongRunningOperation($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $longRunningOperationId The item ID
     * @return LongRunningOperationRequestBuilder
     */
    public function byId(string $longRunningOperationId): LongRunningOperationRequestBuilder
    {
        return new LongRunningOperationRequestBuilder($this->client, $this->requestUrl . '/' . $longRunningOperationId);
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
