<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\MessageCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\Message;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Messages\MessageRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Messages\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Messages\DeltaRequestBuilder;

/**
 * Request builder for /users/{user-id}/messages
 */
class MessagesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get messages from users
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param string|null $includeHiddenMessages Include Hidden Messages
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return MessageCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?string $includeHiddenMessages = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): MessageCollectionResponse|null
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        if ($includeHiddenMessages !== null && $includeHiddenMessages !== '') {
            $queryParams['includeHiddenMessages'] = $includeHiddenMessages;
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
     * Deserialize response to MessageCollectionResponse|null
     */
    private function deserializeGet(string $body): MessageCollectionResponse|null    {
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
            $items[] = new Message($item);
        }
        $collection = new MessageCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to messages for users
     * @param Message $body Request body
     * @return Message|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(Message $body): Message|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to Message|null
     */
    private function deserializePost(string $body): Message|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new Message($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $messageId The item ID
     * @return MessageRequestBuilder
     */
    public function byId(string $messageId): MessageRequestBuilder
    {
        return new MessageRequestBuilder($this->client, $this->requestUrl . '/' . $messageId);
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
     * Navigate to delta()
     *
     * @return DeltaRequestBuilder
     */
    public function delta(): DeltaRequestBuilder
    {
        return new DeltaRequestBuilder($this->client, $this->requestUrl . '/delta()');
    }
}
