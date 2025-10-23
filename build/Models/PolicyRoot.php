<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PolicyRoot
 */
class PolicyRoot
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The policy that controls the idle time out for web sessions for applications.
     * @var ActivityBasedTimeoutPolicy[]
     */
    public array $activityBasedTimeoutPolicies = [];

    /** 
     * The policy by which consent requests are created and managed for the entire tenant.
     * @var AdminConsentRequestPolicy|\stdClass|null
     */
    public mixed $adminConsentRequestPolicy = null;

    /** 
     * The policies that enforce app management restrictions for specific applications and service principals, overriding the defaultAppManagementPolicy.
     * @var AppManagementPolicy[]
     */
    public array $appManagementPolicies = [];

    /** 
     * The policy configuration of the self-service sign-up experience of external users.
     * @var AuthenticationFlowsPolicy|\stdClass|null
     */
    public mixed $authenticationFlowsPolicy = null;

    /** 
     * The authentication methods and the users that are allowed to use them to sign in and perform multifactor authentication (MFA) in Microsoft Entra ID.
     * @var AuthenticationMethodsPolicy|\stdClass|null
     */
    public mixed $authenticationMethodsPolicy = null;

    /** 
     * The authentication method combinations that are to be used in scenarios defined by Microsoft Entra Conditional Access.
     * @var AuthenticationStrengthPolicy[]
     */
    public array $authenticationStrengthPolicies = [];

    /** 
     * The policy that controls Microsoft Entra authorization settings.
     * @var AuthorizationPolicy|\stdClass|null
     */
    public mixed $authorizationPolicy = null;

    /** 
     * The claim-mapping policies for WS-Fed, SAML, OAuth 2.0, and OpenID Connect protocols, for tokens issued to a specific application.
     * @var ClaimsMappingPolicy[]
     */
    public array $claimsMappingPolicies = [];

    /** 
     * The custom rules that define an access scenario.
     * @var ConditionalAccessPolicy[]
     */
    public array $conditionalAccessPolicies = [];

    /** 
     * The custom rules that define an access scenario when interacting with external Microsoft Entra tenants.
     * @var CrossTenantAccessPolicy|\stdClass|null
     */
    public mixed $crossTenantAccessPolicy = null;

    /** 
     * The tenant-wide policy that enforces app management restrictions for all applications and service principals.
     * @var TenantAppManagementPolicy|\stdClass|null
     */
    public mixed $defaultAppManagementPolicy = null;

    /** 
     * 
     * @var DeviceRegistrationPolicy|\stdClass|null
     */
    public mixed $deviceRegistrationPolicy = null;

    /** 
     * The feature rollout policy associated with a directory object.
     * @var FeatureRolloutPolicy[]
     */
    public array $featureRolloutPolicies = [];

    /** 
     * The policy to control Microsoft Entra authentication behavior for federated users.
     * @var HomeRealmDiscoveryPolicy[]
     */
    public array $homeRealmDiscoveryPolicies = [];

    /** 
     * The policy that represents the security defaults that protect against common attacks.
     * @var IdentitySecurityDefaultsEnforcementPolicy|\stdClass|null
     */
    public mixed $identitySecurityDefaultsEnforcementPolicy = null;

    /** 
     * The policy that specifies the conditions under which consent can be granted.
     * @var PermissionGrantPolicy[]
     */
    public array $permissionGrantPolicies = [];

    /** 
     * Specifies the various policies associated with scopes and roles.
     * @var UnifiedRoleManagementPolicy[]
     */
    public array $roleManagementPolicies = [];

    /** 
     * The assignment of a role management policy to a role definition object.
     * @var UnifiedRoleManagementPolicyAssignment[]
     */
    public array $roleManagementPolicyAssignments = [];

    /** 
     * The policy that specifies the characteristics of SAML tokens issued by Microsoft Entra ID.
     * @var TokenIssuancePolicy[]
     */
    public array $tokenIssuancePolicies = [];

    /** 
     * The policy that controls the lifetime of a JWT access token, an ID token, or a SAML 1.1/2.0 token issued by Microsoft Entra ID.
     * @var TokenLifetimePolicy[]
     */
    public array $tokenLifetimePolicies = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['activityBasedTimeoutPolicies'])) {
            $this->activityBasedTimeoutPolicies = $data['activityBasedTimeoutPolicies'];
        }
        if (isset($data['adminConsentRequestPolicy'])) {
            $this->adminConsentRequestPolicy = is_array($data['adminConsentRequestPolicy']) ? new AdminConsentRequestPolicy($data['adminConsentRequestPolicy']) : $data['adminConsentRequestPolicy'];
        }
        if (isset($data['appManagementPolicies'])) {
            $this->appManagementPolicies = $data['appManagementPolicies'];
        }
        if (isset($data['authenticationFlowsPolicy'])) {
            $this->authenticationFlowsPolicy = is_array($data['authenticationFlowsPolicy']) ? new AuthenticationFlowsPolicy($data['authenticationFlowsPolicy']) : $data['authenticationFlowsPolicy'];
        }
        if (isset($data['authenticationMethodsPolicy'])) {
            $this->authenticationMethodsPolicy = is_array($data['authenticationMethodsPolicy']) ? new AuthenticationMethodsPolicy($data['authenticationMethodsPolicy']) : $data['authenticationMethodsPolicy'];
        }
        if (isset($data['authenticationStrengthPolicies'])) {
            $this->authenticationStrengthPolicies = $data['authenticationStrengthPolicies'];
        }
        if (isset($data['authorizationPolicy'])) {
            $this->authorizationPolicy = is_array($data['authorizationPolicy']) ? new AuthorizationPolicy($data['authorizationPolicy']) : $data['authorizationPolicy'];
        }
        if (isset($data['claimsMappingPolicies'])) {
            $this->claimsMappingPolicies = $data['claimsMappingPolicies'];
        }
        if (isset($data['conditionalAccessPolicies'])) {
            $this->conditionalAccessPolicies = $data['conditionalAccessPolicies'];
        }
        if (isset($data['crossTenantAccessPolicy'])) {
            $this->crossTenantAccessPolicy = is_array($data['crossTenantAccessPolicy']) ? new CrossTenantAccessPolicy($data['crossTenantAccessPolicy']) : $data['crossTenantAccessPolicy'];
        }
        if (isset($data['defaultAppManagementPolicy'])) {
            $this->defaultAppManagementPolicy = is_array($data['defaultAppManagementPolicy']) ? new TenantAppManagementPolicy($data['defaultAppManagementPolicy']) : $data['defaultAppManagementPolicy'];
        }
        if (isset($data['deviceRegistrationPolicy'])) {
            $this->deviceRegistrationPolicy = is_array($data['deviceRegistrationPolicy']) ? new DeviceRegistrationPolicy($data['deviceRegistrationPolicy']) : $data['deviceRegistrationPolicy'];
        }
        if (isset($data['featureRolloutPolicies'])) {
            $this->featureRolloutPolicies = $data['featureRolloutPolicies'];
        }
        if (isset($data['homeRealmDiscoveryPolicies'])) {
            $this->homeRealmDiscoveryPolicies = $data['homeRealmDiscoveryPolicies'];
        }
        if (isset($data['identitySecurityDefaultsEnforcementPolicy'])) {
            $this->identitySecurityDefaultsEnforcementPolicy = is_array($data['identitySecurityDefaultsEnforcementPolicy']) ? new IdentitySecurityDefaultsEnforcementPolicy($data['identitySecurityDefaultsEnforcementPolicy']) : $data['identitySecurityDefaultsEnforcementPolicy'];
        }
        if (isset($data['permissionGrantPolicies'])) {
            $this->permissionGrantPolicies = $data['permissionGrantPolicies'];
        }
        if (isset($data['roleManagementPolicies'])) {
            $this->roleManagementPolicies = $data['roleManagementPolicies'];
        }
        if (isset($data['roleManagementPolicyAssignments'])) {
            $this->roleManagementPolicyAssignments = $data['roleManagementPolicyAssignments'];
        }
        if (isset($data['tokenIssuancePolicies'])) {
            $this->tokenIssuancePolicies = $data['tokenIssuancePolicies'];
        }
        if (isset($data['tokenLifetimePolicies'])) {
            $this->tokenLifetimePolicies = $data['tokenLifetimePolicies'];
        }
    }
}
