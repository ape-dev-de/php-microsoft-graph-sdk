<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * User
 */
class User
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Date and time when this object was deleted. Always null when the object hasn't been deleted. */
        public ?\DateTimeInterface $deletedDateTime = null,
        /** A freeform text entry field for the user to describe themselves. Returned only on $select. */
        public ?string $aboutMe = null,
        /** true if the account is enabled; otherwise, false. This property is required when a user is created. Returned only on $select. Supports $filter (eq, ne, not, and in). */
        public ?bool $accountEnabled = null,
        /** Sets the age group of the user. Allowed values: null, Minor, NotAdult, and Adult. For more information, see legal age group property definitions. Returned only on $select. Supports $filter (eq, ne, not, and in). */
        public ?string $ageGroup = null,
        /** The licenses that are assigned to the user, including inherited (group-based) licenses. This property doesn't differentiate between directly assigned and inherited licenses. Use the licenseAssignmentStates property to identify the directly assigned and inherited licenses. Not nullable. Returned only on $select. Supports $filter (eq, not, /$count eq 0, /$count ne 0). */
        public array $assignedLicenses = [],
        /** The plans that are assigned to the user. Read-only. Not nullable. Returned only on $select. Supports $filter (eq and not). */
        public array $assignedPlans = [],
        /**  */
        public ?AuthorizationInfo $authorizationInfo = null,
        /** The birthday of the user. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z. Returned only on $select. */
        public ?\DateTimeInterface $birthday = null,
        /** @var string[] The telephone numbers for the user. NOTE: Although it's a string collection, only one number can be set for this property. Read-only for users synced from the on-premises directory. Returned by default. Supports $filter (eq, not, ge, le, startsWith). */
        public array $businessPhones = [],
        /** The city where the user is located. Maximum length is 128 characters. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values). */
        public ?string $city = null,
        /** The name of the company that the user is associated with. This property can be useful for describing the company that a guest comes from. The maximum length is 64 characters.Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values). */
        public ?string $companyName = null,
        /** Sets whether consent was obtained for minors. Allowed values: null, Granted, Denied, and NotRequired. For more information, see legal age group property definitions. Returned only on $select. Supports $filter (eq, ne, not, and in). */
        public ?string $consentProvidedForMinor = null,
        /** The country or region where the user is located; for example, US or UK. Maximum length is 128 characters. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values). */
        public ?string $country = null,
        /** The date and time the user was created, in ISO 8601 format and UTC. The value can't be modified and is automatically populated when the entity is created. Nullable. For on-premises users, the value represents when they were first created in Microsoft Entra ID. Property is null for some users created before June 2018 and on-premises users that were synced to Microsoft Entra ID before June 2018. Read-only. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in). */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Indicates whether the user account was created through one of the following methods:  As a regular school or work account (null). As an external account (Invitation). As a local account for an Azure Active Directory B2C tenant (LocalAccount). Through self-service sign-up by an internal user using email verification (EmailVerified). Through self-service sign-up by a guest signing up through a link that is part of a user flow (SelfServiceSignUp). Read-only.Returned only on $select. Supports $filter (eq, ne, not, in). */
        public ?string $creationType = null,
        /** An open complex type that holds the value of a custom security attribute that is assigned to a directory object. Nullable. Returned only on $select. Supports $filter (eq, ne, not, startsWith). The filter value is case-sensitive. To read this property, the calling app must be assigned the CustomSecAttributeAssignment.Read.All permission. To write this property, the calling app must be assigned the CustomSecAttributeAssignment.ReadWrite.All permissions. To read or write this property in delegated scenarios, the admin must be assigned the Attribute Assignment Administrator role. */
        public ?CustomSecurityAttributeValue $customSecurityAttributes = null,
        /** The name of the department in which the user works. Maximum length is 64 characters. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in, and eq on null values). */
        public ?string $department = null,
        /** The limit on the maximum number of devices that the user is permitted to enroll. Allowed values are 5 or 1000. */
        public ?float $deviceEnrollmentLimit = null,
        /** The name displayed in the address book for the user. This value is usually the combination of the user's first name, middle initial, and family name. This property is required when a user is created and it can't be cleared during updates. Maximum length is 256 characters. Returned by default. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values), $orderby, and $search. */
        public ?string $displayName = null,
        /** The date and time when the user was hired or will start work in a future hire. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in). */
        public ?\DateTimeInterface $employeeHireDate = null,
        /** The employee identifier assigned to the user by the organization. The maximum length is 16 characters. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values). */
        public ?string $employeeId = null,
        /** The date and time when the user left or will leave the organization. To read this property, the calling app must be assigned the User-LifeCycleInfo.Read.All permission. To write this property, the calling app must be assigned the User.Read.All and User-LifeCycleInfo.ReadWrite.All permissions. To read this property in delegated scenarios, the admin needs at least one of the following Microsoft Entra roles: Lifecycle Workflows Administrator (least privilege), Global Reader. To write this property in delegated scenarios, the admin needs the Global Administrator role. Supports $filter (eq, ne, not , ge, le, in). For more information, see Configure the employeeLeaveDateTime property for a user. */
        public ?\DateTimeInterface $employeeLeaveDateTime = null,
        /** Represents organization data (for example, division and costCenter) associated with a user. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in). */
        public ?EmployeeOrgData $employeeOrgData = null,
        /** Captures enterprise worker type. For example, Employee, Contractor, Consultant, or Vendor. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in, startsWith). */
        public ?string $employeeType = null,
        /** For a guest invited to the tenant using the invitation API, this property represents the invited user's invitation status. For invited users, the state can be PendingAcceptance or Accepted, or null for all other users. Returned only on $select. Supports $filter (eq, ne, not , in). */
        public ?string $externalUserState = null,
        /** Shows the timestamp for the latest change to the externalUserState property. Returned only on $select. Supports $filter (eq, ne, not , in). */
        public ?\DateTimeInterface $externalUserStateChangeDateTime = null,
        /** The fax number of the user. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values). */
        public ?string $faxNumber = null,
        /** The given name (first name) of the user. Maximum length is 64 characters. Returned by default. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values). */
        public ?string $givenName = null,
        /** The hire date of the user. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z. Returned only on $select.  Note: This property is specific to SharePoint in Microsoft 365. We recommend using the native employeeHireDate property to set and update hire date values using Microsoft Graph APIs. */
        public ?\DateTimeInterface $hireDate = null,
        /** Represents the identities that can be used to sign in to this user account. Microsoft (also known as a local account), organizations, or social identity providers such as Facebook, Google, and Microsoft can provide identity and tie it to a user account. It might contain multiple items with the same signInType value. Returned only on $select.  Supports $filter (eq) with limitations. */
        public array $identities = [],
        /** @var string[] The instant message voice-over IP (VOIP) session initiation protocol (SIP) addresses for the user. Read-only. Returned only on $select. Supports $filter (eq, not, ge, le, startsWith). */
        public array $imAddresses = [],
        /** @var string[] A list for the user to describe their interests. Returned only on $select. */
        public array $interests = [],
        /** true if the user is a member of a restricted management administrative unit. If not set, the default value is null and the default behavior is false. Read-only.  To manage a user who is a member of a restricted management administrative unit, the administrator or calling app must be assigned a Microsoft Entra role at the scope of the restricted management administrative unit. Returned only on $select. */
        public ?bool $isManagementRestricted = null,
        /** Don't use – reserved for future use. */
        public ?bool $isResourceAccount = null,
        /** The user's job title. Maximum length is 128 characters. Returned by default. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values). */
        public ?string $jobTitle = null,
        /** The time when this Microsoft Entra user last changed their password or when their password was created, whichever date the latest action was performed. The date and time information uses ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned only on $select. */
        public ?\DateTimeInterface $lastPasswordChangeDateTime = null,
        /** Used by enterprise applications to determine the legal age group of the user. This property is read-only and calculated based on ageGroup and consentProvidedForMinor properties. Allowed values: null, Undefined,  MinorWithOutParentalConsent, MinorWithParentalConsent, MinorNoParentalConsentRequired, NotAdult, and Adult. For more information, see legal age group property definitions. Returned only on $select. */
        public ?string $legalAgeGroupClassification = null,
        /** State of license assignments for this user. Also indicates licenses that are directly assigned or the user inherited through group memberships. Read-only. Returned only on $select. */
        public array $licenseAssignmentStates = [],
        /** The SMTP address for the user, for example, jeff@contoso.com. Changes to this property update the user's proxyAddresses collection to include the value as an SMTP address. This property can't contain accent characters.  NOTE: We don't recommend updating this property for Azure AD B2C user profiles. Use the otherMails property instead. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, endsWith, and eq on null values). */
        public ?string $mail = null,
        /** Settings for the primary mailbox of the signed-in user. You can get or update settings for sending automatic replies to incoming messages, locale, and time zone. Returned only on $select. */
        public ?MailboxSettings $mailboxSettings = null,
        /** The mail alias for the user. This property must be specified when a user is created. Maximum length is 64 characters. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values). */
        public ?string $mailNickname = null,
        /** The primary cellular telephone number for the user. Read-only for users synced from the on-premises directory. Maximum length is 64 characters. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values) and $search. */
        public ?string $mobilePhone = null,
        /** The URL for the user's site. Returned only on $select. */
        public ?string $mySite = null,
        /** The office location in the user's place of business. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values). */
        public ?string $officeLocation = null,
        /** Contains the on-premises Active Directory distinguished name or DN. The property is only populated for customers who are synchronizing their on-premises directory to Microsoft Entra ID via Microsoft Entra Connect. Read-only. Returned only on $select. */
        public ?string $onPremisesDistinguishedName = null,
        /** Contains the on-premises domainFQDN, also called dnsDomainName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Microsoft Entra ID via Microsoft Entra Connect. Read-only. Returned only on $select. */
        public ?string $onPremisesDomainName = null,
        /** Contains extensionAttributes1-15 for the user. These extension attributes are also known as Exchange custom attributes 1-15. Each attribute can store up to 1024 characters. For an onPremisesSyncEnabled user, the source of authority for this set of properties is the on-premises and is read-only. For a cloud-only user (where onPremisesSyncEnabled is false), these properties can be set during the creation or update of a user object.  For a cloud-only user previously synced from on-premises Active Directory, these properties are read-only in Microsoft Graph but can be fully managed through the Exchange Admin Center or the Exchange Online V2 module in PowerShell. Returned only on $select. Supports $filter (eq, ne, not, in). */
        public ?OnPremisesExtensionAttributes $onPremisesExtensionAttributes = null,
        /** This property is used to associate an on-premises Active Directory user account to their Microsoft Entra user object. This property must be specified when creating a new user account in the Graph if you're using a federated domain for the user's userPrincipalName (UPN) property. NOTE: The $ and _ characters can't be used when specifying this property. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in). */
        public ?string $onPremisesImmutableId = null,
        /** Indicates the last time at which the object was synced with the on-premises directory; for example: 2013-02-16T03:04:54Z. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in). */
        public ?\DateTimeInterface $onPremisesLastSyncDateTime = null,
        /** Errors when using Microsoft synchronization product during provisioning. Returned only on $select. Supports $filter (eq, not, ge, le). */
        public array $onPremisesProvisioningErrors = [],
        /** Contains the on-premises samAccountName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Microsoft Entra ID via Microsoft Entra Connect. Read-only. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith). */
        public ?string $onPremisesSamAccountName = null,
        /** Contains the on-premises security identifier (SID) for the user that was synchronized from on-premises to the cloud. Read-only. Returned only on $select. Supports $filter (eq including on null values). */
        public ?string $onPremisesSecurityIdentifier = null,
        /** true if this user object is currently being synced from an on-premises Active Directory (AD); otherwise the user isn't being synced and can be managed in Microsoft Entra ID. Read-only. Returned only on $select. Supports $filter (eq, ne, not, in, and eq on null values). */
        public ?bool $onPremisesSyncEnabled = null,
        /** Contains the on-premises userPrincipalName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Microsoft Entra ID via Microsoft Entra Connect. Read-only. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith). */
        public ?string $onPremisesUserPrincipalName = null,
        /** @var string[] A list of other email addresses for the user; for example: ['bob@contoso.com', 'Robert@fabrikam.com']. Can store up to 250 values, each with a limit of 250 characters. NOTE: This property can't contain accent characters. Returned only on $select. Supports $filter (eq, not, ge, le, in, startsWith, endsWith, /$count eq 0, /$count ne 0). */
        public array $otherMails = [],
        /** Specifies password policies for the user. This value is an enumeration with one possible value being DisableStrongPassword, which allows weaker passwords than the default policy to be specified. DisablePasswordExpiration can also be specified. The two might be specified together; for example: DisablePasswordExpiration, DisableStrongPassword. Returned only on $select. For more information on the default password policies, see Microsoft Entra password policies. Supports $filter (ne, not, and eq on null values). */
        public ?string $passwordPolicies = null,
        /** Specifies the password profile for the user. The profile contains the user's password. This property is required when a user is created. The password in the profile must satisfy minimum requirements as specified by the passwordPolicies property. By default, a strong password is required. Returned only on $select. Supports $filter (eq, ne, not, in, and eq on null values). To update this property:  User-PasswordProfile.ReadWrite.All is the least privileged permission to update this property.  In delegated scenarios, the User Administrator Microsoft Entra role is the least privileged admin role supported to update this property for nonadmin users. Privileged Authentication Administrator is the least privileged role that's allowed to update this property for all administrators in the tenant. In general, the signed-in user must have a higher privileged administrator role as indicated in Who can reset passwords.  In app-only scenarios, the calling app must be assigned a supported permission and at least the User Administrator Microsoft Entra role. */
        public ?PasswordProfile $passwordProfile = null,
        /** @var string[] A list for the user to enumerate their past projects. Returned only on $select. */
        public array $pastProjects = [],
        /** The postal code for the user's postal address. The postal code is specific to the user's country or region. In the United States of America, this attribute contains the ZIP code. Maximum length is 40 characters. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values). */
        public ?string $postalCode = null,
        /** The preferred data location for the user. For more information, see OneDrive Online Multi-Geo. */
        public ?string $preferredDataLocation = null,
        /** The preferred language for the user. The preferred language format is based on RFC 4646. The name is a combination of an ISO 639 two-letter lowercase culture code associated with the language, and an ISO 3166 two-letter uppercase subculture code associated with the country or region. Example: 'en-US', or 'es-ES'. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values) */
        public ?string $preferredLanguage = null,
        /** The preferred name for the user. Not Supported. This attribute returns an empty string.Returned only on $select. */
        public ?string $preferredName = null,
        /**  */
        public ?UserPrint $print = null,
        /** The plans that are provisioned for the user. Read-only. Not nullable. Returned only on $select. Supports $filter (eq, not, ge, le). */
        public array $provisionedPlans = [],
        /** @var string[] For example: ['SMTP: bob@contoso.com', 'smtp: bob@sales.contoso.com']. Changes to the mail property update this collection to include the value as an SMTP address. For more information, see mail and proxyAddresses properties. The proxy address prefixed with SMTP (capitalized) is the primary proxy address, while those addresses prefixed with smtp are the secondary proxy addresses. For Azure AD B2C accounts, this property has a limit of 10 unique addresses. Read-only in Microsoft Graph; you can update this property only through the Microsoft 365 admin center. Not nullable. Returned only on $select. Supports $filter (eq, not, ge, le, startsWith, endsWith, /$count eq 0, /$count ne 0). */
        public array $proxyAddresses = [],
        /** @var string[] A list for the user to enumerate their responsibilities. Returned only on $select. */
        public array $responsibilities = [],
        /** @var string[] A list for the user to enumerate the schools they attended. Returned only on $select. */
        public array $schools = [],
        /** Security identifier (SID) of the user, used in Windows scenarios. Read-only. Returned by default. Supports $select and $filter (eq, not, ge, le, startsWith). */
        public ?string $securityIdentifier = null,
        /** Errors published by a federated service describing a nontransient, service-specific error regarding the properties or link from a user object.  Supports $filter (eq, not, for isResolved and serviceInstance). */
        public array $serviceProvisioningErrors = [],
        /** Do not use in Microsoft Graph. Manage this property through the Microsoft 365 admin center instead. Represents whether the user should be included in the Outlook global address list. See Known issue. */
        public ?bool $showInAddressList = null,
        /** Get the last signed-in date and request ID of the sign-in for a given user. Read-only.Returned only on $select. Supports $filter (eq, ne, not, ge, le) but not with any other filterable properties. Note: Details for this property require a Microsoft Entra ID P1 or P2 license and the AuditLog.Read.All permission.This property isn't returned for a user who never signed in or last signed in before April 2020. */
        public ?SignInActivity $signInActivity = null,
        /** Any refresh tokens or session tokens (session cookies) issued before this time are invalid. Applications get an error when using an invalid refresh or session token to acquire a delegated access token (to access APIs such as Microsoft Graph). If this happens, the application needs to acquire a new refresh token by requesting the authorized endpoint. Read-only. Use revokeSignInSessions to reset. Returned only on $select. */
        public ?\DateTimeInterface $signInSessionsValidFromDateTime = null,
        /** @var string[] A list for the user to enumerate their skills. Returned only on $select. */
        public array $skills = [],
        /** The state or province in the user's address. Maximum length is 128 characters. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values). */
        public ?string $state = null,
        /** The street address of the user's place of business. Maximum length is 1,024 characters. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values). */
        public ?string $streetAddress = null,
        /** The user's surname (family name or last name). Maximum length is 64 characters. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values). */
        public ?string $surname = null,
        /** A two-letter country code (ISO standard 3166). Required for users that are assigned licenses due to legal requirements to check for availability of services in countries/regions. Examples include: US, JP, and GB. Not nullable. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values). */
        public ?string $usageLocation = null,
        /** The user principal name (UPN) of the user. The UPN is an Internet-style sign-in name for the user based on the Internet standard RFC 822. By convention, this value should map to the user's email name. The general format is alias@domain, where the domain must be present in the tenant's collection of verified domains. This property is required when a user is created. The verified domains for the tenant can be accessed from the verifiedDomains property of organization.NOTE: This property can't contain accent characters. Only the following characters are allowed A - Z, a - z, 0 - 9, ' . - _ ! # ^ ~. For the complete list of allowed characters, see username policies. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, endsWith) and $orderby. */
        public ?string $userPrincipalName = null,
        /** A string value that can be used to classify user types in your directory. The possible values are Member and Guest. Returned only on $select. Supports $filter (eq, ne, not, in, and eq on null values). NOTE: For more information about the permissions for members and guests, see What are the default user permissions in Microsoft Entra ID? */
        public ?string $userType = null,
        /** The user's activities across devices. Read-only. Nullable. */
        public array $activities = [],
        /** The user's terms of use acceptance statuses. Read-only. Nullable. */
        public array $agreementAcceptances = [],
        /** Represents the app roles a user is granted for an application. Supports $expand. */
        public array $appRoleAssignments = [],
        /** The authentication methods that are supported for the user. */
        public ?Authentication $authentication = null,
        /** The user's primary calendar. Read-only. */
        public ?Calendar $calendar = null,
        /** The user's calendar groups. Read-only. Nullable. */
        public array $calendarGroups = [],
        /** The user's calendars. Read-only. Nullable. */
        public array $calendars = [],
        /** The calendar view for the calendar. Read-only. Nullable. */
        public array $calendarView = [],
        /**  */
        public array $chats = [],
        /**  */
        public ?CloudClipboardRoot $cloudClipboard = null,
        /** The user's contacts folders. Read-only. Nullable. */
        public array $contactFolders = [],
        /** The user's contacts. Read-only. Nullable. */
        public array $contacts = [],
        /** Directory objects that the user created. Read-only. Nullable. */
        public array $createdObjects = [],
        /** The data security and governance settings for the user. Read-only. Nullable. */
        public ?UserDataSecurityAndGovernance $dataSecurityAndGovernance = null,
        /** The list of troubleshooting events for this user. */
        public array $deviceManagementTroubleshootingEvents = [],
        /** The users and contacts that report to the user. (The users and contacts that have their manager property set to this user.) Read-only. Nullable. Supports $expand. */
        public array $directReports = [],
        /** The user's OneDrive. Read-only. */
        public ?Drive $drive = null,
        /** A collection of drives available for this user. Read-only. */
        public array $drives = [],
        /**  */
        public ?EmployeeExperienceUser $employeeExperience = null,
        /** The user's events. Default is to show Events under the Default Calendar. Read-only. Nullable. */
        public array $events = [],
        /** The collection of open extensions defined for the user. Read-only. Supports $expand. Nullable. */
        public array $extensions = [],
        /**  */
        public array $followedSites = [],
        /** Relevance classification of the user's messages based on explicit designations that override inferred relevance or importance. */
        public ?InferenceClassification $inferenceClassification = null,
        /** Represents relationships between a user and items such as OneDrive for work or school documents, calculated using advanced analytics and machine learning techniques. Read-only. Nullable. */
        public ?ItemInsights $insights = null,
        /**  */
        public array $joinedTeams = [],
        /** A collection of this user's license details. Read-only. */
        public array $licenseDetails = [],
        /** The user's mail folders. Read-only. Nullable. */
        public array $mailFolders = [],
        /** Zero or more managed app registrations that belong to the user. */
        public array $managedAppRegistrations = [],
        /** The managed devices associated with the user. */
        public array $managedDevices = [],
        /** The user or contact that is this user's manager. Read-only. Supports $expand. */
        public ?DirectoryObject $manager = null,
        /** The groups and directory roles that the user is a member of. Read-only. Nullable. Supports $expand. */
        public array $memberOf = [],
        /** The messages in a mailbox or folder. Read-only. Nullable. */
        public array $messages = [],
        /**  */
        public array $oauth2PermissionGrants = [],
        /**  */
        public ?Onenote $onenote = null,
        /** Information about a meeting, including the URL used to join a meeting, the attendees list, and the description. */
        public array $onlineMeetings = [],
        /**  */
        public ?OutlookUser $outlook = null,
        /** Devices the user owns. Read-only. Nullable. Supports $expand and $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1). */
        public array $ownedDevices = [],
        /** Directory objects the user owns. Read-only. Nullable. Supports $expand, $select nested in $expand, and $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1). */
        public array $ownedObjects = [],
        /** People that are relevant to the user. Read-only. Nullable. */
        public array $people = [],
        /** List all resource-specific permission grants of a user. */
        public array $permissionGrants = [],
        /** The user's profile photo. Read-only. */
        public ?ProfilePhoto $photo = null,
        /** The collection of the user's profile photos in different sizes. Read-only. */
        public array $photos = [],
        /** Entry-point to the Planner resource that might exist for a user. Read-only. */
        public ?PlannerUser $planner = null,
        /**  */
        public ?Presence $presence = null,
        /** Devices that are registered for the user. Read-only. Nullable. Supports $expand and returns up to 100 objects. */
        public array $registeredDevices = [],
        /**  */
        public array $scopedRoleMemberOf = [],
        /**  */
        public ?UserSettings $settings = null,
        /** The identifier that relates the user to the working time schedule triggers. Read-Only. Nullable */
        public ?UserSolutionRoot $solutions = null,
        /** The users and groups responsible for this guest's privileges in the tenant and keeping the guest's information and access updated. (HTTP Methods: GET, POST, DELETE.). Supports $expand. */
        public array $sponsors = [],
        /** A container for Microsoft Teams features available for the user. Read-only. Nullable. */
        public ?UserTeamwork $teamwork = null,
        /** Represents the To Do services available to a user. */
        public ?Todo $todo = null,
        /** The groups, including nested groups, and directory roles that a user is a member of. Nullable. */
        public array $transitiveMemberOf = []
    ) {}
}
