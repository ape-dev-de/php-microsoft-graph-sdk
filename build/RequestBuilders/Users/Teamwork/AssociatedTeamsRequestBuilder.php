<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Teamwork;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\AssociatedTeamInfoCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\AssociatedTeamInfo;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Teamwork\AssociatedTeams\AssociatedTeamInfoRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Teamwork\AssociatedTeams\CountRequestBuilder;

/**
 * Request builder for /users/{user-id}/teamwork/associatedTeams
 */
class AssociatedTeamsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get associatedTeams from users
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return AssociatedTeamInfoCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): AssociatedTeamInfoCollectionResponse|null
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
     * Deserialize response to AssociatedTeamInfoCollectionResponse|null
     */
    private function deserializeGet(string $body): AssociatedTeamInfoCollectionResponse|null    {
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
            $items[] = new AssociatedTeamInfo($item);
        }
        $collection = new AssociatedTeamInfoCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to associatedTeams for users
     * @param AssociatedTeamInfo $body Request body
     * @return AssociatedTeamInfo|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(AssociatedTeamInfo $body): AssociatedTeamInfo|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to AssociatedTeamInfo|null
     */
    private function deserializePost(string $body): AssociatedTeamInfo|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new AssociatedTeamInfo($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $associatedTeamInfoId The item ID
     * @return AssociatedTeamInfoRequestBuilder
     */
    public function byId(string $associatedTeamInfoId): AssociatedTeamInfoRequestBuilder
    {
        return new AssociatedTeamInfoRequestBuilder($this->client, $this->requestUrl . '/' . $associatedTeamInfoId);
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
