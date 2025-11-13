<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\PrivilegedAccess\Group;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\PrivilegedAccessGroupAssignmentScheduleCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\PrivilegedAccessGroupAssignmentSchedule;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\PrivilegedAccess\Group\AssignmentSchedules\PrivilegedAccessGroupAssignmentScheduleRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\PrivilegedAccess\Group\AssignmentSchedules\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\PrivilegedAccess\Group\AssignmentSchedules\FilterByCurrentUserRequestBuilder;

/**
 * Request builder for /identityGovernance/privilegedAccess/group/assignmentSchedules
 */
class AssignmentSchedulesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List assignmentSchedules
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return PrivilegedAccessGroupAssignmentScheduleCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): PrivilegedAccessGroupAssignmentScheduleCollectionResponse|null
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
     * Deserialize response to PrivilegedAccessGroupAssignmentScheduleCollectionResponse|null
     */
    private function deserializeGet(string $body): PrivilegedAccessGroupAssignmentScheduleCollectionResponse|null    {
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
            $items[] = new PrivilegedAccessGroupAssignmentSchedule($item);
        }
        $collection = new PrivilegedAccessGroupAssignmentScheduleCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to assignmentSchedules for identityGovernance
     * @param PrivilegedAccessGroupAssignmentSchedule $body Request body
     * @return PrivilegedAccessGroupAssignmentSchedule|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(PrivilegedAccessGroupAssignmentSchedule $body): PrivilegedAccessGroupAssignmentSchedule|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to PrivilegedAccessGroupAssignmentSchedule|null
     */
    private function deserializePost(string $body): PrivilegedAccessGroupAssignmentSchedule|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new PrivilegedAccessGroupAssignmentSchedule($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $privilegedAccessGroupAssignmentScheduleId The item ID
     * @return PrivilegedAccessGroupAssignmentScheduleRequestBuilder
     */
    public function byId(string $privilegedAccessGroupAssignmentScheduleId): PrivilegedAccessGroupAssignmentScheduleRequestBuilder
    {
        return new PrivilegedAccessGroupAssignmentScheduleRequestBuilder($this->client, $this->requestUrl . '/' . $privilegedAccessGroupAssignmentScheduleId);
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
