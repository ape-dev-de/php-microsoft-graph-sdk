<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PolicyRoot resources
 *
 * Available select fields:
 * - activityBasedTimeoutPolicies
 * - adminConsentRequestPolicy
 * - appManagementPolicies
 * - authenticationFlowsPolicy
 * - authenticationMethodsPolicy
 * - authenticationStrengthPolicies
 * - authorizationPolicy
 * - claimsMappingPolicies
 * - conditionalAccessPolicies
 * - crossTenantAccessPolicy
 * - defaultAppManagementPolicy
 * - deviceRegistrationPolicy
 * - featureRolloutPolicies
 * - homeRealmDiscoveryPolicies
 * - identitySecurityDefaultsEnforcementPolicy
 * - permissionGrantPolicies
 * - roleManagementPolicies
 * - roleManagementPolicyAssignments
 * - tokenIssuancePolicies
 * - tokenLifetimePolicies
 */
class PolicyRootQueryOptions extends QueryOptions
{
    public const FIELD_ACTIVITY_BASED_TIMEOUT_POLICIES = 'activityBasedTimeoutPolicies';
    public const FIELD_ADMIN_CONSENT_REQUEST_POLICY = 'adminConsentRequestPolicy';
    public const FIELD_APP_MANAGEMENT_POLICIES = 'appManagementPolicies';
    public const FIELD_AUTHENTICATION_FLOWS_POLICY = 'authenticationFlowsPolicy';
    public const FIELD_AUTHENTICATION_METHODS_POLICY = 'authenticationMethodsPolicy';
    public const FIELD_AUTHENTICATION_STRENGTH_POLICIES = 'authenticationStrengthPolicies';
    public const FIELD_AUTHORIZATION_POLICY = 'authorizationPolicy';
    public const FIELD_CLAIMS_MAPPING_POLICIES = 'claimsMappingPolicies';
    public const FIELD_CONDITIONAL_ACCESS_POLICIES = 'conditionalAccessPolicies';
    public const FIELD_CROSS_TENANT_ACCESS_POLICY = 'crossTenantAccessPolicy';
    public const FIELD_DEFAULT_APP_MANAGEMENT_POLICY = 'defaultAppManagementPolicy';
    public const FIELD_DEVICE_REGISTRATION_POLICY = 'deviceRegistrationPolicy';
    public const FIELD_FEATURE_ROLLOUT_POLICIES = 'featureRolloutPolicies';
    public const FIELD_HOME_REALM_DISCOVERY_POLICIES = 'homeRealmDiscoveryPolicies';
    public const FIELD_IDENTITY_SECURITY_DEFAULTS_ENFORCEMENT_POLICY = 'identitySecurityDefaultsEnforcementPolicy';
    public const FIELD_PERMISSION_GRANT_POLICIES = 'permissionGrantPolicies';
    public const FIELD_ROLE_MANAGEMENT_POLICIES = 'roleManagementPolicies';
    public const FIELD_ROLE_MANAGEMENT_POLICY_ASSIGNMENTS = 'roleManagementPolicyAssignments';
    public const FIELD_TOKEN_ISSUANCE_POLICIES = 'tokenIssuancePolicies';
    public const FIELD_TOKEN_LIFETIME_POLICIES = 'tokenLifetimePolicies';

    /**
     * Select specific PolicyRoot properties
     * 
     * @param array<string> $select Use PolicyRootQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
