<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServicePrincipal resources
 *
 * Available select fields:
 * - accountEnabled
 * - addIns
 * - alternativeNames
 * - appDescription
 * - appDisplayName
 * - appId
 * - applicationTemplateId
 * - appOwnerOrganizationId
 * - appRoleAssignmentRequired
 * - appRoles
 * - customSecurityAttributes
 * - description
 * - disabledByMicrosoftStatus
 * - displayName
 * - homepage
 * - info
 * - keyCredentials
 * - loginUrl
 * - logoutUrl
 * - notes
 * - notificationEmailAddresses
 * - oauth2PermissionScopes
 * - passwordCredentials
 * - preferredSingleSignOnMode
 * - preferredTokenSigningKeyThumbprint
 * - replyUrls
 * - resourceSpecificApplicationPermissions
 * - samlSingleSignOnSettings
 * - servicePrincipalNames
 * - servicePrincipalType
 * - signInAudience
 * - tags
 * - tokenEncryptionKeyId
 * - verifiedPublisher
 * - appManagementPolicies
 * - appRoleAssignedTo
 * - appRoleAssignments
 * - claimsMappingPolicies
 * - createdObjects
 * - delegatedPermissionClassifications
 * - endpoints
 * - federatedIdentityCredentials
 * - homeRealmDiscoveryPolicies
 * - memberOf
 * - oauth2PermissionGrants
 * - ownedObjects
 * - owners
 * - remoteDesktopSecurityConfiguration
 * - synchronization
 * - tokenIssuancePolicies
 * - tokenLifetimePolicies
 * - transitiveMemberOf
 */
class ServicePrincipalQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ServicePrincipal
     */
    public const FIELD_ACCOUNT_ENABLED = 'accountEnabled';
    public const FIELD_ADD_INS = 'addIns';
    public const FIELD_ALTERNATIVE_NAMES = 'alternativeNames';
    public const FIELD_APP_DESCRIPTION = 'appDescription';
    public const FIELD_APP_DISPLAY_NAME = 'appDisplayName';
    public const FIELD_APP_ID = 'appId';
    public const FIELD_APPLICATION_TEMPLATE_ID = 'applicationTemplateId';
    public const FIELD_APP_OWNER_ORGANIZATION_ID = 'appOwnerOrganizationId';
    public const FIELD_APP_ROLE_ASSIGNMENT_REQUIRED = 'appRoleAssignmentRequired';
    public const FIELD_APP_ROLES = 'appRoles';
    public const FIELD_CUSTOM_SECURITY_ATTRIBUTES = 'customSecurityAttributes';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISABLED_BY_MICROSOFT_STATUS = 'disabledByMicrosoftStatus';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_HOMEPAGE = 'homepage';
    public const FIELD_INFO = 'info';
    public const FIELD_KEY_CREDENTIALS = 'keyCredentials';
    public const FIELD_LOGIN_URL = 'loginUrl';
    public const FIELD_LOGOUT_URL = 'logoutUrl';
    public const FIELD_NOTES = 'notes';
    public const FIELD_NOTIFICATION_EMAIL_ADDRESSES = 'notificationEmailAddresses';
    public const FIELD_OAUTH2PERMISSION_SCOPES = 'oauth2PermissionScopes';
    public const FIELD_PASSWORD_CREDENTIALS = 'passwordCredentials';
    public const FIELD_PREFERRED_SINGLE_SIGN_ON_MODE = 'preferredSingleSignOnMode';
    public const FIELD_PREFERRED_TOKEN_SIGNING_KEY_THUMBPRINT = 'preferredTokenSigningKeyThumbprint';
    public const FIELD_REPLY_URLS = 'replyUrls';
    public const FIELD_RESOURCE_SPECIFIC_APPLICATION_PERMISSIONS = 'resourceSpecificApplicationPermissions';
    public const FIELD_SAML_SINGLE_SIGN_ON_SETTINGS = 'samlSingleSignOnSettings';
    public const FIELD_SERVICE_PRINCIPAL_NAMES = 'servicePrincipalNames';
    public const FIELD_SERVICE_PRINCIPAL_TYPE = 'servicePrincipalType';
    public const FIELD_SIGN_IN_AUDIENCE = 'signInAudience';
    public const FIELD_TAGS = 'tags';
    public const FIELD_TOKEN_ENCRYPTION_KEY_ID = 'tokenEncryptionKeyId';
    public const FIELD_VERIFIED_PUBLISHER = 'verifiedPublisher';
    public const FIELD_APP_MANAGEMENT_POLICIES = 'appManagementPolicies';
    public const FIELD_APP_ROLE_ASSIGNED_TO = 'appRoleAssignedTo';
    public const FIELD_APP_ROLE_ASSIGNMENTS = 'appRoleAssignments';
    public const FIELD_CLAIMS_MAPPING_POLICIES = 'claimsMappingPolicies';
    public const FIELD_CREATED_OBJECTS = 'createdObjects';
    public const FIELD_DELEGATED_PERMISSION_CLASSIFICATIONS = 'delegatedPermissionClassifications';
    public const FIELD_ENDPOINTS = 'endpoints';
    public const FIELD_FEDERATED_IDENTITY_CREDENTIALS = 'federatedIdentityCredentials';
    public const FIELD_HOME_REALM_DISCOVERY_POLICIES = 'homeRealmDiscoveryPolicies';
    public const FIELD_MEMBER_OF = 'memberOf';
    public const FIELD_OAUTH2PERMISSION_GRANTS = 'oauth2PermissionGrants';
    public const FIELD_OWNED_OBJECTS = 'ownedObjects';
    public const FIELD_OWNERS = 'owners';
    public const FIELD_REMOTE_DESKTOP_SECURITY_CONFIGURATION = 'remoteDesktopSecurityConfiguration';
    public const FIELD_SYNCHRONIZATION = 'synchronization';
    public const FIELD_TOKEN_ISSUANCE_POLICIES = 'tokenIssuancePolicies';
    public const FIELD_TOKEN_LIFETIME_POLICIES = 'tokenLifetimePolicies';
    public const FIELD_TRANSITIVE_MEMBER_OF = 'transitiveMemberOf';

    /**
     * Select specific ServicePrincipal properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
