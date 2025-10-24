<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\PrivilegedAccess;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\PrivilegedAccessGroup;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\PrivilegedAccess\Group\AssignmentApprovalsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\PrivilegedAccess\Group\AssignmentScheduleInstancesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\PrivilegedAccess\Group\AssignmentScheduleRequestsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\PrivilegedAccess\Group\AssignmentSchedulesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\PrivilegedAccess\Group\EligibilityScheduleInstancesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\PrivilegedAccess\Group\EligibilityScheduleRequestsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\PrivilegedAccess\Group\EligibilitySchedulesRequestBuilder;

/**
 * Request builder for /identityGovernance/privilegedAccess/group
 */
class GroupRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get group from identityGovernance
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return PrivilegedAccessGroup
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): PrivilegedAccessGroup
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
     * Deserialize response to PrivilegedAccessGroup
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
        return new PrivilegedAccessGroup($data);
    }
    /**
     * Update the navigation property group in identityGovernance
     * @param PrivilegedAccessGroup $body Request body
     * @return PrivilegedAccessGroup
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(PrivilegedAccessGroup $body): PrivilegedAccessGroup
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to PrivilegedAccessGroup
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
        return new PrivilegedAccessGroup($data);
    }
    /**
     * Delete navigation property group for identityGovernance
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
     * Navigate to assignmentApprovals
     *
     * @return AssignmentApprovalsRequestBuilder
     */
    public function assignmentApprovals(): AssignmentApprovalsRequestBuilder
    {
        return new AssignmentApprovalsRequestBuilder($this->client, $this->requestUrl . '/assignmentApprovals');
    }
    /**
     * Navigate to assignmentScheduleInstances
     *
     * @return AssignmentScheduleInstancesRequestBuilder
     */
    public function assignmentScheduleInstances(): AssignmentScheduleInstancesRequestBuilder
    {
        return new AssignmentScheduleInstancesRequestBuilder($this->client, $this->requestUrl . '/assignmentScheduleInstances');
    }
    /**
     * Navigate to assignmentScheduleRequests
     *
     * @return AssignmentScheduleRequestsRequestBuilder
     */
    public function assignmentScheduleRequests(): AssignmentScheduleRequestsRequestBuilder
    {
        return new AssignmentScheduleRequestsRequestBuilder($this->client, $this->requestUrl . '/assignmentScheduleRequests');
    }
    /**
     * Navigate to assignmentSchedules
     *
     * @return AssignmentSchedulesRequestBuilder
     */
    public function assignmentSchedules(): AssignmentSchedulesRequestBuilder
    {
        return new AssignmentSchedulesRequestBuilder($this->client, $this->requestUrl . '/assignmentSchedules');
    }
    /**
     * Navigate to eligibilityScheduleInstances
     *
     * @return EligibilityScheduleInstancesRequestBuilder
     */
    public function eligibilityScheduleInstances(): EligibilityScheduleInstancesRequestBuilder
    {
        return new EligibilityScheduleInstancesRequestBuilder($this->client, $this->requestUrl . '/eligibilityScheduleInstances');
    }
    /**
     * Navigate to eligibilityScheduleRequests
     *
     * @return EligibilityScheduleRequestsRequestBuilder
     */
    public function eligibilityScheduleRequests(): EligibilityScheduleRequestsRequestBuilder
    {
        return new EligibilityScheduleRequestsRequestBuilder($this->client, $this->requestUrl . '/eligibilityScheduleRequests');
    }
    /**
     * Navigate to eligibilitySchedules
     *
     * @return EligibilitySchedulesRequestBuilder
     */
    public function eligibilitySchedules(): EligibilitySchedulesRequestBuilder
    {
        return new EligibilitySchedulesRequestBuilder($this->client, $this->requestUrl . '/eligibilitySchedules');
    }
}
