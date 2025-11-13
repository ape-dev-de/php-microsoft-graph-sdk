<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\CloudClipboard;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\CloudClipboardItemCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\CloudClipboardItem;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\CloudClipboard\Items\CloudClipboardItemRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\CloudClipboard\Items\CountRequestBuilder;

/**
 * Request builder for /users/{user-id}/cloudClipboard/items
 */
class ItemsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get items from users
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return CloudClipboardItemCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): CloudClipboardItemCollectionResponse|null
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
     * Deserialize response to CloudClipboardItemCollectionResponse|null
     */
    private function deserializeGet(string $body): CloudClipboardItemCollectionResponse|null    {
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
            $items[] = new CloudClipboardItem($item);
        }
        $collection = new CloudClipboardItemCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to items for users
     * @param CloudClipboardItem $body Request body
     * @return CloudClipboardItem|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(CloudClipboardItem $body): CloudClipboardItem|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to CloudClipboardItem|null
     */
    private function deserializePost(string $body): CloudClipboardItem|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new CloudClipboardItem($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $cloudClipboardItemId The item ID
     * @return CloudClipboardItemRequestBuilder
     */
    public function byId(string $cloudClipboardItemId): CloudClipboardItemRequestBuilder
    {
        return new CloudClipboardItemRequestBuilder($this->client, $this->requestUrl . '/' . $cloudClipboardItemId);
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
