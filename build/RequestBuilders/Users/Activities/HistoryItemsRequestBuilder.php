<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Activities;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ActivityHistoryItemCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\ActivityHistoryItem;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Activities\HistoryItems\ActivityHistoryItemRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Activities\HistoryItems\CountRequestBuilder;

/**
 * Request builder for /users/{user-id}/activities/{userActivity-id}/historyItems
 */
class HistoryItemsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get historyItems from users
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return ActivityHistoryItemCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): ActivityHistoryItemCollectionResponse|null
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
     * Deserialize response to ActivityHistoryItemCollectionResponse|null
     */
    private function deserializeGet(string $body): ActivityHistoryItemCollectionResponse|null    {
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
            $items[] = new ActivityHistoryItem($item);
        }
        $collection = new ActivityHistoryItemCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to historyItems for users
     * @param ActivityHistoryItem $body Request body
     * @return ActivityHistoryItem|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(ActivityHistoryItem $body): ActivityHistoryItem|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to ActivityHistoryItem|null
     */
    private function deserializePost(string $body): ActivityHistoryItem|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ActivityHistoryItem($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $activityHistoryItemId The item ID
     * @return ActivityHistoryItemRequestBuilder
     */
    public function byId(string $activityHistoryItemId): ActivityHistoryItemRequestBuilder
    {
        return new ActivityHistoryItemRequestBuilder($this->client, $this->requestUrl . '/' . $activityHistoryItemId);
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
