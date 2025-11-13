<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ParticipantCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\Participant;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls\Participants\ParticipantRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls\Participants\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls\Participants\InviteRequestBuilder;

/**
 * Request builder for /communications/calls/{call-id}/participants
 */
class ParticipantsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List participants
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return ParticipantCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): ParticipantCollectionResponse|null
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
     * Deserialize response to ParticipantCollectionResponse|null
     */
    private function deserializeGet(string $body): ParticipantCollectionResponse|null    {
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
            $items[] = new Participant($item);
        }
        $collection = new ParticipantCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to participants for communications
     * @param Participant $body Request body
     * @return Participant|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(Participant $body): Participant|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to Participant|null
     */
    private function deserializePost(string $body): Participant|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new Participant($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $participantId The item ID
     * @return ParticipantRequestBuilder
     */
    public function byId(string $participantId): ParticipantRequestBuilder
    {
        return new ParticipantRequestBuilder($this->client, $this->requestUrl . '/' . $participantId);
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
     * Navigate to invite
     *
     * @return InviteRequestBuilder
     */
    public function invite(): InviteRequestBuilder
    {
        return new InviteRequestBuilder($this->client, $this->requestUrl . '/invite');
    }
}
