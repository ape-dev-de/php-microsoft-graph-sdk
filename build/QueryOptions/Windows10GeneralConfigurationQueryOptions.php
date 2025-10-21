<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Windows10GeneralConfiguration resources
 *
 * Available select fields:
 * - accountsBlockAddingNonMicrosoftAccountEmail
 * - antiTheftModeBlocked
 * - appsAllowTrustedAppsSideloading
 * - appsBlockWindowsStoreOriginatedApps
 * - bluetoothAllowedServices
 * - bluetoothBlockAdvertising
 * - bluetoothBlockDiscoverableMode
 * - bluetoothBlocked
 * - bluetoothBlockPrePairing
 * - cameraBlocked
 * - cellularBlockDataWhenRoaming
 * - cellularBlockVpn
 * - cellularBlockVpnWhenRoaming
 * - certificatesBlockManualRootCertificateInstallation
 * - connectedDevicesServiceBlocked
 * - copyPasteBlocked
 * - cortanaBlocked
 * - defenderBlockEndUserAccess
 * - defenderCloudBlockLevel
 * - defenderDaysBeforeDeletingQuarantinedMalware
 * - defenderDetectedMalwareActions
 * - defenderFileExtensionsToExclude
 * - defenderFilesAndFoldersToExclude
 * - defenderMonitorFileActivity
 * - defenderProcessesToExclude
 * - defenderPromptForSampleSubmission
 * - defenderRequireBehaviorMonitoring
 * - defenderRequireCloudProtection
 * - defenderRequireNetworkInspectionSystem
 * - defenderRequireRealTimeMonitoring
 * - defenderScanArchiveFiles
 * - defenderScanDownloads
 * - defenderScanIncomingMail
 * - defenderScanMappedNetworkDrivesDuringFullScan
 * - defenderScanMaxCpu
 * - defenderScanNetworkFiles
 * - defenderScanRemovableDrivesDuringFullScan
 * - defenderScanScriptsLoadedInInternetExplorer
 * - defenderScanType
 * - defenderScheduledQuickScanTime
 * - defenderScheduledScanTime
 * - defenderSignatureUpdateIntervalInHours
 * - defenderSystemScanSchedule
 * - developerUnlockSetting
 * - deviceManagementBlockFactoryResetOnMobile
 * - deviceManagementBlockManualUnenroll
 * - diagnosticsDataSubmissionMode
 * - edgeAllowStartPagesModification
 * - edgeBlockAccessToAboutFlags
 * - edgeBlockAddressBarDropdown
 * - edgeBlockAutofill
 * - edgeBlockCompatibilityList
 * - edgeBlockDeveloperTools
 * - edgeBlocked
 * - edgeBlockExtensions
 * - edgeBlockInPrivateBrowsing
 * - edgeBlockJavaScript
 * - edgeBlockLiveTileDataCollection
 * - edgeBlockPasswordManager
 * - edgeBlockPopups
 * - edgeBlockSearchSuggestions
 * - edgeBlockSendingDoNotTrackHeader
 * - edgeBlockSendingIntranetTrafficToInternetExplorer
 * - edgeClearBrowsingDataOnExit
 * - edgeCookiePolicy
 * - edgeDisableFirstRunPage
 * - edgeEnterpriseModeSiteListLocation
 * - edgeFirstRunUrl
 * - edgeHomepageUrls
 * - edgeRequireSmartScreen
 * - edgeSearchEngine
 * - edgeSendIntranetTrafficToInternetExplorer
 * - edgeSyncFavoritesWithInternetExplorer
 * - enterpriseCloudPrintDiscoveryEndPoint
 * - enterpriseCloudPrintDiscoveryMaxLimit
 * - enterpriseCloudPrintMopriaDiscoveryResourceIdentifier
 * - enterpriseCloudPrintOAuthAuthority
 * - enterpriseCloudPrintOAuthClientIdentifier
 * - enterpriseCloudPrintResourceIdentifier
 * - experienceBlockDeviceDiscovery
 * - experienceBlockErrorDialogWhenNoSIM
 * - experienceBlockTaskSwitcher
 * - gameDvrBlocked
 * - internetSharingBlocked
 * - locationServicesBlocked
 * - lockScreenAllowTimeoutConfiguration
 * - lockScreenBlockActionCenterNotifications
 * - lockScreenBlockCortana
 * - lockScreenBlockToastNotifications
 * - lockScreenTimeoutInSeconds
 * - logonBlockFastUserSwitching
 * - microsoftAccountBlocked
 * - microsoftAccountBlockSettingsSync
 * - networkProxyApplySettingsDeviceWide
 * - networkProxyAutomaticConfigurationUrl
 * - networkProxyDisableAutoDetect
 * - networkProxyServer
 * - nfcBlocked
 * - oneDriveDisableFileSync
 * - passwordBlockSimple
 * - passwordExpirationDays
 * - passwordMinimumCharacterSetCount
 * - passwordMinimumLength
 * - passwordMinutesOfInactivityBeforeScreenTimeout
 * - passwordPreviousPasswordBlockCount
 * - passwordRequired
 * - passwordRequiredType
 * - passwordRequireWhenResumeFromIdleState
 * - passwordSignInFailureCountBeforeFactoryReset
 * - personalizationDesktopImageUrl
 * - personalizationLockScreenImageUrl
 * - privacyAdvertisingId
 * - privacyAutoAcceptPairingAndConsentPrompts
 * - privacyBlockInputPersonalization
 * - resetProtectionModeBlocked
 * - safeSearchFilter
 * - screenCaptureBlocked
 * - searchBlockDiacritics
 * - searchDisableAutoLanguageDetection
 * - searchDisableIndexerBackoff
 * - searchDisableIndexingEncryptedItems
 * - searchDisableIndexingRemovableDrive
 * - searchEnableAutomaticIndexSizeManangement
 * - searchEnableRemoteQueries
 * - settingsBlockAccountsPage
 * - settingsBlockAddProvisioningPackage
 * - settingsBlockAppsPage
 * - settingsBlockChangeLanguage
 * - settingsBlockChangePowerSleep
 * - settingsBlockChangeRegion
 * - settingsBlockChangeSystemTime
 * - settingsBlockDevicesPage
 * - settingsBlockEaseOfAccessPage
 * - settingsBlockEditDeviceName
 * - settingsBlockGamingPage
 * - settingsBlockNetworkInternetPage
 * - settingsBlockPersonalizationPage
 * - settingsBlockPrivacyPage
 * - settingsBlockRemoveProvisioningPackage
 * - settingsBlockSettingsApp
 * - settingsBlockSystemPage
 * - settingsBlockTimeLanguagePage
 * - settingsBlockUpdateSecurityPage
 * - sharedUserAppDataAllowed
 * - smartScreenBlockPromptOverride
 * - smartScreenBlockPromptOverrideForFiles
 * - smartScreenEnableAppInstallControl
 * - startBlockUnpinningAppsFromTaskbar
 * - startMenuAppListVisibility
 * - startMenuHideChangeAccountSettings
 * - startMenuHideFrequentlyUsedApps
 * - startMenuHideHibernate
 * - startMenuHideLock
 * - startMenuHidePowerButton
 * - startMenuHideRecentJumpLists
 * - startMenuHideRecentlyAddedApps
 * - startMenuHideRestartOptions
 * - startMenuHideShutDown
 * - startMenuHideSignOut
 * - startMenuHideSleep
 * - startMenuHideSwitchAccount
 * - startMenuHideUserTile
 * - startMenuLayoutEdgeAssetsXml
 * - startMenuLayoutXml
 * - startMenuMode
 * - startMenuPinnedFolderDocuments
 * - startMenuPinnedFolderDownloads
 * - startMenuPinnedFolderFileExplorer
 * - startMenuPinnedFolderHomeGroup
 * - startMenuPinnedFolderMusic
 * - startMenuPinnedFolderNetwork
 * - startMenuPinnedFolderPersonalFolder
 * - startMenuPinnedFolderPictures
 * - startMenuPinnedFolderSettings
 * - startMenuPinnedFolderVideos
 * - storageBlockRemovableStorage
 * - storageRequireMobileDeviceEncryption
 * - storageRestrictAppDataToSystemVolume
 * - storageRestrictAppInstallToSystemVolume
 * - tenantLockdownRequireNetworkDuringOutOfBoxExperience
 * - usbBlocked
 * - voiceRecordingBlocked
 * - webRtcBlockLocalhostIpAddress
 * - wiFiBlockAutomaticConnectHotspots
 * - wiFiBlocked
 * - wiFiBlockManualConfiguration
 * - wiFiScanInterval
 * - windowsSpotlightBlockConsumerSpecificFeatures
 * - windowsSpotlightBlocked
 * - windowsSpotlightBlockOnActionCenter
 * - windowsSpotlightBlockTailoredExperiences
 * - windowsSpotlightBlockThirdPartyNotifications
 * - windowsSpotlightBlockWelcomeExperience
 * - windowsSpotlightBlockWindowsTips
 * - windowsSpotlightConfigureOnLockScreen
 * - windowsStoreBlockAutoUpdate
 * - windowsStoreBlocked
 * - windowsStoreEnablePrivateStoreOnly
 * - wirelessDisplayBlockProjectionToThisDevice
 * - wirelessDisplayBlockUserInputFromReceiver
 * - wirelessDisplayRequirePinForPairing
 */
class Windows10GeneralConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Windows10GeneralConfiguration
     */
    public const FIELD_ACCOUNTS_BLOCK_ADDING_NON_MICROSOFT_ACCOUNT_EMAIL = 'accountsBlockAddingNonMicrosoftAccountEmail';
    public const FIELD_ANTI_THEFT_MODE_BLOCKED = 'antiTheftModeBlocked';
    public const FIELD_APPS_ALLOW_TRUSTED_APPS_SIDELOADING = 'appsAllowTrustedAppsSideloading';
    public const FIELD_APPS_BLOCK_WINDOWS_STORE_ORIGINATED_APPS = 'appsBlockWindowsStoreOriginatedApps';
    public const FIELD_BLUETOOTH_ALLOWED_SERVICES = 'bluetoothAllowedServices';
    public const FIELD_BLUETOOTH_BLOCK_ADVERTISING = 'bluetoothBlockAdvertising';
    public const FIELD_BLUETOOTH_BLOCK_DISCOVERABLE_MODE = 'bluetoothBlockDiscoverableMode';
    public const FIELD_BLUETOOTH_BLOCKED = 'bluetoothBlocked';
    public const FIELD_BLUETOOTH_BLOCK_PRE_PAIRING = 'bluetoothBlockPrePairing';
    public const FIELD_CAMERA_BLOCKED = 'cameraBlocked';
    public const FIELD_CELLULAR_BLOCK_DATA_WHEN_ROAMING = 'cellularBlockDataWhenRoaming';
    public const FIELD_CELLULAR_BLOCK_VPN = 'cellularBlockVpn';
    public const FIELD_CELLULAR_BLOCK_VPN_WHEN_ROAMING = 'cellularBlockVpnWhenRoaming';
    public const FIELD_CERTIFICATES_BLOCK_MANUAL_ROOT_CERTIFICATE_INSTALLATION = 'certificatesBlockManualRootCertificateInstallation';
    public const FIELD_CONNECTED_DEVICES_SERVICE_BLOCKED = 'connectedDevicesServiceBlocked';
    public const FIELD_COPY_PASTE_BLOCKED = 'copyPasteBlocked';
    public const FIELD_CORTANA_BLOCKED = 'cortanaBlocked';
    public const FIELD_DEFENDER_BLOCK_END_USER_ACCESS = 'defenderBlockEndUserAccess';
    public const FIELD_DEFENDER_CLOUD_BLOCK_LEVEL = 'defenderCloudBlockLevel';
    public const FIELD_DEFENDER_DAYS_BEFORE_DELETING_QUARANTINED_MALWARE = 'defenderDaysBeforeDeletingQuarantinedMalware';
    public const FIELD_DEFENDER_DETECTED_MALWARE_ACTIONS = 'defenderDetectedMalwareActions';
    public const FIELD_DEFENDER_FILE_EXTENSIONS_TO_EXCLUDE = 'defenderFileExtensionsToExclude';
    public const FIELD_DEFENDER_FILES_AND_FOLDERS_TO_EXCLUDE = 'defenderFilesAndFoldersToExclude';
    public const FIELD_DEFENDER_MONITOR_FILE_ACTIVITY = 'defenderMonitorFileActivity';
    public const FIELD_DEFENDER_PROCESSES_TO_EXCLUDE = 'defenderProcessesToExclude';
    public const FIELD_DEFENDER_PROMPT_FOR_SAMPLE_SUBMISSION = 'defenderPromptForSampleSubmission';
    public const FIELD_DEFENDER_REQUIRE_BEHAVIOR_MONITORING = 'defenderRequireBehaviorMonitoring';
    public const FIELD_DEFENDER_REQUIRE_CLOUD_PROTECTION = 'defenderRequireCloudProtection';
    public const FIELD_DEFENDER_REQUIRE_NETWORK_INSPECTION_SYSTEM = 'defenderRequireNetworkInspectionSystem';
    public const FIELD_DEFENDER_REQUIRE_REAL_TIME_MONITORING = 'defenderRequireRealTimeMonitoring';
    public const FIELD_DEFENDER_SCAN_ARCHIVE_FILES = 'defenderScanArchiveFiles';
    public const FIELD_DEFENDER_SCAN_DOWNLOADS = 'defenderScanDownloads';
    public const FIELD_DEFENDER_SCAN_INCOMING_MAIL = 'defenderScanIncomingMail';
    public const FIELD_DEFENDER_SCAN_MAPPED_NETWORK_DRIVES_DURING_FULL_SCAN = 'defenderScanMappedNetworkDrivesDuringFullScan';
    public const FIELD_DEFENDER_SCAN_MAX_CPU = 'defenderScanMaxCpu';
    public const FIELD_DEFENDER_SCAN_NETWORK_FILES = 'defenderScanNetworkFiles';
    public const FIELD_DEFENDER_SCAN_REMOVABLE_DRIVES_DURING_FULL_SCAN = 'defenderScanRemovableDrivesDuringFullScan';
    public const FIELD_DEFENDER_SCAN_SCRIPTS_LOADED_IN_INTERNET_EXPLORER = 'defenderScanScriptsLoadedInInternetExplorer';
    public const FIELD_DEFENDER_SCAN_TYPE = 'defenderScanType';
    public const FIELD_DEFENDER_SCHEDULED_QUICK_SCAN_TIME = 'defenderScheduledQuickScanTime';
    public const FIELD_DEFENDER_SCHEDULED_SCAN_TIME = 'defenderScheduledScanTime';
    public const FIELD_DEFENDER_SIGNATURE_UPDATE_INTERVAL_IN_HOURS = 'defenderSignatureUpdateIntervalInHours';
    public const FIELD_DEFENDER_SYSTEM_SCAN_SCHEDULE = 'defenderSystemScanSchedule';
    public const FIELD_DEVELOPER_UNLOCK_SETTING = 'developerUnlockSetting';
    public const FIELD_DEVICE_MANAGEMENT_BLOCK_FACTORY_RESET_ON_MOBILE = 'deviceManagementBlockFactoryResetOnMobile';
    public const FIELD_DEVICE_MANAGEMENT_BLOCK_MANUAL_UNENROLL = 'deviceManagementBlockManualUnenroll';
    public const FIELD_DIAGNOSTICS_DATA_SUBMISSION_MODE = 'diagnosticsDataSubmissionMode';
    public const FIELD_EDGE_ALLOW_START_PAGES_MODIFICATION = 'edgeAllowStartPagesModification';
    public const FIELD_EDGE_BLOCK_ACCESS_TO_ABOUT_FLAGS = 'edgeBlockAccessToAboutFlags';
    public const FIELD_EDGE_BLOCK_ADDRESS_BAR_DROPDOWN = 'edgeBlockAddressBarDropdown';
    public const FIELD_EDGE_BLOCK_AUTOFILL = 'edgeBlockAutofill';
    public const FIELD_EDGE_BLOCK_COMPATIBILITY_LIST = 'edgeBlockCompatibilityList';
    public const FIELD_EDGE_BLOCK_DEVELOPER_TOOLS = 'edgeBlockDeveloperTools';
    public const FIELD_EDGE_BLOCKED = 'edgeBlocked';
    public const FIELD_EDGE_BLOCK_EXTENSIONS = 'edgeBlockExtensions';
    public const FIELD_EDGE_BLOCK_IN_PRIVATE_BROWSING = 'edgeBlockInPrivateBrowsing';
    public const FIELD_EDGE_BLOCK_JAVA_SCRIPT = 'edgeBlockJavaScript';
    public const FIELD_EDGE_BLOCK_LIVE_TILE_DATA_COLLECTION = 'edgeBlockLiveTileDataCollection';
    public const FIELD_EDGE_BLOCK_PASSWORD_MANAGER = 'edgeBlockPasswordManager';
    public const FIELD_EDGE_BLOCK_POPUPS = 'edgeBlockPopups';
    public const FIELD_EDGE_BLOCK_SEARCH_SUGGESTIONS = 'edgeBlockSearchSuggestions';
    public const FIELD_EDGE_BLOCK_SENDING_DO_NOT_TRACK_HEADER = 'edgeBlockSendingDoNotTrackHeader';
    public const FIELD_EDGE_BLOCK_SENDING_INTRANET_TRAFFIC_TO_INTERNET_EXPLORER = 'edgeBlockSendingIntranetTrafficToInternetExplorer';
    public const FIELD_EDGE_CLEAR_BROWSING_DATA_ON_EXIT = 'edgeClearBrowsingDataOnExit';
    public const FIELD_EDGE_COOKIE_POLICY = 'edgeCookiePolicy';
    public const FIELD_EDGE_DISABLE_FIRST_RUN_PAGE = 'edgeDisableFirstRunPage';
    public const FIELD_EDGE_ENTERPRISE_MODE_SITE_LIST_LOCATION = 'edgeEnterpriseModeSiteListLocation';
    public const FIELD_EDGE_FIRST_RUN_URL = 'edgeFirstRunUrl';
    public const FIELD_EDGE_HOMEPAGE_URLS = 'edgeHomepageUrls';
    public const FIELD_EDGE_REQUIRE_SMART_SCREEN = 'edgeRequireSmartScreen';
    public const FIELD_EDGE_SEARCH_ENGINE = 'edgeSearchEngine';
    public const FIELD_EDGE_SEND_INTRANET_TRAFFIC_TO_INTERNET_EXPLORER = 'edgeSendIntranetTrafficToInternetExplorer';
    public const FIELD_EDGE_SYNC_FAVORITES_WITH_INTERNET_EXPLORER = 'edgeSyncFavoritesWithInternetExplorer';
    public const FIELD_ENTERPRISE_CLOUD_PRINT_DISCOVERY_END_POINT = 'enterpriseCloudPrintDiscoveryEndPoint';
    public const FIELD_ENTERPRISE_CLOUD_PRINT_DISCOVERY_MAX_LIMIT = 'enterpriseCloudPrintDiscoveryMaxLimit';
    public const FIELD_ENTERPRISE_CLOUD_PRINT_MOPRIA_DISCOVERY_RESOURCE_IDENTIFIER = 'enterpriseCloudPrintMopriaDiscoveryResourceIdentifier';
    public const FIELD_ENTERPRISE_CLOUD_PRINT_OAUTH_AUTHORITY = 'enterpriseCloudPrintOAuthAuthority';
    public const FIELD_ENTERPRISE_CLOUD_PRINT_OAUTH_CLIENT_IDENTIFIER = 'enterpriseCloudPrintOAuthClientIdentifier';
    public const FIELD_ENTERPRISE_CLOUD_PRINT_RESOURCE_IDENTIFIER = 'enterpriseCloudPrintResourceIdentifier';
    public const FIELD_EXPERIENCE_BLOCK_DEVICE_DISCOVERY = 'experienceBlockDeviceDiscovery';
    public const FIELD_EXPERIENCE_BLOCK_ERROR_DIALOG_WHEN_NO_SIM = 'experienceBlockErrorDialogWhenNoSIM';
    public const FIELD_EXPERIENCE_BLOCK_TASK_SWITCHER = 'experienceBlockTaskSwitcher';
    public const FIELD_GAME_DVR_BLOCKED = 'gameDvrBlocked';
    public const FIELD_INTERNET_SHARING_BLOCKED = 'internetSharingBlocked';
    public const FIELD_LOCATION_SERVICES_BLOCKED = 'locationServicesBlocked';
    public const FIELD_LOCK_SCREEN_ALLOW_TIMEOUT_CONFIGURATION = 'lockScreenAllowTimeoutConfiguration';
    public const FIELD_LOCK_SCREEN_BLOCK_ACTION_CENTER_NOTIFICATIONS = 'lockScreenBlockActionCenterNotifications';
    public const FIELD_LOCK_SCREEN_BLOCK_CORTANA = 'lockScreenBlockCortana';
    public const FIELD_LOCK_SCREEN_BLOCK_TOAST_NOTIFICATIONS = 'lockScreenBlockToastNotifications';
    public const FIELD_LOCK_SCREEN_TIMEOUT_IN_SECONDS = 'lockScreenTimeoutInSeconds';
    public const FIELD_LOGON_BLOCK_FAST_USER_SWITCHING = 'logonBlockFastUserSwitching';
    public const FIELD_MICROSOFT_ACCOUNT_BLOCKED = 'microsoftAccountBlocked';
    public const FIELD_MICROSOFT_ACCOUNT_BLOCK_SETTINGS_SYNC = 'microsoftAccountBlockSettingsSync';
    public const FIELD_NETWORK_PROXY_APPLY_SETTINGS_DEVICE_WIDE = 'networkProxyApplySettingsDeviceWide';
    public const FIELD_NETWORK_PROXY_AUTOMATIC_CONFIGURATION_URL = 'networkProxyAutomaticConfigurationUrl';
    public const FIELD_NETWORK_PROXY_DISABLE_AUTO_DETECT = 'networkProxyDisableAutoDetect';
    public const FIELD_NETWORK_PROXY_SERVER = 'networkProxyServer';
    public const FIELD_NFC_BLOCKED = 'nfcBlocked';
    public const FIELD_ONE_DRIVE_DISABLE_FILE_SYNC = 'oneDriveDisableFileSync';
    public const FIELD_PASSWORD_BLOCK_SIMPLE = 'passwordBlockSimple';
    public const FIELD_PASSWORD_EXPIRATION_DAYS = 'passwordExpirationDays';
    public const FIELD_PASSWORD_MINIMUM_CHARACTER_SET_COUNT = 'passwordMinimumCharacterSetCount';
    public const FIELD_PASSWORD_MINIMUM_LENGTH = 'passwordMinimumLength';
    public const FIELD_PASSWORD_MINUTES_OF_INACTIVITY_BEFORE_SCREEN_TIMEOUT = 'passwordMinutesOfInactivityBeforeScreenTimeout';
    public const FIELD_PASSWORD_PREVIOUS_PASSWORD_BLOCK_COUNT = 'passwordPreviousPasswordBlockCount';
    public const FIELD_PASSWORD_REQUIRED = 'passwordRequired';
    public const FIELD_PASSWORD_REQUIRED_TYPE = 'passwordRequiredType';
    public const FIELD_PASSWORD_REQUIRE_WHEN_RESUME_FROM_IDLE_STATE = 'passwordRequireWhenResumeFromIdleState';
    public const FIELD_PASSWORD_SIGN_IN_FAILURE_COUNT_BEFORE_FACTORY_RESET = 'passwordSignInFailureCountBeforeFactoryReset';
    public const FIELD_PERSONALIZATION_DESKTOP_IMAGE_URL = 'personalizationDesktopImageUrl';
    public const FIELD_PERSONALIZATION_LOCK_SCREEN_IMAGE_URL = 'personalizationLockScreenImageUrl';
    public const FIELD_PRIVACY_ADVERTISING_ID = 'privacyAdvertisingId';
    public const FIELD_PRIVACY_AUTO_ACCEPT_PAIRING_AND_CONSENT_PROMPTS = 'privacyAutoAcceptPairingAndConsentPrompts';
    public const FIELD_PRIVACY_BLOCK_INPUT_PERSONALIZATION = 'privacyBlockInputPersonalization';
    public const FIELD_RESET_PROTECTION_MODE_BLOCKED = 'resetProtectionModeBlocked';
    public const FIELD_SAFE_SEARCH_FILTER = 'safeSearchFilter';
    public const FIELD_SCREEN_CAPTURE_BLOCKED = 'screenCaptureBlocked';
    public const FIELD_SEARCH_BLOCK_DIACRITICS = 'searchBlockDiacritics';
    public const FIELD_SEARCH_DISABLE_AUTO_LANGUAGE_DETECTION = 'searchDisableAutoLanguageDetection';
    public const FIELD_SEARCH_DISABLE_INDEXER_BACKOFF = 'searchDisableIndexerBackoff';
    public const FIELD_SEARCH_DISABLE_INDEXING_ENCRYPTED_ITEMS = 'searchDisableIndexingEncryptedItems';
    public const FIELD_SEARCH_DISABLE_INDEXING_REMOVABLE_DRIVE = 'searchDisableIndexingRemovableDrive';
    public const FIELD_SEARCH_ENABLE_AUTOMATIC_INDEX_SIZE_MANANGEMENT = 'searchEnableAutomaticIndexSizeManangement';
    public const FIELD_SEARCH_ENABLE_REMOTE_QUERIES = 'searchEnableRemoteQueries';
    public const FIELD_SETTINGS_BLOCK_ACCOUNTS_PAGE = 'settingsBlockAccountsPage';
    public const FIELD_SETTINGS_BLOCK_ADD_PROVISIONING_PACKAGE = 'settingsBlockAddProvisioningPackage';
    public const FIELD_SETTINGS_BLOCK_APPS_PAGE = 'settingsBlockAppsPage';
    public const FIELD_SETTINGS_BLOCK_CHANGE_LANGUAGE = 'settingsBlockChangeLanguage';
    public const FIELD_SETTINGS_BLOCK_CHANGE_POWER_SLEEP = 'settingsBlockChangePowerSleep';
    public const FIELD_SETTINGS_BLOCK_CHANGE_REGION = 'settingsBlockChangeRegion';
    public const FIELD_SETTINGS_BLOCK_CHANGE_SYSTEM_TIME = 'settingsBlockChangeSystemTime';
    public const FIELD_SETTINGS_BLOCK_DEVICES_PAGE = 'settingsBlockDevicesPage';
    public const FIELD_SETTINGS_BLOCK_EASE_OF_ACCESS_PAGE = 'settingsBlockEaseOfAccessPage';
    public const FIELD_SETTINGS_BLOCK_EDIT_DEVICE_NAME = 'settingsBlockEditDeviceName';
    public const FIELD_SETTINGS_BLOCK_GAMING_PAGE = 'settingsBlockGamingPage';
    public const FIELD_SETTINGS_BLOCK_NETWORK_INTERNET_PAGE = 'settingsBlockNetworkInternetPage';
    public const FIELD_SETTINGS_BLOCK_PERSONALIZATION_PAGE = 'settingsBlockPersonalizationPage';
    public const FIELD_SETTINGS_BLOCK_PRIVACY_PAGE = 'settingsBlockPrivacyPage';
    public const FIELD_SETTINGS_BLOCK_REMOVE_PROVISIONING_PACKAGE = 'settingsBlockRemoveProvisioningPackage';
    public const FIELD_SETTINGS_BLOCK_SETTINGS_APP = 'settingsBlockSettingsApp';
    public const FIELD_SETTINGS_BLOCK_SYSTEM_PAGE = 'settingsBlockSystemPage';
    public const FIELD_SETTINGS_BLOCK_TIME_LANGUAGE_PAGE = 'settingsBlockTimeLanguagePage';
    public const FIELD_SETTINGS_BLOCK_UPDATE_SECURITY_PAGE = 'settingsBlockUpdateSecurityPage';
    public const FIELD_SHARED_USER_APP_DATA_ALLOWED = 'sharedUserAppDataAllowed';
    public const FIELD_SMART_SCREEN_BLOCK_PROMPT_OVERRIDE = 'smartScreenBlockPromptOverride';
    public const FIELD_SMART_SCREEN_BLOCK_PROMPT_OVERRIDE_FOR_FILES = 'smartScreenBlockPromptOverrideForFiles';
    public const FIELD_SMART_SCREEN_ENABLE_APP_INSTALL_CONTROL = 'smartScreenEnableAppInstallControl';
    public const FIELD_START_BLOCK_UNPINNING_APPS_FROM_TASKBAR = 'startBlockUnpinningAppsFromTaskbar';
    public const FIELD_START_MENU_APP_LIST_VISIBILITY = 'startMenuAppListVisibility';
    public const FIELD_START_MENU_HIDE_CHANGE_ACCOUNT_SETTINGS = 'startMenuHideChangeAccountSettings';
    public const FIELD_START_MENU_HIDE_FREQUENTLY_USED_APPS = 'startMenuHideFrequentlyUsedApps';
    public const FIELD_START_MENU_HIDE_HIBERNATE = 'startMenuHideHibernate';
    public const FIELD_START_MENU_HIDE_LOCK = 'startMenuHideLock';
    public const FIELD_START_MENU_HIDE_POWER_BUTTON = 'startMenuHidePowerButton';
    public const FIELD_START_MENU_HIDE_RECENT_JUMP_LISTS = 'startMenuHideRecentJumpLists';
    public const FIELD_START_MENU_HIDE_RECENTLY_ADDED_APPS = 'startMenuHideRecentlyAddedApps';
    public const FIELD_START_MENU_HIDE_RESTART_OPTIONS = 'startMenuHideRestartOptions';
    public const FIELD_START_MENU_HIDE_SHUT_DOWN = 'startMenuHideShutDown';
    public const FIELD_START_MENU_HIDE_SIGN_OUT = 'startMenuHideSignOut';
    public const FIELD_START_MENU_HIDE_SLEEP = 'startMenuHideSleep';
    public const FIELD_START_MENU_HIDE_SWITCH_ACCOUNT = 'startMenuHideSwitchAccount';
    public const FIELD_START_MENU_HIDE_USER_TILE = 'startMenuHideUserTile';
    public const FIELD_START_MENU_LAYOUT_EDGE_ASSETS_XML = 'startMenuLayoutEdgeAssetsXml';
    public const FIELD_START_MENU_LAYOUT_XML = 'startMenuLayoutXml';
    public const FIELD_START_MENU_MODE = 'startMenuMode';
    public const FIELD_START_MENU_PINNED_FOLDER_DOCUMENTS = 'startMenuPinnedFolderDocuments';
    public const FIELD_START_MENU_PINNED_FOLDER_DOWNLOADS = 'startMenuPinnedFolderDownloads';
    public const FIELD_START_MENU_PINNED_FOLDER_FILE_EXPLORER = 'startMenuPinnedFolderFileExplorer';
    public const FIELD_START_MENU_PINNED_FOLDER_HOME_GROUP = 'startMenuPinnedFolderHomeGroup';
    public const FIELD_START_MENU_PINNED_FOLDER_MUSIC = 'startMenuPinnedFolderMusic';
    public const FIELD_START_MENU_PINNED_FOLDER_NETWORK = 'startMenuPinnedFolderNetwork';
    public const FIELD_START_MENU_PINNED_FOLDER_PERSONAL_FOLDER = 'startMenuPinnedFolderPersonalFolder';
    public const FIELD_START_MENU_PINNED_FOLDER_PICTURES = 'startMenuPinnedFolderPictures';
    public const FIELD_START_MENU_PINNED_FOLDER_SETTINGS = 'startMenuPinnedFolderSettings';
    public const FIELD_START_MENU_PINNED_FOLDER_VIDEOS = 'startMenuPinnedFolderVideos';
    public const FIELD_STORAGE_BLOCK_REMOVABLE_STORAGE = 'storageBlockRemovableStorage';
    public const FIELD_STORAGE_REQUIRE_MOBILE_DEVICE_ENCRYPTION = 'storageRequireMobileDeviceEncryption';
    public const FIELD_STORAGE_RESTRICT_APP_DATA_TO_SYSTEM_VOLUME = 'storageRestrictAppDataToSystemVolume';
    public const FIELD_STORAGE_RESTRICT_APP_INSTALL_TO_SYSTEM_VOLUME = 'storageRestrictAppInstallToSystemVolume';
    public const FIELD_TENANT_LOCKDOWN_REQUIRE_NETWORK_DURING_OUT_OF_BOX_EXPERIENCE = 'tenantLockdownRequireNetworkDuringOutOfBoxExperience';
    public const FIELD_USB_BLOCKED = 'usbBlocked';
    public const FIELD_VOICE_RECORDING_BLOCKED = 'voiceRecordingBlocked';
    public const FIELD_WEB_RTC_BLOCK_LOCALHOST_IP_ADDRESS = 'webRtcBlockLocalhostIpAddress';
    public const FIELD_WI_FI_BLOCK_AUTOMATIC_CONNECT_HOTSPOTS = 'wiFiBlockAutomaticConnectHotspots';
    public const FIELD_WI_FI_BLOCKED = 'wiFiBlocked';
    public const FIELD_WI_FI_BLOCK_MANUAL_CONFIGURATION = 'wiFiBlockManualConfiguration';
    public const FIELD_WI_FI_SCAN_INTERVAL = 'wiFiScanInterval';
    public const FIELD_WINDOWS_SPOTLIGHT_BLOCK_CONSUMER_SPECIFIC_FEATURES = 'windowsSpotlightBlockConsumerSpecificFeatures';
    public const FIELD_WINDOWS_SPOTLIGHT_BLOCKED = 'windowsSpotlightBlocked';
    public const FIELD_WINDOWS_SPOTLIGHT_BLOCK_ON_ACTION_CENTER = 'windowsSpotlightBlockOnActionCenter';
    public const FIELD_WINDOWS_SPOTLIGHT_BLOCK_TAILORED_EXPERIENCES = 'windowsSpotlightBlockTailoredExperiences';
    public const FIELD_WINDOWS_SPOTLIGHT_BLOCK_THIRD_PARTY_NOTIFICATIONS = 'windowsSpotlightBlockThirdPartyNotifications';
    public const FIELD_WINDOWS_SPOTLIGHT_BLOCK_WELCOME_EXPERIENCE = 'windowsSpotlightBlockWelcomeExperience';
    public const FIELD_WINDOWS_SPOTLIGHT_BLOCK_WINDOWS_TIPS = 'windowsSpotlightBlockWindowsTips';
    public const FIELD_WINDOWS_SPOTLIGHT_CONFIGURE_ON_LOCK_SCREEN = 'windowsSpotlightConfigureOnLockScreen';
    public const FIELD_WINDOWS_STORE_BLOCK_AUTO_UPDATE = 'windowsStoreBlockAutoUpdate';
    public const FIELD_WINDOWS_STORE_BLOCKED = 'windowsStoreBlocked';
    public const FIELD_WINDOWS_STORE_ENABLE_PRIVATE_STORE_ONLY = 'windowsStoreEnablePrivateStoreOnly';
    public const FIELD_WIRELESS_DISPLAY_BLOCK_PROJECTION_TO_THIS_DEVICE = 'wirelessDisplayBlockProjectionToThisDevice';
    public const FIELD_WIRELESS_DISPLAY_BLOCK_USER_INPUT_FROM_RECEIVER = 'wirelessDisplayBlockUserInputFromReceiver';
    public const FIELD_WIRELESS_DISPLAY_REQUIRE_PIN_FOR_PAIRING = 'wirelessDisplayRequirePinForPairing';

    /**
     * Select specific Windows10GeneralConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
