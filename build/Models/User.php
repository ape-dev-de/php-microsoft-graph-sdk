<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * User
 */
class User
{
    /**
     * A freeform text entry field for the user to describe themselves. Returned only on $select.
     */
    private ?string $aboutMe;

    /**
     * true if the account is enabled; otherwise, false. This property is required when a user is created. Returned only on $select. Supports $filter (eq, ne, not, and in).
     */
    private ?bool $accountEnabled;

    /**
     * Sets the age group of the user. Allowed values: null, Minor, NotAdult, and Adult. For more information, see legal age group property definitions. Returned only on $select. Supports $filter (eq, ne, not, and in).
     */
    private ?string $ageGroup;

    /**
     * The licenses that are assigned to the user, including inherited (group-based) licenses. This property doesn''t differentiate between directly assigned and inherited licenses. Use the licenseAssignmentStates property to identify the directly assigned and inherited licenses. Not nullable. Returned only on $select. Supports $filter (eq, not, /$count eq 0, /$count ne 0).
     */
    private array $assignedLicenses = [];

    /**
     * The plans that are assigned to the user. Read-only. Not nullable. Returned only on $select. Supports $filter (eq and not).
     */
    private array $assignedPlans = [];

    /**
     */
    private ?string $authorizationInfo;

    /**
     * The birthday of the user. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z. Returned only on $select.
     */
    private ?\DateTimeInterface $birthday;

    /**
     * The telephone numbers for the user. NOTE: Although it''s a string collection, only one number can be set for this property. Read-only for users synced from the on-premises directory. Returned by default. Supports $filter (eq, not, ge, le, startsWith).
     * @var string[]
     */
    private array $businessPhones = [];

    /**
     * The city where the user is located. Maximum length is 128 characters. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     */
    private ?string $city;

    /**
     * The name of the company that the user is associated with. This property can be useful for describing the company that a guest comes from. The maximum length is 64 characters.Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     */
    private ?string $companyName;

    /**
     * Sets whether consent was obtained for minors. Allowed values: null, Granted, Denied, and NotRequired. For more information, see legal age group property definitions. Returned only on $select. Supports $filter (eq, ne, not, and in).
     */
    private ?string $consentProvidedForMinor;

    /**
     * The country or region where the user is located; for example, US or UK. Maximum length is 128 characters. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     */
    private ?string $country;

    /**
     * The date and time the user was created, in ISO 8601 format and UTC. The value can''t be modified and is automatically populated when the entity is created. Nullable. For on-premises users, the value represents when they were first created in Microsoft Entra ID. Property is null for some users created before June 2018 and on-premises users that were synced to Microsoft Entra ID before June 2018. Read-only. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in).
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Indicates whether the user account was created through one of the following methods:  As a regular school or work account (null). As an external account (Invitation). As a local account for an Azure Active Directory B2C tenant (LocalAccount). Through self-service sign-up by an internal user using email verification (EmailVerified). Through self-service sign-up by a guest signing up through a link that is part of a user flow (SelfServiceSignUp). Read-only.Returned only on $select. Supports $filter (eq, ne, not, in).
     */
    private ?string $creationType;

    /**
     * An open complex type that holds the value of a custom security attribute that is assigned to a directory object. Nullable. Returned only on $select. Supports $filter (eq, ne, not, startsWith). The filter value is case-sensitive. To read this property, the calling app must be assigned the CustomSecAttributeAssignment.Read.All permission. To write this property, the calling app must be assigned the CustomSecAttributeAssignment.ReadWrite.All permissions. To read or write this property in delegated scenarios, the admin must be assigned the Attribute Assignment Administrator role.
     */
    private ?string $customSecurityAttributes;

    /**
     * The name of the department in which the user works. Maximum length is 64 characters. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in, and eq on null values).
     */
    private ?string $department;

    /**
     * The limit on the maximum number of devices that the user is permitted to enroll. Allowed values are 5 or 1000.
     */
    private ?float $deviceEnrollmentLimit;

    /**
     * The name displayed in the address book for the user. This value is usually the combination of the user''s first name, middle initial, and family name. This property is required when a user is created and it can''t be cleared during updates. Maximum length is 256 characters. Returned by default. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values), $orderby, and $search.
     */
    private ?string $displayName;

    /**
     * The date and time when the user was hired or will start work in a future hire. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in).
     */
    private ?\DateTimeInterface $employeeHireDate;

    /**
     * The employee identifier assigned to the user by the organization. The maximum length is 16 characters. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values).
     */
    private ?string $employeeId;

    /**
     * The date and time when the user left or will leave the organization. To read this property, the calling app must be assigned the User-LifeCycleInfo.Read.All permission. To write this property, the calling app must be assigned the User.Read.All and User-LifeCycleInfo.ReadWrite.All permissions. To read this property in delegated scenarios, the admin needs at least one of the following Microsoft Entra roles: Lifecycle Workflows Administrator (least privilege), Global Reader. To write this property in delegated scenarios, the admin needs the Global Administrator role. Supports $filter (eq, ne, not , ge, le, in). For more information, see Configure the employeeLeaveDateTime property for a user.
     */
    private ?\DateTimeInterface $employeeLeaveDateTime;

    /**
     * Represents organization data (for example, division and costCenter) associated with a user. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in).
     */
    private ?string $employeeOrgData;

    /**
     * Captures enterprise worker type. For example, Employee, Contractor, Consultant, or Vendor. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in, startsWith).
     */
    private ?string $employeeType;

    /**
     * For a guest invited to the tenant using the invitation API, this property represents the invited user''s invitation status. For invited users, the state can be PendingAcceptance or Accepted, or null for all other users. Returned only on $select. Supports $filter (eq, ne, not , in).
     */
    private ?string $externalUserState;

    /**
     * Shows the timestamp for the latest change to the externalUserState property. Returned only on $select. Supports $filter (eq, ne, not , in).
     */
    private ?\DateTimeInterface $externalUserStateChangeDateTime;

    /**
     * The fax number of the user. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values).
     */
    private ?string $faxNumber;

    /**
     * The given name (first name) of the user. Maximum length is 64 characters. Returned by default. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values).
     */
    private ?string $givenName;

    /**
     * The hire date of the user. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z. Returned only on $select.  Note: This property is specific to SharePoint in Microsoft 365. We recommend using the native employeeHireDate property to set and update hire date values using Microsoft Graph APIs.
     */
    private ?\DateTimeInterface $hireDate;

    /**
     * Represents the identities that can be used to sign in to this user account. Microsoft (also known as a local account), organizations, or social identity providers such as Facebook, Google, and Microsoft can provide identity and tie it to a user account. It might contain multiple items with the same signInType value. Returned only on $select.  Supports $filter (eq) with limitations.
     */
    private array $identities = [];

    /**
     * The instant message voice-over IP (VOIP) session initiation protocol (SIP) addresses for the user. Read-only. Returned only on $select. Supports $filter (eq, not, ge, le, startsWith).
     * @var string[]
     */
    private array $imAddresses = [];

    /**
     * A list for the user to describe their interests. Returned only on $select.
     * @var string[]
     */
    private array $interests = [];

    /**
     * true if the user is a member of a restricted management administrative unit. If not set, the default value is null and the default behavior is false. Read-only.  To manage a user who is a member of a restricted management administrative unit, the administrator or calling app must be assigned a Microsoft Entra role at the scope of the restricted management administrative unit. Returned only on $select.
     */
    private ?bool $isManagementRestricted;

    /**
     * Don't use – reserved for future use.
     */
    private ?bool $isResourceAccount;

    /**
     * The user''s job title. Maximum length is 128 characters. Returned by default. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values).
     */
    private ?string $jobTitle;

    /**
     * The time when this Microsoft Entra user last changed their password or when their password was created, whichever date the latest action was performed. The date and time information uses ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned only on $select.
     */
    private ?\DateTimeInterface $lastPasswordChangeDateTime;

    /**
     * Used by enterprise applications to determine the legal age group of the user. This property is read-only and calculated based on ageGroup and consentProvidedForMinor properties. Allowed values: null, Undefined,  MinorWithOutParentalConsent, MinorWithParentalConsent, MinorNoParentalConsentRequired, NotAdult, and Adult. For more information, see legal age group property definitions. Returned only on $select.
     */
    private ?string $legalAgeGroupClassification;

    /**
     * State of license assignments for this user. Also indicates licenses that are directly assigned or the user inherited through group memberships. Read-only. Returned only on $select.
     */
    private array $licenseAssignmentStates = [];

    /**
     * The SMTP address for the user, for example, jeff@contoso.com. Changes to this property update the user''s proxyAddresses collection to include the value as an SMTP address. This property can''t contain accent characters.  NOTE: We don''t recommend updating this property for Azure AD B2C user profiles. Use the otherMails property instead. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, endsWith, and eq on null values).
     */
    private ?string $mail;

    /**
     * Settings for the primary mailbox of the signed-in user. You can get or update settings for sending automatic replies to incoming messages, locale, and time zone. Returned only on $select.
     */
    private ?string $mailboxSettings;

    /**
     * The mail alias for the user. This property must be specified when a user is created. Maximum length is 64 characters. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     */
    private ?string $mailNickname;

    /**
     * The primary cellular telephone number for the user. Read-only for users synced from the on-premises directory. Maximum length is 64 characters. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values) and $search.
     */
    private ?string $mobilePhone;

    /**
     * The URL for the user's site. Returned only on $select.
     */
    private ?string $mySite;

    /**
     * The office location in the user''s place of business. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     */
    private ?string $officeLocation;

    /**
     * Contains the on-premises Active Directory distinguished name or DN. The property is only populated for customers who are synchronizing their on-premises directory to Microsoft Entra ID via Microsoft Entra Connect. Read-only. Returned only on $select.
     */
    private ?string $onPremisesDistinguishedName;

    /**
     * Contains the on-premises domainFQDN, also called dnsDomainName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Microsoft Entra ID via Microsoft Entra Connect. Read-only. Returned only on $select.
     */
    private ?string $onPremisesDomainName;

    /**
     * Contains extensionAttributes1-15 for the user. These extension attributes are also known as Exchange custom attributes 1-15. Each attribute can store up to 1024 characters. For an onPremisesSyncEnabled user, the source of authority for this set of properties is the on-premises and is read-only. For a cloud-only user (where onPremisesSyncEnabled is false), these properties can be set during the creation or update of a user object.  For a cloud-only user previously synced from on-premises Active Directory, these properties are read-only in Microsoft Graph but can be fully managed through the Exchange Admin Center or the Exchange Online V2 module in PowerShell. Returned only on $select. Supports $filter (eq, ne, not, in).
     */
    private ?string $onPremisesExtensionAttributes;

    /**
     * This property is used to associate an on-premises Active Directory user account to their Microsoft Entra user object. This property must be specified when creating a new user account in the Graph if you''re using a federated domain for the user''s userPrincipalName (UPN) property. NOTE: The $ and _ characters can''t be used when specifying this property. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in).
     */
    private ?string $onPremisesImmutableId;

    /**
     * Indicates the last time at which the object was synced with the on-premises directory; for example: 2013-02-16T03:04:54Z. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in).
     */
    private ?\DateTimeInterface $onPremisesLastSyncDateTime;

    /**
     * Errors when using Microsoft synchronization product during provisioning. Returned only on $select. Supports $filter (eq, not, ge, le).
     */
    private array $onPremisesProvisioningErrors = [];

    /**
     * Contains the on-premises samAccountName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Microsoft Entra ID via Microsoft Entra Connect. Read-only. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith).
     */
    private ?string $onPremisesSamAccountName;

    /**
     * Contains the on-premises security identifier (SID) for the user that was synchronized from on-premises to the cloud. Read-only. Returned only on $select. Supports $filter (eq including on null values).
     */
    private ?string $onPremisesSecurityIdentifier;

    /**
     * true if this user object is currently being synced from an on-premises Active Directory (AD); otherwise the user isn''t being synced and can be managed in Microsoft Entra ID. Read-only. Returned only on $select. Supports $filter (eq, ne, not, in, and eq on null values).
     */
    private ?bool $onPremisesSyncEnabled;

    /**
     * Contains the on-premises userPrincipalName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Microsoft Entra ID via Microsoft Entra Connect. Read-only. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith).
     */
    private ?string $onPremisesUserPrincipalName;

    /**
     * A list of other email addresses for the user; for example: [''bob@contoso.com'', ''Robert@fabrikam.com'']. Can store up to 250 values, each with a limit of 250 characters. NOTE: This property can''t contain accent characters. Returned only on $select. Supports $filter (eq, not, ge, le, in, startsWith, endsWith, /$count eq 0, /$count ne 0).
     * @var string[]
     */
    private array $otherMails = [];

    /**
     * Specifies password policies for the user. This value is an enumeration with one possible value being DisableStrongPassword, which allows weaker passwords than the default policy to be specified. DisablePasswordExpiration can also be specified. The two might be specified together; for example: DisablePasswordExpiration, DisableStrongPassword. Returned only on $select. For more information on the default password policies, see Microsoft Entra password policies. Supports $filter (ne, not, and eq on null values).
     */
    private ?string $passwordPolicies;

    /**
     * Specifies the password profile for the user. The profile contains the user''s password. This property is required when a user is created. The password in the profile must satisfy minimum requirements as specified by the passwordPolicies property. By default, a strong password is required. Returned only on $select. Supports $filter (eq, ne, not, in, and eq on null values). To update this property:  User-PasswordProfile.ReadWrite.All is the least privileged permission to update this property.  In delegated scenarios, the User Administrator Microsoft Entra role is the least privileged admin role supported to update this property for nonadmin users. Privileged Authentication Administrator is the least privileged role that''s allowed to update this property for all administrators in the tenant. In general, the signed-in user must have a higher privileged administrator role as indicated in Who can reset passwords.  In app-only scenarios, the calling app must be assigned a supported permission and at least the User Administrator Microsoft Entra role.
     */
    private ?string $passwordProfile;

    /**
     * A list for the user to enumerate their past projects. Returned only on $select.
     * @var string[]
     */
    private array $pastProjects = [];

    /**
     * The postal code for the user''s postal address. The postal code is specific to the user''s country or region. In the United States of America, this attribute contains the ZIP code. Maximum length is 40 characters. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     */
    private ?string $postalCode;

    /**
     * The preferred data location for the user. For more information, see OneDrive Online Multi-Geo.
     */
    private ?string $preferredDataLocation;

    /**
     * The preferred language for the user. The preferred language format is based on RFC 4646. The name is a combination of an ISO 639 two-letter lowercase culture code associated with the language, and an ISO 3166 two-letter uppercase subculture code associated with the country or region. Example: ''en-US'', or ''es-ES''. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values)
     */
    private ?string $preferredLanguage;

    /**
     * The preferred name for the user. Not Supported. This attribute returns an empty string.Returned only on $select.
     */
    private ?string $preferredName;

    /**
     */
    private ?string $print;

    /**
     * The plans that are provisioned for the user. Read-only. Not nullable. Returned only on $select. Supports $filter (eq, not, ge, le).
     */
    private array $provisionedPlans = [];

    /**
     * For example: [''SMTP: bob@contoso.com'', ''smtp: bob@sales.contoso.com'']. Changes to the mail property update this collection to include the value as an SMTP address. For more information, see mail and proxyAddresses properties. The proxy address prefixed with SMTP (capitalized) is the primary proxy address, while those addresses prefixed with smtp are the secondary proxy addresses. For Azure AD B2C accounts, this property has a limit of 10 unique addresses. Read-only in Microsoft Graph; you can update this property only through the Microsoft 365 admin center. Not nullable. Returned only on $select. Supports $filter (eq, not, ge, le, startsWith, endsWith, /$count eq 0, /$count ne 0).
     * @var string[]
     */
    private array $proxyAddresses = [];

    /**
     * A list for the user to enumerate their responsibilities. Returned only on $select.
     * @var string[]
     */
    private array $responsibilities = [];

    /**
     * A list for the user to enumerate the schools they attended. Returned only on $select.
     * @var string[]
     */
    private array $schools = [];

    /**
     * Security identifier (SID) of the user, used in Windows scenarios. Read-only. Returned by default. Supports $select and $filter (eq, not, ge, le, startsWith).
     */
    private ?string $securityIdentifier;

    /**
     * Errors published by a federated service describing a nontransient, service-specific error regarding the properties or link from a user object.  Supports $filter (eq, not, for isResolved and serviceInstance).
     */
    private array $serviceProvisioningErrors = [];

    /**
     * Do not use in Microsoft Graph. Manage this property through the Microsoft 365 admin center instead. Represents whether the user should be included in the Outlook global address list. See Known issue.
     */
    private ?bool $showInAddressList;

    /**
     * Get the last signed-in date and request ID of the sign-in for a given user. Read-only.Returned only on $select. Supports $filter (eq, ne, not, ge, le) but not with any other filterable properties. Note: Details for this property require a Microsoft Entra ID P1 or P2 license and the AuditLog.Read.All permission.This property isn''t returned for a user who never signed in or last signed in before April 2020.
     */
    private ?string $signInActivity;

    /**
     * Any refresh tokens or session tokens (session cookies) issued before this time are invalid. Applications get an error when using an invalid refresh or session token to acquire a delegated access token (to access APIs such as Microsoft Graph). If this happens, the application needs to acquire a new refresh token by requesting the authorized endpoint. Read-only. Use revokeSignInSessions to reset. Returned only on $select.
     */
    private ?\DateTimeInterface $signInSessionsValidFromDateTime;

    /**
     * A list for the user to enumerate their skills. Returned only on $select.
     * @var string[]
     */
    private array $skills = [];

    /**
     * The state or province in the user''s address. Maximum length is 128 characters. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     */
    private ?string $state;

    /**
     * The street address of the user''s place of business. Maximum length is 1,024 characters. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     */
    private ?string $streetAddress;

    /**
     * The user''s surname (family name or last name). Maximum length is 64 characters. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     */
    private ?string $surname;

    /**
     * A two-letter country code (ISO standard 3166). Required for users that are assigned licenses due to legal requirements to check for availability of services in countries/regions. Examples include: US, JP, and GB. Not nullable. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     */
    private ?string $usageLocation;

    /**
     * The user principal name (UPN) of the user. The UPN is an Internet-style sign-in name for the user based on the Internet standard RFC 822. By convention, this value should map to the user''s email name. The general format is alias@domain, where the domain must be present in the tenant''s collection of verified domains. This property is required when a user is created. The verified domains for the tenant can be accessed from the verifiedDomains property of organization.NOTE: This property can''t contain accent characters. Only the following characters are allowed A - Z, a - z, 0 - 9, '' . - _ ! # ^ ~. For the complete list of allowed characters, see username policies. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, endsWith) and $orderby.
     */
    private ?string $userPrincipalName;

    /**
     * A string value that can be used to classify user types in your directory. The possible values are Member and Guest. Returned only on $select. Supports $filter (eq, ne, not, in, and eq on null values). NOTE: For more information about the permissions for members and guests, see What are the default user permissions in Microsoft Entra ID?
     */
    private ?string $userType;

    /**
     * The user's activities across devices. Read-only. Nullable.
     */
    private array $activities = [];

    /**
     * The user's terms of use acceptance statuses. Read-only. Nullable.
     */
    private array $agreementAcceptances = [];

    /**
     * Represents the app roles a user is granted for an application. Supports $expand.
     */
    private array $appRoleAssignments = [];

    /**
     * The authentication methods that are supported for the user.
     */
    private ?string $authentication;

    /**
     * The user's primary calendar. Read-only.
     */
    private ?string $calendar;

    /**
     * The user's calendar groups. Read-only. Nullable.
     */
    private array $calendarGroups = [];

    /**
     * The user's calendars. Read-only. Nullable.
     */
    private array $calendars = [];

    /**
     * The calendar view for the calendar. Read-only. Nullable.
     */
    private array $calendarView = [];

    /**
     */
    private array $chats = [];

    /**
     */
    private ?string $cloudClipboard;

    /**
     * The user's contacts folders. Read-only. Nullable.
     */
    private array $contactFolders = [];

    /**
     * The user's contacts. Read-only. Nullable.
     */
    private array $contacts = [];

    /**
     * Directory objects that the user created. Read-only. Nullable.
     */
    private array $createdObjects = [];

    /**
     * The data security and governance settings for the user. Read-only. Nullable.
     */
    private ?string $dataSecurityAndGovernance;

    /**
     * The list of troubleshooting events for this user.
     */
    private array $deviceManagementTroubleshootingEvents = [];

    /**
     * The users and contacts that report to the user. (The users and contacts that have their manager property set to this user.) Read-only. Nullable. Supports $expand.
     */
    private array $directReports = [];

    /**
     * The user's OneDrive. Read-only.
     */
    private ?string $drive;

    /**
     * A collection of drives available for this user. Read-only.
     */
    private array $drives = [];

    /**
     */
    private ?string $employeeExperience;

    /**
     * The user's events. Default is to show Events under the Default Calendar. Read-only. Nullable.
     */
    private array $events = [];

    /**
     * The collection of open extensions defined for the user. Read-only. Supports $expand. Nullable.
     */
    private array $extensions = [];

    /**
     */
    private array $followedSites = [];

    /**
     * Relevance classification of the user's messages based on explicit designations that override inferred relevance or importance.
     */
    private ?string $inferenceClassification;

    /**
     * Represents relationships between a user and items such as OneDrive for work or school documents, calculated using advanced analytics and machine learning techniques. Read-only. Nullable.
     */
    private ?string $insights;

    /**
     */
    private array $joinedTeams = [];

    /**
     * A collection of this user's license details. Read-only.
     */
    private array $licenseDetails = [];

    /**
     * The user's mail folders. Read-only. Nullable.
     */
    private array $mailFolders = [];

    /**
     * Zero or more managed app registrations that belong to the user.
     */
    private array $managedAppRegistrations = [];

    /**
     * The managed devices associated with the user.
     */
    private array $managedDevices = [];

    /**
     * The user or contact that is this user's manager. Read-only. Supports $expand.
     */
    private ?string $manager;

    /**
     * The groups and directory roles that the user is a member of. Read-only. Nullable. Supports $expand.
     */
    private array $memberOf = [];

    /**
     * The messages in a mailbox or folder. Read-only. Nullable.
     */
    private array $messages = [];

    /**
     */
    private array $oauth2PermissionGrants = [];

    /**
     */
    private ?string $onenote;

    /**
     * Information about a meeting, including the URL used to join a meeting, the attendees list, and the description.
     */
    private array $onlineMeetings = [];

    /**
     */
    private ?string $outlook;

    /**
     * Devices the user owns. Read-only. Nullable. Supports $expand and $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1).
     */
    private array $ownedDevices = [];

    /**
     * Directory objects the user owns. Read-only. Nullable. Supports $expand, $select nested in $expand, and $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1).
     */
    private array $ownedObjects = [];

    /**
     * People that are relevant to the user. Read-only. Nullable.
     */
    private array $people = [];

    /**
     * List all resource-specific permission grants of a user.
     */
    private array $permissionGrants = [];

    /**
     * The user's profile photo. Read-only.
     */
    private ?string $photo;

    /**
     * The collection of the user's profile photos in different sizes. Read-only.
     */
    private array $photos = [];

    /**
     * Entry-point to the Planner resource that might exist for a user. Read-only.
     */
    private ?string $planner;

    /**
     */
    private ?string $presence;

    /**
     * Devices that are registered for the user. Read-only. Nullable. Supports $expand and returns up to 100 objects.
     */
    private array $registeredDevices = [];

    /**
     */
    private array $scopedRoleMemberOf = [];

    /**
     */
    private ?string $settings;

    /**
     * The identifier that relates the user to the working time schedule triggers. Read-Only. Nullable
     */
    private ?string $solutions;

    /**
     * The users and groups responsible for this guest''s privileges in the tenant and keeping the guest''s information and access updated. (HTTP Methods: GET, POST, DELETE.). Supports $expand.
     */
    private array $sponsors = [];

    /**
     * A container for Microsoft Teams features available for the user. Read-only. Nullable.
     */
    private ?string $teamwork;

    /**
     * Represents the To Do services available to a user.
     */
    private ?string $todo;

    /**
     * Represents a Microsoft Entra user account.
     * @var string[]
     */
    private array $transitiveMemberOf = [];


    public function getAboutMe(): ?string
    {
        return $this->aboutMe;
    }

    public function setAboutMe(?string $aboutMe): self
    {
        $this->aboutMe = $aboutMe;
        return $this;
    }

    public function getAccountEnabled(): ?bool
    {
        return $this->accountEnabled;
    }

    public function setAccountEnabled(?bool $accountEnabled): self
    {
        $this->accountEnabled = $accountEnabled;
        return $this;
    }

    public function getAgeGroup(): ?string
    {
        return $this->ageGroup;
    }

    public function setAgeGroup(?string $ageGroup): self
    {
        $this->ageGroup = $ageGroup;
        return $this;
    }

    public function getAssignedLicenses(): array
    {
        return $this->assignedLicenses;
    }

    public function setAssignedLicenses(array $assignedLicenses): self
    {
        $this->assignedLicenses = $assignedLicenses;
        return $this;
    }

    public function getAssignedPlans(): array
    {
        return $this->assignedPlans;
    }

    public function setAssignedPlans(array $assignedPlans): self
    {
        $this->assignedPlans = $assignedPlans;
        return $this;
    }

    public function getAuthorizationInfo(): ?string
    {
        return $this->authorizationInfo;
    }

    public function setAuthorizationInfo(?string $authorizationInfo): self
    {
        $this->authorizationInfo = $authorizationInfo;
        return $this;
    }

    public function getBirthday(): ?\DateTimeInterface
    {
        return $this->birthday;
    }

    public function setBirthday(?\DateTimeInterface $birthday): self
    {
        $this->birthday = $birthday;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getBusinessPhones(): array
    {
        return $this->businessPhones;
    }

    /**
     * @param string[] $businessPhones
     */
    public function setBusinessPhones(array $businessPhones): self
    {
        $this->businessPhones = $businessPhones;
        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;
        return $this;
    }

    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    public function setCompanyName(?string $companyName): self
    {
        $this->companyName = $companyName;
        return $this;
    }

    public function getConsentProvidedForMinor(): ?string
    {
        return $this->consentProvidedForMinor;
    }

    public function setConsentProvidedForMinor(?string $consentProvidedForMinor): self
    {
        $this->consentProvidedForMinor = $consentProvidedForMinor;
        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;
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

    public function getCreationType(): ?string
    {
        return $this->creationType;
    }

    public function setCreationType(?string $creationType): self
    {
        $this->creationType = $creationType;
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

    public function getDepartment(): ?string
    {
        return $this->department;
    }

    public function setDepartment(?string $department): self
    {
        $this->department = $department;
        return $this;
    }

    public function getDeviceEnrollmentLimit(): ?float
    {
        return $this->deviceEnrollmentLimit;
    }

    public function setDeviceEnrollmentLimit(?float $deviceEnrollmentLimit): self
    {
        $this->deviceEnrollmentLimit = $deviceEnrollmentLimit;
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

    public function getEmployeeHireDate(): ?\DateTimeInterface
    {
        return $this->employeeHireDate;
    }

    public function setEmployeeHireDate(?\DateTimeInterface $employeeHireDate): self
    {
        $this->employeeHireDate = $employeeHireDate;
        return $this;
    }

    public function getEmployeeId(): ?string
    {
        return $this->employeeId;
    }

    public function setEmployeeId(?string $employeeId): self
    {
        $this->employeeId = $employeeId;
        return $this;
    }

    public function getEmployeeLeaveDateTime(): ?\DateTimeInterface
    {
        return $this->employeeLeaveDateTime;
    }

    public function setEmployeeLeaveDateTime(?\DateTimeInterface $employeeLeaveDateTime): self
    {
        $this->employeeLeaveDateTime = $employeeLeaveDateTime;
        return $this;
    }

    public function getEmployeeOrgData(): ?string
    {
        return $this->employeeOrgData;
    }

    public function setEmployeeOrgData(?string $employeeOrgData): self
    {
        $this->employeeOrgData = $employeeOrgData;
        return $this;
    }

    public function getEmployeeType(): ?string
    {
        return $this->employeeType;
    }

    public function setEmployeeType(?string $employeeType): self
    {
        $this->employeeType = $employeeType;
        return $this;
    }

    public function getExternalUserState(): ?string
    {
        return $this->externalUserState;
    }

    public function setExternalUserState(?string $externalUserState): self
    {
        $this->externalUserState = $externalUserState;
        return $this;
    }

    public function getExternalUserStateChangeDateTime(): ?\DateTimeInterface
    {
        return $this->externalUserStateChangeDateTime;
    }

    public function setExternalUserStateChangeDateTime(?\DateTimeInterface $externalUserStateChangeDateTime): self
    {
        $this->externalUserStateChangeDateTime = $externalUserStateChangeDateTime;
        return $this;
    }

    public function getFaxNumber(): ?string
    {
        return $this->faxNumber;
    }

    public function setFaxNumber(?string $faxNumber): self
    {
        $this->faxNumber = $faxNumber;
        return $this;
    }

    public function getGivenName(): ?string
    {
        return $this->givenName;
    }

    public function setGivenName(?string $givenName): self
    {
        $this->givenName = $givenName;
        return $this;
    }

    public function getHireDate(): ?\DateTimeInterface
    {
        return $this->hireDate;
    }

    public function setHireDate(?\DateTimeInterface $hireDate): self
    {
        $this->hireDate = $hireDate;
        return $this;
    }

    public function getIdentities(): array
    {
        return $this->identities;
    }

    public function setIdentities(array $identities): self
    {
        $this->identities = $identities;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getImAddresses(): array
    {
        return $this->imAddresses;
    }

    /**
     * @param string[] $imAddresses
     */
    public function setImAddresses(array $imAddresses): self
    {
        $this->imAddresses = $imAddresses;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getInterests(): array
    {
        return $this->interests;
    }

    /**
     * @param string[] $interests
     */
    public function setInterests(array $interests): self
    {
        $this->interests = $interests;
        return $this;
    }

    public function getIsManagementRestricted(): ?bool
    {
        return $this->isManagementRestricted;
    }

    public function setIsManagementRestricted(?bool $isManagementRestricted): self
    {
        $this->isManagementRestricted = $isManagementRestricted;
        return $this;
    }

    public function getIsResourceAccount(): ?bool
    {
        return $this->isResourceAccount;
    }

    public function setIsResourceAccount(?bool $isResourceAccount): self
    {
        $this->isResourceAccount = $isResourceAccount;
        return $this;
    }

    public function getJobTitle(): ?string
    {
        return $this->jobTitle;
    }

    public function setJobTitle(?string $jobTitle): self
    {
        $this->jobTitle = $jobTitle;
        return $this;
    }

    public function getLastPasswordChangeDateTime(): ?\DateTimeInterface
    {
        return $this->lastPasswordChangeDateTime;
    }

    public function setLastPasswordChangeDateTime(?\DateTimeInterface $lastPasswordChangeDateTime): self
    {
        $this->lastPasswordChangeDateTime = $lastPasswordChangeDateTime;
        return $this;
    }

    public function getLegalAgeGroupClassification(): ?string
    {
        return $this->legalAgeGroupClassification;
    }

    public function setLegalAgeGroupClassification(?string $legalAgeGroupClassification): self
    {
        $this->legalAgeGroupClassification = $legalAgeGroupClassification;
        return $this;
    }

    public function getLicenseAssignmentStates(): array
    {
        return $this->licenseAssignmentStates;
    }

    public function setLicenseAssignmentStates(array $licenseAssignmentStates): self
    {
        $this->licenseAssignmentStates = $licenseAssignmentStates;
        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->mail = $mail;
        return $this;
    }

    public function getMailboxSettings(): ?string
    {
        return $this->mailboxSettings;
    }

    public function setMailboxSettings(?string $mailboxSettings): self
    {
        $this->mailboxSettings = $mailboxSettings;
        return $this;
    }

    public function getMailNickname(): ?string
    {
        return $this->mailNickname;
    }

    public function setMailNickname(?string $mailNickname): self
    {
        $this->mailNickname = $mailNickname;
        return $this;
    }

    public function getMobilePhone(): ?string
    {
        return $this->mobilePhone;
    }

    public function setMobilePhone(?string $mobilePhone): self
    {
        $this->mobilePhone = $mobilePhone;
        return $this;
    }

    public function getMySite(): ?string
    {
        return $this->mySite;
    }

    public function setMySite(?string $mySite): self
    {
        $this->mySite = $mySite;
        return $this;
    }

    public function getOfficeLocation(): ?string
    {
        return $this->officeLocation;
    }

    public function setOfficeLocation(?string $officeLocation): self
    {
        $this->officeLocation = $officeLocation;
        return $this;
    }

    public function getOnPremisesDistinguishedName(): ?string
    {
        return $this->onPremisesDistinguishedName;
    }

    public function setOnPremisesDistinguishedName(?string $onPremisesDistinguishedName): self
    {
        $this->onPremisesDistinguishedName = $onPremisesDistinguishedName;
        return $this;
    }

    public function getOnPremisesDomainName(): ?string
    {
        return $this->onPremisesDomainName;
    }

    public function setOnPremisesDomainName(?string $onPremisesDomainName): self
    {
        $this->onPremisesDomainName = $onPremisesDomainName;
        return $this;
    }

    public function getOnPremisesExtensionAttributes(): ?string
    {
        return $this->onPremisesExtensionAttributes;
    }

    public function setOnPremisesExtensionAttributes(?string $onPremisesExtensionAttributes): self
    {
        $this->onPremisesExtensionAttributes = $onPremisesExtensionAttributes;
        return $this;
    }

    public function getOnPremisesImmutableId(): ?string
    {
        return $this->onPremisesImmutableId;
    }

    public function setOnPremisesImmutableId(?string $onPremisesImmutableId): self
    {
        $this->onPremisesImmutableId = $onPremisesImmutableId;
        return $this;
    }

    public function getOnPremisesLastSyncDateTime(): ?\DateTimeInterface
    {
        return $this->onPremisesLastSyncDateTime;
    }

    public function setOnPremisesLastSyncDateTime(?\DateTimeInterface $onPremisesLastSyncDateTime): self
    {
        $this->onPremisesLastSyncDateTime = $onPremisesLastSyncDateTime;
        return $this;
    }

    public function getOnPremisesProvisioningErrors(): array
    {
        return $this->onPremisesProvisioningErrors;
    }

    public function setOnPremisesProvisioningErrors(array $onPremisesProvisioningErrors): self
    {
        $this->onPremisesProvisioningErrors = $onPremisesProvisioningErrors;
        return $this;
    }

    public function getOnPremisesSamAccountName(): ?string
    {
        return $this->onPremisesSamAccountName;
    }

    public function setOnPremisesSamAccountName(?string $onPremisesSamAccountName): self
    {
        $this->onPremisesSamAccountName = $onPremisesSamAccountName;
        return $this;
    }

    public function getOnPremisesSecurityIdentifier(): ?string
    {
        return $this->onPremisesSecurityIdentifier;
    }

    public function setOnPremisesSecurityIdentifier(?string $onPremisesSecurityIdentifier): self
    {
        $this->onPremisesSecurityIdentifier = $onPremisesSecurityIdentifier;
        return $this;
    }

    public function getOnPremisesSyncEnabled(): ?bool
    {
        return $this->onPremisesSyncEnabled;
    }

    public function setOnPremisesSyncEnabled(?bool $onPremisesSyncEnabled): self
    {
        $this->onPremisesSyncEnabled = $onPremisesSyncEnabled;
        return $this;
    }

    public function getOnPremisesUserPrincipalName(): ?string
    {
        return $this->onPremisesUserPrincipalName;
    }

    public function setOnPremisesUserPrincipalName(?string $onPremisesUserPrincipalName): self
    {
        $this->onPremisesUserPrincipalName = $onPremisesUserPrincipalName;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getOtherMails(): array
    {
        return $this->otherMails;
    }

    /**
     * @param string[] $otherMails
     */
    public function setOtherMails(array $otherMails): self
    {
        $this->otherMails = $otherMails;
        return $this;
    }

    public function getPasswordPolicies(): ?string
    {
        return $this->passwordPolicies;
    }

    public function setPasswordPolicies(?string $passwordPolicies): self
    {
        $this->passwordPolicies = $passwordPolicies;
        return $this;
    }

    public function getPasswordProfile(): ?string
    {
        return $this->passwordProfile;
    }

    public function setPasswordProfile(?string $passwordProfile): self
    {
        $this->passwordProfile = $passwordProfile;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getPastProjects(): array
    {
        return $this->pastProjects;
    }

    /**
     * @param string[] $pastProjects
     */
    public function setPastProjects(array $pastProjects): self
    {
        $this->pastProjects = $pastProjects;
        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(?string $postalCode): self
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    public function getPreferredDataLocation(): ?string
    {
        return $this->preferredDataLocation;
    }

    public function setPreferredDataLocation(?string $preferredDataLocation): self
    {
        $this->preferredDataLocation = $preferredDataLocation;
        return $this;
    }

    public function getPreferredLanguage(): ?string
    {
        return $this->preferredLanguage;
    }

    public function setPreferredLanguage(?string $preferredLanguage): self
    {
        $this->preferredLanguage = $preferredLanguage;
        return $this;
    }

    public function getPreferredName(): ?string
    {
        return $this->preferredName;
    }

    public function setPreferredName(?string $preferredName): self
    {
        $this->preferredName = $preferredName;
        return $this;
    }

    public function getPrint(): ?string
    {
        return $this->print;
    }

    public function setPrint(?string $print): self
    {
        $this->print = $print;
        return $this;
    }

    public function getProvisionedPlans(): array
    {
        return $this->provisionedPlans;
    }

    public function setProvisionedPlans(array $provisionedPlans): self
    {
        $this->provisionedPlans = $provisionedPlans;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getProxyAddresses(): array
    {
        return $this->proxyAddresses;
    }

    /**
     * @param string[] $proxyAddresses
     */
    public function setProxyAddresses(array $proxyAddresses): self
    {
        $this->proxyAddresses = $proxyAddresses;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getResponsibilities(): array
    {
        return $this->responsibilities;
    }

    /**
     * @param string[] $responsibilities
     */
    public function setResponsibilities(array $responsibilities): self
    {
        $this->responsibilities = $responsibilities;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSchools(): array
    {
        return $this->schools;
    }

    /**
     * @param string[] $schools
     */
    public function setSchools(array $schools): self
    {
        $this->schools = $schools;
        return $this;
    }

    public function getSecurityIdentifier(): ?string
    {
        return $this->securityIdentifier;
    }

    public function setSecurityIdentifier(?string $securityIdentifier): self
    {
        $this->securityIdentifier = $securityIdentifier;
        return $this;
    }

    public function getServiceProvisioningErrors(): array
    {
        return $this->serviceProvisioningErrors;
    }

    public function setServiceProvisioningErrors(array $serviceProvisioningErrors): self
    {
        $this->serviceProvisioningErrors = $serviceProvisioningErrors;
        return $this;
    }

    public function getShowInAddressList(): ?bool
    {
        return $this->showInAddressList;
    }

    public function setShowInAddressList(?bool $showInAddressList): self
    {
        $this->showInAddressList = $showInAddressList;
        return $this;
    }

    public function getSignInActivity(): ?string
    {
        return $this->signInActivity;
    }

    public function setSignInActivity(?string $signInActivity): self
    {
        $this->signInActivity = $signInActivity;
        return $this;
    }

    public function getSignInSessionsValidFromDateTime(): ?\DateTimeInterface
    {
        return $this->signInSessionsValidFromDateTime;
    }

    public function setSignInSessionsValidFromDateTime(?\DateTimeInterface $signInSessionsValidFromDateTime): self
    {
        $this->signInSessionsValidFromDateTime = $signInSessionsValidFromDateTime;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSkills(): array
    {
        return $this->skills;
    }

    /**
     * @param string[] $skills
     */
    public function setSkills(array $skills): self
    {
        $this->skills = $skills;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
    }

    public function getStreetAddress(): ?string
    {
        return $this->streetAddress;
    }

    public function setStreetAddress(?string $streetAddress): self
    {
        $this->streetAddress = $streetAddress;
        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(?string $surname): self
    {
        $this->surname = $surname;
        return $this;
    }

    public function getUsageLocation(): ?string
    {
        return $this->usageLocation;
    }

    public function setUsageLocation(?string $usageLocation): self
    {
        $this->usageLocation = $usageLocation;
        return $this;
    }

    public function getUserPrincipalName(): ?string
    {
        return $this->userPrincipalName;
    }

    public function setUserPrincipalName(?string $userPrincipalName): self
    {
        $this->userPrincipalName = $userPrincipalName;
        return $this;
    }

    public function getUserType(): ?string
    {
        return $this->userType;
    }

    public function setUserType(?string $userType): self
    {
        $this->userType = $userType;
        return $this;
    }

    public function getActivities(): array
    {
        return $this->activities;
    }

    public function setActivities(array $activities): self
    {
        $this->activities = $activities;
        return $this;
    }

    public function getAgreementAcceptances(): array
    {
        return $this->agreementAcceptances;
    }

    public function setAgreementAcceptances(array $agreementAcceptances): self
    {
        $this->agreementAcceptances = $agreementAcceptances;
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

    public function getAuthentication(): ?string
    {
        return $this->authentication;
    }

    public function setAuthentication(?string $authentication): self
    {
        $this->authentication = $authentication;
        return $this;
    }

    public function getCalendar(): ?string
    {
        return $this->calendar;
    }

    public function setCalendar(?string $calendar): self
    {
        $this->calendar = $calendar;
        return $this;
    }

    public function getCalendarGroups(): array
    {
        return $this->calendarGroups;
    }

    public function setCalendarGroups(array $calendarGroups): self
    {
        $this->calendarGroups = $calendarGroups;
        return $this;
    }

    public function getCalendars(): array
    {
        return $this->calendars;
    }

    public function setCalendars(array $calendars): self
    {
        $this->calendars = $calendars;
        return $this;
    }

    public function getCalendarView(): array
    {
        return $this->calendarView;
    }

    public function setCalendarView(array $calendarView): self
    {
        $this->calendarView = $calendarView;
        return $this;
    }

    public function getChats(): array
    {
        return $this->chats;
    }

    public function setChats(array $chats): self
    {
        $this->chats = $chats;
        return $this;
    }

    public function getCloudClipboard(): ?string
    {
        return $this->cloudClipboard;
    }

    public function setCloudClipboard(?string $cloudClipboard): self
    {
        $this->cloudClipboard = $cloudClipboard;
        return $this;
    }

    public function getContactFolders(): array
    {
        return $this->contactFolders;
    }

    public function setContactFolders(array $contactFolders): self
    {
        $this->contactFolders = $contactFolders;
        return $this;
    }

    public function getContacts(): array
    {
        return $this->contacts;
    }

    public function setContacts(array $contacts): self
    {
        $this->contacts = $contacts;
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

    public function getDataSecurityAndGovernance(): ?string
    {
        return $this->dataSecurityAndGovernance;
    }

    public function setDataSecurityAndGovernance(?string $dataSecurityAndGovernance): self
    {
        $this->dataSecurityAndGovernance = $dataSecurityAndGovernance;
        return $this;
    }

    public function getDeviceManagementTroubleshootingEvents(): array
    {
        return $this->deviceManagementTroubleshootingEvents;
    }

    public function setDeviceManagementTroubleshootingEvents(array $deviceManagementTroubleshootingEvents): self
    {
        $this->deviceManagementTroubleshootingEvents = $deviceManagementTroubleshootingEvents;
        return $this;
    }

    public function getDirectReports(): array
    {
        return $this->directReports;
    }

    public function setDirectReports(array $directReports): self
    {
        $this->directReports = $directReports;
        return $this;
    }

    public function getDrive(): ?string
    {
        return $this->drive;
    }

    public function setDrive(?string $drive): self
    {
        $this->drive = $drive;
        return $this;
    }

    public function getDrives(): array
    {
        return $this->drives;
    }

    public function setDrives(array $drives): self
    {
        $this->drives = $drives;
        return $this;
    }

    public function getEmployeeExperience(): ?string
    {
        return $this->employeeExperience;
    }

    public function setEmployeeExperience(?string $employeeExperience): self
    {
        $this->employeeExperience = $employeeExperience;
        return $this;
    }

    public function getEvents(): array
    {
        return $this->events;
    }

    public function setEvents(array $events): self
    {
        $this->events = $events;
        return $this;
    }

    public function getExtensions(): array
    {
        return $this->extensions;
    }

    public function setExtensions(array $extensions): self
    {
        $this->extensions = $extensions;
        return $this;
    }

    public function getFollowedSites(): array
    {
        return $this->followedSites;
    }

    public function setFollowedSites(array $followedSites): self
    {
        $this->followedSites = $followedSites;
        return $this;
    }

    public function getInferenceClassification(): ?string
    {
        return $this->inferenceClassification;
    }

    public function setInferenceClassification(?string $inferenceClassification): self
    {
        $this->inferenceClassification = $inferenceClassification;
        return $this;
    }

    public function getInsights(): ?string
    {
        return $this->insights;
    }

    public function setInsights(?string $insights): self
    {
        $this->insights = $insights;
        return $this;
    }

    public function getJoinedTeams(): array
    {
        return $this->joinedTeams;
    }

    public function setJoinedTeams(array $joinedTeams): self
    {
        $this->joinedTeams = $joinedTeams;
        return $this;
    }

    public function getLicenseDetails(): array
    {
        return $this->licenseDetails;
    }

    public function setLicenseDetails(array $licenseDetails): self
    {
        $this->licenseDetails = $licenseDetails;
        return $this;
    }

    public function getMailFolders(): array
    {
        return $this->mailFolders;
    }

    public function setMailFolders(array $mailFolders): self
    {
        $this->mailFolders = $mailFolders;
        return $this;
    }

    public function getManagedAppRegistrations(): array
    {
        return $this->managedAppRegistrations;
    }

    public function setManagedAppRegistrations(array $managedAppRegistrations): self
    {
        $this->managedAppRegistrations = $managedAppRegistrations;
        return $this;
    }

    public function getManagedDevices(): array
    {
        return $this->managedDevices;
    }

    public function setManagedDevices(array $managedDevices): self
    {
        $this->managedDevices = $managedDevices;
        return $this;
    }

    public function getManager(): ?string
    {
        return $this->manager;
    }

    public function setManager(?string $manager): self
    {
        $this->manager = $manager;
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

    public function getMessages(): array
    {
        return $this->messages;
    }

    public function setMessages(array $messages): self
    {
        $this->messages = $messages;
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

    public function getOnenote(): ?string
    {
        return $this->onenote;
    }

    public function setOnenote(?string $onenote): self
    {
        $this->onenote = $onenote;
        return $this;
    }

    public function getOnlineMeetings(): array
    {
        return $this->onlineMeetings;
    }

    public function setOnlineMeetings(array $onlineMeetings): self
    {
        $this->onlineMeetings = $onlineMeetings;
        return $this;
    }

    public function getOutlook(): ?string
    {
        return $this->outlook;
    }

    public function setOutlook(?string $outlook): self
    {
        $this->outlook = $outlook;
        return $this;
    }

    public function getOwnedDevices(): array
    {
        return $this->ownedDevices;
    }

    public function setOwnedDevices(array $ownedDevices): self
    {
        $this->ownedDevices = $ownedDevices;
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

    public function getPeople(): array
    {
        return $this->people;
    }

    public function setPeople(array $people): self
    {
        $this->people = $people;
        return $this;
    }

    public function getPermissionGrants(): array
    {
        return $this->permissionGrants;
    }

    public function setPermissionGrants(array $permissionGrants): self
    {
        $this->permissionGrants = $permissionGrants;
        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;
        return $this;
    }

    public function getPhotos(): array
    {
        return $this->photos;
    }

    public function setPhotos(array $photos): self
    {
        $this->photos = $photos;
        return $this;
    }

    public function getPlanner(): ?string
    {
        return $this->planner;
    }

    public function setPlanner(?string $planner): self
    {
        $this->planner = $planner;
        return $this;
    }

    public function getPresence(): ?string
    {
        return $this->presence;
    }

    public function setPresence(?string $presence): self
    {
        $this->presence = $presence;
        return $this;
    }

    public function getRegisteredDevices(): array
    {
        return $this->registeredDevices;
    }

    public function setRegisteredDevices(array $registeredDevices): self
    {
        $this->registeredDevices = $registeredDevices;
        return $this;
    }

    public function getScopedRoleMemberOf(): array
    {
        return $this->scopedRoleMemberOf;
    }

    public function setScopedRoleMemberOf(array $scopedRoleMemberOf): self
    {
        $this->scopedRoleMemberOf = $scopedRoleMemberOf;
        return $this;
    }

    public function getSettings(): ?string
    {
        return $this->settings;
    }

    public function setSettings(?string $settings): self
    {
        $this->settings = $settings;
        return $this;
    }

    public function getSolutions(): ?string
    {
        return $this->solutions;
    }

    public function setSolutions(?string $solutions): self
    {
        $this->solutions = $solutions;
        return $this;
    }

    public function getSponsors(): array
    {
        return $this->sponsors;
    }

    public function setSponsors(array $sponsors): self
    {
        $this->sponsors = $sponsors;
        return $this;
    }

    public function getTeamwork(): ?string
    {
        return $this->teamwork;
    }

    public function setTeamwork(?string $teamwork): self
    {
        $this->teamwork = $teamwork;
        return $this;
    }

    public function getTodo(): ?string
    {
        return $this->todo;
    }

    public function setTodo(?string $todo): self
    {
        $this->todo = $todo;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTransitiveMemberOf(): array
    {
        return $this->transitiveMemberOf;
    }

    /**
     * @param string[] $transitiveMemberOf
     */
    public function setTransitiveMemberOf(array $transitiveMemberOf): self
    {
        $this->transitiveMemberOf = $transitiveMemberOf;
        return $this;
    }

}
