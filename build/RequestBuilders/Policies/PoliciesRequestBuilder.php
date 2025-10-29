<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\PolicyRoot;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\ActivityBasedTimeoutPoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\AdminConsentRequestPolicyRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\AppManagementPoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\AuthenticationFlowsPolicyRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\AuthenticationMethodsPolicyRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\AuthenticationStrengthPoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\AuthorizationPolicyRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\ClaimsMappingPoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\ConditionalAccessPoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\CrossTenantAccessPolicyRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\DefaultAppManagementPolicyRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\DeviceRegistrationPolicyRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\FeatureRolloutPoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\HomeRealmDiscoveryPoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\IdentitySecurityDefaultsEnforcementPolicyRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\PermissionGrantPoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\RoleManagementPoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\RoleManagementPolicyAssignmentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\TokenIssuancePoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\TokenLifetimePoliciesRequestBuilder;

/**
 * Request builder for /policies
 */
class PoliciesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get policies
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return PolicyRoot
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): PolicyRoot
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
     * Deserialize response to PolicyRoot
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
        return new PolicyRoot($data);
    }
    /**
     * Update policies
     * @param PolicyRoot $body Request body
     * @return PolicyRoot
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(PolicyRoot $body): PolicyRoot
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to PolicyRoot
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
        return new PolicyRoot($data);
    }
    /**
     * Navigate to activityBasedTimeoutPolicies
     *
     * @return ActivityBasedTimeoutPoliciesRequestBuilder
     */
    public function activityBasedTimeoutPolicies(): ActivityBasedTimeoutPoliciesRequestBuilder
    {
        return new ActivityBasedTimeoutPoliciesRequestBuilder($this->client, $this->requestUrl . '/activityBasedTimeoutPolicies');
    }
    /**
     * Navigate to adminConsentRequestPolicy
     *
     * @return AdminConsentRequestPolicyRequestBuilder
     */
    public function adminConsentRequestPolicy(): AdminConsentRequestPolicyRequestBuilder
    {
        return new AdminConsentRequestPolicyRequestBuilder($this->client, $this->requestUrl . '/adminConsentRequestPolicy');
    }
    /**
     * Navigate to appManagementPolicies
     *
     * @return AppManagementPoliciesRequestBuilder
     */
    public function appManagementPolicies(): AppManagementPoliciesRequestBuilder
    {
        return new AppManagementPoliciesRequestBuilder($this->client, $this->requestUrl . '/appManagementPolicies');
    }
    /**
     * Navigate to authenticationFlowsPolicy
     *
     * @return AuthenticationFlowsPolicyRequestBuilder
     */
    public function authenticationFlowsPolicy(): AuthenticationFlowsPolicyRequestBuilder
    {
        return new AuthenticationFlowsPolicyRequestBuilder($this->client, $this->requestUrl . '/authenticationFlowsPolicy');
    }
    /**
     * Navigate to authenticationMethodsPolicy
     *
     * @return AuthenticationMethodsPolicyRequestBuilder
     */
    public function authenticationMethodsPolicy(): AuthenticationMethodsPolicyRequestBuilder
    {
        return new AuthenticationMethodsPolicyRequestBuilder($this->client, $this->requestUrl . '/authenticationMethodsPolicy');
    }
    /**
     * Navigate to authenticationStrengthPolicies
     *
     * @return AuthenticationStrengthPoliciesRequestBuilder
     */
    public function authenticationStrengthPolicies(): AuthenticationStrengthPoliciesRequestBuilder
    {
        return new AuthenticationStrengthPoliciesRequestBuilder($this->client, $this->requestUrl . '/authenticationStrengthPolicies');
    }
    /**
     * Navigate to authorizationPolicy
     *
     * @return AuthorizationPolicyRequestBuilder
     */
    public function authorizationPolicy(): AuthorizationPolicyRequestBuilder
    {
        return new AuthorizationPolicyRequestBuilder($this->client, $this->requestUrl . '/authorizationPolicy');
    }
    /**
     * Navigate to claimsMappingPolicies
     *
     * @return ClaimsMappingPoliciesRequestBuilder
     */
    public function claimsMappingPolicies(): ClaimsMappingPoliciesRequestBuilder
    {
        return new ClaimsMappingPoliciesRequestBuilder($this->client, $this->requestUrl . '/claimsMappingPolicies');
    }
    /**
     * Navigate to conditionalAccessPolicies
     *
     * @return ConditionalAccessPoliciesRequestBuilder
     */
    public function conditionalAccessPolicies(): ConditionalAccessPoliciesRequestBuilder
    {
        return new ConditionalAccessPoliciesRequestBuilder($this->client, $this->requestUrl . '/conditionalAccessPolicies');
    }
    /**
     * Navigate to crossTenantAccessPolicy
     *
     * @return CrossTenantAccessPolicyRequestBuilder
     */
    public function crossTenantAccessPolicy(): CrossTenantAccessPolicyRequestBuilder
    {
        return new CrossTenantAccessPolicyRequestBuilder($this->client, $this->requestUrl . '/crossTenantAccessPolicy');
    }
    /**
     * Navigate to defaultAppManagementPolicy
     *
     * @return DefaultAppManagementPolicyRequestBuilder
     */
    public function defaultAppManagementPolicy(): DefaultAppManagementPolicyRequestBuilder
    {
        return new DefaultAppManagementPolicyRequestBuilder($this->client, $this->requestUrl . '/defaultAppManagementPolicy');
    }
    /**
     * Navigate to deviceRegistrationPolicy
     *
     * @return DeviceRegistrationPolicyRequestBuilder
     */
    public function deviceRegistrationPolicy(): DeviceRegistrationPolicyRequestBuilder
    {
        return new DeviceRegistrationPolicyRequestBuilder($this->client, $this->requestUrl . '/deviceRegistrationPolicy');
    }
    /**
     * Navigate to featureRolloutPolicies
     *
     * @return FeatureRolloutPoliciesRequestBuilder
     */
    public function featureRolloutPolicies(): FeatureRolloutPoliciesRequestBuilder
    {
        return new FeatureRolloutPoliciesRequestBuilder($this->client, $this->requestUrl . '/featureRolloutPolicies');
    }
    /**
     * Navigate to homeRealmDiscoveryPolicies
     *
     * @return HomeRealmDiscoveryPoliciesRequestBuilder
     */
    public function homeRealmDiscoveryPolicies(): HomeRealmDiscoveryPoliciesRequestBuilder
    {
        return new HomeRealmDiscoveryPoliciesRequestBuilder($this->client, $this->requestUrl . '/homeRealmDiscoveryPolicies');
    }
    /**
     * Navigate to identitySecurityDefaultsEnforcementPolicy
     *
     * @return IdentitySecurityDefaultsEnforcementPolicyRequestBuilder
     */
    public function identitySecurityDefaultsEnforcementPolicy(): IdentitySecurityDefaultsEnforcementPolicyRequestBuilder
    {
        return new IdentitySecurityDefaultsEnforcementPolicyRequestBuilder($this->client, $this->requestUrl . '/identitySecurityDefaultsEnforcementPolicy');
    }
    /**
     * Navigate to permissionGrantPolicies
     *
     * @return PermissionGrantPoliciesRequestBuilder
     */
    public function permissionGrantPolicies(): PermissionGrantPoliciesRequestBuilder
    {
        return new PermissionGrantPoliciesRequestBuilder($this->client, $this->requestUrl . '/permissionGrantPolicies');
    }
    /**
     * Navigate to roleManagementPolicies
     *
     * @return RoleManagementPoliciesRequestBuilder
     */
    public function roleManagementPolicies(): RoleManagementPoliciesRequestBuilder
    {
        return new RoleManagementPoliciesRequestBuilder($this->client, $this->requestUrl . '/roleManagementPolicies');
    }
    /**
     * Navigate to roleManagementPolicyAssignments
     *
     * @return RoleManagementPolicyAssignmentsRequestBuilder
     */
    public function roleManagementPolicyAssignments(): RoleManagementPolicyAssignmentsRequestBuilder
    {
        return new RoleManagementPolicyAssignmentsRequestBuilder($this->client, $this->requestUrl . '/roleManagementPolicyAssignments');
    }
    /**
     * Navigate to tokenIssuancePolicies
     *
     * @return TokenIssuancePoliciesRequestBuilder
     */
    public function tokenIssuancePolicies(): TokenIssuancePoliciesRequestBuilder
    {
        return new TokenIssuancePoliciesRequestBuilder($this->client, $this->requestUrl . '/tokenIssuancePolicies');
    }
    /**
     * Navigate to tokenLifetimePolicies
     *
     * @return TokenLifetimePoliciesRequestBuilder
     */
    public function tokenLifetimePolicies(): TokenLifetimePoliciesRequestBuilder
    {
        return new TokenLifetimePoliciesRequestBuilder($this->client, $this->requestUrl . '/tokenLifetimePolicies');
    }
}
