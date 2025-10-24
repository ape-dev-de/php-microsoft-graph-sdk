<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\RoleManagement\EntitlementManagement;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\UnifiedRoleAssignmentScheduleInstanceCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\UnifiedRoleAssignmentScheduleInstance;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\RoleManagement\EntitlementManagement\RoleAssignmentScheduleInstances\UnifiedRoleAssignmentScheduleInstanceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\RoleManagement\EntitlementManagement\RoleAssignmentScheduleInstances\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\RoleManagement\EntitlementManagement\RoleAssignmentScheduleInstances\FilterByCurrentUserRequestBuilder;

/**
 * Request builder for /roleManagement/entitlementManagement/roleAssignmentScheduleInstances
 */
class RoleAssignmentScheduleInstancesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get roleAssignmentScheduleInstances from roleManagement
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return UnifiedRoleAssignmentScheduleInstanceCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): UnifiedRoleAssignmentScheduleInstanceCollectionResponse
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
     * Deserialize response to UnifiedRoleAssignmentScheduleInstanceCollectionResponse
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
            $items[] = new UnifiedRoleAssignmentScheduleInstance($item);
        }
        $collection = new UnifiedRoleAssignmentScheduleInstanceCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to roleAssignmentScheduleInstances for roleManagement
     * @param UnifiedRoleAssignmentScheduleInstance $body Request body
     * @return UnifiedRoleAssignmentScheduleInstance
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(UnifiedRoleAssignmentScheduleInstance $body): UnifiedRoleAssignmentScheduleInstance
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to UnifiedRoleAssignmentScheduleInstance
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
        return new UnifiedRoleAssignmentScheduleInstance($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $unifiedRoleAssignmentScheduleInstanceId The item ID
     * @return UnifiedRoleAssignmentScheduleInstanceRequestBuilder
     */
    public function byId(string $unifiedRoleAssignmentScheduleInstanceId): UnifiedRoleAssignmentScheduleInstanceRequestBuilder
    {
        return new UnifiedRoleAssignmentScheduleInstanceRequestBuilder($this->client, $this->requestUrl . '/' . $unifiedRoleAssignmentScheduleInstanceId);
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
