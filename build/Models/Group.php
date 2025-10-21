<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Group
 */
class Group
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Date and time when this object was deleted. Always null when the object hasn't been deleted. */
        public ?\DateTimeInterface $deletedDateTime = null,
        /** Indicates if people external to the organization can send messages to the group. The default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}). */
        public ?bool $allowExternalSenders = null,
        /** The list of sensitivity label pairs (label ID, label name) associated with a Microsoft 365 group. Returned only on $select. This property can be updated only in delegated scenarios where the caller requires both the Microsoft Graph permission and a supported administrator role. */
        public array $assignedLabels = [],
        /** The licenses that are assigned to the group. Returned only on $select. Supports $filter (eq). Read-only. */
        public array $assignedLicenses = [],
        /** Indicates if new members added to the group are autosubscribed to receive email notifications. You can set this property in a PATCH request for the group; don''t set it in the initial POST request that creates the group. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}). */
        public ?bool $autoSubscribeNewMembers = null,
        /** Describes a classification for the group (such as low, medium, or high business impact). Valid values for this property are defined by creating a ClassificationList setting value, based on the template definition.Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith). */
        public ?string $classification = null,
        /** Timestamp of when the group was created. The value can''t be modified and is automatically populated when the group is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on January 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Read-only. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** An optional description for the group. Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith) and $search. */
        public ?string $description = null,
        /** The display name for the group. This property is required when a group is created and can''t be cleared during updates. Maximum length is 256 characters. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderby. */
        public ?string $displayName = null,
        /** Timestamp of when the group is set to expire. It''s null for security groups, but for Microsoft 365 groups, it represents when the group is set to expire as defined in the groupLifecyclePolicy. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on January 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only. */
        public ?\DateTimeInterface $expirationDateTime = null,
        /** @var string[] Specifies the group type and its membership. If the collection contains Unified, the group is a Microsoft 365 group; otherwise, it''s either a security group or a distribution group. For details, see groups overview.If the collection includes DynamicMembership, the group has dynamic membership; otherwise, membership is static. Returned by default. Supports $filter (eq, not). */
        public array $groupTypes = [],
        /** Indicates whether there are members in this group that have license errors from its group-based license assignment. This property is never returned on a GET operation. You can use it as a $filter argument to get groups that have members with license errors (that is, filter for this property being true). See an example. Supports $filter (eq). */
        public ?bool $hasMembersWithLicenseErrors = null,
        /** True if the group isn''t displayed in certain parts of the Outlook UI: the Address Book, address lists for selecting message recipients, and the Browse Groups dialog for searching groups; otherwise, false. The default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}). */
        public ?bool $hideFromAddressLists = null,
        /** True if the group isn''t displayed in Outlook clients, such as Outlook for Windows and Outlook on the web; otherwise, false. The default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}). */
        public ?bool $hideFromOutlookClients = null,
        /** When a group is associated with a team, this property determines whether the team is in read-only mode.To read this property, use the /group/{groupId}/team endpoint or the Get team API. To update this property, use the archiveTeam and unarchiveTeam APIs. */
        public ?bool $isArchived = null,
        /** Indicates whether this group can be assigned to a Microsoft Entra role. Optional. This property can only be set while creating the group and is immutable. If set to true, the securityEnabled property must also be set to true, visibility must be Hidden, and the group can''t be a dynamic group (that is, groupTypes can''t contain DynamicMembership). Only callers with at least the Privileged Role Administrator role can set this property. The caller must also be assigned the RoleManagement.ReadWrite.Directory permission to set this property or update the membership of such groups. For more, see Using a group to manage Microsoft Entra role assignmentsUsing this feature requires a Microsoft Entra ID P1 license. Returned by default. Supports $filter (eq, ne, not). */
        public ?bool $isAssignableToRole = null,
        /** Indicates whether the group is a member of a restricted management administrative unit. If not set, the default value is null and the default behavior is false. Read-only.  To manage a group member of a restricted management administrative unit, the administrator or calling app must be assigned a Microsoft Entra role at the scope of the restricted management administrative unit. Returned only on $select. */
        public ?bool $isManagementRestricted = null,
        /** Indicates whether the signed-in user is subscribed to receive email conversations. The default value is true. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}). */
        public ?bool $isSubscribedByMail = null,
        /** Indicates the status of the group license assignment to all group members. The default value is false. Read-only. Possible values: QueuedForProcessing, ProcessingInProgress, and ProcessingComplete.Returned only on $select. Read-only. */
        public ?string $licenseProcessingState = null,
        /** The SMTP address for the group, for example, ''serviceadmins@contoso.com''. Returned by default. Read-only. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values). */
        public ?string $mail = null,
        /** Specifies whether the group is mail-enabled. Required. Returned by default. Supports $filter (eq, ne, not). */
        public ?bool $mailEnabled = null,
        /** The mail alias for the group, unique for Microsoft 365 groups in the organization. Maximum length is 64 characters. This property can contain only characters in the ASCII character set 0 - 127 except the following characters: @ () / [] '' ; : <> , SPACE. Required. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values). */
        public ?string $mailNickname = null,
        /** The rule that determines members for this group if the group is a dynamic group (groupTypes contains DynamicMembership). For more information about the syntax of the membership rule, see Membership Rules syntax. Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith). */
        public ?string $membershipRule = null,
        /** Indicates whether the dynamic membership processing is on or paused. Possible values are On or Paused. Returned by default. Supports $filter (eq, ne, not, in). */
        public ?string $membershipRuleProcessingState = null,
        /** Contains the on-premises domain FQDN, also called dnsDomainName synchronized from the on-premises directory. The property is only populated for customers synchronizing their on-premises directory to Microsoft Entra ID via Microsoft Entra Connect.Returned by default. Read-only. */
        public ?string $onPremisesDomainName = null,
        /** Indicates the last time at which the group was synced with the on-premises directory. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on January 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Read-only. Supports $filter (eq, ne, not, ge, le, in). */
        public ?\DateTimeInterface $onPremisesLastSyncDateTime = null,
        /** Contains the on-premises netBios name synchronized from the on-premises directory. The property is only populated for customers synchronizing their on-premises directory to Microsoft Entra ID via Microsoft Entra Connect.Returned by default. Read-only. */
        public ?string $onPremisesNetBiosName = null,
        /** Errors when using Microsoft synchronization product during provisioning. Returned by default. Supports $filter (eq, not). */
        public array $onPremisesProvisioningErrors = [],
        /** Contains the on-premises SAM account name synchronized from the on-premises directory. The property is only populated for customers synchronizing their on-premises directory to Microsoft Entra ID via Microsoft Entra Connect.Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith). Read-only. */
        public ?string $onPremisesSamAccountName = null,
        /** Contains the on-premises security identifier (SID) for the group synchronized from on-premises to the cloud. Read-only. Returned by default. Supports $filter (eq including on null values). */
        public ?string $onPremisesSecurityIdentifier = null,
        /** true if this group is synced from an on-premises directory; false if this group was originally synced from an on-premises directory but is no longer synced; null if this object has never synced from an on-premises directory (default). Returned by default. Read-only. Supports $filter (eq, ne, not, in, and eq on null values). */
        public ?bool $onPremisesSyncEnabled = null,
        /** The preferred data location for the Microsoft 365 group. By default, the group inherits the group creator''s preferred data location. To set this property, the calling app must be granted the Directory.ReadWrite.All permission and the user be assigned at least one of the following Microsoft Entra roles: User Account Administrator Directory Writer  Exchange Administrator  SharePoint Administrator  For more information about this property, see OneDrive Online Multi-Geo. Nullable. Returned by default. */
        public ?string $preferredDataLocation = null,
        /** The preferred language for a Microsoft 365 group. Should follow ISO 639-1 Code; for example, en-US. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values). */
        public ?string $preferredLanguage = null,
        /** @var string[] Email addresses for the group that direct to the same group mailbox. For example: [''SMTP: bob@contoso.com'', ''smtp: bob@sales.contoso.com'']. The any operator is required to filter expressions on multi-valued properties. Returned by default. Read-only. Not nullable. Supports $filter (eq, not, ge, le, startsWith, endsWith, /$count eq 0, /$count ne 0). */
        public array $proxyAddresses = [],
        /** Timestamp of when the group was last renewed. This value can''t be modified directly and is only updated via the renew service action. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on January 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only. */
        public ?\DateTimeInterface $renewedDateTime = null,
        /** Specifies whether the group is a security group. Required. Returned by default. Supports $filter (eq, ne, not, in). */
        public ?bool $securityEnabled = null,
        /** Security identifier of the group, used in Windows scenarios. Read-only. Returned by default. */
        public ?string $securityIdentifier = null,
        /** Errors published by a federated service describing a nontransient, service-specific error regarding the properties or link from a group object.  Supports $filter (eq, not, for isResolved and serviceInstance). */
        public array $serviceProvisioningErrors = [],
        /** Specifies a Microsoft 365 group''s color theme. Possible values are Teal, Purple, Green, Blue, Pink, Orange, or Red. Returned by default. */
        public ?string $theme = null,
        /** The unique identifier that can be assigned to a group and used as an alternate key. Immutable. Read-only. */
        public ?string $uniqueName = null,
        /** Count of conversations that received new posts since the signed-in user last visited the group. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}). */
        public ?float $unseenCount = null,
        /** Specifies the group join policy and group content visibility for groups. Possible values are: Private, Public, or HiddenMembership. HiddenMembership can be set only for Microsoft 365 groups when the groups are created. It can''t be updated later. Other values of visibility can be updated after group creation. If visibility value isn''t specified during group creation on Microsoft Graph, a security group is created as Private by default, and the Microsoft 365 group is Public. Groups assignable to roles are always Private. To learn more, see group visibility options. Returned by default. Nullable. */
        public ?string $visibility = null,
        /** The list of users or groups allowed to create posts or calendar events in this group. If this list is nonempty, then only users or groups listed here are allowed to post. */
        public array $acceptedSenders = [],
        /** Represents the app roles granted to a group for an application. Supports $expand. */
        public array $appRoleAssignments = [],
        /** The group's calendar. Read-only. */
        public ?string $calendar = null,
        /** The calendar view for the calendar. Read-only. */
        public array $calendarView = [],
        /** The group's conversations. */
        public array $conversations = [],
        /** The user (or application) that created the group. NOTE: This property isn''t set if the user is an administrator. Read-only. */
        public ?string $createdOnBehalfOf = null,
        /** The group's default drive. Read-only. */
        public ?string $drive = null,
        /** The group's drives. Read-only. */
        public array $drives = [],
        /** The group's calendar events. */
        public array $events = [],
        /** The collection of open extensions defined for the group. Read-only. Nullable. */
        public array $extensions = [],
        /** The collection of lifecycle policies for this group. Read-only. Nullable. */
        public array $groupLifecyclePolicies = [],
        /** Groups that this group is a member of. HTTP Methods: GET (supported for all groups). Read-only. Nullable. Supports $expand. */
        public array $memberOf = [],
        /** The members of this group, who can be users, devices, other groups, or service principals. Supports the List members, Add member, and Remove member operations. Nullable. Supports $expand including nested $select. For example, /groups?$filter=startsWith(displayName,''Role'')&$select=id,displayName&$expand=members($select=id,userPrincipalName,displayName). */
        public array $members = [],
        /** A list of group members with license errors from this group-based license assignment. Read-only. */
        public array $membersWithLicenseErrors = [],
        /**  */
        public ?string $onenote = null,
        /** The owners of the group who can be users or service principals. Limited to 100 owners. Nullable. If this property isn''t specified when creating a Microsoft 365 group the calling user (admin or non-admin) is automatically assigned as the group owner. A non-admin user can''t explicitly add themselves to this collection when they''re creating the group. For more information, see the related known issue. For security groups, the admin user isn''t automatically added to this collection. For more information, see the related known issue. Supports $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1); Supports $expand including nested $select. For example, /groups?$filter=startsWith(displayName,''Role'')&$select=id,displayName&$expand=owners($select=id,userPrincipalName,displayName). */
        public array $owners = [],
        /**  */
        public array $permissionGrants = [],
        /** The group's profile photo */
        public ?string $photo = null,
        /** The profile photos owned by the group. Read-only. Nullable. */
        public array $photos = [],
        /** Entry-point to Planner resource that might exist for a Unified Group. */
        public ?string $planner = null,
        /** The list of users or groups not allowed to create posts or calendar events in this group. Nullable */
        public array $rejectedSenders = [],
        /** Settings that can govern this group''s behavior, like whether members can invite guests to the group. Nullable. */
        public array $settings = [],
        /** The list of SharePoint sites in this group. Access the default site with /sites/root. */
        public array $sites = [],
        /** The team associated with this group. */
        public ?string $team = null,
        /** The group's conversation threads. Nullable. */
        public array $threads = [],
        /** The groups that a group is a member of, either directly or through nested membership. Nullable. */
        public array $transitiveMemberOf = [],
        /** @var string[] Represents a Microsoft Entra group. */
        public array $transitiveMembers = []
    ) {}
}
