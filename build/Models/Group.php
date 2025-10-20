<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Group
 */
class Group
{
    /**
     * Indicates if people external to the organization can send messages to the group. The default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     */
    private ?bool $allowExternalSenders;

    /**
     * The list of sensitivity label pairs (label ID, label name) associated with a Microsoft 365 group. Returned only on $select. This property can be updated only in delegated scenarios where the caller requires both the Microsoft Graph permission and a supported administrator role.
     */
    private array $assignedLabels = [];

    /**
     * The licenses that are assigned to the group. Returned only on $select. Supports $filter (eq). Read-only.
     */
    private array $assignedLicenses = [];

    /**
     * Indicates if new members added to the group are autosubscribed to receive email notifications. You can set this property in a PATCH request for the group; don''t set it in the initial POST request that creates the group. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     */
    private ?bool $autoSubscribeNewMembers;

    /**
     * Describes a classification for the group (such as low, medium, or high business impact). Valid values for this property are defined by creating a ClassificationList setting value, based on the template definition.Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith).
     */
    private ?string $classification;

    /**
     * Timestamp of when the group was created. The value can''t be modified and is automatically populated when the group is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on January 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Read-only.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * An optional description for the group. Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith) and $search.
     */
    private ?string $description;

    /**
     * The display name for the group. This property is required when a group is created and can''t be cleared during updates. Maximum length is 256 characters. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderby.
     */
    private ?string $displayName;

    /**
     * Timestamp of when the group is set to expire. It''s null for security groups, but for Microsoft 365 groups, it represents when the group is set to expire as defined in the groupLifecyclePolicy. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on January 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only.
     */
    private ?\DateTimeInterface $expirationDateTime;

    /**
     * Specifies the group type and its membership. If the collection contains Unified, the group is a Microsoft 365 group; otherwise, it''s either a security group or a distribution group. For details, see groups overview.If the collection includes DynamicMembership, the group has dynamic membership; otherwise, membership is static. Returned by default. Supports $filter (eq, not).
     */
    private ?string $groupTypes;

    /**
     * Indicates whether there are members in this group that have license errors from its group-based license assignment. This property is never returned on a GET operation. You can use it as a $filter argument to get groups that have members with license errors (that is, filter for this property being true). See an example. Supports $filter (eq).
     */
    private ?bool $hasMembersWithLicenseErrors;

    /**
     * True if the group isn''t displayed in certain parts of the Outlook UI: the Address Book, address lists for selecting message recipients, and the Browse Groups dialog for searching groups; otherwise, false. The default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     */
    private ?bool $hideFromAddressLists;

    /**
     * True if the group isn''t displayed in Outlook clients, such as Outlook for Windows and Outlook on the web; otherwise, false. The default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     */
    private ?bool $hideFromOutlookClients;

    /**
     * When a group is associated with a team, this property determines whether the team is in read-only mode.To read this property, use the /group/{groupId}/team endpoint or the Get team API. To update this property, use the archiveTeam and unarchiveTeam APIs.
     */
    private ?bool $isArchived;

    /**
     * Indicates whether this group can be assigned to a Microsoft Entra role. Optional. This property can only be set while creating the group and is immutable. If set to true, the securityEnabled property must also be set to true, visibility must be Hidden, and the group can''t be a dynamic group (that is, groupTypes can''t contain DynamicMembership). Only callers with at least the Privileged Role Administrator role can set this property. The caller must also be assigned the RoleManagement.ReadWrite.Directory permission to set this property or update the membership of such groups. For more, see Using a group to manage Microsoft Entra role assignmentsUsing this feature requires a Microsoft Entra ID P1 license. Returned by default. Supports $filter (eq, ne, not).
     */
    private ?bool $isAssignableToRole;

    /**
     * Indicates whether the group is a member of a restricted management administrative unit. If not set, the default value is null and the default behavior is false. Read-only.  To manage a group member of a restricted management administrative unit, the administrator or calling app must be assigned a Microsoft Entra role at the scope of the restricted management administrative unit. Returned only on $select.
     */
    private ?bool $isManagementRestricted;

    /**
     * Indicates whether the signed-in user is subscribed to receive email conversations. The default value is true. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     */
    private ?bool $isSubscribedByMail;

    /**
     * Indicates the status of the group license assignment to all group members. The default value is false. Read-only. Possible values: QueuedForProcessing, ProcessingInProgress, and ProcessingComplete.Returned only on $select. Read-only.
     */
    private ?string $licenseProcessingState;

    /**
     * The SMTP address for the group, for example, ''serviceadmins@contoso.com''. Returned by default. Read-only. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     */
    private ?string $mail;

    /**
     * Specifies whether the group is mail-enabled. Required. Returned by default. Supports $filter (eq, ne, not).
     */
    private ?bool $mailEnabled;

    /**
     * The mail alias for the group, unique for Microsoft 365 groups in the organization. Maximum length is 64 characters. This property can contain only characters in the ASCII character set 0 - 127 except the following characters: @ () / [] '' ; : <> , SPACE. Required. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     */
    private ?string $mailNickname;

    /**
     * The rule that determines members for this group if the group is a dynamic group (groupTypes contains DynamicMembership). For more information about the syntax of the membership rule, see Membership Rules syntax. Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith).
     */
    private ?string $membershipRule;

    /**
     * Indicates whether the dynamic membership processing is on or paused. Possible values are On or Paused. Returned by default. Supports $filter (eq, ne, not, in).
     */
    private ?string $membershipRuleProcessingState;

    /**
     * Contains the on-premises domain FQDN, also called dnsDomainName synchronized from the on-premises directory. The property is only populated for customers synchronizing their on-premises directory to Microsoft Entra ID via Microsoft Entra Connect.Returned by default. Read-only.
     */
    private ?string $onPremisesDomainName;

    /**
     * Indicates the last time at which the group was synced with the on-premises directory. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on January 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Read-only. Supports $filter (eq, ne, not, ge, le, in).
     */
    private ?\DateTimeInterface $onPremisesLastSyncDateTime;

    /**
     * Contains the on-premises netBios name synchronized from the on-premises directory. The property is only populated for customers synchronizing their on-premises directory to Microsoft Entra ID via Microsoft Entra Connect.Returned by default. Read-only.
     */
    private ?string $onPremisesNetBiosName;

    /**
     * Errors when using Microsoft synchronization product during provisioning. Returned by default. Supports $filter (eq, not).
     */
    private array $onPremisesProvisioningErrors = [];

    /**
     * Contains the on-premises SAM account name synchronized from the on-premises directory. The property is only populated for customers synchronizing their on-premises directory to Microsoft Entra ID via Microsoft Entra Connect.Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith). Read-only.
     */
    private ?string $onPremisesSamAccountName;

    /**
     * Contains the on-premises security identifier (SID) for the group synchronized from on-premises to the cloud. Read-only. Returned by default. Supports $filter (eq including on null values).
     */
    private ?string $onPremisesSecurityIdentifier;

    /**
     * true if this group is synced from an on-premises directory; false if this group was originally synced from an on-premises directory but is no longer synced; null if this object has never synced from an on-premises directory (default). Returned by default. Read-only. Supports $filter (eq, ne, not, in, and eq on null values).
     */
    private ?bool $onPremisesSyncEnabled;

    /**
     * The preferred data location for the Microsoft 365 group. By default, the group inherits the group creator''s preferred data location. To set this property, the calling app must be granted the Directory.ReadWrite.All permission and the user be assigned at least one of the following Microsoft Entra roles: User Account Administrator Directory Writer  Exchange Administrator  SharePoint Administrator  For more information about this property, see OneDrive Online Multi-Geo. Nullable. Returned by default.
     */
    private ?string $preferredDataLocation;

    /**
     * The preferred language for a Microsoft 365 group. Should follow ISO 639-1 Code; for example, en-US. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     */
    private ?string $preferredLanguage;

    /**
     * Email addresses for the group that direct to the same group mailbox. For example: [''SMTP: bob@contoso.com'', ''smtp: bob@sales.contoso.com'']. The any operator is required to filter expressions on multi-valued properties. Returned by default. Read-only. Not nullable. Supports $filter (eq, not, ge, le, startsWith, endsWith, /$count eq 0, /$count ne 0).
     */
    private ?string $proxyAddresses;

    /**
     * Timestamp of when the group was last renewed. This value can''t be modified directly and is only updated via the renew service action. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on January 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only.
     */
    private ?\DateTimeInterface $renewedDateTime;

    /**
     * Specifies whether the group is a security group. Required. Returned by default. Supports $filter (eq, ne, not, in).
     */
    private ?bool $securityEnabled;

    /**
     * Security identifier of the group, used in Windows scenarios. Read-only. Returned by default.
     */
    private ?string $securityIdentifier;

    /**
     * Errors published by a federated service describing a nontransient, service-specific error regarding the properties or link from a group object.  Supports $filter (eq, not, for isResolved and serviceInstance).
     */
    private array $serviceProvisioningErrors = [];

    /**
     * Specifies a Microsoft 365 group''s color theme. Possible values are Teal, Purple, Green, Blue, Pink, Orange, or Red. Returned by default.
     */
    private ?string $theme;

    /**
     * The unique identifier that can be assigned to a group and used as an alternate key. Immutable. Read-only.
     */
    private ?string $uniqueName;

    /**
     * Count of conversations that received new posts since the signed-in user last visited the group. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     */
    private ?float $unseenCount;

    /**
     * Specifies the group join policy and group content visibility for groups. Possible values are: Private, Public, or HiddenMembership. HiddenMembership can be set only for Microsoft 365 groups when the groups are created. It can''t be updated later. Other values of visibility can be updated after group creation. If visibility value isn''t specified during group creation on Microsoft Graph, a security group is created as Private by default, and the Microsoft 365 group is Public. Groups assignable to roles are always Private. To learn more, see group visibility options. Returned by default. Nullable.
     */
    private ?string $visibility;

    /**
     * The list of users or groups allowed to create posts or calendar events in this group. If this list is nonempty, then only users or groups listed here are allowed to post.
     */
    private array $acceptedSenders = [];

    /**
     * Represents the app roles granted to a group for an application. Supports $expand.
     */
    private array $appRoleAssignments = [];

    /**
     * The group's calendar. Read-only.
     */
    private ?string $calendar;

    /**
     * The calendar view for the calendar. Read-only.
     */
    private array $calendarView = [];

    /**
     * The group's conversations.
     */
    private array $conversations = [];

    /**
     * The user (or application) that created the group. NOTE: This property isn''t set if the user is an administrator. Read-only.
     */
    private ?string $createdOnBehalfOf;

    /**
     * The group's default drive. Read-only.
     */
    private ?string $drive;

    /**
     * The group's drives. Read-only.
     */
    private array $drives = [];

    /**
     * The group's calendar events.
     */
    private array $events = [];

    /**
     * The collection of open extensions defined for the group. Read-only. Nullable.
     */
    private array $extensions = [];

    /**
     * The collection of lifecycle policies for this group. Read-only. Nullable.
     */
    private array $groupLifecyclePolicies = [];

    /**
     * Groups that this group is a member of. HTTP Methods: GET (supported for all groups). Read-only. Nullable. Supports $expand.
     */
    private array $memberOf = [];

    /**
     * The members of this group, who can be users, devices, other groups, or service principals. Supports the List members, Add member, and Remove member operations. Nullable. Supports $expand including nested $select. For example, /groups?$filter=startsWith(displayName,''Role'')&$select=id,displayName&$expand=members($select=id,userPrincipalName,displayName).
     */
    private array $members = [];

    /**
     * A list of group members with license errors from this group-based license assignment. Read-only.
     */
    private array $membersWithLicenseErrors = [];

    /**
     */
    private ?string $onenote;

    /**
     * The owners of the group who can be users or service principals. Limited to 100 owners. Nullable. If this property isn''t specified when creating a Microsoft 365 group the calling user (admin or non-admin) is automatically assigned as the group owner. A non-admin user can''t explicitly add themselves to this collection when they''re creating the group. For more information, see the related known issue. For security groups, the admin user isn''t automatically added to this collection. For more information, see the related known issue. Supports $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1); Supports $expand including nested $select. For example, /groups?$filter=startsWith(displayName,''Role'')&$select=id,displayName&$expand=owners($select=id,userPrincipalName,displayName).
     */
    private array $owners = [];

    /**
     */
    private array $permissionGrants = [];

    /**
     * The group's profile photo
     */
    private ?string $photo;

    /**
     * The profile photos owned by the group. Read-only. Nullable.
     */
    private array $photos = [];

    /**
     * Entry-point to Planner resource that might exist for a Unified Group.
     */
    private ?string $planner;

    /**
     * The list of users or groups not allowed to create posts or calendar events in this group. Nullable
     */
    private array $rejectedSenders = [];

    /**
     * Settings that can govern this group''s behavior, like whether members can invite guests to the group. Nullable.
     */
    private array $settings = [];

    /**
     * The list of SharePoint sites in this group. Access the default site with /sites/root.
     */
    private array $sites = [];

    /**
     * The team associated with this group.
     */
    private ?string $team;

    /**
     * The group's conversation threads. Nullable.
     */
    private array $threads = [];

    /**
     * The groups that a group is a member of, either directly or through nested membership. Nullable.
     */
    private array $transitiveMemberOf = [];

    /**
     * Represents a Microsoft Entra group.
     */
    private ?string $transitiveMembers;

    public function getAllowExternalSenders(): ?bool
    {
        return $this->allowExternalSenders;
    }

    public function setAllowExternalSenders(?bool $allowExternalSenders): self
    {
        $this->allowExternalSenders = $allowExternalSenders;
        return $this;
    }

    public function getAssignedLabels(): array
    {
        return $this->assignedLabels;
    }

    public function setAssignedLabels(array $assignedLabels): self
    {
        $this->assignedLabels = $assignedLabels;
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

    public function getAutoSubscribeNewMembers(): ?bool
    {
        return $this->autoSubscribeNewMembers;
    }

    public function setAutoSubscribeNewMembers(?bool $autoSubscribeNewMembers): self
    {
        $this->autoSubscribeNewMembers = $autoSubscribeNewMembers;
        return $this;
    }

    public function getClassification(): ?string
    {
        return $this->classification;
    }

    public function setClassification(?string $classification): self
    {
        $this->classification = $classification;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
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

    public function getExpirationDateTime(): ?\DateTimeInterface
    {
        return $this->expirationDateTime;
    }

    public function setExpirationDateTime(?\DateTimeInterface $expirationDateTime): self
    {
        $this->expirationDateTime = $expirationDateTime;
        return $this;
    }

    public function getGroupTypes(): ?string
    {
        return $this->groupTypes;
    }

    public function setGroupTypes(?string $groupTypes): self
    {
        $this->groupTypes = $groupTypes;
        return $this;
    }

    public function getHasMembersWithLicenseErrors(): ?bool
    {
        return $this->hasMembersWithLicenseErrors;
    }

    public function setHasMembersWithLicenseErrors(?bool $hasMembersWithLicenseErrors): self
    {
        $this->hasMembersWithLicenseErrors = $hasMembersWithLicenseErrors;
        return $this;
    }

    public function getHideFromAddressLists(): ?bool
    {
        return $this->hideFromAddressLists;
    }

    public function setHideFromAddressLists(?bool $hideFromAddressLists): self
    {
        $this->hideFromAddressLists = $hideFromAddressLists;
        return $this;
    }

    public function getHideFromOutlookClients(): ?bool
    {
        return $this->hideFromOutlookClients;
    }

    public function setHideFromOutlookClients(?bool $hideFromOutlookClients): self
    {
        $this->hideFromOutlookClients = $hideFromOutlookClients;
        return $this;
    }

    public function getIsArchived(): ?bool
    {
        return $this->isArchived;
    }

    public function setIsArchived(?bool $isArchived): self
    {
        $this->isArchived = $isArchived;
        return $this;
    }

    public function getIsAssignableToRole(): ?bool
    {
        return $this->isAssignableToRole;
    }

    public function setIsAssignableToRole(?bool $isAssignableToRole): self
    {
        $this->isAssignableToRole = $isAssignableToRole;
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

    public function getIsSubscribedByMail(): ?bool
    {
        return $this->isSubscribedByMail;
    }

    public function setIsSubscribedByMail(?bool $isSubscribedByMail): self
    {
        $this->isSubscribedByMail = $isSubscribedByMail;
        return $this;
    }

    public function getLicenseProcessingState(): ?string
    {
        return $this->licenseProcessingState;
    }

    public function setLicenseProcessingState(?string $licenseProcessingState): self
    {
        $this->licenseProcessingState = $licenseProcessingState;
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

    public function getMailEnabled(): ?bool
    {
        return $this->mailEnabled;
    }

    public function setMailEnabled(?bool $mailEnabled): self
    {
        $this->mailEnabled = $mailEnabled;
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

    public function getMembershipRule(): ?string
    {
        return $this->membershipRule;
    }

    public function setMembershipRule(?string $membershipRule): self
    {
        $this->membershipRule = $membershipRule;
        return $this;
    }

    public function getMembershipRuleProcessingState(): ?string
    {
        return $this->membershipRuleProcessingState;
    }

    public function setMembershipRuleProcessingState(?string $membershipRuleProcessingState): self
    {
        $this->membershipRuleProcessingState = $membershipRuleProcessingState;
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

    public function getOnPremisesLastSyncDateTime(): ?\DateTimeInterface
    {
        return $this->onPremisesLastSyncDateTime;
    }

    public function setOnPremisesLastSyncDateTime(?\DateTimeInterface $onPremisesLastSyncDateTime): self
    {
        $this->onPremisesLastSyncDateTime = $onPremisesLastSyncDateTime;
        return $this;
    }

    public function getOnPremisesNetBiosName(): ?string
    {
        return $this->onPremisesNetBiosName;
    }

    public function setOnPremisesNetBiosName(?string $onPremisesNetBiosName): self
    {
        $this->onPremisesNetBiosName = $onPremisesNetBiosName;
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

    public function getProxyAddresses(): ?string
    {
        return $this->proxyAddresses;
    }

    public function setProxyAddresses(?string $proxyAddresses): self
    {
        $this->proxyAddresses = $proxyAddresses;
        return $this;
    }

    public function getRenewedDateTime(): ?\DateTimeInterface
    {
        return $this->renewedDateTime;
    }

    public function setRenewedDateTime(?\DateTimeInterface $renewedDateTime): self
    {
        $this->renewedDateTime = $renewedDateTime;
        return $this;
    }

    public function getSecurityEnabled(): ?bool
    {
        return $this->securityEnabled;
    }

    public function setSecurityEnabled(?bool $securityEnabled): self
    {
        $this->securityEnabled = $securityEnabled;
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

    public function getTheme(): ?string
    {
        return $this->theme;
    }

    public function setTheme(?string $theme): self
    {
        $this->theme = $theme;
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

    public function getUnseenCount(): ?float
    {
        return $this->unseenCount;
    }

    public function setUnseenCount(?float $unseenCount): self
    {
        $this->unseenCount = $unseenCount;
        return $this;
    }

    public function getVisibility(): ?string
    {
        return $this->visibility;
    }

    public function setVisibility(?string $visibility): self
    {
        $this->visibility = $visibility;
        return $this;
    }

    public function getAcceptedSenders(): array
    {
        return $this->acceptedSenders;
    }

    public function setAcceptedSenders(array $acceptedSenders): self
    {
        $this->acceptedSenders = $acceptedSenders;
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

    public function getCalendar(): ?string
    {
        return $this->calendar;
    }

    public function setCalendar(?string $calendar): self
    {
        $this->calendar = $calendar;
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

    public function getConversations(): array
    {
        return $this->conversations;
    }

    public function setConversations(array $conversations): self
    {
        $this->conversations = $conversations;
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

    public function getGroupLifecyclePolicies(): array
    {
        return $this->groupLifecyclePolicies;
    }

    public function setGroupLifecyclePolicies(array $groupLifecyclePolicies): self
    {
        $this->groupLifecyclePolicies = $groupLifecyclePolicies;
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

    public function getMembers(): array
    {
        return $this->members;
    }

    public function setMembers(array $members): self
    {
        $this->members = $members;
        return $this;
    }

    public function getMembersWithLicenseErrors(): array
    {
        return $this->membersWithLicenseErrors;
    }

    public function setMembersWithLicenseErrors(array $membersWithLicenseErrors): self
    {
        $this->membersWithLicenseErrors = $membersWithLicenseErrors;
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

    public function getOwners(): array
    {
        return $this->owners;
    }

    public function setOwners(array $owners): self
    {
        $this->owners = $owners;
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

    public function getRejectedSenders(): array
    {
        return $this->rejectedSenders;
    }

    public function setRejectedSenders(array $rejectedSenders): self
    {
        $this->rejectedSenders = $rejectedSenders;
        return $this;
    }

    public function getSettings(): array
    {
        return $this->settings;
    }

    public function setSettings(array $settings): self
    {
        $this->settings = $settings;
        return $this;
    }

    public function getSites(): array
    {
        return $this->sites;
    }

    public function setSites(array $sites): self
    {
        $this->sites = $sites;
        return $this;
    }

    public function getTeam(): ?string
    {
        return $this->team;
    }

    public function setTeam(?string $team): self
    {
        $this->team = $team;
        return $this;
    }

    public function getThreads(): array
    {
        return $this->threads;
    }

    public function setThreads(array $threads): self
    {
        $this->threads = $threads;
        return $this;
    }

    public function getTransitiveMemberOf(): array
    {
        return $this->transitiveMemberOf;
    }

    public function setTransitiveMemberOf(array $transitiveMemberOf): self
    {
        $this->transitiveMemberOf = $transitiveMemberOf;
        return $this;
    }

    public function getTransitiveMembers(): ?string
    {
        return $this->transitiveMembers;
    }

    public function setTransitiveMembers(?string $transitiveMembers): self
    {
        $this->transitiveMembers = $transitiveMembers;
        return $this;
    }

}
