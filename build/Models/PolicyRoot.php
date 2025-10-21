<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PolicyRoot
 */
class PolicyRoot
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The policy that controls the idle time out for web sessions for applications. */
        public array $activityBasedTimeoutPolicies = [],
        /** The policy by which consent requests are created and managed for the entire tenant. */
        public ?string $adminConsentRequestPolicy = null,
        /** The policies that enforce app management restrictions for specific applications and service principals, overriding the defaultAppManagementPolicy. */
        public array $appManagementPolicies = [],
        /** The policy configuration of the self-service sign-up experience of external users. */
        public ?string $authenticationFlowsPolicy = null,
        /** The authentication methods and the users that are allowed to use them to sign in and perform multifactor authentication (MFA) in Microsoft Entra ID. */
        public ?string $authenticationMethodsPolicy = null,
        /** The authentication method combinations that are to be used in scenarios defined by Microsoft Entra Conditional Access. */
        public array $authenticationStrengthPolicies = [],
        /** The policy that controls Microsoft Entra authorization settings. */
        public ?string $authorizationPolicy = null,
        /** The claim-mapping policies for WS-Fed, SAML, OAuth 2.0, and OpenID Connect protocols, for tokens issued to a specific application. */
        public array $claimsMappingPolicies = [],
        /** The custom rules that define an access scenario. */
        public array $conditionalAccessPolicies = [],
        /** The custom rules that define an access scenario when interacting with external Microsoft Entra tenants. */
        public ?string $crossTenantAccessPolicy = null,
        /** The tenant-wide policy that enforces app management restrictions for all applications and service principals. */
        public ?string $defaultAppManagementPolicy = null,
        /**  */
        public ?string $deviceRegistrationPolicy = null,
        /** The feature rollout policy associated with a directory object. */
        public array $featureRolloutPolicies = [],
        /** The policy to control Microsoft Entra authentication behavior for federated users. */
        public array $homeRealmDiscoveryPolicies = [],
        /** The policy that represents the security defaults that protect against common attacks. */
        public ?string $identitySecurityDefaultsEnforcementPolicy = null,
        /** The policy that specifies the conditions under which consent can be granted. */
        public array $permissionGrantPolicies = [],
        /** Specifies the various policies associated with scopes and roles. */
        public array $roleManagementPolicies = [],
        /** The assignment of a role management policy to a role definition object. */
        public array $roleManagementPolicyAssignments = [],
        /** The policy that specifies the characteristics of SAML tokens issued by Microsoft Entra ID. */
        public array $tokenIssuancePolicies = [],
        /** The policy that controls the lifetime of a JWT access token, an ID token, or a SAML 1.1/2.0 token issued by Microsoft Entra ID. */
        public array $tokenLifetimePolicies = []
    ) {}
}
