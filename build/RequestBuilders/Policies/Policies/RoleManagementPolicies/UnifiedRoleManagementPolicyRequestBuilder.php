<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\Policies\RoleManagementPolicies;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\UnifiedRoleManagementPolicy;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\Policies\RoleManagementPolicies\EffectiveRulesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\Policies\RoleManagementPolicies\RulesRequestBuilder;

/**
 * Request builder for /policies/roleManagementPolicies/{unifiedRoleManagementPolicy-id}
 */
class UnifiedRoleManagementPolicyRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get unifiedRoleManagementPolicy
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return UnifiedRoleManagementPolicy
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): UnifiedRoleManagementPolicy
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
     * Deserialize response to UnifiedRoleManagementPolicy
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
        return new UnifiedRoleManagementPolicy($data);
    }
    /**
     * Update the navigation property roleManagementPolicies in policies
     * @param UnifiedRoleManagementPolicy $body Request body
     * @return UnifiedRoleManagementPolicy
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(UnifiedRoleManagementPolicy $body): UnifiedRoleManagementPolicy
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to UnifiedRoleManagementPolicy
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
        return new UnifiedRoleManagementPolicy($data);
    }
    /**
     * Delete navigation property roleManagementPolicies for policies
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
     * Navigate to effectiveRules
     *
     * @return EffectiveRulesRequestBuilder
     */
    public function effectiveRules(): EffectiveRulesRequestBuilder
    {
        return new EffectiveRulesRequestBuilder($this->client, $this->requestUrl . '/effectiveRules');
    }
    /**
     * Navigate to rules
     *
     * @return RulesRequestBuilder
     */
    public function rules(): RulesRequestBuilder
    {
        return new RulesRequestBuilder($this->client, $this->requestUrl . '/rules');
    }
}
