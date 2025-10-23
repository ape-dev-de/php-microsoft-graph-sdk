<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ServiceUpdateMessageCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\ServiceUpdateMessage;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServiceUpdateMessageRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ArchiveRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\FavoriteRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\MarkReadRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\MarkUnreadRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\UnarchiveRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\UnfavoriteRequestBuilder;

/**
 * Request builder for messages
 */
class MessagesRequestBuilder extends BaseRequestBuilder
{
    /**
     * List serviceAnnouncement messages
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return ServiceUpdateMessageCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): ServiceUpdateMessageCollectionResponse
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
     * Deserialize response to ServiceUpdateMessageCollectionResponse
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
            $items[] = new ServiceUpdateMessage($item);
        }
        $collection = new ServiceUpdateMessageCollectionResponse([]);
        $collection->value = $items;
        $collection->odataContext = $data['@odata.context'] ?? null;
        $collection->odataNextLink = $data['@odata.nextLink'] ?? null;
        $collection->odataCount = $data['@odata.count'] ?? null;
        return $collection;
    }
    /**
     * Create new navigation property to messages for admin
     * @param ServiceUpdateMessage $body Request body
     * @return ServiceUpdateMessage
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(ServiceUpdateMessage $body): ServiceUpdateMessage
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to ServiceUpdateMessage
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
        return new ServiceUpdateMessage($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $serviceUpdateMessageId The item ID
     * @return ServiceUpdateMessageRequestBuilder
     */
    public function byId(string $serviceUpdateMessageId): ServiceUpdateMessageRequestBuilder
    {
        return new ServiceUpdateMessageRequestBuilder($this->client, $this->requestUrl . '/' . $serviceUpdateMessageId);
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
     * Navigate to archive
     *
     * @return ArchiveRequestBuilder
     */
    public function archive(): ArchiveRequestBuilder
    {
        return new ArchiveRequestBuilder($this->client, $this->requestUrl . '/archive');
    }
    /**
     * Navigate to favorite
     *
     * @return FavoriteRequestBuilder
     */
    public function favorite(): FavoriteRequestBuilder
    {
        return new FavoriteRequestBuilder($this->client, $this->requestUrl . '/favorite');
    }
    /**
     * Navigate to markRead
     *
     * @return MarkReadRequestBuilder
     */
    public function markRead(): MarkReadRequestBuilder
    {
        return new MarkReadRequestBuilder($this->client, $this->requestUrl . '/markRead');
    }
    /**
     * Navigate to markUnread
     *
     * @return MarkUnreadRequestBuilder
     */
    public function markUnread(): MarkUnreadRequestBuilder
    {
        return new MarkUnreadRequestBuilder($this->client, $this->requestUrl . '/markUnread');
    }
    /**
     * Navigate to unarchive
     *
     * @return UnarchiveRequestBuilder
     */
    public function unarchive(): UnarchiveRequestBuilder
    {
        return new UnarchiveRequestBuilder($this->client, $this->requestUrl . '/unarchive');
    }
    /**
     * Navigate to unfavorite
     *
     * @return UnfavoriteRequestBuilder
     */
    public function unfavorite(): UnfavoriteRequestBuilder
    {
        return new UnfavoriteRequestBuilder($this->client, $this->requestUrl . '/unfavorite');
    }
}
