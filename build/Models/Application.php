<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Application
 */
class Application
{
    /**
     * Defines custom behavior that a consuming service can use to call an app in specific contexts. For example, applications that can render file streams can set the addIns property for its ''FileHandler'' functionality. This lets services like Microsoft 365 call the application in the context of a document the user is working on.
     */
    private array $addIns = [];

    /**
     * Specifies settings for an application that implements a web API.
     */
    private ?string $api;

    /**
     * The unique identifier for the application that is assigned to an application by Microsoft Entra ID. Not nullable. Read-only. Alternate key. Supports $filter (eq).
     */
    private ?string $appId;

    /**
     * Unique identifier of the applicationTemplate. Supports $filter (eq, not, ne). Read-only. null if the app wasn''t created from an application template.
     */
    private ?string $applicationTemplateId;

    /**
     * The collection of roles defined for the application. With app role assignments, these roles can be assigned to users, groups, or service principals associated with other applications. Not nullable.
     */
    private array $appRoles = [];

    /**
     */
    private ?string $authenticationBehaviors;

    /**
     * Specifies the certification status of the application.
     */
    private ?string $certification;

    /**
     * The date and time the application was registered. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.  Supports $filter (eq, ne, not, ge, le, in, and eq on null values) and $orderby.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     */
    private ?string $defaultRedirectUri;

    /**
     * Free text field to provide a description of the application object to end users. The maximum allowed size is 1,024 characters. Supports $filter (eq, ne, not, ge, le, startsWith) and $search.
     */
    private ?string $description;

    /**
     * Specifies whether Microsoft has disabled the registered application. Possible values are: null (default value), NotDisabled, and DisabledDueToViolationOfServicesAgreement (reasons include suspicious, abusive, or malicious activity, or a violation of the Microsoft Services Agreement).  Supports $filter (eq, ne, not).
     */
    private ?string $disabledByMicrosoftStatus;

    /**
     * The display name for the application. Maximum length is 256 characters. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderby.
     */
    private ?string $displayName;

    /**
     * Configures the groups claim issued in a user or OAuth 2.0 access token that the application expects. To set this attribute, use one of the following valid string values: None, SecurityGroup (for security groups and Microsoft Entra roles), All (this gets all of the security groups, distribution groups, and Microsoft Entra directory roles that the signed-in user is a member of).
     */
    private ?string $groupMembershipClaims;

    /**
     * Also known as App ID URI, this value is set when an application is used as a resource app. The identifierUris acts as the prefix for the scopes you reference in your API''s code, and it must be globally unique across Microsoft Entra ID. For more information on valid identifierUris patterns and best practices, see Microsoft Entra application registration security best practices. Not nullable. Supports $filter (eq, ne, ge, le, startsWith).
     */
    private ?string $identifierUris;

    /**
     * Basic profile information of the application such as  app''s marketing, support, terms of service and privacy statement URLs. The terms of service and privacy statement are surfaced to users through the user consent experience. For more info, see How to: Add Terms of service and privacy statement for registered Microsoft Entra apps. Supports $filter (eq, ne, not, ge, le, and eq on null values).
     */
    private ?string $info;

    /**
     * Specifies whether this application supports device authentication without a user. The default is false.
     */
    private ?bool $isDeviceOnlyAuthSupported;

    /**
     * Specifies the fallback application type as public client, such as an installed application running on a mobile device. The default value is false, which means the fallback application type is confidential client such as a web app. There are certain scenarios where Microsoft Entra ID can''t determine the client application type. For example, the ROPC flow where it''s configured without specifying a redirect URI. In those cases, Microsoft Entra ID interprets the application type based on the value of this property.
     */
    private ?bool $isFallbackPublicClient;

    /**
     * The collection of key credentials associated with the application. Not nullable. Supports $filter (eq, not, ge, le).
     */
    private array $keyCredentials = [];

    /**
     * The main logo for the application. Not nullable.
     */
    private ?string $logo;

    /**
     * Specifies whether the Native Authentication APIs are enabled for the application. The possible values are: none and all. Default is none. For more information, see Native Authentication.
     */
    private ?string $nativeAuthenticationApisEnabled;

    /**
     * Notes relevant for the management of the application.
     */
    private ?string $notes;

    /**
     */
    private ?bool $oauth2RequirePostResponse;

    /**
     * Application developers can configure optional claims in their Microsoft Entra applications to specify the claims that are sent to their application by the Microsoft security token service. For more information, see How to: Provide optional claims to your app.
     */
    private ?string $optionalClaims;

    /**
     * Specifies parental control settings for an application.
     */
    private ?string $parentalControlSettings;

    /**
     * The collection of password credentials associated with the application. Not nullable.
     */
    private array $passwordCredentials = [];

    /**
     * Specifies settings for installed clients such as desktop or mobile devices.
     */
    private ?string $publicClient;

    /**
     * The verified publisher domain for the application. Read-only. For more information, see How to: Configure an application''s publisher domain. Supports $filter (eq, ne, ge, le, startsWith).
     */
    private ?string $publisherDomain;

    /**
     * Specifies whether this application requires Microsoft Entra ID to verify the signed authentication requests.
     */
    private ?string $requestSignatureVerification;

    /**
     * Specifies the resources that the application needs to access. This property also specifies the set of delegated permissions and application roles that it needs for each of those resources. This configuration of access to the required resources drives the consent experience. No more than 50 resource services (APIs) can be configured. Beginning mid-October 2021, the total number of required permissions must not exceed 400. For more information, see Limits on requested permissions per app. Not nullable. Supports $filter (eq, not, ge, le).
     */
    private array $requiredResourceAccess = [];

    /**
     * The URL where the service exposes SAML metadata for federation. This property is valid only for single-tenant applications. Nullable.
     */
    private ?string $samlMetadataUrl;

    /**
     * References application or service contact information from a Service or Asset Management database. Nullable.
     */
    private ?string $serviceManagementReference;

    /**
     * Specifies whether sensitive properties of a multitenant application should be locked for editing after the application is provisioned in a tenant. Nullable. null by default.
     */
    private ?string $servicePrincipalLockConfiguration;

    /**
     * Specifies the Microsoft accounts that are supported for the current application. The possible values are: AzureADMyOrg (default), AzureADMultipleOrgs, AzureADandPersonalMicrosoftAccount, and PersonalMicrosoftAccount. See more in the table. The value of this object also limits the number of permissions an app can request. For more information, see Limits on requested permissions per app. The value for this property has implications on other app object properties. As a result, if you change this property, you might need to change other properties first. For more information, see Validation differences for signInAudience.Supports $filter (eq, ne, not).
     */
    private ?string $signInAudience;

    /**
     * Specifies settings for a single-page application, including sign out URLs and redirect URIs for authorization codes and access tokens.
     */
    private ?string $spa;

    /**
     * Custom strings that can be used to categorize and identify the application. Not nullable. Strings added here will also appear in the tags property of any associated service principals.Supports $filter (eq, not, ge, le, startsWith) and $search.
     */
    private ?string $tags;

    /**
     * Specifies the keyId of a public key from the keyCredentials collection. When configured, Microsoft Entra ID encrypts all the tokens it emits by using the key this property points to. The application code that receives the encrypted token must use the matching private key to decrypt the token before it can be used for the signed-in user.
     */
    private ?string $tokenEncryptionKeyId;

    /**
     * The unique identifier that can be assigned to an application and used as an alternate key. Immutable. Read-only.
     */
    private ?string $uniqueName;

    /**
     * Specifies the verified publisher of the application. For more information about how publisher verification helps support application security, trustworthiness, and compliance, see Publisher verification.
     */
    private ?string $verifiedPublisher;

    /**
     * Specifies settings for a web application.
     */
    private ?string $web;

    /**
     * The appManagementPolicy applied to this application.
     */
    private array $appManagementPolicies = [];

    /**
     * Supports $filter (/$count eq 0, /$count ne 0). Read-only.
     */
    private ?string $createdOnBehalfOf;

    /**
     * Read-only. Nullable. Supports $expand and $filter (/$count eq 0, /$count ne 0).
     */
    private array $extensionProperties = [];

    /**
     * Federated identities for applications. Supports $expand and $filter (startsWith, /$count eq 0, /$count ne 0).
     */
    private array $federatedIdentityCredentials = [];

    /**
     */
    private array $homeRealmDiscoveryPolicies = [];

    /**
     * Directory objects that are owners of this application. The owners are a set of nonadmin users or service principals who are allowed to modify this object. Supports $expand, $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1), and $select nested in $expand.
     */
    private array $owners = [];

    /**
     * Represents the capability for Microsoft Entra identity synchronization through the Microsoft Graph API.
     */
    private ?string $synchronization;

    /**
     */
    private array $tokenIssuancePolicies = [];

    /**
     */
    private ?string $tokenLifetimePolicies;

    public function getAddIns(): array
    {
        return $this->addIns;
    }

    public function setAddIns(array $addIns): self
    {
        $this->addIns = $addIns;
        return $this;
    }

    public function getApi(): ?string
    {
        return $this->api;
    }

    public function setApi(?string $api): self
    {
        $this->api = $api;
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

    public function getAppRoles(): array
    {
        return $this->appRoles;
    }

    public function setAppRoles(array $appRoles): self
    {
        $this->appRoles = $appRoles;
        return $this;
    }

    public function getAuthenticationBehaviors(): ?string
    {
        return $this->authenticationBehaviors;
    }

    public function setAuthenticationBehaviors(?string $authenticationBehaviors): self
    {
        $this->authenticationBehaviors = $authenticationBehaviors;
        return $this;
    }

    public function getCertification(): ?string
    {
        return $this->certification;
    }

    public function setCertification(?string $certification): self
    {
        $this->certification = $certification;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getDefaultRedirectUri(): ?string
    {
        return $this->defaultRedirectUri;
    }

    public function setDefaultRedirectUri(?string $defaultRedirectUri): self
    {
        $this->defaultRedirectUri = $defaultRedirectUri;
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

    public function getGroupMembershipClaims(): ?string
    {
        return $this->groupMembershipClaims;
    }

    public function setGroupMembershipClaims(?string $groupMembershipClaims): self
    {
        $this->groupMembershipClaims = $groupMembershipClaims;
        return $this;
    }

    public function getIdentifierUris(): ?string
    {
        return $this->identifierUris;
    }

    public function setIdentifierUris(?string $identifierUris): self
    {
        $this->identifierUris = $identifierUris;
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

    public function getIsDeviceOnlyAuthSupported(): ?bool
    {
        return $this->isDeviceOnlyAuthSupported;
    }

    public function setIsDeviceOnlyAuthSupported(?bool $isDeviceOnlyAuthSupported): self
    {
        $this->isDeviceOnlyAuthSupported = $isDeviceOnlyAuthSupported;
        return $this;
    }

    public function getIsFallbackPublicClient(): ?bool
    {
        return $this->isFallbackPublicClient;
    }

    public function setIsFallbackPublicClient(?bool $isFallbackPublicClient): self
    {
        $this->isFallbackPublicClient = $isFallbackPublicClient;
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

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(?string $logo): self
    {
        $this->logo = $logo;
        return $this;
    }

    public function getNativeAuthenticationApisEnabled(): ?string
    {
        return $this->nativeAuthenticationApisEnabled;
    }

    public function setNativeAuthenticationApisEnabled(?string $nativeAuthenticationApisEnabled): self
    {
        $this->nativeAuthenticationApisEnabled = $nativeAuthenticationApisEnabled;
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

    public function getOauth2RequirePostResponse(): ?bool
    {
        return $this->oauth2RequirePostResponse;
    }

    public function setOauth2RequirePostResponse(?bool $oauth2RequirePostResponse): self
    {
        $this->oauth2RequirePostResponse = $oauth2RequirePostResponse;
        return $this;
    }

    public function getOptionalClaims(): ?string
    {
        return $this->optionalClaims;
    }

    public function setOptionalClaims(?string $optionalClaims): self
    {
        $this->optionalClaims = $optionalClaims;
        return $this;
    }

    public function getParentalControlSettings(): ?string
    {
        return $this->parentalControlSettings;
    }

    public function setParentalControlSettings(?string $parentalControlSettings): self
    {
        $this->parentalControlSettings = $parentalControlSettings;
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

    public function getPublicClient(): ?string
    {
        return $this->publicClient;
    }

    public function setPublicClient(?string $publicClient): self
    {
        $this->publicClient = $publicClient;
        return $this;
    }

    public function getPublisherDomain(): ?string
    {
        return $this->publisherDomain;
    }

    public function setPublisherDomain(?string $publisherDomain): self
    {
        $this->publisherDomain = $publisherDomain;
        return $this;
    }

    public function getRequestSignatureVerification(): ?string
    {
        return $this->requestSignatureVerification;
    }

    public function setRequestSignatureVerification(?string $requestSignatureVerification): self
    {
        $this->requestSignatureVerification = $requestSignatureVerification;
        return $this;
    }

    public function getRequiredResourceAccess(): array
    {
        return $this->requiredResourceAccess;
    }

    public function setRequiredResourceAccess(array $requiredResourceAccess): self
    {
        $this->requiredResourceAccess = $requiredResourceAccess;
        return $this;
    }

    public function getSamlMetadataUrl(): ?string
    {
        return $this->samlMetadataUrl;
    }

    public function setSamlMetadataUrl(?string $samlMetadataUrl): self
    {
        $this->samlMetadataUrl = $samlMetadataUrl;
        return $this;
    }

    public function getServiceManagementReference(): ?string
    {
        return $this->serviceManagementReference;
    }

    public function setServiceManagementReference(?string $serviceManagementReference): self
    {
        $this->serviceManagementReference = $serviceManagementReference;
        return $this;
    }

    public function getServicePrincipalLockConfiguration(): ?string
    {
        return $this->servicePrincipalLockConfiguration;
    }

    public function setServicePrincipalLockConfiguration(?string $servicePrincipalLockConfiguration): self
    {
        $this->servicePrincipalLockConfiguration = $servicePrincipalLockConfiguration;
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

    public function getSpa(): ?string
    {
        return $this->spa;
    }

    public function setSpa(?string $spa): self
    {
        $this->spa = $spa;
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

    public function getUniqueName(): ?string
    {
        return $this->uniqueName;
    }

    public function setUniqueName(?string $uniqueName): self
    {
        $this->uniqueName = $uniqueName;
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

    public function getWeb(): ?string
    {
        return $this->web;
    }

    public function setWeb(?string $web): self
    {
        $this->web = $web;
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

    public function getCreatedOnBehalfOf(): ?string
    {
        return $this->createdOnBehalfOf;
    }

    public function setCreatedOnBehalfOf(?string $createdOnBehalfOf): self
    {
        $this->createdOnBehalfOf = $createdOnBehalfOf;
        return $this;
    }

    public function getExtensionProperties(): array
    {
        return $this->extensionProperties;
    }

    public function setExtensionProperties(array $extensionProperties): self
    {
        $this->extensionProperties = $extensionProperties;
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

    public function getOwners(): array
    {
        return $this->owners;
    }

    public function setOwners(array $owners): self
    {
        $this->owners = $owners;
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
