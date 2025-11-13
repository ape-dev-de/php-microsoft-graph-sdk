<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\PrivilegedAccess\Group\AssignmentScheduleRequests;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\PrivilegedAccessGroupAssignmentScheduleRequest;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\PrivilegedAccess\Group\AssignmentScheduleRequests\ActivatedUsingRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\PrivilegedAccess\Group\AssignmentScheduleRequests\GroupRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\PrivilegedAccess\Group\AssignmentScheduleRequests\CancelRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\PrivilegedAccess\Group\AssignmentScheduleRequests\PrincipalRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\PrivilegedAccess\Group\AssignmentScheduleRequests\TargetScheduleRequestBuilder;

/**
 * Request builder for /identityGovernance/privilegedAccess/group/assignmentScheduleRequests/{privilegedAccessGroupAssignmentScheduleRequest-id}
 */
class PrivilegedAccessGroupAssignmentScheduleRequestRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get privilegedAccessGroupAssignmentScheduleRequest
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return PrivilegedAccessGroupAssignmentScheduleRequest|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): PrivilegedAccessGroupAssignmentScheduleRequest|null
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
     * Deserialize response to PrivilegedAccessGroupAssignmentScheduleRequest|null
     */
    private function deserializeGet(string $body): PrivilegedAccessGroupAssignmentScheduleRequest|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new PrivilegedAccessGroupAssignmentScheduleRequest($data);
    }
    /**
     * Update the navigation property assignmentScheduleRequests in identityGovernance
     * @param PrivilegedAccessGroupAssignmentScheduleRequest $body Request body
     * @return PrivilegedAccessGroupAssignmentScheduleRequest|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(PrivilegedAccessGroupAssignmentScheduleRequest $body): PrivilegedAccessGroupAssignmentScheduleRequest|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to PrivilegedAccessGroupAssignmentScheduleRequest|null
     */
    private function deserializePatch(string $body): PrivilegedAccessGroupAssignmentScheduleRequest|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new PrivilegedAccessGroupAssignmentScheduleRequest($data);
    }
    /**
     * Delete navigation property assignmentScheduleRequests for identityGovernance
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
    private function deserializeDelete(string $body): mixed    {
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
     * Navigate to activatedUsing
     *
     * @return ActivatedUsingRequestBuilder
     */
    public function activatedUsing(): ActivatedUsingRequestBuilder
    {
        return new ActivatedUsingRequestBuilder($this->client, $this->requestUrl . '/activatedUsing');
    }
    /**
     * Navigate to group
     *
     * @return GroupRequestBuilder
     */
    public function group(): GroupRequestBuilder
    {
        return new GroupRequestBuilder($this->client, $this->requestUrl . '/group');
    }
    /**
     * Navigate to cancel
     *
     * @return CancelRequestBuilder
     */
    public function cancel(): CancelRequestBuilder
    {
        return new CancelRequestBuilder($this->client, $this->requestUrl . '/cancel');
    }
    /**
     * Navigate to principal
     *
     * @return PrincipalRequestBuilder
     */
    public function principal(): PrincipalRequestBuilder
    {
        return new PrincipalRequestBuilder($this->client, $this->requestUrl . '/principal');
    }
    /**
     * Navigate to targetSchedule
     *
     * @return TargetScheduleRequestBuilder
     */
    public function targetSchedule(): TargetScheduleRequestBuilder
    {
        return new TargetScheduleRequestBuilder($this->client, $this->requestUrl . '/targetSchedule');
    }
}
