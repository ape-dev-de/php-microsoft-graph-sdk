<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharepointSettings
 */
class SharepointSettings
{
    /**
     * Collection of trusted domain GUIDs for the OneDrive sync app.
     * @var string[]
     */
    private array $allowedDomainGuidsForSyncApp = [];

    /**
     * Collection of managed paths available for site creation. Read-only.
     * @var string[]
     */
    private array $availableManagedPathsForSiteCreation = [];

    /**
     * The number of days for preserving a deleted user's OneDrive.
     */
    private ?float $deletedUserPersonalSiteRetentionPeriodInDays;

    /**
     * Collection of file extensions not uploaded by the OneDrive sync app.
     * @var string[]
     */
    private array $excludedFileExtensionsForSyncApp = [];

    /**
     * Specifies the idle session sign-out policies for the tenant.
     */
    private ?string $idleSessionSignOut;

    /**
     * Specifies the image tagging option for the tenant. Possible values are: disabled, basic, enhanced.
     */
    private ?string $imageTaggingOption;

    /**
     * Indicates whether comments are allowed on modern site pages in SharePoint.
     */
    private ?bool $isCommentingOnSitePagesEnabled;

    /**
     * Indicates whether push notifications are enabled for OneDrive events.
     */
    private ?bool $isFileActivityNotificationEnabled;

    /**
     * Indicates whether legacy authentication protocols are enabled for the tenant.
     */
    private ?bool $isLegacyAuthProtocolsEnabled;

    /**
     * Indicates whether if Fluid Framework is allowed on SharePoint sites.
     */
    private ?bool $isLoopEnabled;

    /**
     * Indicates whether files can be synced using the OneDrive sync app for Mac.
     */
    private ?bool $isMacSyncAppEnabled;

    /**
     * Indicates whether guests must sign in using the same account to which sharing invitations are sent.
     */
    private ?bool $isRequireAcceptingUserToMatchInvitedUserEnabled;

    /**
     * Indicates whether guests are allowed to reshare files, folders, and sites they don''t own.
     */
    private ?bool $isResharingByExternalUsersEnabled;

    /**
     * Indicates whether mobile push notifications are enabled for SharePoint.
     */
    private ?bool $isSharePointMobileNotificationEnabled;

    /**
     * Indicates whether the newsfeed is allowed on the modern site pages in SharePoint.
     */
    private ?bool $isSharePointNewsfeedEnabled;

    /**
     * Indicates whether users are allowed to create sites.
     */
    private ?bool $isSiteCreationEnabled;

    /**
     * Indicates whether the UI commands for creating sites are shown.
     */
    private ?bool $isSiteCreationUIEnabled;

    /**
     * Indicates whether creating new modern pages is allowed on SharePoint sites.
     */
    private ?bool $isSitePagesCreationEnabled;

    /**
     * Indicates whether site storage space is automatically managed or if specific storage limits are set per site.
     */
    private ?bool $isSitesStorageLimitAutomatic;

    /**
     * Indicates whether the sync button in OneDrive is hidden.
     */
    private ?bool $isSyncButtonHiddenOnPersonalSite;

    /**
     * Indicates whether users are allowed to sync files only on PCs joined to specific domains.
     */
    private ?bool $isUnmanagedSyncAppForTenantRestricted;

    /**
     * The default OneDrive storage limit for all new and existing users who are assigned a qualifying license. Measured in megabytes (MB).
     */
    private ?float $personalSiteDefaultStorageLimitInMB;

    /**
     * Collection of email domains that are allowed for sharing outside the organization.
     * @var string[]
     */
    private array $sharingAllowedDomainList = [];

    /**
     * Collection of email domains that are blocked for sharing outside the organization.
     * @var string[]
     */
    private array $sharingBlockedDomainList = [];

    /**
     * Sharing capability for the tenant. Possible values are: disabled, externalUserSharingOnly, externalUserAndGuestSharing, existingExternalUserSharingOnly.
     */
    private ?string $sharingCapability;

    /**
     * Specifies the external sharing mode for domains. Possible values are: none, allowList, blockList.
     */
    private ?string $sharingDomainRestrictionMode;

    /**
     * The value of the team site managed path. This is the path under which new team sites will be created.
     */
    private ?string $siteCreationDefaultManagedPath;

    /**
     * The default storage quota for a new site upon creation. Measured in megabytes (MB).
     */
    private ?float $siteCreationDefaultStorageLimitInMB;

    /**
     * The default timezone of a tenant for newly created sites. For a list of possible values, see SPRegionalSettings.TimeZones property.
     */
    private ?string $tenantDefaultTimezone;


    /**
     * @return string[]
     */
    public function getAllowedDomainGuidsForSyncApp(): array
    {
        return $this->allowedDomainGuidsForSyncApp;
    }

    /**
     * @param string[] $allowedDomainGuidsForSyncApp
     */
    public function setAllowedDomainGuidsForSyncApp(array $allowedDomainGuidsForSyncApp): self
    {
        $this->allowedDomainGuidsForSyncApp = $allowedDomainGuidsForSyncApp;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getAvailableManagedPathsForSiteCreation(): array
    {
        return $this->availableManagedPathsForSiteCreation;
    }

    /**
     * @param string[] $availableManagedPathsForSiteCreation
     */
    public function setAvailableManagedPathsForSiteCreation(array $availableManagedPathsForSiteCreation): self
    {
        $this->availableManagedPathsForSiteCreation = $availableManagedPathsForSiteCreation;
        return $this;
    }

    public function getDeletedUserPersonalSiteRetentionPeriodInDays(): ?float
    {
        return $this->deletedUserPersonalSiteRetentionPeriodInDays;
    }

    public function setDeletedUserPersonalSiteRetentionPeriodInDays(?float $deletedUserPersonalSiteRetentionPeriodInDays): self
    {
        $this->deletedUserPersonalSiteRetentionPeriodInDays = $deletedUserPersonalSiteRetentionPeriodInDays;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getExcludedFileExtensionsForSyncApp(): array
    {
        return $this->excludedFileExtensionsForSyncApp;
    }

    /**
     * @param string[] $excludedFileExtensionsForSyncApp
     */
    public function setExcludedFileExtensionsForSyncApp(array $excludedFileExtensionsForSyncApp): self
    {
        $this->excludedFileExtensionsForSyncApp = $excludedFileExtensionsForSyncApp;
        return $this;
    }

    public function getIdleSessionSignOut(): ?string
    {
        return $this->idleSessionSignOut;
    }

    public function setIdleSessionSignOut(?string $idleSessionSignOut): self
    {
        $this->idleSessionSignOut = $idleSessionSignOut;
        return $this;
    }

    public function getImageTaggingOption(): ?string
    {
        return $this->imageTaggingOption;
    }

    public function setImageTaggingOption(?string $imageTaggingOption): self
    {
        $this->imageTaggingOption = $imageTaggingOption;
        return $this;
    }

    public function getIsCommentingOnSitePagesEnabled(): ?bool
    {
        return $this->isCommentingOnSitePagesEnabled;
    }

    public function setIsCommentingOnSitePagesEnabled(?bool $isCommentingOnSitePagesEnabled): self
    {
        $this->isCommentingOnSitePagesEnabled = $isCommentingOnSitePagesEnabled;
        return $this;
    }

    public function getIsFileActivityNotificationEnabled(): ?bool
    {
        return $this->isFileActivityNotificationEnabled;
    }

    public function setIsFileActivityNotificationEnabled(?bool $isFileActivityNotificationEnabled): self
    {
        $this->isFileActivityNotificationEnabled = $isFileActivityNotificationEnabled;
        return $this;
    }

    public function getIsLegacyAuthProtocolsEnabled(): ?bool
    {
        return $this->isLegacyAuthProtocolsEnabled;
    }

    public function setIsLegacyAuthProtocolsEnabled(?bool $isLegacyAuthProtocolsEnabled): self
    {
        $this->isLegacyAuthProtocolsEnabled = $isLegacyAuthProtocolsEnabled;
        return $this;
    }

    public function getIsLoopEnabled(): ?bool
    {
        return $this->isLoopEnabled;
    }

    public function setIsLoopEnabled(?bool $isLoopEnabled): self
    {
        $this->isLoopEnabled = $isLoopEnabled;
        return $this;
    }

    public function getIsMacSyncAppEnabled(): ?bool
    {
        return $this->isMacSyncAppEnabled;
    }

    public function setIsMacSyncAppEnabled(?bool $isMacSyncAppEnabled): self
    {
        $this->isMacSyncAppEnabled = $isMacSyncAppEnabled;
        return $this;
    }

    public function getIsRequireAcceptingUserToMatchInvitedUserEnabled(): ?bool
    {
        return $this->isRequireAcceptingUserToMatchInvitedUserEnabled;
    }

    public function setIsRequireAcceptingUserToMatchInvitedUserEnabled(?bool $isRequireAcceptingUserToMatchInvitedUserEnabled): self
    {
        $this->isRequireAcceptingUserToMatchInvitedUserEnabled = $isRequireAcceptingUserToMatchInvitedUserEnabled;
        return $this;
    }

    public function getIsResharingByExternalUsersEnabled(): ?bool
    {
        return $this->isResharingByExternalUsersEnabled;
    }

    public function setIsResharingByExternalUsersEnabled(?bool $isResharingByExternalUsersEnabled): self
    {
        $this->isResharingByExternalUsersEnabled = $isResharingByExternalUsersEnabled;
        return $this;
    }

    public function getIsSharePointMobileNotificationEnabled(): ?bool
    {
        return $this->isSharePointMobileNotificationEnabled;
    }

    public function setIsSharePointMobileNotificationEnabled(?bool $isSharePointMobileNotificationEnabled): self
    {
        $this->isSharePointMobileNotificationEnabled = $isSharePointMobileNotificationEnabled;
        return $this;
    }

    public function getIsSharePointNewsfeedEnabled(): ?bool
    {
        return $this->isSharePointNewsfeedEnabled;
    }

    public function setIsSharePointNewsfeedEnabled(?bool $isSharePointNewsfeedEnabled): self
    {
        $this->isSharePointNewsfeedEnabled = $isSharePointNewsfeedEnabled;
        return $this;
    }

    public function getIsSiteCreationEnabled(): ?bool
    {
        return $this->isSiteCreationEnabled;
    }

    public function setIsSiteCreationEnabled(?bool $isSiteCreationEnabled): self
    {
        $this->isSiteCreationEnabled = $isSiteCreationEnabled;
        return $this;
    }

    public function getIsSiteCreationUIEnabled(): ?bool
    {
        return $this->isSiteCreationUIEnabled;
    }

    public function setIsSiteCreationUIEnabled(?bool $isSiteCreationUIEnabled): self
    {
        $this->isSiteCreationUIEnabled = $isSiteCreationUIEnabled;
        return $this;
    }

    public function getIsSitePagesCreationEnabled(): ?bool
    {
        return $this->isSitePagesCreationEnabled;
    }

    public function setIsSitePagesCreationEnabled(?bool $isSitePagesCreationEnabled): self
    {
        $this->isSitePagesCreationEnabled = $isSitePagesCreationEnabled;
        return $this;
    }

    public function getIsSitesStorageLimitAutomatic(): ?bool
    {
        return $this->isSitesStorageLimitAutomatic;
    }

    public function setIsSitesStorageLimitAutomatic(?bool $isSitesStorageLimitAutomatic): self
    {
        $this->isSitesStorageLimitAutomatic = $isSitesStorageLimitAutomatic;
        return $this;
    }

    public function getIsSyncButtonHiddenOnPersonalSite(): ?bool
    {
        return $this->isSyncButtonHiddenOnPersonalSite;
    }

    public function setIsSyncButtonHiddenOnPersonalSite(?bool $isSyncButtonHiddenOnPersonalSite): self
    {
        $this->isSyncButtonHiddenOnPersonalSite = $isSyncButtonHiddenOnPersonalSite;
        return $this;
    }

    public function getIsUnmanagedSyncAppForTenantRestricted(): ?bool
    {
        return $this->isUnmanagedSyncAppForTenantRestricted;
    }

    public function setIsUnmanagedSyncAppForTenantRestricted(?bool $isUnmanagedSyncAppForTenantRestricted): self
    {
        $this->isUnmanagedSyncAppForTenantRestricted = $isUnmanagedSyncAppForTenantRestricted;
        return $this;
    }

    public function getPersonalSiteDefaultStorageLimitInMB(): ?float
    {
        return $this->personalSiteDefaultStorageLimitInMB;
    }

    public function setPersonalSiteDefaultStorageLimitInMB(?float $personalSiteDefaultStorageLimitInMB): self
    {
        $this->personalSiteDefaultStorageLimitInMB = $personalSiteDefaultStorageLimitInMB;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSharingAllowedDomainList(): array
    {
        return $this->sharingAllowedDomainList;
    }

    /**
     * @param string[] $sharingAllowedDomainList
     */
    public function setSharingAllowedDomainList(array $sharingAllowedDomainList): self
    {
        $this->sharingAllowedDomainList = $sharingAllowedDomainList;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSharingBlockedDomainList(): array
    {
        return $this->sharingBlockedDomainList;
    }

    /**
     * @param string[] $sharingBlockedDomainList
     */
    public function setSharingBlockedDomainList(array $sharingBlockedDomainList): self
    {
        $this->sharingBlockedDomainList = $sharingBlockedDomainList;
        return $this;
    }

    public function getSharingCapability(): ?string
    {
        return $this->sharingCapability;
    }

    public function setSharingCapability(?string $sharingCapability): self
    {
        $this->sharingCapability = $sharingCapability;
        return $this;
    }

    public function getSharingDomainRestrictionMode(): ?string
    {
        return $this->sharingDomainRestrictionMode;
    }

    public function setSharingDomainRestrictionMode(?string $sharingDomainRestrictionMode): self
    {
        $this->sharingDomainRestrictionMode = $sharingDomainRestrictionMode;
        return $this;
    }

    public function getSiteCreationDefaultManagedPath(): ?string
    {
        return $this->siteCreationDefaultManagedPath;
    }

    public function setSiteCreationDefaultManagedPath(?string $siteCreationDefaultManagedPath): self
    {
        $this->siteCreationDefaultManagedPath = $siteCreationDefaultManagedPath;
        return $this;
    }

    public function getSiteCreationDefaultStorageLimitInMB(): ?float
    {
        return $this->siteCreationDefaultStorageLimitInMB;
    }

    public function setSiteCreationDefaultStorageLimitInMB(?float $siteCreationDefaultStorageLimitInMB): self
    {
        $this->siteCreationDefaultStorageLimitInMB = $siteCreationDefaultStorageLimitInMB;
        return $this;
    }

    public function getTenantDefaultTimezone(): ?string
    {
        return $this->tenantDefaultTimezone;
    }

    public function setTenantDefaultTimezone(?string $tenantDefaultTimezone): self
    {
        $this->tenantDefaultTimezone = $tenantDefaultTimezone;
        return $this;
    }

}
