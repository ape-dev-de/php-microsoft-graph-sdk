<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharepointSettings
 */
class SharepointSettings
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Collection of trusted domain GUIDs for the OneDrive sync app.
     * @var string[]
     */
    public array $allowedDomainGuidsForSyncApp = [];

    /** 
     * Collection of managed paths available for site creation. Read-only.
     * @var string[]
     */
    public array $availableManagedPathsForSiteCreation = [];

    /** The number of days for preserving a deleted user's OneDrive. */
    public ?float $deletedUserPersonalSiteRetentionPeriodInDays = null;

    /** 
     * Collection of file extensions not uploaded by the OneDrive sync app.
     * @var string[]
     */
    public array $excludedFileExtensionsForSyncApp = [];

    /** 
     * Specifies the idle session sign-out policies for the tenant.
     * @var IdleSessionSignOut|\stdClass|null
     */
    public mixed $idleSessionSignOut = null;

    /** 
     * Specifies the image tagging option for the tenant. Possible values are: disabled, basic, enhanced.
     * @var ImageTaggingChoice|\stdClass|null
     */
    public mixed $imageTaggingOption = null;

    /** Indicates whether comments are allowed on modern site pages in SharePoint. */
    public ?bool $isCommentingOnSitePagesEnabled = null;

    /** Indicates whether push notifications are enabled for OneDrive events. */
    public ?bool $isFileActivityNotificationEnabled = null;

    /** Indicates whether legacy authentication protocols are enabled for the tenant. */
    public ?bool $isLegacyAuthProtocolsEnabled = null;

    /** Indicates whether if Fluid Framework is allowed on SharePoint sites. */
    public ?bool $isLoopEnabled = null;

    /** Indicates whether files can be synced using the OneDrive sync app for Mac. */
    public ?bool $isMacSyncAppEnabled = null;

    /** Indicates whether guests must sign in using the same account to which sharing invitations are sent. */
    public ?bool $isRequireAcceptingUserToMatchInvitedUserEnabled = null;

    /** Indicates whether guests are allowed to reshare files, folders, and sites they don't own. */
    public ?bool $isResharingByExternalUsersEnabled = null;

    /** Indicates whether mobile push notifications are enabled for SharePoint. */
    public ?bool $isSharePointMobileNotificationEnabled = null;

    /** Indicates whether the newsfeed is allowed on the modern site pages in SharePoint. */
    public ?bool $isSharePointNewsfeedEnabled = null;

    /** Indicates whether users are allowed to create sites. */
    public ?bool $isSiteCreationEnabled = null;

    /** Indicates whether the UI commands for creating sites are shown. */
    public ?bool $isSiteCreationUIEnabled = null;

    /** Indicates whether creating new modern pages is allowed on SharePoint sites. */
    public ?bool $isSitePagesCreationEnabled = null;

    /** Indicates whether site storage space is automatically managed or if specific storage limits are set per site. */
    public ?bool $isSitesStorageLimitAutomatic = null;

    /** Indicates whether the sync button in OneDrive is hidden. */
    public ?bool $isSyncButtonHiddenOnPersonalSite = null;

    /** Indicates whether users are allowed to sync files only on PCs joined to specific domains. */
    public ?bool $isUnmanagedSyncAppForTenantRestricted = null;

    /** The default OneDrive storage limit for all new and existing users who are assigned a qualifying license. Measured in megabytes (MB). */
    public ?float $personalSiteDefaultStorageLimitInMB = null;

    /** 
     * Collection of email domains that are allowed for sharing outside the organization.
     * @var string[]
     */
    public array $sharingAllowedDomainList = [];

    /** 
     * Collection of email domains that are blocked for sharing outside the organization.
     * @var string[]
     */
    public array $sharingBlockedDomainList = [];

    /** 
     * Sharing capability for the tenant. Possible values are: disabled, externalUserSharingOnly, externalUserAndGuestSharing, existingExternalUserSharingOnly.
     * @var SharingCapabilities|\stdClass|null
     */
    public mixed $sharingCapability = null;

    /** 
     * Specifies the external sharing mode for domains. Possible values are: none, allowList, blockList.
     * @var SharingDomainRestrictionMode|\stdClass|null
     */
    public mixed $sharingDomainRestrictionMode = null;

    /** The value of the team site managed path. This is the path under which new team sites will be created. */
    public ?string $siteCreationDefaultManagedPath = null;

    /** The default storage quota for a new site upon creation. Measured in megabytes (MB). */
    public ?float $siteCreationDefaultStorageLimitInMB = null;

    /** The default timezone of a tenant for newly created sites. For a list of possible values, see SPRegionalSettings.TimeZones property. */
    public ?string $tenantDefaultTimezone = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['allowedDomainGuidsForSyncApp'])) {
            $this->allowedDomainGuidsForSyncApp = $data['allowedDomainGuidsForSyncApp'];
        }
        if (isset($data['availableManagedPathsForSiteCreation'])) {
            $this->availableManagedPathsForSiteCreation = $data['availableManagedPathsForSiteCreation'];
        }
        if (isset($data['deletedUserPersonalSiteRetentionPeriodInDays'])) {
            $this->deletedUserPersonalSiteRetentionPeriodInDays = $data['deletedUserPersonalSiteRetentionPeriodInDays'];
        }
        if (isset($data['excludedFileExtensionsForSyncApp'])) {
            $this->excludedFileExtensionsForSyncApp = $data['excludedFileExtensionsForSyncApp'];
        }
        if (isset($data['idleSessionSignOut'])) {
            $this->idleSessionSignOut = $data['idleSessionSignOut'];
        }
        if (isset($data['imageTaggingOption'])) {
            $this->imageTaggingOption = $data['imageTaggingOption'];
        }
        if (isset($data['isCommentingOnSitePagesEnabled'])) {
            $this->isCommentingOnSitePagesEnabled = $data['isCommentingOnSitePagesEnabled'];
        }
        if (isset($data['isFileActivityNotificationEnabled'])) {
            $this->isFileActivityNotificationEnabled = $data['isFileActivityNotificationEnabled'];
        }
        if (isset($data['isLegacyAuthProtocolsEnabled'])) {
            $this->isLegacyAuthProtocolsEnabled = $data['isLegacyAuthProtocolsEnabled'];
        }
        if (isset($data['isLoopEnabled'])) {
            $this->isLoopEnabled = $data['isLoopEnabled'];
        }
        if (isset($data['isMacSyncAppEnabled'])) {
            $this->isMacSyncAppEnabled = $data['isMacSyncAppEnabled'];
        }
        if (isset($data['isRequireAcceptingUserToMatchInvitedUserEnabled'])) {
            $this->isRequireAcceptingUserToMatchInvitedUserEnabled = $data['isRequireAcceptingUserToMatchInvitedUserEnabled'];
        }
        if (isset($data['isResharingByExternalUsersEnabled'])) {
            $this->isResharingByExternalUsersEnabled = $data['isResharingByExternalUsersEnabled'];
        }
        if (isset($data['isSharePointMobileNotificationEnabled'])) {
            $this->isSharePointMobileNotificationEnabled = $data['isSharePointMobileNotificationEnabled'];
        }
        if (isset($data['isSharePointNewsfeedEnabled'])) {
            $this->isSharePointNewsfeedEnabled = $data['isSharePointNewsfeedEnabled'];
        }
        if (isset($data['isSiteCreationEnabled'])) {
            $this->isSiteCreationEnabled = $data['isSiteCreationEnabled'];
        }
        if (isset($data['isSiteCreationUIEnabled'])) {
            $this->isSiteCreationUIEnabled = $data['isSiteCreationUIEnabled'];
        }
        if (isset($data['isSitePagesCreationEnabled'])) {
            $this->isSitePagesCreationEnabled = $data['isSitePagesCreationEnabled'];
        }
        if (isset($data['isSitesStorageLimitAutomatic'])) {
            $this->isSitesStorageLimitAutomatic = $data['isSitesStorageLimitAutomatic'];
        }
        if (isset($data['isSyncButtonHiddenOnPersonalSite'])) {
            $this->isSyncButtonHiddenOnPersonalSite = $data['isSyncButtonHiddenOnPersonalSite'];
        }
        if (isset($data['isUnmanagedSyncAppForTenantRestricted'])) {
            $this->isUnmanagedSyncAppForTenantRestricted = $data['isUnmanagedSyncAppForTenantRestricted'];
        }
        if (isset($data['personalSiteDefaultStorageLimitInMB'])) {
            $this->personalSiteDefaultStorageLimitInMB = $data['personalSiteDefaultStorageLimitInMB'];
        }
        if (isset($data['sharingAllowedDomainList'])) {
            $this->sharingAllowedDomainList = $data['sharingAllowedDomainList'];
        }
        if (isset($data['sharingBlockedDomainList'])) {
            $this->sharingBlockedDomainList = $data['sharingBlockedDomainList'];
        }
        if (isset($data['sharingCapability'])) {
            $this->sharingCapability = $data['sharingCapability'];
        }
        if (isset($data['sharingDomainRestrictionMode'])) {
            $this->sharingDomainRestrictionMode = $data['sharingDomainRestrictionMode'];
        }
        if (isset($data['siteCreationDefaultManagedPath'])) {
            $this->siteCreationDefaultManagedPath = $data['siteCreationDefaultManagedPath'];
        }
        if (isset($data['siteCreationDefaultStorageLimitInMB'])) {
            $this->siteCreationDefaultStorageLimitInMB = $data['siteCreationDefaultStorageLimitInMB'];
        }
        if (isset($data['tenantDefaultTimezone'])) {
            $this->tenantDefaultTimezone = $data['tenantDefaultTimezone'];
        }
    }
}
