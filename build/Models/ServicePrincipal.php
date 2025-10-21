<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServicePrincipal
 */
class ServicePrincipal
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Date and time when this object was deleted. Always null when the object hasn't been deleted. */
        public ?\DateTimeInterface $deletedDateTime = null,
        /** true if the service principal account is enabled; otherwise, false. If set to false, then no users are able to sign in to this app, even if they're assigned to it. Supports $filter (eq, ne, not, in). */
        public ?bool $accountEnabled = null,
        /** Defines custom behavior that a consuming service can use to call an app in specific contexts. For example, applications that can render file streams may set the addIns property for its 'FileHandler' functionality. This lets services like Microsoft 365 call the application in the context of a document the user is working on. */
        public array $addIns = [],
        /** @var string[] Used to retrieve service principals by subscription, identify resource group and full resource IDs for managed identities. Supports $filter (eq, not, ge, le, startsWith). */
        public array $alternativeNames = [],
        /** The description exposed by the associated application. */
        public ?string $appDescription = null,
        /** The display name exposed by the associated application. Maximum length is 256 characters. */
        public ?string $appDisplayName = null,
        /** The unique identifier for the associated application (its appId property). Alternate key. Supports $filter (eq, ne, not, in, startsWith). */
        public ?string $appId = null,
        /** Unique identifier of the applicationTemplate. Supports $filter (eq, not, ne). Read-only. null if the service principal wasn't created from an application template. */
        public ?string $applicationTemplateId = null,
        /** Contains the tenant ID where the application is registered. This is applicable only to service principals backed by applications. Supports $filter (eq, ne, NOT, ge, le). */
        public ?string $appOwnerOrganizationId = null,
        /** Specifies whether users or other service principals need to be granted an app role assignment for this service principal before users can sign in or apps can get tokens. The default value is false. Not nullable. Supports $filter (eq, ne, NOT). */
        public ?bool $appRoleAssignmentRequired = null,
        /** The roles exposed by the application that's linked to this service principal. For more information, see the appRoles property definition on the application entity. Not nullable. */
        public array $appRoles = [],
        /** An open complex type that holds the value of a custom security attribute that is assigned to a directory object. Nullable. Returned only on $select. Supports $filter (eq, ne, not, startsWith). Filter value is case sensitive. To read this property, the calling app must be assigned the CustomSecAttributeAssignment.Read.All permission. To write this property, the calling app must be assigned the CustomSecAttributeAssignment.ReadWrite.All permissions. To read or write this property in delegated scenarios, the admin must be assigned the Attribute Assignment Administrator role. */
        public ?string $customSecurityAttributes = null,
        /** Free text field to provide an internal end-user facing description of the service principal. End-user portals such MyApps displays the application description in this field. The maximum allowed size is 1,024 characters. Supports $filter (eq, ne, not, ge, le, startsWith) and $search. */
        public ?string $description = null,
        /** Specifies whether Microsoft has disabled the registered application. Possible values are: null (default value), NotDisabled, and DisabledDueToViolationOfServicesAgreement (reasons include suspicious, abusive, or malicious activity, or a violation of the Microsoft Services Agreement).  Supports $filter (eq, ne, not). */
        public ?string $disabledByMicrosoftStatus = null,
        /** The display name for the service principal. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderby. */
        public ?string $displayName = null,
        /** Home page or landing page of the application. */
        public ?string $homepage = null,
        /** Basic profile information of the acquired application such as app's marketing, support, terms of service and privacy statement URLs. The terms of service and privacy statement are surfaced to users through the user consent experience. For more info, see How to: Add Terms of service and privacy statement for registered Microsoft Entra apps. Supports $filter (eq, ne, not, ge, le, and eq on null values). */
        public ?string $info = null,
        /** The collection of key credentials associated with the service principal. Not nullable. Supports $filter (eq, not, ge, le). */
        public array $keyCredentials = [],
        /** Specifies the URL where the service provider redirects the user to Microsoft Entra ID to authenticate. Microsoft Entra ID uses the URL to launch the application from Microsoft 365 or the Microsoft Entra My Apps. When blank, Microsoft Entra ID performs IdP-initiated sign-on for applications configured with SAML-based single sign-on. The user launches the application from Microsoft 365, the Microsoft Entra My Apps, or the Microsoft Entra SSO URL. */
        public ?string $loginUrl = null,
        /** Specifies the URL that the Microsoft's authorization service uses to sign out a user using OpenID Connect front-channel, back-channel, or SAML sign out protocols. */
        public ?string $logoutUrl = null,
        /** Free text field to capture information about the service principal, typically used for operational purposes. Maximum allowed size is 1,024 characters. */
        public ?string $notes = null,
        /** @var string[] Specifies the list of email addresses where Microsoft Entra ID sends a notification when the active certificate is near the expiration date. This is only for the certificates used to sign the SAML token issued for Microsoft Entra Gallery applications. */
        public array $notificationEmailAddresses = [],
        /** The delegated permissions exposed by the application. For more information, see the oauth2PermissionScopes property on the application entity's api property. Not nullable. */
        public array $oauth2PermissionScopes = [],
        /** The collection of password credentials associated with the application. Not nullable. */
        public array $passwordCredentials = [],
        /** Specifies the single sign-on mode configured for this application. Microsoft Entra ID uses the preferred single sign-on mode to launch the application from Microsoft 365 or the My Apps portal. The supported values are password, saml, notSupported, and oidc. Note: This field might be null for older SAML apps and for OIDC applications where it isn't set automatically. */
        public ?string $preferredSingleSignOnMode = null,
        /** This property can be used on SAML applications (apps that have preferredSingleSignOnMode set to saml) to control which certificate is used to sign the SAML responses. For applications that aren't SAML, don't write or otherwise rely on this property. */
        public ?string $preferredTokenSigningKeyThumbprint = null,
        /** @var string[] The URLs that user tokens are sent to for sign in with the associated application, or the redirect URIs that OAuth 2.0 authorization codes and access tokens are sent to for the associated application. Not nullable. */
        public array $replyUrls = [],
        /** The resource-specific application permissions exposed by this application. Currently, resource-specific permissions are only supported for Teams apps accessing to specific chats and teams using Microsoft Graph. Read-only. */
        public array $resourceSpecificApplicationPermissions = [],
        /** The collection for settings related to saml single sign-on. */
        public ?string $samlSingleSignOnSettings = null,
        /** @var string[] Contains the list of identifiersUris, copied over from the associated application. Additional values can be added to hybrid applications. These values can be used to identify the permissions exposed by this app within Microsoft Entra ID. For example,Client apps can specify a resource URI that is based on the values of this property to acquire an access token, which is the URI returned in the 'aud' claim.The any operator is required for filter expressions on multi-valued properties. Not nullable.  Supports $filter (eq, not, ge, le, startsWith). */
        public array $servicePrincipalNames = [],
        /** Identifies whether the service principal represents an application, a managed identity, or a legacy application. This is set by Microsoft Entra ID internally. The servicePrincipalType property can be set to three different values: Application - A service principal that represents an application or service. The appId property identifies the associated app registration, and matches the appId of an application, possibly from a different tenant. If the associated app registration is missing, tokens aren't issued for the service principal.ManagedIdentity - A service principal that represents a managed identity. Service principals representing managed identities can be granted access and permissions, but can't be updated or modified directly.Legacy - A service principal that represents an app created before app registrations, or through legacy experiences. A legacy service principal can have credentials, service principal names, reply URLs, and other properties that are editable by an authorized user, but doesn't have an associated app registration. The appId value doesn't associate the service principal with an app registration. The service principal can only be used in the tenant where it was created.SocialIdp - For internal use. */
        public ?string $servicePrincipalType = null,
        /** Specifies the Microsoft accounts that are supported for the current application. Read-only. Supported values are:AzureADMyOrg: Users with a Microsoft work or school account in my organization's Microsoft Entra tenant (single-tenant).AzureADMultipleOrgs: Users with a Microsoft work or school account in any organization's Microsoft Entra tenant (multitenant).AzureADandPersonalMicrosoftAccount: Users with a personal Microsoft account, or a work or school account in any organization's Microsoft Entra tenant.PersonalMicrosoftAccount: Users with a personal Microsoft account only. */
        public ?string $signInAudience = null,
        /** @var string[] Custom strings that can be used to categorize and identify the service principal. Not nullable. The value is the union of strings set here and on the associated application entity's tags property.Supports $filter (eq, not, ge, le, startsWith). */
        public array $tags = [],
        /** Specifies the keyId of a public key from the keyCredentials collection. When configured, Microsoft Entra ID issues tokens for this application encrypted using the key specified by this property. The application code that receives the encrypted token must use the matching private key to decrypt the token before it can be used for the signed-in user. */
        public ?string $tokenEncryptionKeyId = null,
        /** Specifies the verified publisher of the application that's linked to this service principal. */
        public ?string $verifiedPublisher = null,
        /** The appManagementPolicy applied to this application. */
        public array $appManagementPolicies = [],
        /** App role assignments for this app or service, granted to users, groups, and other service principals. Supports $expand. */
        public array $appRoleAssignedTo = [],
        /** App role assignment for another app or service, granted to this service principal. Supports $expand. */
        public array $appRoleAssignments = [],
        /** The claimsMappingPolicies assigned to this service principal. Supports $expand. */
        public array $claimsMappingPolicies = [],
        /** Directory objects created by this service principal. Read-only. Nullable. */
        public array $createdObjects = [],
        /**  */
        public array $delegatedPermissionClassifications = [],
        /**  */
        public array $endpoints = [],
        /** Federated identities for a specific type of service principal - managed identity. Supports $expand and $filter (/$count eq 0, /$count ne 0). */
        public array $federatedIdentityCredentials = [],
        /** The homeRealmDiscoveryPolicies assigned to this service principal. Supports $expand. */
        public array $homeRealmDiscoveryPolicies = [],
        /** Roles that this service principal is a member of. HTTP Methods: GET Read-only. Nullable. Supports $expand. */
        public array $memberOf = [],
        /** Delegated permission grants authorizing this service principal to access an API on behalf of a signed-in user. Read-only. Nullable. */
        public array $oauth2PermissionGrants = [],
        /** Directory objects that this service principal owns. Read-only. Nullable. Supports $expand, $select nested in $expand, and $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1). */
        public array $ownedObjects = [],
        /** Directory objects that are owners of this servicePrincipal. The owners are a set of nonadmin users or servicePrincipals who are allowed to modify this object. Supports $expand, $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1), and $select nested in $expand. */
        public array $owners = [],
        /** The remoteDesktopSecurityConfiguration object applied to this service principal. Supports $filter (eq) for isRemoteDesktopProtocolEnabled property. */
        public ?string $remoteDesktopSecurityConfiguration = null,
        /** Represents the capability for Microsoft Entra identity synchronization through the Microsoft Graph API. */
        public ?string $synchronization = null,
        /** The tokenIssuancePolicies assigned to this service principal. */
        public array $tokenIssuancePolicies = [],
        /** The tokenLifetimePolicies assigned to this service principal. */
        public array $tokenLifetimePolicies = [],
        /**  */
        public array $transitiveMemberOf = []
    ) {}
}
