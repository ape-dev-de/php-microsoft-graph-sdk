<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\Directory\RoleEligibilitySchedules;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\UnifiedRoleEligibilitySchedule;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\Directory\RoleEligibilitySchedules\AppScopeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\Directory\RoleEligibilitySchedules\DirectoryScopeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\Directory\RoleEligibilitySchedules\PrincipalRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\Directory\RoleEligibilitySchedules\RoleDefinitionRequestBuilder;

/**
 * Request builder for /roleManagement/directory/roleEligibilitySchedules/{unifiedRoleEligibilitySchedule-id}
 */
class UnifiedRoleEligibilityScheduleRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get unifiedRoleEligibilitySchedule
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return UnifiedRoleEligibilitySchedule|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): UnifiedRoleEligibilitySchedule|null
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
     * Deserialize response to UnifiedRoleEligibilitySchedule|null
     */
    private function deserializeGet(string $body): UnifiedRoleEligibilitySchedule|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new UnifiedRoleEligibilitySchedule($data);
    }
    /**
     * Update the navigation property roleEligibilitySchedules in roleManagement
     * @param UnifiedRoleEligibilitySchedule $body Request body
     * @return UnifiedRoleEligibilitySchedule|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(UnifiedRoleEligibilitySchedule $body): UnifiedRoleEligibilitySchedule|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to UnifiedRoleEligibilitySchedule|null
     */
    private function deserializePatch(string $body): UnifiedRoleEligibilitySchedule|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new UnifiedRoleEligibilitySchedule($data);
    }
    /**
     * Delete navigation property roleEligibilitySchedules for roleManagement
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
}
