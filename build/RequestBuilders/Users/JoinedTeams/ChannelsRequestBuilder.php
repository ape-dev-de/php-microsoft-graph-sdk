<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\JoinedTeams;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ChannelCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\Channel;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\JoinedTeams\Channels\ChannelRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\JoinedTeams\Channels\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\JoinedTeams\Channels\GetAllMessagesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\JoinedTeams\Channels\GetAllRetainedMessagesRequestBuilder;

/**
 * Request builder for /users/{user-id}/joinedTeams/{team-id}/channels
 */
class ChannelsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get channels from users
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return ChannelCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): ChannelCollectionResponse|null
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
     * Deserialize response to ChannelCollectionResponse|null
     */
    private function deserializeGet(string $body): ChannelCollectionResponse|null    {
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
            $items[] = new Channel($item);
        }
        $collection = new ChannelCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to channels for users
     * @param Channel $body Request body
     * @return Channel|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(Channel $body): Channel|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to Channel|null
     */
    private function deserializePost(string $body): Channel|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new Channel($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $channelId The item ID
     * @return ChannelRequestBuilder
     */
    public function byId(string $channelId): ChannelRequestBuilder
    {
        return new ChannelRequestBuilder($this->client, $this->requestUrl . '/' . $channelId);
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
     * Navigate to getAllMessages()
     *
     * @return GetAllMessagesRequestBuilder
     */
    public function getAllMessages(): GetAllMessagesRequestBuilder
    {
        return new GetAllMessagesRequestBuilder($this->client, $this->requestUrl . '/getAllMessages()');
    }
    /**
     * Navigate to getAllRetainedMessages()
     *
     * @return GetAllRetainedMessagesRequestBuilder
     */
    public function getAllRetainedMessages(): GetAllRetainedMessagesRequestBuilder
    {
        return new GetAllRetainedMessagesRequestBuilder($this->client, $this->requestUrl . '/getAllRetainedMessages()');
    }
}
