<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\JoinedTeams\Channels;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ConversationMemberCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\ConversationMember;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\JoinedTeams\Channels\AllMembers\ConversationMemberRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\JoinedTeams\Channels\AllMembers\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\JoinedTeams\Channels\AllMembers\AddRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\JoinedTeams\Channels\AllMembers\RemoveRequestBuilder;

/**
 * Request builder for /me/joinedTeams/{team-id}/channels/{channel-id}/allMembers
 */
class AllMembersRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get allMembers from me
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return ConversationMemberCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): ConversationMemberCollectionResponse|null
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
     * Deserialize response to ConversationMemberCollectionResponse|null
     */
    private function deserializeGet(string $body): ConversationMemberCollectionResponse|null    {
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
            $items[] = new ConversationMember($item);
        }
        $collection = new ConversationMemberCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to allMembers for me
     * @param ConversationMember $body Request body
     * @return ConversationMember|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(ConversationMember $body): ConversationMember|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to ConversationMember|null
     */
    private function deserializePost(string $body): ConversationMember|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ConversationMember($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $conversationMemberId The item ID
     * @return ConversationMemberRequestBuilder
     */
    public function byId(string $conversationMemberId): ConversationMemberRequestBuilder
    {
        return new ConversationMemberRequestBuilder($this->client, $this->requestUrl . '/' . $conversationMemberId);
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
     * Navigate to add
     *
     * @return AddRequestBuilder
     */
    public function add(): AddRequestBuilder
    {
        return new AddRequestBuilder($this->client, $this->requestUrl . '/add');
    }
    /**
     * Navigate to remove
     *
     * @return RemoveRequestBuilder
     */
    public function remove(): RemoveRequestBuilder
    {
        return new RemoveRequestBuilder($this->client, $this->requestUrl . '/remove');
    }
}
