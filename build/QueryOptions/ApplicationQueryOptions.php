<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Application resources
 *
 * Available select fields:
 * - addIns
 * - api
 * - appId
 * - applicationTemplateId
 * - appRoles
 * - authenticationBehaviors
 * - certification
 * - createdDateTime
 * - defaultRedirectUri
 * - description
 * - disabledByMicrosoftStatus
 * - displayName
 * - groupMembershipClaims
 * - identifierUris
 * - info
 * - isDeviceOnlyAuthSupported
 * - isFallbackPublicClient
 * - keyCredentials
 * - logo
 * - nativeAuthenticationApisEnabled
 * - notes
 * - oauth2RequirePostResponse
 * - optionalClaims
 * - parentalControlSettings
 * - passwordCredentials
 * - publicClient
 * - publisherDomain
 * - requestSignatureVerification
 * - requiredResourceAccess
 * - samlMetadataUrl
 * - serviceManagementReference
 * - servicePrincipalLockConfiguration
 * - signInAudience
 * - spa
 * - tags
 * - tokenEncryptionKeyId
 * - uniqueName
 * - verifiedPublisher
 * - web
 * - appManagementPolicies
 * - createdOnBehalfOf
 * - extensionProperties
 * - federatedIdentityCredentials
 * - homeRealmDiscoveryPolicies
 * - owners
 * - synchronization
 * - tokenIssuancePolicies
 * - tokenLifetimePolicies
 */
class ApplicationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Application
     */
    public const FIELD_ADD_INS = 'addIns';
    public const FIELD_API = 'api';
    public const FIELD_APP_ID = 'appId';
    public const FIELD_APPLICATION_TEMPLATE_ID = 'applicationTemplateId';
    public const FIELD_APP_ROLES = 'appRoles';
    public const FIELD_AUTHENTICATION_BEHAVIORS = 'authenticationBehaviors';
    public const FIELD_CERTIFICATION = 'certification';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DEFAULT_REDIRECT_URI = 'defaultRedirectUri';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISABLED_BY_MICROSOFT_STATUS = 'disabledByMicrosoftStatus';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_GROUP_MEMBERSHIP_CLAIMS = 'groupMembershipClaims';
    public const FIELD_IDENTIFIER_URIS = 'identifierUris';
    public const FIELD_INFO = 'info';
    public const FIELD_IS_DEVICE_ONLY_AUTH_SUPPORTED = 'isDeviceOnlyAuthSupported';
    public const FIELD_IS_FALLBACK_PUBLIC_CLIENT = 'isFallbackPublicClient';
    public const FIELD_KEY_CREDENTIALS = 'keyCredentials';
    public const FIELD_LOGO = 'logo';
    public const FIELD_NATIVE_AUTHENTICATION_APIS_ENABLED = 'nativeAuthenticationApisEnabled';
    public const FIELD_NOTES = 'notes';
    public const FIELD_OAUTH2REQUIRE_POST_RESPONSE = 'oauth2RequirePostResponse';
    public const FIELD_OPTIONAL_CLAIMS = 'optionalClaims';
    public const FIELD_PARENTAL_CONTROL_SETTINGS = 'parentalControlSettings';
    public const FIELD_PASSWORD_CREDENTIALS = 'passwordCredentials';
    public const FIELD_PUBLIC_CLIENT = 'publicClient';
    public const FIELD_PUBLISHER_DOMAIN = 'publisherDomain';
    public const FIELD_REQUEST_SIGNATURE_VERIFICATION = 'requestSignatureVerification';
    public const FIELD_REQUIRED_RESOURCE_ACCESS = 'requiredResourceAccess';
    public const FIELD_SAML_METADATA_URL = 'samlMetadataUrl';
    public const FIELD_SERVICE_MANAGEMENT_REFERENCE = 'serviceManagementReference';
    public const FIELD_SERVICE_PRINCIPAL_LOCK_CONFIGURATION = 'servicePrincipalLockConfiguration';
    public const FIELD_SIGN_IN_AUDIENCE = 'signInAudience';
    public const FIELD_SPA = 'spa';
    public const FIELD_TAGS = 'tags';
    public const FIELD_TOKEN_ENCRYPTION_KEY_ID = 'tokenEncryptionKeyId';
    public const FIELD_UNIQUE_NAME = 'uniqueName';
    public const FIELD_VERIFIED_PUBLISHER = 'verifiedPublisher';
    public const FIELD_WEB = 'web';
    public const FIELD_APP_MANAGEMENT_POLICIES = 'appManagementPolicies';
    public const FIELD_CREATED_ON_BEHALF_OF = 'createdOnBehalfOf';
    public const FIELD_EXTENSION_PROPERTIES = 'extensionProperties';
    public const FIELD_FEDERATED_IDENTITY_CREDENTIALS = 'federatedIdentityCredentials';
    public const FIELD_HOME_REALM_DISCOVERY_POLICIES = 'homeRealmDiscoveryPolicies';
    public const FIELD_OWNERS = 'owners';
    public const FIELD_SYNCHRONIZATION = 'synchronization';
    public const FIELD_TOKEN_ISSUANCE_POLICIES = 'tokenIssuancePolicies';
    public const FIELD_TOKEN_LIFETIME_POLICIES = 'tokenLifetimePolicies';

    /**
     * Select specific Application properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
