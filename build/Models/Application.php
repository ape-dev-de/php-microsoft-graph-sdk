<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Application
 */
class Application
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Date and time when this object was deleted. Always null when the object hasn't been deleted. */
    public ?\DateTimeInterface $deletedDateTime = null;

    /** 
     * Defines custom behavior that a consuming service can use to call an app in specific contexts. For example, applications that can render file streams can set the addIns property for its 'FileHandler' functionality. This lets services like Microsoft 365 call the application in the context of a document the user is working on.
     * @var AddIn[]
     */
    public array $addIns = [];

    /** 
     * Specifies settings for an application that implements a web API.
     * @var ApiApplication|\stdClass|null
     */
    public ApiApplication|\stdClass|null $api = null;

    /** The unique identifier for the application that is assigned to an application by Microsoft Entra ID. Not nullable. Read-only. Alternate key. Supports $filter (eq). */
    public ?string $appId = null;

    /** Unique identifier of the applicationTemplate. Supports $filter (eq, not, ne). Read-only. null if the app wasn't created from an application template. */
    public ?string $applicationTemplateId = null;

    /** 
     * The collection of roles defined for the application. With app role assignments, these roles can be assigned to users, groups, or service principals associated with other applications. Not nullable.
     * @var AppRole[]
     */
    public array $appRoles = [];

    /** 
     * 
     * @var AuthenticationBehaviors|\stdClass|null
     */
    public AuthenticationBehaviors|\stdClass|null $authenticationBehaviors = null;

    /** 
     * Specifies the certification status of the application.
     * @var Certification|\stdClass|null
     */
    public Certification|\stdClass|null $certification = null;

    /** The date and time the application was registered. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.  Supports $filter (eq, ne, not, ge, le, in, and eq on null values) and $orderby. */
    public ?\DateTimeInterface $createdDateTime = null;

    /**  */
    public ?string $defaultRedirectUri = null;

    /** Free text field to provide a description of the application object to end users. The maximum allowed size is 1,024 characters. Supports $filter (eq, ne, not, ge, le, startsWith) and $search. */
    public ?string $description = null;

    /** Specifies whether Microsoft has disabled the registered application. Possible values are: null (default value), NotDisabled, and DisabledDueToViolationOfServicesAgreement (reasons include suspicious, abusive, or malicious activity, or a violation of the Microsoft Services Agreement).  Supports $filter (eq, ne, not). */
    public ?string $disabledByMicrosoftStatus = null;

    /** The display name for the application. Maximum length is 256 characters. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderby. */
    public ?string $displayName = null;

    /** Configures the groups claim issued in a user or OAuth 2.0 access token that the application expects. To set this attribute, use one of the following valid string values: None, SecurityGroup (for security groups and Microsoft Entra roles), All (this gets all of the security groups, distribution groups, and Microsoft Entra directory roles that the signed-in user is a member of). */
    public ?string $groupMembershipClaims = null;

    /** 
     * Also known as App ID URI, this value is set when an application is used as a resource app. The identifierUris acts as the prefix for the scopes you reference in your API's code, and it must be globally unique across Microsoft Entra ID. For more information on valid identifierUris patterns and best practices, see Microsoft Entra application registration security best practices. Not nullable. Supports $filter (eq, ne, ge, le, startsWith).
     * @var string[]
     */
    public array $identifierUris = [];

    /** 
     * Basic profile information of the application such as  app's marketing, support, terms of service and privacy statement URLs. The terms of service and privacy statement are surfaced to users through the user consent experience. For more info, see How to: Add Terms of service and privacy statement for registered Microsoft Entra apps. Supports $filter (eq, ne, not, ge, le, and eq on null values).
     * @var InformationalUrl|\stdClass|null
     */
    public InformationalUrl|\stdClass|null $info = null;

    /** Specifies whether this application supports device authentication without a user. The default is false. */
    public ?bool $isDeviceOnlyAuthSupported = null;

    /** Specifies the fallback application type as public client, such as an installed application running on a mobile device. The default value is false, which means the fallback application type is confidential client such as a web app. There are certain scenarios where Microsoft Entra ID can't determine the client application type. For example, the ROPC flow where it's configured without specifying a redirect URI. In those cases, Microsoft Entra ID interprets the application type based on the value of this property. */
    public ?bool $isFallbackPublicClient = null;

    /** 
     * The collection of key credentials associated with the application. Not nullable. Supports $filter (eq, not, ge, le).
     * @var KeyCredential[]
     */
    public array $keyCredentials = [];

    /** The main logo for the application. Not nullable. */
    public ?string $logo = null;

    /** 
     * Specifies whether the Native Authentication APIs are enabled for the application. The possible values are: none and all. Default is none. For more information, see Native Authentication.
     * @var NativeAuthenticationApisEnabled|\stdClass|null
     */
    public NativeAuthenticationApisEnabled|\stdClass|null $nativeAuthenticationApisEnabled = null;

    /** Notes relevant for the management of the application. */
    public ?string $notes = null;

    /**  */
    public ?bool $oauth2RequirePostResponse = null;

    /** 
     * Application developers can configure optional claims in their Microsoft Entra applications to specify the claims that are sent to their application by the Microsoft security token service. For more information, see How to: Provide optional claims to your app.
     * @var OptionalClaims|\stdClass|null
     */
    public OptionalClaims|\stdClass|null $optionalClaims = null;

    /** 
     * Specifies parental control settings for an application.
     * @var ParentalControlSettings|\stdClass|null
     */
    public ParentalControlSettings|\stdClass|null $parentalControlSettings = null;

    /** 
     * The collection of password credentials associated with the application. Not nullable.
     * @var PasswordCredential[]
     */
    public array $passwordCredentials = [];

    /** 
     * Specifies settings for installed clients such as desktop or mobile devices.
     * @var PublicClientApplication|\stdClass|null
     */
    public PublicClientApplication|\stdClass|null $publicClient = null;

    /** The verified publisher domain for the application. Read-only. For more information, see How to: Configure an application's publisher domain. Supports $filter (eq, ne, ge, le, startsWith). */
    public ?string $publisherDomain = null;

    /** 
     * Specifies whether this application requires Microsoft Entra ID to verify the signed authentication requests.
     * @var RequestSignatureVerification|\stdClass|null
     */
    public RequestSignatureVerification|\stdClass|null $requestSignatureVerification = null;

    /** 
     * Specifies the resources that the application needs to access. This property also specifies the set of delegated permissions and application roles that it needs for each of those resources. This configuration of access to the required resources drives the consent experience. No more than 50 resource services (APIs) can be configured. Beginning mid-October 2021, the total number of required permissions must not exceed 400. For more information, see Limits on requested permissions per app. Not nullable. Supports $filter (eq, not, ge, le).
     * @var RequiredResourceAccess[]
     */
    public array $requiredResourceAccess = [];

    /** The URL where the service exposes SAML metadata for federation. This property is valid only for single-tenant applications. Nullable. */
    public ?string $samlMetadataUrl = null;

    /** References application or service contact information from a Service or Asset Management database. Nullable. */
    public ?string $serviceManagementReference = null;

    /** 
     * Specifies whether sensitive properties of a multitenant application should be locked for editing after the application is provisioned in a tenant. Nullable. null by default.
     * @var ServicePrincipalLockConfiguration|\stdClass|null
     */
    public ServicePrincipalLockConfiguration|\stdClass|null $servicePrincipalLockConfiguration = null;

    /** Specifies the Microsoft accounts that are supported for the current application. The possible values are: AzureADMyOrg (default), AzureADMultipleOrgs, AzureADandPersonalMicrosoftAccount, and PersonalMicrosoftAccount. See more in the table. The value of this object also limits the number of permissions an app can request. For more information, see Limits on requested permissions per app. The value for this property has implications on other app object properties. As a result, if you change this property, you might need to change other properties first. For more information, see Validation differences for signInAudience.Supports $filter (eq, ne, not). */
    public ?string $signInAudience = null;

    /** 
     * Specifies settings for a single-page application, including sign out URLs and redirect URIs for authorization codes and access tokens.
     * @var SpaApplication|\stdClass|null
     */
    public SpaApplication|\stdClass|null $spa = null;

    /** 
     * Custom strings that can be used to categorize and identify the application. Not nullable. Strings added here will also appear in the tags property of any associated service principals.Supports $filter (eq, not, ge, le, startsWith) and $search.
     * @var string[]
     */
    public array $tags = [];

    /** Specifies the keyId of a public key from the keyCredentials collection. When configured, Microsoft Entra ID encrypts all the tokens it emits by using the key this property points to. The application code that receives the encrypted token must use the matching private key to decrypt the token before it can be used for the signed-in user. */
    public ?string $tokenEncryptionKeyId = null;

    /** The unique identifier that can be assigned to an application and used as an alternate key. Immutable. Read-only. */
    public ?string $uniqueName = null;

    /** 
     * Specifies the verified publisher of the application. For more information about how publisher verification helps support application security, trustworthiness, and compliance, see Publisher verification.
     * @var VerifiedPublisher|\stdClass|null
     */
    public VerifiedPublisher|\stdClass|null $verifiedPublisher = null;

    /** 
     * Specifies settings for a web application.
     * @var WebApplication|\stdClass|null
     */
    public WebApplication|\stdClass|null $web = null;

    /** 
     * The appManagementPolicy applied to this application.
     * @var AppManagementPolicy[]
     */
    public array $appManagementPolicies = [];

    /** 
     * Supports $filter (/$count eq 0, /$count ne 0). Read-only.
     * @var DirectoryObject|\stdClass|null
     */
    public DirectoryObject|\stdClass|null $createdOnBehalfOf = null;

    /** 
     * Read-only. Nullable. Supports $expand and $filter (/$count eq 0, /$count ne 0).
     * @var ExtensionProperty[]
     */
    public array $extensionProperties = [];

    /** 
     * Federated identities for applications. Supports $expand and $filter (startsWith, /$count eq 0, /$count ne 0).
     * @var FederatedIdentityCredential[]
     */
    public array $federatedIdentityCredentials = [];

    /** 
     * 
     * @var HomeRealmDiscoveryPolicy[]
     */
    public array $homeRealmDiscoveryPolicies = [];

    /** 
     * Directory objects that are owners of this application. The owners are a set of nonadmin users or service principals who are allowed to modify this object. Supports $expand, $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1), and $select nested in $expand.
     * @var DirectoryObject[]
     */
    public array $owners = [];

    /** 
     * Represents the capability for Microsoft Entra identity synchronization through the Microsoft Graph API.
     * @var Synchronization|\stdClass|null
     */
    public Synchronization|\stdClass|null $synchronization = null;

    /** 
     * 
     * @var TokenIssuancePolicy[]
     */
    public array $tokenIssuancePolicies = [];

    /** 
     * 
     * @var TokenLifetimePolicy[]
     */
    public array $tokenLifetimePolicies = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['deletedDateTime'])) {
            $this->deletedDateTime = is_string($data['deletedDateTime']) ? new \DateTimeImmutable($data['deletedDateTime']) : $data['deletedDateTime'];
        }
        if (isset($data['addIns'])) {
            $this->addIns = $data['addIns'];
        }
        if (isset($data['api'])) {
            $this->api = is_array($data['api']) ? new ApiApplication($data['api']) : $data['api'];
        }
        if (isset($data['appId'])) {
            $this->appId = $data['appId'];
        }
        if (isset($data['applicationTemplateId'])) {
            $this->applicationTemplateId = $data['applicationTemplateId'];
        }
        if (isset($data['appRoles'])) {
            $this->appRoles = $data['appRoles'];
        }
        if (isset($data['authenticationBehaviors'])) {
            $this->authenticationBehaviors = is_array($data['authenticationBehaviors']) ? new AuthenticationBehaviors($data['authenticationBehaviors']) : $data['authenticationBehaviors'];
        }
        if (isset($data['certification'])) {
            $this->certification = is_array($data['certification']) ? new Certification($data['certification']) : $data['certification'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['defaultRedirectUri'])) {
            $this->defaultRedirectUri = $data['defaultRedirectUri'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['disabledByMicrosoftStatus'])) {
            $this->disabledByMicrosoftStatus = $data['disabledByMicrosoftStatus'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['groupMembershipClaims'])) {
            $this->groupMembershipClaims = $data['groupMembershipClaims'];
        }
        if (isset($data['identifierUris'])) {
            $this->identifierUris = $data['identifierUris'];
        }
        if (isset($data['info'])) {
            $this->info = is_array($data['info']) ? new InformationalUrl($data['info']) : $data['info'];
        }
        if (isset($data['isDeviceOnlyAuthSupported'])) {
            $this->isDeviceOnlyAuthSupported = is_bool($data['isDeviceOnlyAuthSupported']) ? $data['isDeviceOnlyAuthSupported'] : (bool)$data['isDeviceOnlyAuthSupported'];
        }
        if (isset($data['isFallbackPublicClient'])) {
            $this->isFallbackPublicClient = is_bool($data['isFallbackPublicClient']) ? $data['isFallbackPublicClient'] : (bool)$data['isFallbackPublicClient'];
        }
        if (isset($data['keyCredentials'])) {
            $this->keyCredentials = $data['keyCredentials'];
        }
        if (isset($data['logo'])) {
            $this->logo = $data['logo'];
        }
        if (isset($data['nativeAuthenticationApisEnabled'])) {
            $this->nativeAuthenticationApisEnabled = is_string($data['nativeAuthenticationApisEnabled']) ? NativeAuthenticationApisEnabled::tryFrom($data['nativeAuthenticationApisEnabled']) : $data['nativeAuthenticationApisEnabled'];
        }
        if (isset($data['notes'])) {
            $this->notes = $data['notes'];
        }
        if (isset($data['oauth2RequirePostResponse'])) {
            $this->oauth2RequirePostResponse = is_bool($data['oauth2RequirePostResponse']) ? $data['oauth2RequirePostResponse'] : (bool)$data['oauth2RequirePostResponse'];
        }
        if (isset($data['optionalClaims'])) {
            $this->optionalClaims = is_array($data['optionalClaims']) ? new OptionalClaims($data['optionalClaims']) : $data['optionalClaims'];
        }
        if (isset($data['parentalControlSettings'])) {
            $this->parentalControlSettings = is_array($data['parentalControlSettings']) ? new ParentalControlSettings($data['parentalControlSettings']) : $data['parentalControlSettings'];
        }
        if (isset($data['passwordCredentials'])) {
            $this->passwordCredentials = $data['passwordCredentials'];
        }
        if (isset($data['publicClient'])) {
            $this->publicClient = is_array($data['publicClient']) ? new PublicClientApplication($data['publicClient']) : $data['publicClient'];
        }
        if (isset($data['publisherDomain'])) {
            $this->publisherDomain = $data['publisherDomain'];
        }
        if (isset($data['requestSignatureVerification'])) {
            $this->requestSignatureVerification = is_array($data['requestSignatureVerification']) ? new RequestSignatureVerification($data['requestSignatureVerification']) : $data['requestSignatureVerification'];
        }
        if (isset($data['requiredResourceAccess'])) {
            $this->requiredResourceAccess = $data['requiredResourceAccess'];
        }
        if (isset($data['samlMetadataUrl'])) {
            $this->samlMetadataUrl = $data['samlMetadataUrl'];
        }
        if (isset($data['serviceManagementReference'])) {
            $this->serviceManagementReference = $data['serviceManagementReference'];
        }
        if (isset($data['servicePrincipalLockConfiguration'])) {
            $this->servicePrincipalLockConfiguration = is_array($data['servicePrincipalLockConfiguration']) ? new ServicePrincipalLockConfiguration($data['servicePrincipalLockConfiguration']) : $data['servicePrincipalLockConfiguration'];
        }
        if (isset($data['signInAudience'])) {
            $this->signInAudience = $data['signInAudience'];
        }
        if (isset($data['spa'])) {
            $this->spa = is_array($data['spa']) ? new SpaApplication($data['spa']) : $data['spa'];
        }
        if (isset($data['tags'])) {
            $this->tags = $data['tags'];
        }
        if (isset($data['tokenEncryptionKeyId'])) {
            $this->tokenEncryptionKeyId = $data['tokenEncryptionKeyId'];
        }
        if (isset($data['uniqueName'])) {
            $this->uniqueName = $data['uniqueName'];
        }
        if (isset($data['verifiedPublisher'])) {
            $this->verifiedPublisher = is_array($data['verifiedPublisher']) ? new VerifiedPublisher($data['verifiedPublisher']) : $data['verifiedPublisher'];
        }
        if (isset($data['web'])) {
            $this->web = is_array($data['web']) ? new WebApplication($data['web']) : $data['web'];
        }
        if (isset($data['appManagementPolicies'])) {
            $this->appManagementPolicies = $data['appManagementPolicies'];
        }
        if (isset($data['createdOnBehalfOf'])) {
            $this->createdOnBehalfOf = is_array($data['createdOnBehalfOf']) ? new DirectoryObject($data['createdOnBehalfOf']) : $data['createdOnBehalfOf'];
        }
        if (isset($data['extensionProperties'])) {
            $this->extensionProperties = $data['extensionProperties'];
        }
        if (isset($data['federatedIdentityCredentials'])) {
            $this->federatedIdentityCredentials = $data['federatedIdentityCredentials'];
        }
        if (isset($data['homeRealmDiscoveryPolicies'])) {
            $this->homeRealmDiscoveryPolicies = $data['homeRealmDiscoveryPolicies'];
        }
        if (isset($data['owners'])) {
            $this->owners = $data['owners'];
        }
        if (isset($data['synchronization'])) {
            $this->synchronization = is_array($data['synchronization']) ? new Synchronization($data['synchronization']) : $data['synchronization'];
        }
        if (isset($data['tokenIssuancePolicies'])) {
            $this->tokenIssuancePolicies = $data['tokenIssuancePolicies'];
        }
        if (isset($data['tokenLifetimePolicies'])) {
            $this->tokenLifetimePolicies = $data['tokenLifetimePolicies'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
