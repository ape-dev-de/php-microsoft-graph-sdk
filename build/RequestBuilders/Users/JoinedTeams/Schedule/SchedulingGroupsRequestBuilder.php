<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\JoinedTeams\Schedule;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SchedulingGroupCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\SchedulingGroup;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\JoinedTeams\Schedule\SchedulingGroups\SchedulingGroupRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\JoinedTeams\Schedule\SchedulingGroups\CountRequestBuilder;

/**
 * Request builder for /users/{user-id}/joinedTeams/{team-id}/schedule/schedulingGroups
 */
class SchedulingGroupsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get schedulingGroups from users
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return SchedulingGroupCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): SchedulingGroupCollectionResponse|null
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
     * Deserialize response to SchedulingGroupCollectionResponse|null
     */
    private function deserializeGet(string $body): SchedulingGroupCollectionResponse|null    {
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
            $items[] = new SchedulingGroup($item);
        }
        $collection = new SchedulingGroupCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to schedulingGroups for users
     * @param SchedulingGroup $body Request body
     * @return SchedulingGroup|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(SchedulingGroup $body): SchedulingGroup|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to SchedulingGroup|null
     */
    private function deserializePost(string $body): SchedulingGroup|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new SchedulingGroup($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $schedulingGroupId The item ID
     * @return SchedulingGroupRequestBuilder
     */
    public function byId(string $schedulingGroupId): SchedulingGroupRequestBuilder
    {
        return new SchedulingGroupRequestBuilder($this->client, $this->requestUrl . '/' . $schedulingGroupId);
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
