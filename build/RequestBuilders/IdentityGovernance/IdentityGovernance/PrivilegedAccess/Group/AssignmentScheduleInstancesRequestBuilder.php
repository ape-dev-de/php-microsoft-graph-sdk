<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\PrivilegedAccess\Group;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\PrivilegedAccessGroupAssignmentScheduleInstanceCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\PrivilegedAccessGroupAssignmentScheduleInstance;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\PrivilegedAccess\Group\AssignmentScheduleInstances\PrivilegedAccessGroupAssignmentScheduleInstanceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\PrivilegedAccess\Group\AssignmentScheduleInstances\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\PrivilegedAccess\Group\AssignmentScheduleInstances\FilterByCurrentUserRequestBuilder;

/**
 * Request builder for /identityGovernance/privilegedAccess/group/assignmentScheduleInstances
 */
class AssignmentScheduleInstancesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List assignmentScheduleInstances
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return PrivilegedAccessGroupAssignmentScheduleInstanceCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): PrivilegedAccessGroupAssignmentScheduleInstanceCollectionResponse
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
     * Deserialize response to PrivilegedAccessGroupAssignmentScheduleInstanceCollectionResponse
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
            $items[] = new PrivilegedAccessGroupAssignmentScheduleInstance($item);
        }
        $collection = new PrivilegedAccessGroupAssignmentScheduleInstanceCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to assignmentScheduleInstances for identityGovernance
     * @param PrivilegedAccessGroupAssignmentScheduleInstance $body Request body
     * @return PrivilegedAccessGroupAssignmentScheduleInstance
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(PrivilegedAccessGroupAssignmentScheduleInstance $body): PrivilegedAccessGroupAssignmentScheduleInstance
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to PrivilegedAccessGroupAssignmentScheduleInstance
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
        return new PrivilegedAccessGroupAssignmentScheduleInstance($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $privilegedAccessGroupAssignmentScheduleInstanceId The item ID
     * @return PrivilegedAccessGroupAssignmentScheduleInstanceRequestBuilder
     */
    public function byId(string $privilegedAccessGroupAssignmentScheduleInstanceId): PrivilegedAccessGroupAssignmentScheduleInstanceRequestBuilder
    {
        return new PrivilegedAccessGroupAssignmentScheduleInstanceRequestBuilder($this->client, $this->requestUrl . '/' . $privilegedAccessGroupAssignmentScheduleInstanceId);
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
