<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\PrivilegedAccess\Group;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\PrivilegedAccessGroupEligibilityScheduleInstanceCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\PrivilegedAccessGroupEligibilityScheduleInstance;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\PrivilegedAccess\Group\EligibilityScheduleInstances\PrivilegedAccessGroupEligibilityScheduleInstanceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\PrivilegedAccess\Group\EligibilityScheduleInstances\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\PrivilegedAccess\Group\EligibilityScheduleInstances\FilterByCurrentUserRequestBuilder;

/**
 * Request builder for /identityGovernance/privilegedAccess/group/eligibilityScheduleInstances
 */
class EligibilityScheduleInstancesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List eligibilityScheduleInstances
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return PrivilegedAccessGroupEligibilityScheduleInstanceCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): PrivilegedAccessGroupEligibilityScheduleInstanceCollectionResponse
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
     * Deserialize response to PrivilegedAccessGroupEligibilityScheduleInstanceCollectionResponse
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
            $items[] = new PrivilegedAccessGroupEligibilityScheduleInstance($item);
        }
        $collection = new PrivilegedAccessGroupEligibilityScheduleInstanceCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to eligibilityScheduleInstances for identityGovernance
     * @param PrivilegedAccessGroupEligibilityScheduleInstance $body Request body
     * @return PrivilegedAccessGroupEligibilityScheduleInstance
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(PrivilegedAccessGroupEligibilityScheduleInstance $body): PrivilegedAccessGroupEligibilityScheduleInstance
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to PrivilegedAccessGroupEligibilityScheduleInstance
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
        return new PrivilegedAccessGroupEligibilityScheduleInstance($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $privilegedAccessGroupEligibilityScheduleInstanceId The item ID
     * @return PrivilegedAccessGroupEligibilityScheduleInstanceRequestBuilder
     */
    public function byId(string $privilegedAccessGroupEligibilityScheduleInstanceId): PrivilegedAccessGroupEligibilityScheduleInstanceRequestBuilder
    {
        return new PrivilegedAccessGroupEligibilityScheduleInstanceRequestBuilder($this->client, $this->requestUrl . '/' . $privilegedAccessGroupEligibilityScheduleInstanceId);
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
