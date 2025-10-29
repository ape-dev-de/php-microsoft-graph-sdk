<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\Directory\RoleAssignmentScheduleRequests;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\UnifiedRoleAssignmentScheduleRequest;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\Directory\RoleAssignmentScheduleRequests\ActivatedUsingRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\Directory\RoleAssignmentScheduleRequests\AppScopeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\Directory\RoleAssignmentScheduleRequests\DirectoryScopeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\Directory\RoleAssignmentScheduleRequests\CancelRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\Directory\RoleAssignmentScheduleRequests\PrincipalRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\Directory\RoleAssignmentScheduleRequests\RoleDefinitionRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\Directory\RoleAssignmentScheduleRequests\TargetScheduleRequestBuilder;

/**
 * Request builder for /roleManagement/directory/roleAssignmentScheduleRequests/{unifiedRoleAssignmentScheduleRequest-id}
 */
class UnifiedRoleAssignmentScheduleRequestRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get unifiedRoleAssignmentScheduleRequest
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return UnifiedRoleAssignmentScheduleRequest
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): UnifiedRoleAssignmentScheduleRequest
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
     * Deserialize response to UnifiedRoleAssignmentScheduleRequest
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
        return new UnifiedRoleAssignmentScheduleRequest($data);
    }
    /**
     * Update the navigation property roleAssignmentScheduleRequests in roleManagement
     * @param UnifiedRoleAssignmentScheduleRequest $body Request body
     * @return UnifiedRoleAssignmentScheduleRequest
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(UnifiedRoleAssignmentScheduleRequest $body): UnifiedRoleAssignmentScheduleRequest
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to UnifiedRoleAssignmentScheduleRequest
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
        return new UnifiedRoleAssignmentScheduleRequest($data);
    }
    /**
     * Delete navigation property roleAssignmentScheduleRequests for roleManagement
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
     * Navigate to activatedUsing
     *
     * @return ActivatedUsingRequestBuilder
     */
    public function activatedUsing(): ActivatedUsingRequestBuilder
    {
        return new ActivatedUsingRequestBuilder($this->client, $this->requestUrl . '/activatedUsing');
    }
    /**
     * Navigate to appScope
     *
     * @return AppScopeRequestBuilder
     */
    public function appScope(): AppScopeRequestBuilder
    {
        return new AppScopeRequestBuilder($this->client, $this->requestUrl . '/appScope');
    }
    /**
     * Navigate to directoryScope
     *
     * @return DirectoryScopeRequestBuilder
     */
    public function directoryScope(): DirectoryScopeRequestBuilder
    {
        return new DirectoryScopeRequestBuilder($this->client, $this->requestUrl . '/directoryScope');
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
     * Navigate to roleDefinition
     *
     * @return RoleDefinitionRequestBuilder
     */
    public function roleDefinition(): RoleDefinitionRequestBuilder
    {
        return new RoleDefinitionRequestBuilder($this->client, $this->requestUrl . '/roleDefinition');
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
