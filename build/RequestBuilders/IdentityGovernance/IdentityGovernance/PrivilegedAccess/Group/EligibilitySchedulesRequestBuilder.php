<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\PrivilegedAccess\Group;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\PrivilegedAccessGroupEligibilityScheduleCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\PrivilegedAccessGroupEligibilitySchedule;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\PrivilegedAccess\Group\EligibilitySchedules\PrivilegedAccessGroupEligibilityScheduleRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\PrivilegedAccess\Group\EligibilitySchedules\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\PrivilegedAccess\Group\EligibilitySchedules\FilterByCurrentUserRequestBuilder;

/**
 * Request builder for /identityGovernance/privilegedAccess/group/eligibilitySchedules
 */
class EligibilitySchedulesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List eligibilitySchedules
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return PrivilegedAccessGroupEligibilityScheduleCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): PrivilegedAccessGroupEligibilityScheduleCollectionResponse
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
     * Deserialize response to PrivilegedAccessGroupEligibilityScheduleCollectionResponse
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
            $items[] = new PrivilegedAccessGroupEligibilitySchedule($item);
        }
        $collection = new PrivilegedAccessGroupEligibilityScheduleCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to eligibilitySchedules for identityGovernance
     * @param PrivilegedAccessGroupEligibilitySchedule $body Request body
     * @return PrivilegedAccessGroupEligibilitySchedule
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(PrivilegedAccessGroupEligibilitySchedule $body): PrivilegedAccessGroupEligibilitySchedule
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to PrivilegedAccessGroupEligibilitySchedule
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
        return new PrivilegedAccessGroupEligibilitySchedule($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $privilegedAccessGroupEligibilityScheduleId The item ID
     * @return PrivilegedAccessGroupEligibilityScheduleRequestBuilder
     */
    public function byId(string $privilegedAccessGroupEligibilityScheduleId): PrivilegedAccessGroupEligibilityScheduleRequestBuilder
    {
        return new PrivilegedAccessGroupEligibilityScheduleRequestBuilder($this->client, $this->requestUrl . '/' . $privilegedAccessGroupEligibilityScheduleId);
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
