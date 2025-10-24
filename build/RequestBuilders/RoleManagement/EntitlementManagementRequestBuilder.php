<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\RbacApplication;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\EntitlementManagement\ResourceNamespacesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\EntitlementManagement\RoleAssignmentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\EntitlementManagement\RoleAssignmentScheduleInstancesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\EntitlementManagement\RoleAssignmentScheduleRequestsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\EntitlementManagement\RoleAssignmentSchedulesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\EntitlementManagement\RoleDefinitionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\EntitlementManagement\RoleEligibilityScheduleInstancesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\EntitlementManagement\RoleEligibilityScheduleRequestsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\EntitlementManagement\RoleEligibilitySchedulesRequestBuilder;

/**
 * Request builder for /roleManagement/entitlementManagement
 */
class EntitlementManagementRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get entitlementManagement from roleManagement
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return RbacApplication
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): RbacApplication
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to RbacApplication
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
        
        // Single object
        return new RbacApplication($data);
    }
    /**
     * Update the navigation property entitlementManagement in roleManagement
     * @param RbacApplication $body Request body
     * @return RbacApplication
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(RbacApplication $body): RbacApplication
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to RbacApplication
     */
    private function deserializePatch(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new RbacApplication($data);
    }
    /**
     * Delete navigation property entitlementManagement for roleManagement
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null && $ifMatch !== '') {
            $queryParams['If-Match'] = $ifMatch;
        }
        $response = $this->client->delete($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeDelete($responseBody);
    }

    /**
     * Deserialize response to mixed
     */
    private function deserializeDelete(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return $data;
    }
    /**
     * Navigate to resourceNamespaces
     *
     * @return ResourceNamespacesRequestBuilder
     */
    public function resourceNamespaces(): ResourceNamespacesRequestBuilder
    {
        return new ResourceNamespacesRequestBuilder($this->client, $this->requestUrl . '/resourceNamespaces');
    }
    /**
     * Navigate to roleAssignments
     *
     * @return RoleAssignmentsRequestBuilder
     */
    public function roleAssignments(): RoleAssignmentsRequestBuilder
    {
        return new RoleAssignmentsRequestBuilder($this->client, $this->requestUrl . '/roleAssignments');
    }
    /**
     * Navigate to roleAssignmentScheduleInstances
     *
     * @return RoleAssignmentScheduleInstancesRequestBuilder
     */
    public function roleAssignmentScheduleInstances(): RoleAssignmentScheduleInstancesRequestBuilder
    {
        return new RoleAssignmentScheduleInstancesRequestBuilder($this->client, $this->requestUrl . '/roleAssignmentScheduleInstances');
    }
    /**
     * Navigate to roleAssignmentScheduleRequests
     *
     * @return RoleAssignmentScheduleRequestsRequestBuilder
     */
    public function roleAssignmentScheduleRequests(): RoleAssignmentScheduleRequestsRequestBuilder
    {
        return new RoleAssignmentScheduleRequestsRequestBuilder($this->client, $this->requestUrl . '/roleAssignmentScheduleRequests');
    }
    /**
     * Navigate to roleAssignmentSchedules
     *
     * @return RoleAssignmentSchedulesRequestBuilder
     */
    public function roleAssignmentSchedules(): RoleAssignmentSchedulesRequestBuilder
    {
        return new RoleAssignmentSchedulesRequestBuilder($this->client, $this->requestUrl . '/roleAssignmentSchedules');
    }
    /**
     * Navigate to roleDefinitions
     *
     * @return RoleDefinitionsRequestBuilder
     */
    public function roleDefinitions(): RoleDefinitionsRequestBuilder
    {
        return new RoleDefinitionsRequestBuilder($this->client, $this->requestUrl . '/roleDefinitions');
    }
    /**
     * Navigate to roleEligibilityScheduleInstances
     *
     * @return RoleEligibilityScheduleInstancesRequestBuilder
     */
    public function roleEligibilityScheduleInstances(): RoleEligibilityScheduleInstancesRequestBuilder
    {
        return new RoleEligibilityScheduleInstancesRequestBuilder($this->client, $this->requestUrl . '/roleEligibilityScheduleInstances');
    }
    /**
     * Navigate to roleEligibilityScheduleRequests
     *
     * @return RoleEligibilityScheduleRequestsRequestBuilder
     */
    public function roleEligibilityScheduleRequests(): RoleEligibilityScheduleRequestsRequestBuilder
    {
        return new RoleEligibilityScheduleRequestsRequestBuilder($this->client, $this->requestUrl . '/roleEligibilityScheduleRequests');
    }
    /**
     * Navigate to roleEligibilitySchedules
     *
     * @return RoleEligibilitySchedulesRequestBuilder
     */
    public function roleEligibilitySchedules(): RoleEligibilitySchedulesRequestBuilder
    {
        return new RoleEligibilitySchedulesRequestBuilder($this->client, $this->requestUrl . '/roleEligibilitySchedules');
    }
}
