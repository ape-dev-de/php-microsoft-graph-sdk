<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PolicyRoot
 */
class PolicyRoot
{
    /**
     * The policy that controls the idle time out for web sessions for applications.
     */
    private array $activityBasedTimeoutPolicies = [];

    /**
     * The policy by which consent requests are created and managed for the entire tenant.
     */
    private ?string $adminConsentRequestPolicy;

    /**
     * The policies that enforce app management restrictions for specific applications and service principals, overriding the defaultAppManagementPolicy.
     */
    private array $appManagementPolicies = [];

    /**
     * The policy configuration of the self-service sign-up experience of external users.
     */
    private ?string $authenticationFlowsPolicy;

    /**
     * The authentication methods and the users that are allowed to use them to sign in and perform multifactor authentication (MFA) in Microsoft Entra ID.
     */
    private ?string $authenticationMethodsPolicy;

    /**
     * The authentication method combinations that are to be used in scenarios defined by Microsoft Entra Conditional Access.
     */
    private array $authenticationStrengthPolicies = [];

    /**
     * The policy that controls Microsoft Entra authorization settings.
     */
    private ?string $authorizationPolicy;

    /**
     * The claim-mapping policies for WS-Fed, SAML, OAuth 2.0, and OpenID Connect protocols, for tokens issued to a specific application.
     */
    private array $claimsMappingPolicies = [];

    /**
     * The custom rules that define an access scenario.
     */
    private array $conditionalAccessPolicies = [];

    /**
     * The custom rules that define an access scenario when interacting with external Microsoft Entra tenants.
     */
    private ?string $crossTenantAccessPolicy;

    /**
     * The tenant-wide policy that enforces app management restrictions for all applications and service principals.
     */
    private ?string $defaultAppManagementPolicy;

    /**
     */
    private ?string $deviceRegistrationPolicy;

    /**
     * The feature rollout policy associated with a directory object.
     */
    private array $featureRolloutPolicies = [];

    /**
     * The policy to control Microsoft Entra authentication behavior for federated users.
     */
    private array $homeRealmDiscoveryPolicies = [];

    /**
     * The policy that represents the security defaults that protect against common attacks.
     */
    private ?string $identitySecurityDefaultsEnforcementPolicy;

    /**
     * The policy that specifies the conditions under which consent can be granted.
     */
    private array $permissionGrantPolicies = [];

    /**
     * Specifies the various policies associated with scopes and roles.
     */
    private array $roleManagementPolicies = [];

    /**
     * The assignment of a role management policy to a role definition object.
     */
    private array $roleManagementPolicyAssignments = [];

    /**
     * The policy that specifies the characteristics of SAML tokens issued by Microsoft Entra ID.
     */
    private array $tokenIssuancePolicies = [];

    /**
     * The policy that controls the lifetime of a JWT access token, an ID token, or a SAML 1.1/2.0 token issued by Microsoft Entra ID.
     */
    private ?string $tokenLifetimePolicies;

    public function getActivityBasedTimeoutPolicies(): array
    {
        return $this->activityBasedTimeoutPolicies;
    }

    public function setActivityBasedTimeoutPolicies(array $activityBasedTimeoutPolicies): self
    {
        $this->activityBasedTimeoutPolicies = $activityBasedTimeoutPolicies;
        return $this;
    }

    public function getAdminConsentRequestPolicy(): ?string
    {
        return $this->adminConsentRequestPolicy;
    }

    public function setAdminConsentRequestPolicy(?string $adminConsentRequestPolicy): self
    {
        $this->adminConsentRequestPolicy = $adminConsentRequestPolicy;
        return $this;
    }

    public function getAppManagementPolicies(): array
    {
        return $this->appManagementPolicies;
    }

    public function setAppManagementPolicies(array $appManagementPolicies): self
    {
        $this->appManagementPolicies = $appManagementPolicies;
        return $this;
    }

    public function getAuthenticationFlowsPolicy(): ?string
    {
        return $this->authenticationFlowsPolicy;
    }

    public function setAuthenticationFlowsPolicy(?string $authenticationFlowsPolicy): self
    {
        $this->authenticationFlowsPolicy = $authenticationFlowsPolicy;
        return $this;
    }

    public function getAuthenticationMethodsPolicy(): ?string
    {
        return $this->authenticationMethodsPolicy;
    }

    public function setAuthenticationMethodsPolicy(?string $authenticationMethodsPolicy): self
    {
        $this->authenticationMethodsPolicy = $authenticationMethodsPolicy;
        return $this;
    }

    public function getAuthenticationStrengthPolicies(): array
    {
        return $this->authenticationStrengthPolicies;
    }

    public function setAuthenticationStrengthPolicies(array $authenticationStrengthPolicies): self
    {
        $this->authenticationStrengthPolicies = $authenticationStrengthPolicies;
        return $this;
    }

    public function getAuthorizationPolicy(): ?string
    {
        return $this->authorizationPolicy;
    }

    public function setAuthorizationPolicy(?string $authorizationPolicy): self
    {
        $this->authorizationPolicy = $authorizationPolicy;
        return $this;
    }

    public function getClaimsMappingPolicies(): array
    {
        return $this->claimsMappingPolicies;
    }

    public function setClaimsMappingPolicies(array $claimsMappingPolicies): self
    {
        $this->claimsMappingPolicies = $claimsMappingPolicies;
        return $this;
    }

    public function getConditionalAccessPolicies(): array
    {
        return $this->conditionalAccessPolicies;
    }

    public function setConditionalAccessPolicies(array $conditionalAccessPolicies): self
    {
        $this->conditionalAccessPolicies = $conditionalAccessPolicies;
        return $this;
    }

    public function getCrossTenantAccessPolicy(): ?string
    {
        return $this->crossTenantAccessPolicy;
    }

    public function setCrossTenantAccessPolicy(?string $crossTenantAccessPolicy): self
    {
        $this->crossTenantAccessPolicy = $crossTenantAccessPolicy;
        return $this;
    }

    public function getDefaultAppManagementPolicy(): ?string
    {
        return $this->defaultAppManagementPolicy;
    }

    public function setDefaultAppManagementPolicy(?string $defaultAppManagementPolicy): self
    {
        $this->defaultAppManagementPolicy = $defaultAppManagementPolicy;
        return $this;
    }

    public function getDeviceRegistrationPolicy(): ?string
    {
        return $this->deviceRegistrationPolicy;
    }

    public function setDeviceRegistrationPolicy(?string $deviceRegistrationPolicy): self
    {
        $this->deviceRegistrationPolicy = $deviceRegistrationPolicy;
        return $this;
    }

    public function getFeatureRolloutPolicies(): array
    {
        return $this->featureRolloutPolicies;
    }

    public function setFeatureRolloutPolicies(array $featureRolloutPolicies): self
    {
        $this->featureRolloutPolicies = $featureRolloutPolicies;
        return $this;
    }

    public function getHomeRealmDiscoveryPolicies(): array
    {
        return $this->homeRealmDiscoveryPolicies;
    }

    public function setHomeRealmDiscoveryPolicies(array $homeRealmDiscoveryPolicies): self
    {
        $this->homeRealmDiscoveryPolicies = $homeRealmDiscoveryPolicies;
        return $this;
    }

    public function getIdentitySecurityDefaultsEnforcementPolicy(): ?string
    {
        return $this->identitySecurityDefaultsEnforcementPolicy;
    }

    public function setIdentitySecurityDefaultsEnforcementPolicy(?string $identitySecurityDefaultsEnforcementPolicy): self
    {
        $this->identitySecurityDefaultsEnforcementPolicy = $identitySecurityDefaultsEnforcementPolicy;
        return $this;
    }

    public function getPermissionGrantPolicies(): array
    {
        return $this->permissionGrantPolicies;
    }

    public function setPermissionGrantPolicies(array $permissionGrantPolicies): self
    {
        $this->permissionGrantPolicies = $permissionGrantPolicies;
        return $this;
    }

    public function getRoleManagementPolicies(): array
    {
        return $this->roleManagementPolicies;
    }

    public function setRoleManagementPolicies(array $roleManagementPolicies): self
    {
        $this->roleManagementPolicies = $roleManagementPolicies;
        return $this;
    }

    public function getRoleManagementPolicyAssignments(): array
    {
        return $this->roleManagementPolicyAssignments;
    }

    public function setRoleManagementPolicyAssignments(array $roleManagementPolicyAssignments): self
    {
        $this->roleManagementPolicyAssignments = $roleManagementPolicyAssignments;
        return $this;
    }

    public function getTokenIssuancePolicies(): array
    {
        return $this->tokenIssuancePolicies;
    }

    public function setTokenIssuancePolicies(array $tokenIssuancePolicies): self
    {
        $this->tokenIssuancePolicies = $tokenIssuancePolicies;
        return $this;
    }

    public function getTokenLifetimePolicies(): ?string
    {
        return $this->tokenLifetimePolicies;
    }

    public function setTokenLifetimePolicies(?string $tokenLifetimePolicies): self
    {
        $this->tokenLifetimePolicies = $tokenLifetimePolicies;
        return $this;
    }

}
