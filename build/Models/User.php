<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * User
 */
class User
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Date and time when this object was deleted. Always null when the object hasn't been deleted. */
    public ?\DateTimeInterface $deletedDateTime = null;

    /** A freeform text entry field for the user to describe themselves. Returned only on $select. */
    public ?string $aboutMe = null;

    /** true if the account is enabled; otherwise, false. This property is required when a user is created. Returned only on $select. Supports $filter (eq, ne, not, and in). */
    public ?bool $accountEnabled = null;

    /** Sets the age group of the user. Allowed values: null, Minor, NotAdult, and Adult. For more information, see legal age group property definitions. Returned only on $select. Supports $filter (eq, ne, not, and in). */
    public ?string $ageGroup = null;

    /** 
     * The licenses that are assigned to the user, including inherited (group-based) licenses. This property doesn't differentiate between directly assigned and inherited licenses. Use the licenseAssignmentStates property to identify the directly assigned and inherited licenses. Not nullable. Returned only on $select. Supports $filter (eq, not, /$count eq 0, /$count ne 0).
     * @var AssignedLicense[]
     */
    public array $assignedLicenses = [];

    /** 
     * The plans that are assigned to the user. Read-only. Not nullable. Returned only on $select. Supports $filter (eq and not).
     * @var AssignedPlan[]
     */
    public array $assignedPlans = [];

    /** 
     * 
     * @var AuthorizationInfo|\stdClass|null
     */
    public AuthorizationInfo|\stdClass|null $authorizationInfo = null;

    /** The birthday of the user. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z. Returned only on $select. */
    public ?\DateTimeInterface $birthday = null;

    /** 
     * The telephone numbers for the user. NOTE: Although it's a string collection, only one number can be set for this property. Read-only for users synced from the on-premises directory. Returned by default. Supports $filter (eq, not, ge, le, startsWith).
     * @var string[]
     */
    public array $businessPhones = [];

    /** The city where the user is located. Maximum length is 128 characters. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values). */
    public ?string $city = null;

    /** The name of the company that the user is associated with. This property can be useful for describing the company that a guest comes from. The maximum length is 64 characters.Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values). */
    public ?string $companyName = null;

    /** Sets whether consent was obtained for minors. Allowed values: null, Granted, Denied, and NotRequired. For more information, see legal age group property definitions. Returned only on $select. Supports $filter (eq, ne, not, and in). */
    public ?string $consentProvidedForMinor = null;

    /** The country or region where the user is located; for example, US or UK. Maximum length is 128 characters. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values). */
    public ?string $country = null;

    /** The date and time the user was created, in ISO 8601 format and UTC. The value can't be modified and is automatically populated when the entity is created. Nullable. For on-premises users, the value represents when they were first created in Microsoft Entra ID. Property is null for some users created before June 2018 and on-premises users that were synced to Microsoft Entra ID before June 2018. Read-only. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in). */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Indicates whether the user account was created through one of the following methods:  As a regular school or work account (null). As an external account (Invitation). As a local account for an Azure Active Directory B2C tenant (LocalAccount). Through self-service sign-up by an internal user using email verification (EmailVerified). Through self-service sign-up by a guest signing up through a link that is part of a user flow (SelfServiceSignUp). Read-only.Returned only on $select. Supports $filter (eq, ne, not, in). */
    public ?string $creationType = null;

    /** 
     * An open complex type that holds the value of a custom security attribute that is assigned to a directory object. Nullable. Returned only on $select. Supports $filter (eq, ne, not, startsWith). The filter value is case-sensitive. To read this property, the calling app must be assigned the CustomSecAttributeAssignment.Read.All permission. To write this property, the calling app must be assigned the CustomSecAttributeAssignment.ReadWrite.All permissions. To read or write this property in delegated scenarios, the admin must be assigned the Attribute Assignment Administrator role.
     * @var CustomSecurityAttributeValue|\stdClass|null
     */
    public CustomSecurityAttributeValue|\stdClass|null $customSecurityAttributes = null;

    /** The name of the department in which the user works. Maximum length is 64 characters. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in, and eq on null values). */
    public ?string $department = null;

    /** The limit on the maximum number of devices that the user is permitted to enroll. Allowed values are 5 or 1000. */
    public ?float $deviceEnrollmentLimit = null;

    /** The name displayed in the address book for the user. This value is usually the combination of the user's first name, middle initial, and family name. This property is required when a user is created and it can't be cleared during updates. Maximum length is 256 characters. Returned by default. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values), $orderby, and $search. */
    public ?string $displayName = null;

    /** The date and time when the user was hired or will start work in a future hire. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in). */
    public ?\DateTimeInterface $employeeHireDate = null;

    /** The employee identifier assigned to the user by the organization. The maximum length is 16 characters. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values). */
    public ?string $employeeId = null;

    /** The date and time when the user left or will leave the organization. To read this property, the calling app must be assigned the User-LifeCycleInfo.Read.All permission. To write this property, the calling app must be assigned the User.Read.All and User-LifeCycleInfo.ReadWrite.All permissions. To read this property in delegated scenarios, the admin needs at least one of the following Microsoft Entra roles: Lifecycle Workflows Administrator (least privilege), Global Reader. To write this property in delegated scenarios, the admin needs the Global Administrator role. Supports $filter (eq, ne, not , ge, le, in). For more information, see Configure the employeeLeaveDateTime property for a user. */
    public ?\DateTimeInterface $employeeLeaveDateTime = null;

    /** 
     * Represents organization data (for example, division and costCenter) associated with a user. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in).
     * @var EmployeeOrgData|\stdClass|null
     */
    public EmployeeOrgData|\stdClass|null $employeeOrgData = null;

    /** Captures enterprise worker type. For example, Employee, Contractor, Consultant, or Vendor. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in, startsWith). */
    public ?string $employeeType = null;

    /** For a guest invited to the tenant using the invitation API, this property represents the invited user's invitation status. For invited users, the state can be PendingAcceptance or Accepted, or null for all other users. Returned only on $select. Supports $filter (eq, ne, not , in). */
    public ?string $externalUserState = null;

    /** Shows the timestamp for the latest change to the externalUserState property. Returned only on $select. Supports $filter (eq, ne, not , in). */
    public ?\DateTimeInterface $externalUserStateChangeDateTime = null;

    /** The fax number of the user. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values). */
    public ?string $faxNumber = null;

    /** The given name (first name) of the user. Maximum length is 64 characters. Returned by default. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values). */
    public ?string $givenName = null;

    /** The hire date of the user. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z. Returned only on $select.  Note: This property is specific to SharePoint in Microsoft 365. We recommend using the native employeeHireDate property to set and update hire date values using Microsoft Graph APIs. */
    public ?\DateTimeInterface $hireDate = null;

    /** 
     * Represents the identities that can be used to sign in to this user account. Microsoft (also known as a local account), organizations, or social identity providers such as Facebook, Google, and Microsoft can provide identity and tie it to a user account. It might contain multiple items with the same signInType value. Returned only on $select.  Supports $filter (eq) with limitations.
     * @var ObjectIdentity[]
     */
    public array $identities = [];

    /** 
     * The instant message voice-over IP (VOIP) session initiation protocol (SIP) addresses for the user. Read-only. Returned only on $select. Supports $filter (eq, not, ge, le, startsWith).
     * @var string[]
     */
    public array $imAddresses = [];

    /** 
     * A list for the user to describe their interests. Returned only on $select.
     * @var string[]
     */
    public array $interests = [];

    /** true if the user is a member of a restricted management administrative unit. If not set, the default value is null and the default behavior is false. Read-only.  To manage a user who is a member of a restricted management administrative unit, the administrator or calling app must be assigned a Microsoft Entra role at the scope of the restricted management administrative unit. Returned only on $select. */
    public ?bool $isManagementRestricted = null;

    /** Don't use – reserved for future use. */
    public ?bool $isResourceAccount = null;

    /** The user's job title. Maximum length is 128 characters. Returned by default. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values). */
    public ?string $jobTitle = null;

    /** The time when this Microsoft Entra user last changed their password or when their password was created, whichever date the latest action was performed. The date and time information uses ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned only on $select. */
    public ?\DateTimeInterface $lastPasswordChangeDateTime = null;

    /** Used by enterprise applications to determine the legal age group of the user. This property is read-only and calculated based on ageGroup and consentProvidedForMinor properties. Allowed values: null, Undefined,  MinorWithOutParentalConsent, MinorWithParentalConsent, MinorNoParentalConsentRequired, NotAdult, and Adult. For more information, see legal age group property definitions. Returned only on $select. */
    public ?string $legalAgeGroupClassification = null;

    /** 
     * State of license assignments for this user. Also indicates licenses that are directly assigned or the user inherited through group memberships. Read-only. Returned only on $select.
     * @var LicenseAssignmentState[]
     */
    public array $licenseAssignmentStates = [];

    /** The SMTP address for the user, for example, jeff@contoso.com. Changes to this property update the user's proxyAddresses collection to include the value as an SMTP address. This property can't contain accent characters.  NOTE: We don't recommend updating this property for Azure AD B2C user profiles. Use the otherMails property instead. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, endsWith, and eq on null values). */
    public ?string $mail = null;

    /** 
     * Settings for the primary mailbox of the signed-in user. You can get or update settings for sending automatic replies to incoming messages, locale, and time zone. Returned only on $select.
     * @var MailboxSettings|\stdClass|null
     */
    public MailboxSettings|\stdClass|null $mailboxSettings = null;

    /** The mail alias for the user. This property must be specified when a user is created. Maximum length is 64 characters. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values). */
    public ?string $mailNickname = null;

    /** The primary cellular telephone number for the user. Read-only for users synced from the on-premises directory. Maximum length is 64 characters. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values) and $search. */
    public ?string $mobilePhone = null;

    /** The URL for the user's site. Returned only on $select. */
    public ?string $mySite = null;

    /** The office location in the user's place of business. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values). */
    public ?string $officeLocation = null;

    /** Contains the on-premises Active Directory distinguished name or DN. The property is only populated for customers who are synchronizing their on-premises directory to Microsoft Entra ID via Microsoft Entra Connect. Read-only. Returned only on $select. */
    public ?string $onPremisesDistinguishedName = null;

    /** Contains the on-premises domainFQDN, also called dnsDomainName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Microsoft Entra ID via Microsoft Entra Connect. Read-only. Returned only on $select. */
    public ?string $onPremisesDomainName = null;

    /** 
     * Contains extensionAttributes1-15 for the user. These extension attributes are also known as Exchange custom attributes 1-15. Each attribute can store up to 1024 characters. For an onPremisesSyncEnabled user, the source of authority for this set of properties is the on-premises and is read-only. For a cloud-only user (where onPremisesSyncEnabled is false), these properties can be set during the creation or update of a user object.  For a cloud-only user previously synced from on-premises Active Directory, these properties are read-only in Microsoft Graph but can be fully managed through the Exchange Admin Center or the Exchange Online V2 module in PowerShell. Returned only on $select. Supports $filter (eq, ne, not, in).
     * @var OnPremisesExtensionAttributes|\stdClass|null
     */
    public OnPremisesExtensionAttributes|\stdClass|null $onPremisesExtensionAttributes = null;

    /** This property is used to associate an on-premises Active Directory user account to their Microsoft Entra user object. This property must be specified when creating a new user account in the Graph if you're using a federated domain for the user's userPrincipalName (UPN) property. NOTE: The $ and _ characters can't be used when specifying this property. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in). */
    public ?string $onPremisesImmutableId = null;

    /** Indicates the last time at which the object was synced with the on-premises directory; for example: 2013-02-16T03:04:54Z. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in). */
    public ?\DateTimeInterface $onPremisesLastSyncDateTime = null;

    /** 
     * Errors when using Microsoft synchronization product during provisioning. Returned only on $select. Supports $filter (eq, not, ge, le).
     * @var OnPremisesProvisioningError[]
     */
    public array $onPremisesProvisioningErrors = [];

    /** Contains the on-premises samAccountName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Microsoft Entra ID via Microsoft Entra Connect. Read-only. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith). */
    public ?string $onPremisesSamAccountName = null;

    /** Contains the on-premises security identifier (SID) for the user that was synchronized from on-premises to the cloud. Read-only. Returned only on $select. Supports $filter (eq including on null values). */
    public ?string $onPremisesSecurityIdentifier = null;

    /** true if this user object is currently being synced from an on-premises Active Directory (AD); otherwise the user isn't being synced and can be managed in Microsoft Entra ID. Read-only. Returned only on $select. Supports $filter (eq, ne, not, in, and eq on null values). */
    public ?bool $onPremisesSyncEnabled = null;

    /** Contains the on-premises userPrincipalName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Microsoft Entra ID via Microsoft Entra Connect. Read-only. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith). */
    public ?string $onPremisesUserPrincipalName = null;

    /** 
     * A list of other email addresses for the user; for example: ['bob@contoso.com', 'Robert@fabrikam.com']. Can store up to 250 values, each with a limit of 250 characters. NOTE: This property can't contain accent characters. Returned only on $select. Supports $filter (eq, not, ge, le, in, startsWith, endsWith, /$count eq 0, /$count ne 0).
     * @var string[]
     */
    public array $otherMails = [];

    /** Specifies password policies for the user. This value is an enumeration with one possible value being DisableStrongPassword, which allows weaker passwords than the default policy to be specified. DisablePasswordExpiration can also be specified. The two might be specified together; for example: DisablePasswordExpiration, DisableStrongPassword. Returned only on $select. For more information on the default password policies, see Microsoft Entra password policies. Supports $filter (ne, not, and eq on null values). */
    public ?string $passwordPolicies = null;

    /** 
     * Specifies the password profile for the user. The profile contains the user's password. This property is required when a user is created. The password in the profile must satisfy minimum requirements as specified by the passwordPolicies property. By default, a strong password is required. Returned only on $select. Supports $filter (eq, ne, not, in, and eq on null values). To update this property:  User-PasswordProfile.ReadWrite.All is the least privileged permission to update this property.  In delegated scenarios, the User Administrator Microsoft Entra role is the least privileged admin role supported to update this property for nonadmin users. Privileged Authentication Administrator is the least privileged role that's allowed to update this property for all administrators in the tenant. In general, the signed-in user must have a higher privileged administrator role as indicated in Who can reset passwords.  In app-only scenarios, the calling app must be assigned a supported permission and at least the User Administrator Microsoft Entra role.
     * @var PasswordProfile|\stdClass|null
     */
    public PasswordProfile|\stdClass|null $passwordProfile = null;

    /** 
     * A list for the user to enumerate their past projects. Returned only on $select.
     * @var string[]
     */
    public array $pastProjects = [];

    /** The postal code for the user's postal address. The postal code is specific to the user's country or region. In the United States of America, this attribute contains the ZIP code. Maximum length is 40 characters. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values). */
    public ?string $postalCode = null;

    /** The preferred data location for the user. For more information, see OneDrive Online Multi-Geo. */
    public ?string $preferredDataLocation = null;

    /** The preferred language for the user. The preferred language format is based on RFC 4646. The name is a combination of an ISO 639 two-letter lowercase culture code associated with the language, and an ISO 3166 two-letter uppercase subculture code associated with the country or region. Example: 'en-US', or 'es-ES'. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values) */
    public ?string $preferredLanguage = null;

    /** The preferred name for the user. Not Supported. This attribute returns an empty string.Returned only on $select. */
    public ?string $preferredName = null;

    /** 
     * 
     * @var UserPrint|\stdClass|null
     */
    public UserPrint|\stdClass|null $print = null;

    /** 
     * The plans that are provisioned for the user. Read-only. Not nullable. Returned only on $select. Supports $filter (eq, not, ge, le).
     * @var ProvisionedPlan[]
     */
    public array $provisionedPlans = [];

    /** 
     * For example: ['SMTP: bob@contoso.com', 'smtp: bob@sales.contoso.com']. Changes to the mail property update this collection to include the value as an SMTP address. For more information, see mail and proxyAddresses properties. The proxy address prefixed with SMTP (capitalized) is the primary proxy address, while those addresses prefixed with smtp are the secondary proxy addresses. For Azure AD B2C accounts, this property has a limit of 10 unique addresses. Read-only in Microsoft Graph; you can update this property only through the Microsoft 365 admin center. Not nullable. Returned only on $select. Supports $filter (eq, not, ge, le, startsWith, endsWith, /$count eq 0, /$count ne 0).
     * @var string[]
     */
    public array $proxyAddresses = [];

    /** 
     * A list for the user to enumerate their responsibilities. Returned only on $select.
     * @var string[]
     */
    public array $responsibilities = [];

    /** 
     * A list for the user to enumerate the schools they attended. Returned only on $select.
     * @var string[]
     */
    public array $schools = [];

    /** Security identifier (SID) of the user, used in Windows scenarios. Read-only. Returned by default. Supports $select and $filter (eq, not, ge, le, startsWith). */
    public ?string $securityIdentifier = null;

    /** 
     * Errors published by a federated service describing a nontransient, service-specific error regarding the properties or link from a user object.  Supports $filter (eq, not, for isResolved and serviceInstance).
     * @var ServiceProvisioningError[]
     */
    public array $serviceProvisioningErrors = [];

    /** Do not use in Microsoft Graph. Manage this property through the Microsoft 365 admin center instead. Represents whether the user should be included in the Outlook global address list. See Known issue. */
    public ?bool $showInAddressList = null;

    /** 
     * Get the last signed-in date and request ID of the sign-in for a given user. Read-only.Returned only on $select. Supports $filter (eq, ne, not, ge, le) but not with any other filterable properties. Note: Details for this property require a Microsoft Entra ID P1 or P2 license and the AuditLog.Read.All permission.This property isn't returned for a user who never signed in or last signed in before April 2020.
     * @var SignInActivity|\stdClass|null
     */
    public SignInActivity|\stdClass|null $signInActivity = null;

    /** Any refresh tokens or session tokens (session cookies) issued before this time are invalid. Applications get an error when using an invalid refresh or session token to acquire a delegated access token (to access APIs such as Microsoft Graph). If this happens, the application needs to acquire a new refresh token by requesting the authorized endpoint. Read-only. Use revokeSignInSessions to reset. Returned only on $select. */
    public ?\DateTimeInterface $signInSessionsValidFromDateTime = null;

    /** 
     * A list for the user to enumerate their skills. Returned only on $select.
     * @var string[]
     */
    public array $skills = [];

    /** The state or province in the user's address. Maximum length is 128 characters. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values). */
    public ?string $state = null;

    /** The street address of the user's place of business. Maximum length is 1,024 characters. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values). */
    public ?string $streetAddress = null;

    /** The user's surname (family name or last name). Maximum length is 64 characters. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values). */
    public ?string $surname = null;

    /** A two-letter country code (ISO standard 3166). Required for users that are assigned licenses due to legal requirements to check for availability of services in countries/regions. Examples include: US, JP, and GB. Not nullable. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values). */
    public ?string $usageLocation = null;

    /** The user principal name (UPN) of the user. The UPN is an Internet-style sign-in name for the user based on the Internet standard RFC 822. By convention, this value should map to the user's email name. The general format is alias@domain, where the domain must be present in the tenant's collection of verified domains. This property is required when a user is created. The verified domains for the tenant can be accessed from the verifiedDomains property of organization.NOTE: This property can't contain accent characters. Only the following characters are allowed A - Z, a - z, 0 - 9, ' . - _ ! # ^ ~. For the complete list of allowed characters, see username policies. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, endsWith) and $orderby. */
    public ?string $userPrincipalName = null;

    /** A string value that can be used to classify user types in your directory. The possible values are Member and Guest. Returned only on $select. Supports $filter (eq, ne, not, in, and eq on null values). NOTE: For more information about the permissions for members and guests, see What are the default user permissions in Microsoft Entra ID? */
    public ?string $userType = null;

    /** 
     * The user's activities across devices. Read-only. Nullable.
     * @var UserActivity[]
     */
    public array $activities = [];

    /** 
     * The user's terms of use acceptance statuses. Read-only. Nullable.
     * @var AgreementAcceptance[]
     */
    public array $agreementAcceptances = [];

    /** 
     * Represents the app roles a user is granted for an application. Supports $expand.
     * @var AppRoleAssignment[]
     */
    public array $appRoleAssignments = [];

    /** 
     * The authentication methods that are supported for the user.
     * @var Authentication|\stdClass|null
     */
    public Authentication|\stdClass|null $authentication = null;

    /** 
     * The user's primary calendar. Read-only.
     * @var Calendar|\stdClass|null
     */
    public Calendar|\stdClass|null $calendar = null;

    /** 
     * The user's calendar groups. Read-only. Nullable.
     * @var CalendarGroup[]
     */
    public array $calendarGroups = [];

    /** 
     * The user's calendars. Read-only. Nullable.
     * @var Calendar[]
     */
    public array $calendars = [];

    /** 
     * The calendar view for the calendar. Read-only. Nullable.
     * @var Event[]
     */
    public array $calendarView = [];

    /** 
     * 
     * @var Chat[]
     */
    public array $chats = [];

    /** 
     * 
     * @var CloudClipboardRoot|\stdClass|null
     */
    public CloudClipboardRoot|\stdClass|null $cloudClipboard = null;

    /** 
     * The user's contacts folders. Read-only. Nullable.
     * @var ContactFolder[]
     */
    public array $contactFolders = [];

    /** 
     * The user's contacts. Read-only. Nullable.
     * @var Contact[]
     */
    public array $contacts = [];

    /** 
     * Directory objects that the user created. Read-only. Nullable.
     * @var DirectoryObject[]
     */
    public array $createdObjects = [];

    /** 
     * The data security and governance settings for the user. Read-only. Nullable.
     * @var UserDataSecurityAndGovernance|\stdClass|null
     */
    public UserDataSecurityAndGovernance|\stdClass|null $dataSecurityAndGovernance = null;

    /** 
     * The list of troubleshooting events for this user.
     * @var DeviceManagementTroubleshootingEvent[]
     */
    public array $deviceManagementTroubleshootingEvents = [];

    /** 
     * The users and contacts that report to the user. (The users and contacts that have their manager property set to this user.) Read-only. Nullable. Supports $expand.
     * @var DirectoryObject[]
     */
    public array $directReports = [];

    /** 
     * The user's OneDrive. Read-only.
     * @var Drive|\stdClass|null
     */
    public Drive|\stdClass|null $drive = null;

    /** 
     * A collection of drives available for this user. Read-only.
     * @var Drive[]
     */
    public array $drives = [];

    /** 
     * 
     * @var EmployeeExperienceUser|\stdClass|null
     */
    public EmployeeExperienceUser|\stdClass|null $employeeExperience = null;

    /** 
     * The user's events. Default is to show Events under the Default Calendar. Read-only. Nullable.
     * @var Event[]
     */
    public array $events = [];

    /** 
     * The collection of open extensions defined for the user. Read-only. Supports $expand. Nullable.
     * @var Extension[]
     */
    public array $extensions = [];

    /** 
     * 
     * @var Site[]
     */
    public array $followedSites = [];

    /** 
     * Relevance classification of the user's messages based on explicit designations that override inferred relevance or importance.
     * @var InferenceClassification|\stdClass|null
     */
    public InferenceClassification|\stdClass|null $inferenceClassification = null;

    /** 
     * Represents relationships between a user and items such as OneDrive for work or school documents, calculated using advanced analytics and machine learning techniques. Read-only. Nullable.
     * @var ItemInsights|\stdClass|null
     */
    public ItemInsights|\stdClass|null $insights = null;

    /** 
     * 
     * @var Team[]
     */
    public array $joinedTeams = [];

    /** 
     * A collection of this user's license details. Read-only.
     * @var LicenseDetails[]
     */
    public array $licenseDetails = [];

    /** 
     * The user's mail folders. Read-only. Nullable.
     * @var MailFolder[]
     */
    public array $mailFolders = [];

    /** 
     * Zero or more managed app registrations that belong to the user.
     * @var ManagedAppRegistration[]
     */
    public array $managedAppRegistrations = [];

    /** 
     * The managed devices associated with the user.
     * @var ManagedDevice[]
     */
    public array $managedDevices = [];

    /** 
     * The user or contact that is this user's manager. Read-only. Supports $expand.
     * @var DirectoryObject|\stdClass|null
     */
    public DirectoryObject|\stdClass|null $manager = null;

    /** 
     * The groups and directory roles that the user is a member of. Read-only. Nullable. Supports $expand.
     * @var DirectoryObject[]
     */
    public array $memberOf = [];

    /** 
     * The messages in a mailbox or folder. Read-only. Nullable.
     * @var Message[]
     */
    public array $messages = [];

    /** 
     * 
     * @var OAuth2PermissionGrant[]
     */
    public array $oauth2PermissionGrants = [];

    /** 
     * 
     * @var Onenote|\stdClass|null
     */
    public Onenote|\stdClass|null $onenote = null;

    /** 
     * Information about a meeting, including the URL used to join a meeting, the attendees list, and the description.
     * @var OnlineMeeting[]
     */
    public array $onlineMeetings = [];

    /** 
     * 
     * @var OutlookUser|\stdClass|null
     */
    public OutlookUser|\stdClass|null $outlook = null;

    /** 
     * Devices the user owns. Read-only. Nullable. Supports $expand and $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1).
     * @var DirectoryObject[]
     */
    public array $ownedDevices = [];

    /** 
     * Directory objects the user owns. Read-only. Nullable. Supports $expand, $select nested in $expand, and $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1).
     * @var DirectoryObject[]
     */
    public array $ownedObjects = [];

    /** 
     * People that are relevant to the user. Read-only. Nullable.
     * @var Person[]
     */
    public array $people = [];

    /** 
     * List all resource-specific permission grants of a user.
     * @var ResourceSpecificPermissionGrant[]
     */
    public array $permissionGrants = [];

    /** 
     * The user's profile photo. Read-only.
     * @var ProfilePhoto|\stdClass|null
     */
    public ProfilePhoto|\stdClass|null $photo = null;

    /** 
     * The collection of the user's profile photos in different sizes. Read-only.
     * @var ProfilePhoto[]
     */
    public array $photos = [];

    /** 
     * Entry-point to the Planner resource that might exist for a user. Read-only.
     * @var PlannerUser|\stdClass|null
     */
    public PlannerUser|\stdClass|null $planner = null;

    /** 
     * 
     * @var Presence|\stdClass|null
     */
    public Presence|\stdClass|null $presence = null;

    /** 
     * Devices that are registered for the user. Read-only. Nullable. Supports $expand and returns up to 100 objects.
     * @var DirectoryObject[]
     */
    public array $registeredDevices = [];

    /** 
     * 
     * @var ScopedRoleMembership[]
     */
    public array $scopedRoleMemberOf = [];

    /** 
     * 
     * @var UserSettings|\stdClass|null
     */
    public UserSettings|\stdClass|null $settings = null;

    /** 
     * The identifier that relates the user to the working time schedule triggers. Read-Only. Nullable
     * @var UserSolutionRoot|\stdClass|null
     */
    public UserSolutionRoot|\stdClass|null $solutions = null;

    /** 
     * The users and groups responsible for this guest's privileges in the tenant and keeping the guest's information and access updated. (HTTP Methods: GET, POST, DELETE.). Supports $expand.
     * @var DirectoryObject[]
     */
    public array $sponsors = [];

    /** 
     * A container for Microsoft Teams features available for the user. Read-only. Nullable.
     * @var UserTeamwork|\stdClass|null
     */
    public UserTeamwork|\stdClass|null $teamwork = null;

    /** 
     * Represents the To Do services available to a user.
     * @var Todo|\stdClass|null
     */
    public Todo|\stdClass|null $todo = null;

    /** 
     * The groups, including nested groups, and directory roles that a user is a member of. Nullable.
     * @var DirectoryObject[]
     */
    public array $transitiveMemberOf = [];


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
        if (isset($data['aboutMe'])) {
            $this->aboutMe = $data['aboutMe'];
        }
        if (isset($data['accountEnabled'])) {
            $this->accountEnabled = is_bool($data['accountEnabled']) ? $data['accountEnabled'] : (bool)$data['accountEnabled'];
        }
        if (isset($data['ageGroup'])) {
            $this->ageGroup = $data['ageGroup'];
        }
        if (isset($data['assignedLicenses'])) {
            $this->assignedLicenses = $data['assignedLicenses'];
        }
        if (isset($data['assignedPlans'])) {
            $this->assignedPlans = $data['assignedPlans'];
        }
        if (isset($data['authorizationInfo'])) {
            $this->authorizationInfo = is_array($data['authorizationInfo']) ? new AuthorizationInfo($data['authorizationInfo']) : $data['authorizationInfo'];
        }
        if (isset($data['birthday'])) {
            $this->birthday = is_string($data['birthday']) ? new \DateTimeImmutable($data['birthday']) : $data['birthday'];
        }
        if (isset($data['businessPhones'])) {
            $this->businessPhones = $data['businessPhones'];
        }
        if (isset($data['city'])) {
            $this->city = $data['city'];
        }
        if (isset($data['companyName'])) {
            $this->companyName = $data['companyName'];
        }
        if (isset($data['consentProvidedForMinor'])) {
            $this->consentProvidedForMinor = $data['consentProvidedForMinor'];
        }
        if (isset($data['country'])) {
            $this->country = $data['country'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['creationType'])) {
            $this->creationType = $data['creationType'];
        }
        if (isset($data['customSecurityAttributes'])) {
            $this->customSecurityAttributes = is_array($data['customSecurityAttributes']) ? new CustomSecurityAttributeValue($data['customSecurityAttributes']) : $data['customSecurityAttributes'];
        }
        if (isset($data['department'])) {
            $this->department = $data['department'];
        }
        if (isset($data['deviceEnrollmentLimit'])) {
            $this->deviceEnrollmentLimit = is_numeric($data['deviceEnrollmentLimit']) ? (float)$data['deviceEnrollmentLimit'] : $data['deviceEnrollmentLimit'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['employeeHireDate'])) {
            $this->employeeHireDate = is_string($data['employeeHireDate']) ? new \DateTimeImmutable($data['employeeHireDate']) : $data['employeeHireDate'];
        }
        if (isset($data['employeeId'])) {
            $this->employeeId = $data['employeeId'];
        }
        if (isset($data['employeeLeaveDateTime'])) {
            $this->employeeLeaveDateTime = is_string($data['employeeLeaveDateTime']) ? new \DateTimeImmutable($data['employeeLeaveDateTime']) : $data['employeeLeaveDateTime'];
        }
        if (isset($data['employeeOrgData'])) {
            $this->employeeOrgData = is_array($data['employeeOrgData']) ? new EmployeeOrgData($data['employeeOrgData']) : $data['employeeOrgData'];
        }
        if (isset($data['employeeType'])) {
            $this->employeeType = $data['employeeType'];
        }
        if (isset($data['externalUserState'])) {
            $this->externalUserState = $data['externalUserState'];
        }
        if (isset($data['externalUserStateChangeDateTime'])) {
            $this->externalUserStateChangeDateTime = is_string($data['externalUserStateChangeDateTime']) ? new \DateTimeImmutable($data['externalUserStateChangeDateTime']) : $data['externalUserStateChangeDateTime'];
        }
        if (isset($data['faxNumber'])) {
            $this->faxNumber = $data['faxNumber'];
        }
        if (isset($data['givenName'])) {
            $this->givenName = $data['givenName'];
        }
        if (isset($data['hireDate'])) {
            $this->hireDate = is_string($data['hireDate']) ? new \DateTimeImmutable($data['hireDate']) : $data['hireDate'];
        }
        if (isset($data['identities'])) {
            $this->identities = $data['identities'];
        }
        if (isset($data['imAddresses'])) {
            $this->imAddresses = $data['imAddresses'];
        }
        if (isset($data['interests'])) {
            $this->interests = $data['interests'];
        }
        if (isset($data['isManagementRestricted'])) {
            $this->isManagementRestricted = is_bool($data['isManagementRestricted']) ? $data['isManagementRestricted'] : (bool)$data['isManagementRestricted'];
        }
        if (isset($data['isResourceAccount'])) {
            $this->isResourceAccount = is_bool($data['isResourceAccount']) ? $data['isResourceAccount'] : (bool)$data['isResourceAccount'];
        }
        if (isset($data['jobTitle'])) {
            $this->jobTitle = $data['jobTitle'];
        }
        if (isset($data['lastPasswordChangeDateTime'])) {
            $this->lastPasswordChangeDateTime = is_string($data['lastPasswordChangeDateTime']) ? new \DateTimeImmutable($data['lastPasswordChangeDateTime']) : $data['lastPasswordChangeDateTime'];
        }
        if (isset($data['legalAgeGroupClassification'])) {
            $this->legalAgeGroupClassification = $data['legalAgeGroupClassification'];
        }
        if (isset($data['licenseAssignmentStates'])) {
            $this->licenseAssignmentStates = $data['licenseAssignmentStates'];
        }
        if (isset($data['mail'])) {
            $this->mail = $data['mail'];
        }
        if (isset($data['mailboxSettings'])) {
            $this->mailboxSettings = is_array($data['mailboxSettings']) ? new MailboxSettings($data['mailboxSettings']) : $data['mailboxSettings'];
        }
        if (isset($data['mailNickname'])) {
            $this->mailNickname = $data['mailNickname'];
        }
        if (isset($data['mobilePhone'])) {
            $this->mobilePhone = $data['mobilePhone'];
        }
        if (isset($data['mySite'])) {
            $this->mySite = $data['mySite'];
        }
        if (isset($data['officeLocation'])) {
            $this->officeLocation = $data['officeLocation'];
        }
        if (isset($data['onPremisesDistinguishedName'])) {
            $this->onPremisesDistinguishedName = $data['onPremisesDistinguishedName'];
        }
        if (isset($data['onPremisesDomainName'])) {
            $this->onPremisesDomainName = $data['onPremisesDomainName'];
        }
        if (isset($data['onPremisesExtensionAttributes'])) {
            $this->onPremisesExtensionAttributes = is_array($data['onPremisesExtensionAttributes']) ? new OnPremisesExtensionAttributes($data['onPremisesExtensionAttributes']) : $data['onPremisesExtensionAttributes'];
        }
        if (isset($data['onPremisesImmutableId'])) {
            $this->onPremisesImmutableId = $data['onPremisesImmutableId'];
        }
        if (isset($data['onPremisesLastSyncDateTime'])) {
            $this->onPremisesLastSyncDateTime = is_string($data['onPremisesLastSyncDateTime']) ? new \DateTimeImmutable($data['onPremisesLastSyncDateTime']) : $data['onPremisesLastSyncDateTime'];
        }
        if (isset($data['onPremisesProvisioningErrors'])) {
            $this->onPremisesProvisioningErrors = $data['onPremisesProvisioningErrors'];
        }
        if (isset($data['onPremisesSamAccountName'])) {
            $this->onPremisesSamAccountName = $data['onPremisesSamAccountName'];
        }
        if (isset($data['onPremisesSecurityIdentifier'])) {
            $this->onPremisesSecurityIdentifier = $data['onPremisesSecurityIdentifier'];
        }
        if (isset($data['onPremisesSyncEnabled'])) {
            $this->onPremisesSyncEnabled = is_bool($data['onPremisesSyncEnabled']) ? $data['onPremisesSyncEnabled'] : (bool)$data['onPremisesSyncEnabled'];
        }
        if (isset($data['onPremisesUserPrincipalName'])) {
            $this->onPremisesUserPrincipalName = $data['onPremisesUserPrincipalName'];
        }
        if (isset($data['otherMails'])) {
            $this->otherMails = $data['otherMails'];
        }
        if (isset($data['passwordPolicies'])) {
            $this->passwordPolicies = $data['passwordPolicies'];
        }
        if (isset($data['passwordProfile'])) {
            $this->passwordProfile = is_array($data['passwordProfile']) ? new PasswordProfile($data['passwordProfile']) : $data['passwordProfile'];
        }
        if (isset($data['pastProjects'])) {
            $this->pastProjects = $data['pastProjects'];
        }
        if (isset($data['postalCode'])) {
            $this->postalCode = $data['postalCode'];
        }
        if (isset($data['preferredDataLocation'])) {
            $this->preferredDataLocation = $data['preferredDataLocation'];
        }
        if (isset($data['preferredLanguage'])) {
            $this->preferredLanguage = $data['preferredLanguage'];
        }
        if (isset($data['preferredName'])) {
            $this->preferredName = $data['preferredName'];
        }
        if (isset($data['print'])) {
            $this->print = is_array($data['print']) ? new UserPrint($data['print']) : $data['print'];
        }
        if (isset($data['provisionedPlans'])) {
            $this->provisionedPlans = $data['provisionedPlans'];
        }
        if (isset($data['proxyAddresses'])) {
            $this->proxyAddresses = $data['proxyAddresses'];
        }
        if (isset($data['responsibilities'])) {
            $this->responsibilities = $data['responsibilities'];
        }
        if (isset($data['schools'])) {
            $this->schools = $data['schools'];
        }
        if (isset($data['securityIdentifier'])) {
            $this->securityIdentifier = $data['securityIdentifier'];
        }
        if (isset($data['serviceProvisioningErrors'])) {
            $this->serviceProvisioningErrors = $data['serviceProvisioningErrors'];
        }
        if (isset($data['showInAddressList'])) {
            $this->showInAddressList = is_bool($data['showInAddressList']) ? $data['showInAddressList'] : (bool)$data['showInAddressList'];
        }
        if (isset($data['signInActivity'])) {
            $this->signInActivity = is_array($data['signInActivity']) ? new SignInActivity($data['signInActivity']) : $data['signInActivity'];
        }
        if (isset($data['signInSessionsValidFromDateTime'])) {
            $this->signInSessionsValidFromDateTime = is_string($data['signInSessionsValidFromDateTime']) ? new \DateTimeImmutable($data['signInSessionsValidFromDateTime']) : $data['signInSessionsValidFromDateTime'];
        }
        if (isset($data['skills'])) {
            $this->skills = $data['skills'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
        }
        if (isset($data['streetAddress'])) {
            $this->streetAddress = $data['streetAddress'];
        }
        if (isset($data['surname'])) {
            $this->surname = $data['surname'];
        }
        if (isset($data['usageLocation'])) {
            $this->usageLocation = $data['usageLocation'];
        }
        if (isset($data['userPrincipalName'])) {
            $this->userPrincipalName = $data['userPrincipalName'];
        }
        if (isset($data['userType'])) {
            $this->userType = $data['userType'];
        }
        if (isset($data['activities'])) {
            $this->activities = $data['activities'];
        }
        if (isset($data['agreementAcceptances'])) {
            $this->agreementAcceptances = $data['agreementAcceptances'];
        }
        if (isset($data['appRoleAssignments'])) {
            $this->appRoleAssignments = $data['appRoleAssignments'];
        }
        if (isset($data['authentication'])) {
            $this->authentication = is_array($data['authentication']) ? new Authentication($data['authentication']) : $data['authentication'];
        }
        if (isset($data['calendar'])) {
            $this->calendar = is_array($data['calendar']) ? new Calendar($data['calendar']) : $data['calendar'];
        }
        if (isset($data['calendarGroups'])) {
            $this->calendarGroups = $data['calendarGroups'];
        }
        if (isset($data['calendars'])) {
            $this->calendars = $data['calendars'];
        }
        if (isset($data['calendarView'])) {
            $this->calendarView = $data['calendarView'];
        }
        if (isset($data['chats'])) {
            $this->chats = $data['chats'];
        }
        if (isset($data['cloudClipboard'])) {
            $this->cloudClipboard = is_array($data['cloudClipboard']) ? new CloudClipboardRoot($data['cloudClipboard']) : $data['cloudClipboard'];
        }
        if (isset($data['contactFolders'])) {
            $this->contactFolders = $data['contactFolders'];
        }
        if (isset($data['contacts'])) {
            $this->contacts = $data['contacts'];
        }
        if (isset($data['createdObjects'])) {
            $this->createdObjects = $data['createdObjects'];
        }
        if (isset($data['dataSecurityAndGovernance'])) {
            $this->dataSecurityAndGovernance = is_array($data['dataSecurityAndGovernance']) ? new UserDataSecurityAndGovernance($data['dataSecurityAndGovernance']) : $data['dataSecurityAndGovernance'];
        }
        if (isset($data['deviceManagementTroubleshootingEvents'])) {
            $this->deviceManagementTroubleshootingEvents = $data['deviceManagementTroubleshootingEvents'];
        }
        if (isset($data['directReports'])) {
            $this->directReports = $data['directReports'];
        }
        if (isset($data['drive'])) {
            $this->drive = is_array($data['drive']) ? new Drive($data['drive']) : $data['drive'];
        }
        if (isset($data['drives'])) {
            $this->drives = $data['drives'];
        }
        if (isset($data['employeeExperience'])) {
            $this->employeeExperience = is_array($data['employeeExperience']) ? new EmployeeExperienceUser($data['employeeExperience']) : $data['employeeExperience'];
        }
        if (isset($data['events'])) {
            $this->events = $data['events'];
        }
        if (isset($data['extensions'])) {
            $this->extensions = $data['extensions'];
        }
        if (isset($data['followedSites'])) {
            $this->followedSites = $data['followedSites'];
        }
        if (isset($data['inferenceClassification'])) {
            $this->inferenceClassification = is_array($data['inferenceClassification']) ? new InferenceClassification($data['inferenceClassification']) : $data['inferenceClassification'];
        }
        if (isset($data['insights'])) {
            $this->insights = is_array($data['insights']) ? new ItemInsights($data['insights']) : $data['insights'];
        }
        if (isset($data['joinedTeams'])) {
            $this->joinedTeams = $data['joinedTeams'];
        }
        if (isset($data['licenseDetails'])) {
            $this->licenseDetails = $data['licenseDetails'];
        }
        if (isset($data['mailFolders'])) {
            $this->mailFolders = $data['mailFolders'];
        }
        if (isset($data['managedAppRegistrations'])) {
            $this->managedAppRegistrations = $data['managedAppRegistrations'];
        }
        if (isset($data['managedDevices'])) {
            $this->managedDevices = $data['managedDevices'];
        }
        if (isset($data['manager'])) {
            $this->manager = is_array($data['manager']) ? new DirectoryObject($data['manager']) : $data['manager'];
        }
        if (isset($data['memberOf'])) {
            $this->memberOf = $data['memberOf'];
        }
        if (isset($data['messages'])) {
            $this->messages = $data['messages'];
        }
        if (isset($data['oauth2PermissionGrants'])) {
            $this->oauth2PermissionGrants = $data['oauth2PermissionGrants'];
        }
        if (isset($data['onenote'])) {
            $this->onenote = is_array($data['onenote']) ? new Onenote($data['onenote']) : $data['onenote'];
        }
        if (isset($data['onlineMeetings'])) {
            $this->onlineMeetings = $data['onlineMeetings'];
        }
        if (isset($data['outlook'])) {
            $this->outlook = is_array($data['outlook']) ? new OutlookUser($data['outlook']) : $data['outlook'];
        }
        if (isset($data['ownedDevices'])) {
            $this->ownedDevices = $data['ownedDevices'];
        }
        if (isset($data['ownedObjects'])) {
            $this->ownedObjects = $data['ownedObjects'];
        }
        if (isset($data['people'])) {
            $this->people = $data['people'];
        }
        if (isset($data['permissionGrants'])) {
            $this->permissionGrants = $data['permissionGrants'];
        }
        if (isset($data['photo'])) {
            $this->photo = is_array($data['photo']) ? new ProfilePhoto($data['photo']) : $data['photo'];
        }
        if (isset($data['photos'])) {
            $this->photos = $data['photos'];
        }
        if (isset($data['planner'])) {
            $this->planner = is_array($data['planner']) ? new PlannerUser($data['planner']) : $data['planner'];
        }
        if (isset($data['presence'])) {
            $this->presence = is_array($data['presence']) ? new Presence($data['presence']) : $data['presence'];
        }
        if (isset($data['registeredDevices'])) {
            $this->registeredDevices = $data['registeredDevices'];
        }
        if (isset($data['scopedRoleMemberOf'])) {
            $this->scopedRoleMemberOf = $data['scopedRoleMemberOf'];
        }
        if (isset($data['settings'])) {
            $this->settings = is_array($data['settings']) ? new UserSettings($data['settings']) : $data['settings'];
        }
        if (isset($data['solutions'])) {
            $this->solutions = is_array($data['solutions']) ? new UserSolutionRoot($data['solutions']) : $data['solutions'];
        }
        if (isset($data['sponsors'])) {
            $this->sponsors = $data['sponsors'];
        }
        if (isset($data['teamwork'])) {
            $this->teamwork = is_array($data['teamwork']) ? new UserTeamwork($data['teamwork']) : $data['teamwork'];
        }
        if (isset($data['todo'])) {
            $this->todo = is_array($data['todo']) ? new Todo($data['todo']) : $data['todo'];
        }
        if (isset($data['transitiveMemberOf'])) {
            $this->transitiveMemberOf = $data['transitiveMemberOf'];
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
