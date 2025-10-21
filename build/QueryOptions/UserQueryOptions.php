<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for User resources
 *
 * Available select fields:
 * - aboutMe
 * - accountEnabled
 * - ageGroup
 * - assignedLicenses
 * - assignedPlans
 * - authorizationInfo
 * - birthday
 * - businessPhones
 * - city
 * - companyName
 * - consentProvidedForMinor
 * - country
 * - createdDateTime
 * - creationType
 * - customSecurityAttributes
 * - department
 * - deviceEnrollmentLimit
 * - displayName
 * - employeeHireDate
 * - employeeId
 * - employeeLeaveDateTime
 * - employeeOrgData
 * - employeeType
 * - externalUserState
 * - externalUserStateChangeDateTime
 * - faxNumber
 * - givenName
 * - hireDate
 * - identities
 * - imAddresses
 * - interests
 * - isManagementRestricted
 * - isResourceAccount
 * - jobTitle
 * - lastPasswordChangeDateTime
 * - legalAgeGroupClassification
 * - licenseAssignmentStates
 * - mail
 * - mailboxSettings
 * - mailNickname
 * - mobilePhone
 * - mySite
 * - officeLocation
 * - onPremisesDistinguishedName
 * - onPremisesDomainName
 * - onPremisesExtensionAttributes
 * - onPremisesImmutableId
 * - onPremisesLastSyncDateTime
 * - onPremisesProvisioningErrors
 * - onPremisesSamAccountName
 * - onPremisesSecurityIdentifier
 * - onPremisesSyncEnabled
 * - onPremisesUserPrincipalName
 * - otherMails
 * - passwordPolicies
 * - passwordProfile
 * - pastProjects
 * - postalCode
 * - preferredDataLocation
 * - preferredLanguage
 * - preferredName
 * - print
 * - provisionedPlans
 * - proxyAddresses
 * - responsibilities
 * - schools
 * - securityIdentifier
 * - serviceProvisioningErrors
 * - showInAddressList
 * - signInActivity
 * - signInSessionsValidFromDateTime
 * - skills
 * - state
 * - streetAddress
 * - surname
 * - usageLocation
 * - userPrincipalName
 * - userType
 * - activities
 * - agreementAcceptances
 * - appRoleAssignments
 * - authentication
 * - calendar
 * - calendarGroups
 * - calendars
 * - calendarView
 * - chats
 * - cloudClipboard
 * - contactFolders
 * - contacts
 * - createdObjects
 * - dataSecurityAndGovernance
 * - deviceManagementTroubleshootingEvents
 * - directReports
 * - drive
 * - drives
 * - employeeExperience
 * - events
 * - extensions
 * - followedSites
 * - inferenceClassification
 * - insights
 * - joinedTeams
 * - licenseDetails
 * - mailFolders
 * - managedAppRegistrations
 * - managedDevices
 * - manager
 * - memberOf
 * - messages
 * - oauth2PermissionGrants
 * - onenote
 * - onlineMeetings
 * - outlook
 * - ownedDevices
 * - ownedObjects
 * - people
 * - permissionGrants
 * - photo
 * - photos
 * - planner
 * - presence
 * - registeredDevices
 * - scopedRoleMemberOf
 * - settings
 * - solutions
 * - sponsors
 * - teamwork
 * - todo
 * - transitiveMemberOf
 */
class UserQueryOptions extends QueryOptions
{
    /**
     * Available select fields for User
     */
    public const FIELD_ABOUT_ME = 'aboutMe';
    public const FIELD_ACCOUNT_ENABLED = 'accountEnabled';
    public const FIELD_AGE_GROUP = 'ageGroup';
    public const FIELD_ASSIGNED_LICENSES = 'assignedLicenses';
    public const FIELD_ASSIGNED_PLANS = 'assignedPlans';
    public const FIELD_AUTHORIZATION_INFO = 'authorizationInfo';
    public const FIELD_BIRTHDAY = 'birthday';
    public const FIELD_BUSINESS_PHONES = 'businessPhones';
    public const FIELD_CITY = 'city';
    public const FIELD_COMPANY_NAME = 'companyName';
    public const FIELD_CONSENT_PROVIDED_FOR_MINOR = 'consentProvidedForMinor';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_CREATION_TYPE = 'creationType';
    public const FIELD_CUSTOM_SECURITY_ATTRIBUTES = 'customSecurityAttributes';
    public const FIELD_DEPARTMENT = 'department';
    public const FIELD_DEVICE_ENROLLMENT_LIMIT = 'deviceEnrollmentLimit';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_EMPLOYEE_HIRE_DATE = 'employeeHireDate';
    public const FIELD_EMPLOYEE_ID = 'employeeId';
    public const FIELD_EMPLOYEE_LEAVE_DATE_TIME = 'employeeLeaveDateTime';
    public const FIELD_EMPLOYEE_ORG_DATA = 'employeeOrgData';
    public const FIELD_EMPLOYEE_TYPE = 'employeeType';
    public const FIELD_EXTERNAL_USER_STATE = 'externalUserState';
    public const FIELD_EXTERNAL_USER_STATE_CHANGE_DATE_TIME = 'externalUserStateChangeDateTime';
    public const FIELD_FAX_NUMBER = 'faxNumber';
    public const FIELD_GIVEN_NAME = 'givenName';
    public const FIELD_HIRE_DATE = 'hireDate';
    public const FIELD_IDENTITIES = 'identities';
    public const FIELD_IM_ADDRESSES = 'imAddresses';
    public const FIELD_INTERESTS = 'interests';
    public const FIELD_IS_MANAGEMENT_RESTRICTED = 'isManagementRestricted';
    public const FIELD_IS_RESOURCE_ACCOUNT = 'isResourceAccount';
    public const FIELD_JOB_TITLE = 'jobTitle';
    public const FIELD_LAST_PASSWORD_CHANGE_DATE_TIME = 'lastPasswordChangeDateTime';
    public const FIELD_LEGAL_AGE_GROUP_CLASSIFICATION = 'legalAgeGroupClassification';
    public const FIELD_LICENSE_ASSIGNMENT_STATES = 'licenseAssignmentStates';
    public const FIELD_MAIL = 'mail';
    public const FIELD_MAILBOX_SETTINGS = 'mailboxSettings';
    public const FIELD_MAIL_NICKNAME = 'mailNickname';
    public const FIELD_MOBILE_PHONE = 'mobilePhone';
    public const FIELD_MY_SITE = 'mySite';
    public const FIELD_OFFICE_LOCATION = 'officeLocation';
    public const FIELD_ON_PREMISES_DISTINGUISHED_NAME = 'onPremisesDistinguishedName';
    public const FIELD_ON_PREMISES_DOMAIN_NAME = 'onPremisesDomainName';
    public const FIELD_ON_PREMISES_EXTENSION_ATTRIBUTES = 'onPremisesExtensionAttributes';
    public const FIELD_ON_PREMISES_IMMUTABLE_ID = 'onPremisesImmutableId';
    public const FIELD_ON_PREMISES_LAST_SYNC_DATE_TIME = 'onPremisesLastSyncDateTime';
    public const FIELD_ON_PREMISES_PROVISIONING_ERRORS = 'onPremisesProvisioningErrors';
    public const FIELD_ON_PREMISES_SAM_ACCOUNT_NAME = 'onPremisesSamAccountName';
    public const FIELD_ON_PREMISES_SECURITY_IDENTIFIER = 'onPremisesSecurityIdentifier';
    public const FIELD_ON_PREMISES_SYNC_ENABLED = 'onPremisesSyncEnabled';
    public const FIELD_ON_PREMISES_USER_PRINCIPAL_NAME = 'onPremisesUserPrincipalName';
    public const FIELD_OTHER_MAILS = 'otherMails';
    public const FIELD_PASSWORD_POLICIES = 'passwordPolicies';
    public const FIELD_PASSWORD_PROFILE = 'passwordProfile';
    public const FIELD_PAST_PROJECTS = 'pastProjects';
    public const FIELD_POSTAL_CODE = 'postalCode';
    public const FIELD_PREFERRED_DATA_LOCATION = 'preferredDataLocation';
    public const FIELD_PREFERRED_LANGUAGE = 'preferredLanguage';
    public const FIELD_PREFERRED_NAME = 'preferredName';
    public const FIELD_PRINT = 'print';
    public const FIELD_PROVISIONED_PLANS = 'provisionedPlans';
    public const FIELD_PROXY_ADDRESSES = 'proxyAddresses';
    public const FIELD_RESPONSIBILITIES = 'responsibilities';
    public const FIELD_SCHOOLS = 'schools';
    public const FIELD_SECURITY_IDENTIFIER = 'securityIdentifier';
    public const FIELD_SERVICE_PROVISIONING_ERRORS = 'serviceProvisioningErrors';
    public const FIELD_SHOW_IN_ADDRESS_LIST = 'showInAddressList';
    public const FIELD_SIGN_IN_ACTIVITY = 'signInActivity';
    public const FIELD_SIGN_IN_SESSIONS_VALID_FROM_DATE_TIME = 'signInSessionsValidFromDateTime';
    public const FIELD_SKILLS = 'skills';
    public const FIELD_STATE = 'state';
    public const FIELD_STREET_ADDRESS = 'streetAddress';
    public const FIELD_SURNAME = 'surname';
    public const FIELD_USAGE_LOCATION = 'usageLocation';
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';
    public const FIELD_USER_TYPE = 'userType';
    public const FIELD_ACTIVITIES = 'activities';
    public const FIELD_AGREEMENT_ACCEPTANCES = 'agreementAcceptances';
    public const FIELD_APP_ROLE_ASSIGNMENTS = 'appRoleAssignments';
    public const FIELD_AUTHENTICATION = 'authentication';
    public const FIELD_CALENDAR = 'calendar';
    public const FIELD_CALENDAR_GROUPS = 'calendarGroups';
    public const FIELD_CALENDARS = 'calendars';
    public const FIELD_CALENDAR_VIEW = 'calendarView';
    public const FIELD_CHATS = 'chats';
    public const FIELD_CLOUD_CLIPBOARD = 'cloudClipboard';
    public const FIELD_CONTACT_FOLDERS = 'contactFolders';
    public const FIELD_CONTACTS = 'contacts';
    public const FIELD_CREATED_OBJECTS = 'createdObjects';
    public const FIELD_DATA_SECURITY_AND_GOVERNANCE = 'dataSecurityAndGovernance';
    public const FIELD_DEVICE_MANAGEMENT_TROUBLESHOOTING_EVENTS = 'deviceManagementTroubleshootingEvents';
    public const FIELD_DIRECT_REPORTS = 'directReports';
    public const FIELD_DRIVE = 'drive';
    public const FIELD_DRIVES = 'drives';
    public const FIELD_EMPLOYEE_EXPERIENCE = 'employeeExperience';
    public const FIELD_EVENTS = 'events';
    public const FIELD_EXTENSIONS = 'extensions';
    public const FIELD_FOLLOWED_SITES = 'followedSites';
    public const FIELD_INFERENCE_CLASSIFICATION = 'inferenceClassification';
    public const FIELD_INSIGHTS = 'insights';
    public const FIELD_JOINED_TEAMS = 'joinedTeams';
    public const FIELD_LICENSE_DETAILS = 'licenseDetails';
    public const FIELD_MAIL_FOLDERS = 'mailFolders';
    public const FIELD_MANAGED_APP_REGISTRATIONS = 'managedAppRegistrations';
    public const FIELD_MANAGED_DEVICES = 'managedDevices';
    public const FIELD_MANAGER = 'manager';
    public const FIELD_MEMBER_OF = 'memberOf';
    public const FIELD_MESSAGES = 'messages';
    public const FIELD_OAUTH2PERMISSION_GRANTS = 'oauth2PermissionGrants';
    public const FIELD_ONENOTE = 'onenote';
    public const FIELD_ONLINE_MEETINGS = 'onlineMeetings';
    public const FIELD_OUTLOOK = 'outlook';
    public const FIELD_OWNED_DEVICES = 'ownedDevices';
    public const FIELD_OWNED_OBJECTS = 'ownedObjects';
    public const FIELD_PEOPLE = 'people';
    public const FIELD_PERMISSION_GRANTS = 'permissionGrants';
    public const FIELD_PHOTO = 'photo';
    public const FIELD_PHOTOS = 'photos';
    public const FIELD_PLANNER = 'planner';
    public const FIELD_PRESENCE = 'presence';
    public const FIELD_REGISTERED_DEVICES = 'registeredDevices';
    public const FIELD_SCOPED_ROLE_MEMBER_OF = 'scopedRoleMemberOf';
    public const FIELD_SETTINGS = 'settings';
    public const FIELD_SOLUTIONS = 'solutions';
    public const FIELD_SPONSORS = 'sponsors';
    public const FIELD_TEAMWORK = 'teamwork';
    public const FIELD_TODO = 'todo';
    public const FIELD_TRANSITIVE_MEMBER_OF = 'transitiveMemberOf';

    /**
     * Select specific User properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
