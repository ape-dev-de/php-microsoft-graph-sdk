<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServicePrincipal
 */
class ServicePrincipal
{
    /**
     * true if the service principal account is enabled; otherwise, false. If set to false, then no users are able to sign in to this app, even if they''re assigned to it. Supports $filter (eq, ne, not, in).
     */
    private ?bool $accountEnabled;

    /**
     * Defines custom behavior that a consuming service can use to call an app in specific contexts. For example, applications that can render file streams may set the addIns property for its ''FileHandler'' functionality. This lets services like Microsoft 365 call the application in the context of a document the user is working on.
     */
    private array $addIns = [];

    /**
     * Used to retrieve service principals by subscription, identify resource group and full resource IDs for managed identities. Supports $filter (eq, not, ge, le, startsWith).
     */
    private ?string $alternativeNames;

    /**
     * The description exposed by the associated application.
     */
    private ?string $appDescription;

    /**
     * The display name exposed by the associated application. Maximum length is 256 characters.
     */
    private ?string $appDisplayName;

    /**
     * The unique identifier for the associated application (its appId property). Alternate key. Supports $filter (eq, ne, not, in, startsWith).
     */
    private ?string $appId;

    /**
     * Unique identifier of the applicationTemplate. Supports $filter (eq, not, ne). Read-only. null if the service principal wasn''t created from an application template.
     */
    private ?string $applicationTemplateId;

    /**
     * Contains the tenant ID where the application is registered. This is applicable only to service principals backed by applications. Supports $filter (eq, ne, NOT, ge, le).
     */
    private ?string $appOwnerOrganizationId;

    /**
     * Specifies whether users or other service principals need to be granted an app role assignment for this service principal before users can sign in or apps can get tokens. The default value is false. Not nullable. Supports $filter (eq, ne, NOT).
     */
    private ?bool $appRoleAssignmentRequired;

    /**
     * The roles exposed by the application that''s linked to this service principal. For more information, see the appRoles property definition on the application entity. Not nullable.
     */
    private array $appRoles = [];

    /**
     * An open complex type that holds the value of a custom security attribute that is assigned to a directory object. Nullable. Returned only on $select. Supports $filter (eq, ne, not, startsWith). Filter value is case sensitive. To read this property, the calling app must be assigned the CustomSecAttributeAssignment.Read.All permission. To write this property, the calling app must be assigned the CustomSecAttributeAssignment.ReadWrite.All permissions. To read or write this property in delegated scenarios, the admin must be assigned the Attribute Assignment Administrator role.
     */
    private ?string $customSecurityAttributes;

    /**
     * Free text field to provide an internal end-user facing description of the service principal. End-user portals such MyApps displays the application description in this field. The maximum allowed size is 1,024 characters. Supports $filter (eq, ne, not, ge, le, startsWith) and $search.
     */
    private ?string $description;

    /**
     * Specifies whether Microsoft has disabled the registered application. Possible values are: null (default value), NotDisabled, and DisabledDueToViolationOfServicesAgreement (reasons include suspicious, abusive, or malicious activity, or a violation of the Microsoft Services Agreement).  Supports $filter (eq, ne, not).
     */
    private ?string $disabledByMicrosoftStatus;

    /**
     * The display name for the service principal. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderby.
     */
    private ?string $displayName;

    /**
     * Home page or landing page of the application.
     */
    private ?string $homepage;

    /**
     * Basic profile information of the acquired application such as app''s marketing, support, terms of service and privacy statement URLs. The terms of service and privacy statement are surfaced to users through the user consent experience. For more info, see How to: Add Terms of service and privacy statement for registered Microsoft Entra apps. Supports $filter (eq, ne, not, ge, le, and eq on null values).
     */
    private ?string $info;

    /**
     * The collection of key credentials associated with the service principal. Not nullable. Supports $filter (eq, not, ge, le).
     */
    private array $keyCredentials = [];

    /**
     * Specifies the URL where the service provider redirects the user to Microsoft Entra ID to authenticate. Microsoft Entra ID uses the URL to launch the application from Microsoft 365 or the Microsoft Entra My Apps. When blank, Microsoft Entra ID performs IdP-initiated sign-on for applications configured with SAML-based single sign-on. The user launches the application from Microsoft 365, the Microsoft Entra My Apps, or the Microsoft Entra SSO URL.
     */
    private ?string $loginUrl;

    /**
     * Specifies the URL that the Microsoft''s authorization service uses to sign out a user using OpenID Connect front-channel, back-channel, or SAML sign out protocols.
     */
    private ?string $logoutUrl;

    /**
     * Free text field to capture information about the service principal, typically used for operational purposes. Maximum allowed size is 1,024 characters.
     */
    private ?string $notes;

    /**
     * Specifies the list of email addresses where Microsoft Entra ID sends a notification when the active certificate is near the expiration date. This is only for the certificates used to sign the SAML token issued for Microsoft Entra Gallery applications.
     */
    private ?string $notificationEmailAddresses;

    /**
     * The delegated permissions exposed by the application. For more information, see the oauth2PermissionScopes property on the application entity''s api property. Not nullable.
     */
    private array $oauth2PermissionScopes = [];

    /**
     * The collection of password credentials associated with the application. Not nullable.
     */
    private array $passwordCredentials = [];

    /**
     * Specifies the single sign-on mode configured for this application. Microsoft Entra ID uses the preferred single sign-on mode to launch the application from Microsoft 365 or the My Apps portal. The supported values are password, saml, notSupported, and oidc. Note: This field might be null for older SAML apps and for OIDC applications where it isn''t set automatically.
     */
    private ?string $preferredSingleSignOnMode;

    /**
     * This property can be used on SAML applications (apps that have preferredSingleSignOnMode set to saml) to control which certificate is used to sign the SAML responses. For applications that aren''t SAML, don''t write or otherwise rely on this property.
     */
    private ?string $preferredTokenSigningKeyThumbprint;

    /**
     * The URLs that user tokens are sent to for sign in with the associated application, or the redirect URIs that OAuth 2.0 authorization codes and access tokens are sent to for the associated application. Not nullable.
     */
    private ?string $replyUrls;

    /**
     * The resource-specific application permissions exposed by this application. Currently, resource-specific permissions are only supported for Teams apps accessing to specific chats and teams using Microsoft Graph. Read-only.
     */
    private array $resourceSpecificApplicationPermissions = [];

    /**
     * The collection for settings related to saml single sign-on.
     */
    private ?string $samlSingleSignOnSettings;

    /**
     * Contains the list of identifiersUris, copied over from the associated application. Additional values can be added to hybrid applications. These values can be used to identify the permissions exposed by this app within Microsoft Entra ID. For example,Client apps can specify a resource URI that is based on the values of this property to acquire an access token, which is the URI returned in the ''aud'' claim.The any operator is required for filter expressions on multi-valued properties. Not nullable.  Supports $filter (eq, not, ge, le, startsWith).
     */
    private ?string $servicePrincipalNames;

    /**
     * Identifies whether the service principal represents an application, a managed identity, or a legacy application. This is set by Microsoft Entra ID internally. The servicePrincipalType property can be set to three different values: Application - A service principal that represents an application or service. The appId property identifies the associated app registration, and matches the appId of an application, possibly from a different tenant. If the associated app registration is missing, tokens aren''t issued for the service principal.ManagedIdentity - A service principal that represents a managed identity. Service principals representing managed identities can be granted access and permissions, but can''t be updated or modified directly.Legacy - A service principal that represents an app created before app registrations, or through legacy experiences. A legacy service principal can have credentials, service principal names, reply URLs, and other properties that are editable by an authorized user, but doesn''t have an associated app registration. The appId value doesn''t associate the service principal with an app registration. The service principal can only be used in the tenant where it was created.SocialIdp - For internal use.
     */
    private ?string $servicePrincipalType;

    /**
     * Specifies the Microsoft accounts that are supported for the current application. Read-only. Supported values are:AzureADMyOrg: Users with a Microsoft work or school account in my organization''s Microsoft Entra tenant (single-tenant).AzureADMultipleOrgs: Users with a Microsoft work or school account in any organization''s Microsoft Entra tenant (multitenant).AzureADandPersonalMicrosoftAccount: Users with a personal Microsoft account, or a work or school account in any organization''s Microsoft Entra tenant.PersonalMicrosoftAccount: Users with a personal Microsoft account only.
     */
    private ?string $signInAudience;

    /**
     * Custom strings that can be used to categorize and identify the service principal. Not nullable. The value is the union of strings set here and on the associated application entity''s tags property.Supports $filter (eq, not, ge, le, startsWith).
     */
    private ?string $tags;

    /**
     * Specifies the keyId of a public key from the keyCredentials collection. When configured, Microsoft Entra ID issues tokens for this application encrypted using the key specified by this property. The application code that receives the encrypted token must use the matching private key to decrypt the token before it can be used for the signed-in user.
     */
    private ?string $tokenEncryptionKeyId;

    /**
     * Specifies the verified publisher of the application that's linked to this service principal.
     */
    private ?string $verifiedPublisher;

    /**
     * The appManagementPolicy applied to this application.
     */
    private array $appManagementPolicies = [];

    /**
     * App role assignments for this app or service, granted to users, groups, and other service principals. Supports $expand.
     */
    private array $appRoleAssignedTo = [];

    /**
     * App role assignment for another app or service, granted to this service principal. Supports $expand.
     */
    private array $appRoleAssignments = [];

    /**
     * The claimsMappingPolicies assigned to this service principal. Supports $expand.
     */
    private array $claimsMappingPolicies = [];

    /**
     * Directory objects created by this service principal. Read-only. Nullable.
     */
    private array $createdObjects = [];

    /**
     */
    private array $delegatedPermissionClassifications = [];

    /**
     */
    private array $endpoints = [];

    /**
     * Federated identities for a specific type of service principal - managed identity. Supports $expand and $filter (/$count eq 0, /$count ne 0).
     */
    private array $federatedIdentityCredentials = [];

    /**
     * The homeRealmDiscoveryPolicies assigned to this service principal. Supports $expand.
     */
    private array $homeRealmDiscoveryPolicies = [];

    /**
     * Roles that this service principal is a member of. HTTP Methods: GET Read-only. Nullable. Supports $expand.
     */
    private array $memberOf = [];

    /**
     * Delegated permission grants authorizing this service principal to access an API on behalf of a signed-in user. Read-only. Nullable.
     */
    private array $oauth2PermissionGrants = [];

    /**
     * Directory objects that this service principal owns. Read-only. Nullable. Supports $expand, $select nested in $expand, and $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1).
     */
    private array $ownedObjects = [];

    /**
     * Directory objects that are owners of this servicePrincipal. The owners are a set of nonadmin users or servicePrincipals who are allowed to modify this object. Supports $expand, $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1), and $select nested in $expand.
     */
    private array $owners = [];

    /**
     * The remoteDesktopSecurityConfiguration object applied to this service principal. Supports $filter (eq) for isRemoteDesktopProtocolEnabled property.
     */
    private ?string $remoteDesktopSecurityConfiguration;

    /**
     * Represents the capability for Microsoft Entra identity synchronization through the Microsoft Graph API.
     */
    private ?string $synchronization;

    /**
     * The tokenIssuancePolicies assigned to this service principal.
     */
    private array $tokenIssuancePolicies = [];

    /**
     * The tokenLifetimePolicies assigned to this service principal.
     */
    private array $tokenLifetimePolicies = [];

    /**
     */
    private ?string $transitiveMemberOf;

    public function getAccountEnabled(): ?bool
    {
        return $this->accountEnabled;
    }

    public function setAccountEnabled(?bool $accountEnabled): self
    {
        $this->accountEnabled = $accountEnabled;
        return $this;
    }

    public function getAddIns(): array
    {
        return $this->addIns;
    }

    public function setAddIns(array $addIns): self
    {
        $this->addIns = $addIns;
        return $this;
    }

    public function getAlternativeNames(): ?string
    {
        return $this->alternativeNames;
    }

    public function setAlternativeNames(?string $alternativeNames): self
    {
        $this->alternativeNames = $alternativeNames;
        return $this;
    }

    public function getAppDescription(): ?string
    {
        return $this->appDescription;
    }

    public function setAppDescription(?string $appDescription): self
    {
        $this->appDescription = $appDescription;
        return $this;
    }

    public function getAppDisplayName(): ?string
    {
        return $this->appDisplayName;
    }

    public function setAppDisplayName(?string $appDisplayName): self
    {
        $this->appDisplayName = $appDisplayName;
        return $this;
    }

    public function getAppId(): ?string
    {
        return $this->appId;
    }

    public function setAppId(?string $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    public function getApplicationTemplateId(): ?string
    {
        return $this->applicationTemplateId;
    }

    public function setApplicationTemplateId(?string $applicationTemplateId): self
    {
        $this->applicationTemplateId = $applicationTemplateId;
        return $this;
    }

    public function getAppOwnerOrganizationId(): ?string
    {
        return $this->appOwnerOrganizationId;
    }

    public function setAppOwnerOrganizationId(?string $appOwnerOrganizationId): self
    {
        $this->appOwnerOrganizationId = $appOwnerOrganizationId;
        return $this;
    }

    public function getAppRoleAssignmentRequired(): ?bool
    {
        return $this->appRoleAssignmentRequired;
    }

    public function setAppRoleAssignmentRequired(?bool $appRoleAssignmentRequired): self
    {
        $this->appRoleAssignmentRequired = $appRoleAssignmentRequired;
        return $this;
    }

    public function getAppRoles(): array
    {
        return $this->appRoles;
    }

    public function setAppRoles(array $appRoles): self
    {
        $this->appRoles = $appRoles;
        return $this;
    }

    public function getCustomSecurityAttributes(): ?string
    {
        return $this->customSecurityAttributes;
    }

    public function setCustomSecurityAttributes(?string $customSecurityAttributes): self
    {
        $this->customSecurityAttributes = $customSecurityAttributes;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDisabledByMicrosoftStatus(): ?string
    {
        return $this->disabledByMicrosoftStatus;
    }

    public function setDisabledByMicrosoftStatus(?string $disabledByMicrosoftStatus): self
    {
        $this->disabledByMicrosoftStatus = $disabledByMicrosoftStatus;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getHomepage(): ?string
    {
        return $this->homepage;
    }

    public function setHomepage(?string $homepage): self
    {
        $this->homepage = $homepage;
        return $this;
    }

    public function getInfo(): ?string
    {
        return $this->info;
    }

    public function setInfo(?string $info): self
    {
        $this->info = $info;
        return $this;
    }

    public function getKeyCredentials(): array
    {
        return $this->keyCredentials;
    }

    public function setKeyCredentials(array $keyCredentials): self
    {
        $this->keyCredentials = $keyCredentials;
        return $this;
    }

    public function getLoginUrl(): ?string
    {
        return $this->loginUrl;
    }

    public function setLoginUrl(?string $loginUrl): self
    {
        $this->loginUrl = $loginUrl;
        return $this;
    }

    public function getLogoutUrl(): ?string
    {
        return $this->logoutUrl;
    }

    public function setLogoutUrl(?string $logoutUrl): self
    {
        $this->logoutUrl = $logoutUrl;
        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;
        return $this;
    }

    public function getNotificationEmailAddresses(): ?string
    {
        return $this->notificationEmailAddresses;
    }

    public function setNotificationEmailAddresses(?string $notificationEmailAddresses): self
    {
        $this->notificationEmailAddresses = $notificationEmailAddresses;
        return $this;
    }

    public function getOauth2PermissionScopes(): array
    {
        return $this->oauth2PermissionScopes;
    }

    public function setOauth2PermissionScopes(array $oauth2PermissionScopes): self
    {
        $this->oauth2PermissionScopes = $oauth2PermissionScopes;
        return $this;
    }

    public function getPasswordCredentials(): array
    {
        return $this->passwordCredentials;
    }

    public function setPasswordCredentials(array $passwordCredentials): self
    {
        $this->passwordCredentials = $passwordCredentials;
        return $this;
    }

    public function getPreferredSingleSignOnMode(): ?string
    {
        return $this->preferredSingleSignOnMode;
    }

    public function setPreferredSingleSignOnMode(?string $preferredSingleSignOnMode): self
    {
        $this->preferredSingleSignOnMode = $preferredSingleSignOnMode;
        return $this;
    }

    public function getPreferredTokenSigningKeyThumbprint(): ?string
    {
        return $this->preferredTokenSigningKeyThumbprint;
    }

    public function setPreferredTokenSigningKeyThumbprint(?string $preferredTokenSigningKeyThumbprint): self
    {
        $this->preferredTokenSigningKeyThumbprint = $preferredTokenSigningKeyThumbprint;
        return $this;
    }

    public function getReplyUrls(): ?string
    {
        return $this->replyUrls;
    }

    public function setReplyUrls(?string $replyUrls): self
    {
        $this->replyUrls = $replyUrls;
        return $this;
    }

    public function getResourceSpecificApplicationPermissions(): array
    {
        return $this->resourceSpecificApplicationPermissions;
    }

    public function setResourceSpecificApplicationPermissions(array $resourceSpecificApplicationPermissions): self
    {
        $this->resourceSpecificApplicationPermissions = $resourceSpecificApplicationPermissions;
        return $this;
    }

    public function getSamlSingleSignOnSettings(): ?string
    {
        return $this->samlSingleSignOnSettings;
    }

    public function setSamlSingleSignOnSettings(?string $samlSingleSignOnSettings): self
    {
        $this->samlSingleSignOnSettings = $samlSingleSignOnSettings;
        return $this;
    }

    public function getServicePrincipalNames(): ?string
    {
        return $this->servicePrincipalNames;
    }

    public function setServicePrincipalNames(?string $servicePrincipalNames): self
    {
        $this->servicePrincipalNames = $servicePrincipalNames;
        return $this;
    }

    public function getServicePrincipalType(): ?string
    {
        return $this->servicePrincipalType;
    }

    public function setServicePrincipalType(?string $servicePrincipalType): self
    {
        $this->servicePrincipalType = $servicePrincipalType;
        return $this;
    }

    public function getSignInAudience(): ?string
    {
        return $this->signInAudience;
    }

    public function setSignInAudience(?string $signInAudience): self
    {
        $this->signInAudience = $signInAudience;
        return $this;
    }

    public function getTags(): ?string
    {
        return $this->tags;
    }

    public function setTags(?string $tags): self
    {
        $this->tags = $tags;
        return $this;
    }

    public function getTokenEncryptionKeyId(): ?string
    {
        return $this->tokenEncryptionKeyId;
    }

    public function setTokenEncryptionKeyId(?string $tokenEncryptionKeyId): self
    {
        $this->tokenEncryptionKeyId = $tokenEncryptionKeyId;
        return $this;
    }

    public function getVerifiedPublisher(): ?string
    {
        return $this->verifiedPublisher;
    }

    public function setVerifiedPublisher(?string $verifiedPublisher): self
    {
        $this->verifiedPublisher = $verifiedPublisher;
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

    public function getAppRoleAssignedTo(): array
    {
        return $this->appRoleAssignedTo;
    }

    public function setAppRoleAssignedTo(array $appRoleAssignedTo): self
    {
        $this->appRoleAssignedTo = $appRoleAssignedTo;
        return $this;
    }

    public function getAppRoleAssignments(): array
    {
        return $this->appRoleAssignments;
    }

    public function setAppRoleAssignments(array $appRoleAssignments): self
    {
        $this->appRoleAssignments = $appRoleAssignments;
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

    public function getCreatedObjects(): array
    {
        return $this->createdObjects;
    }

    public function setCreatedObjects(array $createdObjects): self
    {
        $this->createdObjects = $createdObjects;
        return $this;
    }

    public function getDelegatedPermissionClassifications(): array
    {
        return $this->delegatedPermissionClassifications;
    }

    public function setDelegatedPermissionClassifications(array $delegatedPermissionClassifications): self
    {
        $this->delegatedPermissionClassifications = $delegatedPermissionClassifications;
        return $this;
    }

    public function getEndpoints(): array
    {
        return $this->endpoints;
    }

    public function setEndpoints(array $endpoints): self
    {
        $this->endpoints = $endpoints;
        return $this;
    }

    public function getFederatedIdentityCredentials(): array
    {
        return $this->federatedIdentityCredentials;
    }

    public function setFederatedIdentityCredentials(array $federatedIdentityCredentials): self
    {
        $this->federatedIdentityCredentials = $federatedIdentityCredentials;
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

    public function getMemberOf(): array
    {
        return $this->memberOf;
    }

    public function setMemberOf(array $memberOf): self
    {
        $this->memberOf = $memberOf;
        return $this;
    }

    public function getOauth2PermissionGrants(): array
    {
        return $this->oauth2PermissionGrants;
    }

    public function setOauth2PermissionGrants(array $oauth2PermissionGrants): self
    {
        $this->oauth2PermissionGrants = $oauth2PermissionGrants;
        return $this;
    }

    public function getOwnedObjects(): array
    {
        return $this->ownedObjects;
    }

    public function setOwnedObjects(array $ownedObjects): self
    {
        $this->ownedObjects = $ownedObjects;
        return $this;
    }

    public function getOwners(): array
    {
        return $this->owners;
    }

    public function setOwners(array $owners): self
    {
        $this->owners = $owners;
        return $this;
    }

    public function getRemoteDesktopSecurityConfiguration(): ?string
    {
        return $this->remoteDesktopSecurityConfiguration;
    }

    public function setRemoteDesktopSecurityConfiguration(?string $remoteDesktopSecurityConfiguration): self
    {
        $this->remoteDesktopSecurityConfiguration = $remoteDesktopSecurityConfiguration;
        return $this;
    }

    public function getSynchronization(): ?string
    {
        return $this->synchronization;
    }

    public function setSynchronization(?string $synchronization): self
    {
        $this->synchronization = $synchronization;
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

    public function getTokenLifetimePolicies(): array
    {
        return $this->tokenLifetimePolicies;
    }

    public function setTokenLifetimePolicies(array $tokenLifetimePolicies): self
    {
        $this->tokenLifetimePolicies = $tokenLifetimePolicies;
        return $this;
    }

    public function getTransitiveMemberOf(): ?string
    {
        return $this->transitiveMemberOf;
    }

    public function setTransitiveMemberOf(?string $transitiveMemberOf): self
    {
        $this->transitiveMemberOf = $transitiveMemberOf;
        return $this;
    }

}
