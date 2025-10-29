<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\Directory\RoleEligibilityScheduleRequests;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\UnifiedRoleEligibilityScheduleRequest;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\Directory\RoleEligibilityScheduleRequests\AppScopeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\Directory\RoleEligibilityScheduleRequests\DirectoryScopeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\Directory\RoleEligibilityScheduleRequests\CancelRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\Directory\RoleEligibilityScheduleRequests\PrincipalRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\Directory\RoleEligibilityScheduleRequests\RoleDefinitionRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\Directory\RoleEligibilityScheduleRequests\TargetScheduleRequestBuilder;

/**
 * Request builder for /roleManagement/directory/roleEligibilityScheduleRequests/{unifiedRoleEligibilityScheduleRequest-id}
 */
class UnifiedRoleEligibilityScheduleRequestRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get unifiedRoleEligibilityScheduleRequest
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return UnifiedRoleEligibilityScheduleRequest
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): UnifiedRoleEligibilityScheduleRequest
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
     * Deserialize response to UnifiedRoleEligibilityScheduleRequest
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
        return new UnifiedRoleEligibilityScheduleRequest($data);
    }
    /**
     * Update the navigation property roleEligibilityScheduleRequests in roleManagement
     * @param UnifiedRoleEligibilityScheduleRequest $body Request body
     * @return UnifiedRoleEligibilityScheduleRequest
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(UnifiedRoleEligibilityScheduleRequest $body): UnifiedRoleEligibilityScheduleRequest
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to UnifiedRoleEligibilityScheduleRequest
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
        return new UnifiedRoleEligibilityScheduleRequest($data);
    }
    /**
     * Delete navigation property roleEligibilityScheduleRequests for roleManagement
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
