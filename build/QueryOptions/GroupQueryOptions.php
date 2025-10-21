<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Group resources
 *
 * Available select fields:
 * - allowExternalSenders
 * - assignedLabels
 * - assignedLicenses
 * - autoSubscribeNewMembers
 * - classification
 * - createdDateTime
 * - description
 * - displayName
 * - expirationDateTime
 * - groupTypes
 * - hasMembersWithLicenseErrors
 * - hideFromAddressLists
 * - hideFromOutlookClients
 * - isArchived
 * - isAssignableToRole
 * - isManagementRestricted
 * - isSubscribedByMail
 * - licenseProcessingState
 * - mail
 * - mailEnabled
 * - mailNickname
 * - membershipRule
 * - membershipRuleProcessingState
 * - onPremisesDomainName
 * - onPremisesLastSyncDateTime
 * - onPremisesNetBiosName
 * - onPremisesProvisioningErrors
 * - onPremisesSamAccountName
 * - onPremisesSecurityIdentifier
 * - onPremisesSyncEnabled
 * - preferredDataLocation
 * - preferredLanguage
 * - proxyAddresses
 * - renewedDateTime
 * - securityEnabled
 * - securityIdentifier
 * - serviceProvisioningErrors
 * - theme
 * - uniqueName
 * - unseenCount
 * - visibility
 * - acceptedSenders
 * - appRoleAssignments
 * - calendar
 * - calendarView
 * - conversations
 * - createdOnBehalfOf
 * - drive
 * - drives
 * - events
 * - extensions
 * - groupLifecyclePolicies
 * - memberOf
 * - members
 * - membersWithLicenseErrors
 * - onenote
 * - owners
 * - permissionGrants
 * - photo
 * - photos
 * - planner
 * - rejectedSenders
 * - settings
 * - sites
 * - team
 * - threads
 * - transitiveMemberOf
 * - transitiveMembers
 */
class GroupQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Group
     */
    public const FIELD_ALLOW_EXTERNAL_SENDERS = 'allowExternalSenders';
    public const FIELD_ASSIGNED_LABELS = 'assignedLabels';
    public const FIELD_ASSIGNED_LICENSES = 'assignedLicenses';
    public const FIELD_AUTO_SUBSCRIBE_NEW_MEMBERS = 'autoSubscribeNewMembers';
    public const FIELD_CLASSIFICATION = 'classification';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_EXPIRATION_DATE_TIME = 'expirationDateTime';
    public const FIELD_GROUP_TYPES = 'groupTypes';
    public const FIELD_HAS_MEMBERS_WITH_LICENSE_ERRORS = 'hasMembersWithLicenseErrors';
    public const FIELD_HIDE_FROM_ADDRESS_LISTS = 'hideFromAddressLists';
    public const FIELD_HIDE_FROM_OUTLOOK_CLIENTS = 'hideFromOutlookClients';
    public const FIELD_IS_ARCHIVED = 'isArchived';
    public const FIELD_IS_ASSIGNABLE_TO_ROLE = 'isAssignableToRole';
    public const FIELD_IS_MANAGEMENT_RESTRICTED = 'isManagementRestricted';
    public const FIELD_IS_SUBSCRIBED_BY_MAIL = 'isSubscribedByMail';
    public const FIELD_LICENSE_PROCESSING_STATE = 'licenseProcessingState';
    public const FIELD_MAIL = 'mail';
    public const FIELD_MAIL_ENABLED = 'mailEnabled';
    public const FIELD_MAIL_NICKNAME = 'mailNickname';
    public const FIELD_MEMBERSHIP_RULE = 'membershipRule';
    public const FIELD_MEMBERSHIP_RULE_PROCESSING_STATE = 'membershipRuleProcessingState';
    public const FIELD_ON_PREMISES_DOMAIN_NAME = 'onPremisesDomainName';
    public const FIELD_ON_PREMISES_LAST_SYNC_DATE_TIME = 'onPremisesLastSyncDateTime';
    public const FIELD_ON_PREMISES_NET_BIOS_NAME = 'onPremisesNetBiosName';
    public const FIELD_ON_PREMISES_PROVISIONING_ERRORS = 'onPremisesProvisioningErrors';
    public const FIELD_ON_PREMISES_SAM_ACCOUNT_NAME = 'onPremisesSamAccountName';
    public const FIELD_ON_PREMISES_SECURITY_IDENTIFIER = 'onPremisesSecurityIdentifier';
    public const FIELD_ON_PREMISES_SYNC_ENABLED = 'onPremisesSyncEnabled';
    public const FIELD_PREFERRED_DATA_LOCATION = 'preferredDataLocation';
    public const FIELD_PREFERRED_LANGUAGE = 'preferredLanguage';
    public const FIELD_PROXY_ADDRESSES = 'proxyAddresses';
    public const FIELD_RENEWED_DATE_TIME = 'renewedDateTime';
    public const FIELD_SECURITY_ENABLED = 'securityEnabled';
    public const FIELD_SECURITY_IDENTIFIER = 'securityIdentifier';
    public const FIELD_SERVICE_PROVISIONING_ERRORS = 'serviceProvisioningErrors';
    public const FIELD_THEME = 'theme';
    public const FIELD_UNIQUE_NAME = 'uniqueName';
    public const FIELD_UNSEEN_COUNT = 'unseenCount';
    public const FIELD_VISIBILITY = 'visibility';
    public const FIELD_ACCEPTED_SENDERS = 'acceptedSenders';
    public const FIELD_APP_ROLE_ASSIGNMENTS = 'appRoleAssignments';
    public const FIELD_CALENDAR = 'calendar';
    public const FIELD_CALENDAR_VIEW = 'calendarView';
    public const FIELD_CONVERSATIONS = 'conversations';
    public const FIELD_CREATED_ON_BEHALF_OF = 'createdOnBehalfOf';
    public const FIELD_DRIVE = 'drive';
    public const FIELD_DRIVES = 'drives';
    public const FIELD_EVENTS = 'events';
    public const FIELD_EXTENSIONS = 'extensions';
    public const FIELD_GROUP_LIFECYCLE_POLICIES = 'groupLifecyclePolicies';
    public const FIELD_MEMBER_OF = 'memberOf';
    public const FIELD_MEMBERS = 'members';
    public const FIELD_MEMBERS_WITH_LICENSE_ERRORS = 'membersWithLicenseErrors';
    public const FIELD_ONENOTE = 'onenote';
    public const FIELD_OWNERS = 'owners';
    public const FIELD_PERMISSION_GRANTS = 'permissionGrants';
    public const FIELD_PHOTO = 'photo';
    public const FIELD_PHOTOS = 'photos';
    public const FIELD_PLANNER = 'planner';
    public const FIELD_REJECTED_SENDERS = 'rejectedSenders';
    public const FIELD_SETTINGS = 'settings';
    public const FIELD_SITES = 'sites';
    public const FIELD_TEAM = 'team';
    public const FIELD_THREADS = 'threads';
    public const FIELD_TRANSITIVE_MEMBER_OF = 'transitiveMemberOf';
    public const FIELD_TRANSITIVE_MEMBERS = 'transitiveMembers';

    /**
     * Select specific Group properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
