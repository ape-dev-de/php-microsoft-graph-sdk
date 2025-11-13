<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Teamwork;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\DeletedTeamCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\DeletedTeam;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Teamwork\DeletedTeams\DeletedTeamRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Teamwork\DeletedTeams\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Teamwork\DeletedTeams\GetAllMessagesRequestBuilder;

/**
 * Request builder for /teamwork/deletedTeams
 */
class DeletedTeamsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List deletedTeams
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return DeletedTeamCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): DeletedTeamCollectionResponse|null
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
     * Deserialize response to DeletedTeamCollectionResponse|null
     */
    private function deserializeGet(string $body): DeletedTeamCollectionResponse|null    {
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
            $items[] = new DeletedTeam($item);
        }
        $collection = new DeletedTeamCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to deletedTeams for teamwork
     * @param DeletedTeam $body Request body
     * @return DeletedTeam|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(DeletedTeam $body): DeletedTeam|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to DeletedTeam|null
     */
    private function deserializePost(string $body): DeletedTeam|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new DeletedTeam($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $deletedTeamId The item ID
     * @return DeletedTeamRequestBuilder
     */
    public function byId(string $deletedTeamId): DeletedTeamRequestBuilder
    {
        return new DeletedTeamRequestBuilder($this->client, $this->requestUrl . '/' . $deletedTeamId);
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
}
