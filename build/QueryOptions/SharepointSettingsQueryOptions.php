<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharepointSettings resources
 *
 * Available select fields:
 * - allowedDomainGuidsForSyncApp
 * - availableManagedPathsForSiteCreation
 * - deletedUserPersonalSiteRetentionPeriodInDays
 * - excludedFileExtensionsForSyncApp
 * - idleSessionSignOut
 * - imageTaggingOption
 * - isCommentingOnSitePagesEnabled
 * - isFileActivityNotificationEnabled
 * - isLegacyAuthProtocolsEnabled
 * - isLoopEnabled
 * - isMacSyncAppEnabled
 * - isRequireAcceptingUserToMatchInvitedUserEnabled
 * - isResharingByExternalUsersEnabled
 * - isSharePointMobileNotificationEnabled
 * - isSharePointNewsfeedEnabled
 * - isSiteCreationEnabled
 * - isSiteCreationUIEnabled
 * - isSitePagesCreationEnabled
 * - isSitesStorageLimitAutomatic
 * - isSyncButtonHiddenOnPersonalSite
 * - isUnmanagedSyncAppForTenantRestricted
 * - personalSiteDefaultStorageLimitInMB
 * - sharingAllowedDomainList
 * - sharingBlockedDomainList
 * - sharingCapability
 * - sharingDomainRestrictionMode
 * - siteCreationDefaultManagedPath
 * - siteCreationDefaultStorageLimitInMB
 * - tenantDefaultTimezone
 */
class SharepointSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SharepointSettings
     */
    public const FIELD_ALLOWED_DOMAIN_GUIDS_FOR_SYNC_APP = 'allowedDomainGuidsForSyncApp';
    public const FIELD_AVAILABLE_MANAGED_PATHS_FOR_SITE_CREATION = 'availableManagedPathsForSiteCreation';
    public const FIELD_DELETED_USER_PERSONAL_SITE_RETENTION_PERIOD_IN_DAYS = 'deletedUserPersonalSiteRetentionPeriodInDays';
    public const FIELD_EXCLUDED_FILE_EXTENSIONS_FOR_SYNC_APP = 'excludedFileExtensionsForSyncApp';
    public const FIELD_IDLE_SESSION_SIGN_OUT = 'idleSessionSignOut';
    public const FIELD_IMAGE_TAGGING_OPTION = 'imageTaggingOption';
    public const FIELD_IS_COMMENTING_ON_SITE_PAGES_ENABLED = 'isCommentingOnSitePagesEnabled';
    public const FIELD_IS_FILE_ACTIVITY_NOTIFICATION_ENABLED = 'isFileActivityNotificationEnabled';
    public const FIELD_IS_LEGACY_AUTH_PROTOCOLS_ENABLED = 'isLegacyAuthProtocolsEnabled';
    public const FIELD_IS_LOOP_ENABLED = 'isLoopEnabled';
    public const FIELD_IS_MAC_SYNC_APP_ENABLED = 'isMacSyncAppEnabled';
    public const FIELD_IS_REQUIRE_ACCEPTING_USER_TO_MATCH_INVITED_USER_ENABLED = 'isRequireAcceptingUserToMatchInvitedUserEnabled';
    public const FIELD_IS_RESHARING_BY_EXTERNAL_USERS_ENABLED = 'isResharingByExternalUsersEnabled';
    public const FIELD_IS_SHARE_POINT_MOBILE_NOTIFICATION_ENABLED = 'isSharePointMobileNotificationEnabled';
    public const FIELD_IS_SHARE_POINT_NEWSFEED_ENABLED = 'isSharePointNewsfeedEnabled';
    public const FIELD_IS_SITE_CREATION_ENABLED = 'isSiteCreationEnabled';
    public const FIELD_IS_SITE_CREATION_UIENABLED = 'isSiteCreationUIEnabled';
    public const FIELD_IS_SITE_PAGES_CREATION_ENABLED = 'isSitePagesCreationEnabled';
    public const FIELD_IS_SITES_STORAGE_LIMIT_AUTOMATIC = 'isSitesStorageLimitAutomatic';
    public const FIELD_IS_SYNC_BUTTON_HIDDEN_ON_PERSONAL_SITE = 'isSyncButtonHiddenOnPersonalSite';
    public const FIELD_IS_UNMANAGED_SYNC_APP_FOR_TENANT_RESTRICTED = 'isUnmanagedSyncAppForTenantRestricted';
    public const FIELD_PERSONAL_SITE_DEFAULT_STORAGE_LIMIT_IN_MB = 'personalSiteDefaultStorageLimitInMB';
    public const FIELD_SHARING_ALLOWED_DOMAIN_LIST = 'sharingAllowedDomainList';
    public const FIELD_SHARING_BLOCKED_DOMAIN_LIST = 'sharingBlockedDomainList';
    public const FIELD_SHARING_CAPABILITY = 'sharingCapability';
    public const FIELD_SHARING_DOMAIN_RESTRICTION_MODE = 'sharingDomainRestrictionMode';
    public const FIELD_SITE_CREATION_DEFAULT_MANAGED_PATH = 'siteCreationDefaultManagedPath';
    public const FIELD_SITE_CREATION_DEFAULT_STORAGE_LIMIT_IN_MB = 'siteCreationDefaultStorageLimitInMB';
    public const FIELD_TENANT_DEFAULT_TIMEZONE = 'tenantDefaultTimezone';

    /**
     * Select specific SharepointSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
