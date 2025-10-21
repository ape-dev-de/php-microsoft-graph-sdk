<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows10GeneralConfiguration
 */
class Windows10GeneralConfiguration
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** DateTime the object was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Admin provided description of the Device Configuration. */
        public ?string $description = null,
        /** Admin provided name of the device configuration. */
        public ?string $displayName = null,
        /** DateTime the object was last modified. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Version of the device configuration. */
        public ?float $version = null,
        /** The list of assignments for the device configuration profile. */
        public array $assignments = [],
        /** Device Configuration Setting State Device Summary */
        public array $deviceSettingStateSummaries = [],
        /** Device configuration installation status by device. */
        public array $deviceStatuses = [],
        /** Device Configuration devices status overview */
        public ?string $deviceStatusOverview = null,
        /** Device configuration installation status by user. */
        public array $userStatuses = [],
        /** Device Configuration users status overview */
        public ?string $userStatusOverview = null,
        /** Indicates whether or not to Block the user from adding email accounts to the device that are not associated with a Microsoft account. */
        public ?bool $accountsBlockAddingNonMicrosoftAccountEmail = null,
        /** Indicates whether or not to block the user from selecting an AntiTheft mode preference (Windows 10 Mobile only). */
        public ?bool $antiTheftModeBlocked = null,
        /**  */
        public ?string $appsAllowTrustedAppsSideloading = null,
        /** Indicates whether or not to disable the launch of all apps from Windows Store that came pre-installed or were downloaded. */
        public ?bool $appsBlockWindowsStoreOriginatedApps = null,
        /** @var string[] Specify a list of allowed Bluetooth services and profiles in hex formatted strings. */
        public array $bluetoothAllowedServices = [],
        /** Whether or not to Block the user from using bluetooth advertising. */
        public ?bool $bluetoothBlockAdvertising = null,
        /** Whether or not to Block the user from using bluetooth discoverable mode. */
        public ?bool $bluetoothBlockDiscoverableMode = null,
        /** Whether or not to Block the user from using bluetooth. */
        public ?bool $bluetoothBlocked = null,
        /** Whether or not to block specific bundled Bluetooth peripherals to automatically pair with the host device. */
        public ?bool $bluetoothBlockPrePairing = null,
        /** Whether or not to Block the user from accessing the camera of the device. */
        public ?bool $cameraBlocked = null,
        /** Whether or not to Block the user from using data over cellular while roaming. */
        public ?bool $cellularBlockDataWhenRoaming = null,
        /** Whether or not to Block the user from using VPN over cellular. */
        public ?bool $cellularBlockVpn = null,
        /** Whether or not to Block the user from using VPN when roaming over cellular. */
        public ?bool $cellularBlockVpnWhenRoaming = null,
        /** Whether or not to Block the user from doing manual root certificate installation. */
        public ?bool $certificatesBlockManualRootCertificateInstallation = null,
        /** Whether or not to block Connected Devices Service which enables discovery and connection to other devices, remote messaging, remote app sessions and other cross-device experiences. */
        public ?bool $connectedDevicesServiceBlocked = null,
        /** Whether or not to Block the user from using copy paste. */
        public ?bool $copyPasteBlocked = null,
        /** Whether or not to Block the user from using Cortana. */
        public ?bool $cortanaBlocked = null,
        /** Whether or not to block end user access to Defender. */
        public ?bool $defenderBlockEndUserAccess = null,
        /**  */
        public ?string $defenderCloudBlockLevel = null,
        /** Number of days before deleting quarantined malware. Valid values 0 to 90 */
        public ?float $defenderDaysBeforeDeletingQuarantinedMalware = null,
        /** Gets or sets Defender’s actions to take on detected Malware per threat level. */
        public ?string $defenderDetectedMalwareActions = null,
        /** @var string[] File extensions to exclude from scans and real time protection. */
        public array $defenderFileExtensionsToExclude = [],
        /** @var string[] Files and folder to exclude from scans and real time protection. */
        public array $defenderFilesAndFoldersToExclude = [],
        /**  */
        public ?string $defenderMonitorFileActivity = null,
        /** @var string[] Processes to exclude from scans and real time protection. */
        public array $defenderProcessesToExclude = [],
        /**  */
        public ?string $defenderPromptForSampleSubmission = null,
        /** Indicates whether or not to require behavior monitoring. */
        public ?bool $defenderRequireBehaviorMonitoring = null,
        /** Indicates whether or not to require cloud protection. */
        public ?bool $defenderRequireCloudProtection = null,
        /** Indicates whether or not to require network inspection system. */
        public ?bool $defenderRequireNetworkInspectionSystem = null,
        /** Indicates whether or not to require real time monitoring. */
        public ?bool $defenderRequireRealTimeMonitoring = null,
        /** Indicates whether or not to scan archive files. */
        public ?bool $defenderScanArchiveFiles = null,
        /** Indicates whether or not to scan downloads. */
        public ?bool $defenderScanDownloads = null,
        /** Indicates whether or not to scan incoming mail messages. */
        public ?bool $defenderScanIncomingMail = null,
        /** Indicates whether or not to scan mapped network drives during full scan. */
        public ?bool $defenderScanMappedNetworkDrivesDuringFullScan = null,
        /** Max CPU usage percentage during scan. Valid values 0 to 100 */
        public ?float $defenderScanMaxCpu = null,
        /** Indicates whether or not to scan files opened from a network folder. */
        public ?bool $defenderScanNetworkFiles = null,
        /** Indicates whether or not to scan removable drives during full scan. */
        public ?bool $defenderScanRemovableDrivesDuringFullScan = null,
        /** Indicates whether or not to scan scripts loaded in Internet Explorer browser. */
        public ?bool $defenderScanScriptsLoadedInInternetExplorer = null,
        /**  */
        public ?string $defenderScanType = null,
        /** The time to perform a daily quick scan. */
        public ?string $defenderScheduledQuickScanTime = null,
        /** The defender time for the system scan. */
        public ?string $defenderScheduledScanTime = null,
        /** The signature update interval in hours. Specify 0 not to check. Valid values 0 to 24 */
        public ?float $defenderSignatureUpdateIntervalInHours = null,
        /**  */
        public ?string $defenderSystemScanSchedule = null,
        /**  */
        public ?string $developerUnlockSetting = null,
        /** Indicates whether or not to Block the user from resetting their phone. */
        public ?bool $deviceManagementBlockFactoryResetOnMobile = null,
        /** Indicates whether or not to Block the user from doing manual un-enrollment from device management. */
        public ?bool $deviceManagementBlockManualUnenroll = null,
        /**  */
        public ?string $diagnosticsDataSubmissionMode = null,
        /** Allow users to change Start pages on Edge. Use the EdgeHomepageUrls to specify the Start pages that the user would see by default when they open Edge. */
        public ?bool $edgeAllowStartPagesModification = null,
        /** Indicates whether or not to prevent access to about flags on Edge browser. */
        public ?bool $edgeBlockAccessToAboutFlags = null,
        /** Block the address bar dropdown functionality in Microsoft Edge. Disable this settings to minimize network connections from Microsoft Edge to Microsoft services. */
        public ?bool $edgeBlockAddressBarDropdown = null,
        /** Indicates whether or not to block auto fill. */
        public ?bool $edgeBlockAutofill = null,
        /** Block Microsoft compatibility list in Microsoft Edge. This list from Microsoft helps Edge properly display sites with known compatibility issues. */
        public ?bool $edgeBlockCompatibilityList = null,
        /** Indicates whether or not to block developer tools in the Edge browser. */
        public ?bool $edgeBlockDeveloperTools = null,
        /** Indicates whether or not to Block the user from using the Edge browser. */
        public ?bool $edgeBlocked = null,
        /** Indicates whether or not to block extensions in the Edge browser. */
        public ?bool $edgeBlockExtensions = null,
        /** Indicates whether or not to block InPrivate browsing on corporate networks, in the Edge browser. */
        public ?bool $edgeBlockInPrivateBrowsing = null,
        /** Indicates whether or not to Block the user from using JavaScript. */
        public ?bool $edgeBlockJavaScript = null,
        /** Block the collection of information by Microsoft for live tile creation when users pin a site to Start from Microsoft Edge. */
        public ?bool $edgeBlockLiveTileDataCollection = null,
        /** Indicates whether or not to Block password manager. */
        public ?bool $edgeBlockPasswordManager = null,
        /** Indicates whether or not to block popups. */
        public ?bool $edgeBlockPopups = null,
        /** Indicates whether or not to block the user from using the search suggestions in the address bar. */
        public ?bool $edgeBlockSearchSuggestions = null,
        /** Indicates whether or not to Block the user from sending the do not track header. */
        public ?bool $edgeBlockSendingDoNotTrackHeader = null,
        /** Indicates whether or not to switch the intranet traffic from Edge to Internet Explorer. Note: the name of this property is misleading; the property is obsolete, use EdgeSendIntranetTrafficToInternetExplorer instead. */
        public ?bool $edgeBlockSendingIntranetTrafficToInternetExplorer = null,
        /** Clear browsing data on exiting Microsoft Edge. */
        public ?bool $edgeClearBrowsingDataOnExit = null,
        /**  */
        public ?string $edgeCookiePolicy = null,
        /** Block the Microsoft web page that opens on the first use of Microsoft Edge. This policy allows enterprises, like those enrolled in zero emissions configurations, to block this page. */
        public ?bool $edgeDisableFirstRunPage = null,
        /** Indicates the enterprise mode site list location. Could be a local file, local network or http location. */
        public ?string $edgeEnterpriseModeSiteListLocation = null,
        /** The first run URL for when Edge browser is opened for the first time. */
        public ?string $edgeFirstRunUrl = null,
        /** @var string[] The list of URLs for homepages shodwn on MDM-enrolled devices on Edge browser. */
        public array $edgeHomepageUrls = [],
        /** Indicates whether or not to Require the user to use the smart screen filter. */
        public ?bool $edgeRequireSmartScreen = null,
        /** Allows IT admins to set a default search engine for MDM-Controlled devices. Users can override this and change their default search engine provided the AllowSearchEngineCustomization policy is not set. */
        public ?string $edgeSearchEngine = null,
        /** Indicates whether or not to switch the intranet traffic from Edge to Internet Explorer. */
        public ?bool $edgeSendIntranetTrafficToInternetExplorer = null,
        /** Enable favorites sync between Internet Explorer and Microsoft Edge. Additions, deletions, modifications and order changes to favorites are shared between browsers. */
        public ?bool $edgeSyncFavoritesWithInternetExplorer = null,
        /** Endpoint for discovering cloud printers. */
        public ?string $enterpriseCloudPrintDiscoveryEndPoint = null,
        /** Maximum number of printers that should be queried from a discovery endpoint. This is a mobile only setting. Valid values 1 to 65535 */
        public ?float $enterpriseCloudPrintDiscoveryMaxLimit = null,
        /** OAuth resource URI for printer discovery service as configured in Azure portal. */
        public ?string $enterpriseCloudPrintMopriaDiscoveryResourceIdentifier = null,
        /** Authentication endpoint for acquiring OAuth tokens. */
        public ?string $enterpriseCloudPrintOAuthAuthority = null,
        /** GUID of a client application authorized to retrieve OAuth tokens from the OAuth Authority. */
        public ?string $enterpriseCloudPrintOAuthClientIdentifier = null,
        /** OAuth resource URI for print service as configured in the Azure portal. */
        public ?string $enterpriseCloudPrintResourceIdentifier = null,
        /** Indicates whether or not to enable device discovery UX. */
        public ?bool $experienceBlockDeviceDiscovery = null,
        /** Indicates whether or not to allow the error dialog from displaying if no SIM card is detected. */
        public ?bool $experienceBlockErrorDialogWhenNoSIM = null,
        /** Indicates whether or not to enable task switching on the device. */
        public ?bool $experienceBlockTaskSwitcher = null,
        /** Indicates whether or not to block DVR and broadcasting. */
        public ?bool $gameDvrBlocked = null,
        /** Indicates whether or not to Block the user from using internet sharing. */
        public ?bool $internetSharingBlocked = null,
        /** Indicates whether or not to Block the user from location services. */
        public ?bool $locationServicesBlocked = null,
        /** Specify whether to show a user-configurable setting to control the screen timeout while on the lock screen of Windows 10 Mobile devices. If this policy is set to Allow, the value set by lockScreenTimeoutInSeconds is ignored. */
        public ?bool $lockScreenAllowTimeoutConfiguration = null,
        /** Indicates whether or not to block action center notifications over lock screen. */
        public ?bool $lockScreenBlockActionCenterNotifications = null,
        /** Indicates whether or not the user can interact with Cortana using speech while the system is locked. */
        public ?bool $lockScreenBlockCortana = null,
        /** Indicates whether to allow toast notifications above the device lock screen. */
        public ?bool $lockScreenBlockToastNotifications = null,
        /** Set the duration (in seconds) from the screen locking to the screen turning off for Windows 10 Mobile devices. Supported values are 11-1800. Valid values 11 to 1800 */
        public ?float $lockScreenTimeoutInSeconds = null,
        /** Disables the ability to quickly switch between users that are logged on simultaneously without logging off. */
        public ?bool $logonBlockFastUserSwitching = null,
        /** Indicates whether or not to Block a Microsoft account. */
        public ?bool $microsoftAccountBlocked = null,
        /** Indicates whether or not to Block Microsoft account settings sync. */
        public ?bool $microsoftAccountBlockSettingsSync = null,
        /** If set, proxy settings will be applied to all processes and accounts in the device. Otherwise, it will be applied to the user account that’s enrolled into MDM. */
        public ?bool $networkProxyApplySettingsDeviceWide = null,
        /** Address to the proxy auto-config (PAC) script you want to use. */
        public ?string $networkProxyAutomaticConfigurationUrl = null,
        /** Disable automatic detection of settings. If enabled, the system will try to find the path to a proxy auto-config (PAC) script. */
        public ?bool $networkProxyDisableAutoDetect = null,
        /** Specifies manual proxy server settings. */
        public ?string $networkProxyServer = null,
        /** Indicates whether or not to Block the user from using near field communication. */
        public ?bool $nfcBlocked = null,
        /** Gets or sets a value allowing IT admins to prevent apps and features from working with files on OneDrive. */
        public ?bool $oneDriveDisableFileSync = null,
        /** Specify whether PINs or passwords such as '1111' or '1234' are allowed. For Windows 10 desktops, it also controls the use of picture passwords. */
        public ?bool $passwordBlockSimple = null,
        /** The password expiration in days. Valid values 0 to 730 */
        public ?float $passwordExpirationDays = null,
        /** The number of character sets required in the password. */
        public ?float $passwordMinimumCharacterSetCount = null,
        /** The minimum password length. Valid values 4 to 16 */
        public ?float $passwordMinimumLength = null,
        /** The minutes of inactivity before the screen times out. */
        public ?float $passwordMinutesOfInactivityBeforeScreenTimeout = null,
        /** The number of previous passwords to prevent reuse of. Valid values 0 to 50 */
        public ?float $passwordPreviousPasswordBlockCount = null,
        /** Indicates whether or not to require the user to have a password. */
        public ?bool $passwordRequired = null,
        /**  */
        public ?string $passwordRequiredType = null,
        /** Indicates whether or not to require a password upon resuming from an idle state. */
        public ?bool $passwordRequireWhenResumeFromIdleState = null,
        /** The number of sign in failures before factory reset. Valid values 0 to 999 */
        public ?float $passwordSignInFailureCountBeforeFactoryReset = null,
        /** A http or https Url to a jpg, jpeg or png image that needs to be downloaded and used as the Desktop Image or a file Url to a local image on the file system that needs to used as the Desktop Image. */
        public ?string $personalizationDesktopImageUrl = null,
        /** A http or https Url to a jpg, jpeg or png image that neeeds to be downloaded and used as the Lock Screen Image or a file Url to a local image on the file system that needs to be used as the Lock Screen Image. */
        public ?string $personalizationLockScreenImageUrl = null,
        /**  */
        public ?string $privacyAdvertisingId = null,
        /** Indicates whether or not to allow the automatic acceptance of the pairing and privacy user consent dialog when launching apps. */
        public ?bool $privacyAutoAcceptPairingAndConsentPrompts = null,
        /** Indicates whether or not to block the usage of cloud based speech services for Cortana, Dictation, or Store applications. */
        public ?bool $privacyBlockInputPersonalization = null,
        /** Indicates whether or not to Block the user from reset protection mode. */
        public ?bool $resetProtectionModeBlocked = null,
        /**  */
        public ?string $safeSearchFilter = null,
        /** Indicates whether or not to Block the user from taking Screenshots. */
        public ?bool $screenCaptureBlocked = null,
        /** Specifies if search can use diacritics. */
        public ?bool $searchBlockDiacritics = null,
        /** Specifies whether to use automatic language detection when indexing content and properties. */
        public ?bool $searchDisableAutoLanguageDetection = null,
        /** Indicates whether or not to disable the search indexer backoff feature. */
        public ?bool $searchDisableIndexerBackoff = null,
        /** Indicates whether or not to block indexing of WIP-protected items to prevent them from appearing in search results for Cortana or Explorer. */
        public ?bool $searchDisableIndexingEncryptedItems = null,
        /** Indicates whether or not to allow users to add locations on removable drives to libraries and to be indexed. */
        public ?bool $searchDisableIndexingRemovableDrive = null,
        /** Specifies minimum amount of hard drive space on the same drive as the index location before indexing stops. */
        public ?bool $searchEnableAutomaticIndexSizeManangement = null,
        /** Indicates whether or not to block remote queries of this computer’s index. */
        public ?bool $searchEnableRemoteQueries = null,
        /** Indicates whether or not to block access to Accounts in Settings app. */
        public ?bool $settingsBlockAccountsPage = null,
        /** Indicates whether or not to block the user from installing provisioning packages. */
        public ?bool $settingsBlockAddProvisioningPackage = null,
        /** Indicates whether or not to block access to Apps in Settings app. */
        public ?bool $settingsBlockAppsPage = null,
        /** Indicates whether or not to block the user from changing the language settings. */
        public ?bool $settingsBlockChangeLanguage = null,
        /** Indicates whether or not to block the user from changing power and sleep settings. */
        public ?bool $settingsBlockChangePowerSleep = null,
        /** Indicates whether or not to block the user from changing the region settings. */
        public ?bool $settingsBlockChangeRegion = null,
        /** Indicates whether or not to block the user from changing date and time settings. */
        public ?bool $settingsBlockChangeSystemTime = null,
        /** Indicates whether or not to block access to Devices in Settings app. */
        public ?bool $settingsBlockDevicesPage = null,
        /** Indicates whether or not to block access to Ease of Access in Settings app. */
        public ?bool $settingsBlockEaseOfAccessPage = null,
        /** Indicates whether or not to block the user from editing the device name. */
        public ?bool $settingsBlockEditDeviceName = null,
        /** Indicates whether or not to block access to Gaming in Settings app. */
        public ?bool $settingsBlockGamingPage = null,
        /** Indicates whether or not to block access to Network & Internet in Settings app. */
        public ?bool $settingsBlockNetworkInternetPage = null,
        /** Indicates whether or not to block access to Personalization in Settings app. */
        public ?bool $settingsBlockPersonalizationPage = null,
        /** Indicates whether or not to block access to Privacy in Settings app. */
        public ?bool $settingsBlockPrivacyPage = null,
        /** Indicates whether or not to block the runtime configuration agent from removing provisioning packages. */
        public ?bool $settingsBlockRemoveProvisioningPackage = null,
        /** Indicates whether or not to block access to Settings app. */
        public ?bool $settingsBlockSettingsApp = null,
        /** Indicates whether or not to block access to System in Settings app. */
        public ?bool $settingsBlockSystemPage = null,
        /** Indicates whether or not to block access to Time & Language in Settings app. */
        public ?bool $settingsBlockTimeLanguagePage = null,
        /** Indicates whether or not to block access to Update & Security in Settings app. */
        public ?bool $settingsBlockUpdateSecurityPage = null,
        /** Indicates whether or not to block multiple users of the same app to share data. */
        public ?bool $sharedUserAppDataAllowed = null,
        /** Indicates whether or not users can override SmartScreen Filter warnings about potentially malicious websites. */
        public ?bool $smartScreenBlockPromptOverride = null,
        /** Indicates whether or not users can override the SmartScreen Filter warnings about downloading unverified files */
        public ?bool $smartScreenBlockPromptOverrideForFiles = null,
        /** This property will be deprecated in July 2019 and will be replaced by property SmartScreenAppInstallControl. Allows IT Admins to control whether users are allowed to install apps from places other than the Store. */
        public ?bool $smartScreenEnableAppInstallControl = null,
        /** Indicates whether or not to block the user from unpinning apps from taskbar. */
        public ?bool $startBlockUnpinningAppsFromTaskbar = null,
        /**  */
        public ?string $startMenuAppListVisibility = null,
        /** Enabling this policy hides the change account setting from appearing in the user tile in the start menu. */
        public ?bool $startMenuHideChangeAccountSettings = null,
        /** Enabling this policy hides the most used apps from appearing on the start menu and disables the corresponding toggle in the Settings app. */
        public ?bool $startMenuHideFrequentlyUsedApps = null,
        /** Enabling this policy hides hibernate from appearing in the power button in the start menu. */
        public ?bool $startMenuHideHibernate = null,
        /** Enabling this policy hides lock from appearing in the user tile in the start menu. */
        public ?bool $startMenuHideLock = null,
        /** Enabling this policy hides the power button from appearing in the start menu. */
        public ?bool $startMenuHidePowerButton = null,
        /** Enabling this policy hides recent jump lists from appearing on the start menu/taskbar and disables the corresponding toggle in the Settings app. */
        public ?bool $startMenuHideRecentJumpLists = null,
        /** Enabling this policy hides recently added apps from appearing on the start menu and disables the corresponding toggle in the Settings app. */
        public ?bool $startMenuHideRecentlyAddedApps = null,
        /** Enabling this policy hides 'Restart/Update and Restart' from appearing in the power button in the start menu. */
        public ?bool $startMenuHideRestartOptions = null,
        /** Enabling this policy hides shut down/update and shut down from appearing in the power button in the start menu. */
        public ?bool $startMenuHideShutDown = null,
        /** Enabling this policy hides sign out from appearing in the user tile in the start menu. */
        public ?bool $startMenuHideSignOut = null,
        /** Enabling this policy hides sleep from appearing in the power button in the start menu. */
        public ?bool $startMenuHideSleep = null,
        /** Enabling this policy hides switch account from appearing in the user tile in the start menu. */
        public ?bool $startMenuHideSwitchAccount = null,
        /** Enabling this policy hides the user tile from appearing in the start menu. */
        public ?bool $startMenuHideUserTile = null,
        /** This policy setting allows you to import Edge assets to be used with startMenuLayoutXml policy. Start layout can contain secondary tile from Edge app which looks for Edge local asset file. Edge local asset would not exist and cause Edge secondary tile to appear empty in this case. This policy only gets applied when startMenuLayoutXml policy is modified. The value should be a UTF-8 Base64 encoded byte array. */
        public ?string $startMenuLayoutEdgeAssetsXml = null,
        /** Allows admins to override the default Start menu layout and prevents the user from changing it. The layout is modified by specifying an XML file based on a layout modification schema. XML needs to be in a UTF8 encoded byte array format. */
        public ?string $startMenuLayoutXml = null,
        /**  */
        public ?string $startMenuMode = null,
        /**  */
        public ?string $startMenuPinnedFolderDocuments = null,
        /**  */
        public ?string $startMenuPinnedFolderDownloads = null,
        /**  */
        public ?string $startMenuPinnedFolderFileExplorer = null,
        /**  */
        public ?string $startMenuPinnedFolderHomeGroup = null,
        /**  */
        public ?string $startMenuPinnedFolderMusic = null,
        /**  */
        public ?string $startMenuPinnedFolderNetwork = null,
        /**  */
        public ?string $startMenuPinnedFolderPersonalFolder = null,
        /**  */
        public ?string $startMenuPinnedFolderPictures = null,
        /**  */
        public ?string $startMenuPinnedFolderSettings = null,
        /**  */
        public ?string $startMenuPinnedFolderVideos = null,
        /** Indicates whether or not to Block the user from using removable storage. */
        public ?bool $storageBlockRemovableStorage = null,
        /** Indicating whether or not to require encryption on a mobile device. */
        public ?bool $storageRequireMobileDeviceEncryption = null,
        /** Indicates whether application data is restricted to the system drive. */
        public ?bool $storageRestrictAppDataToSystemVolume = null,
        /** Indicates whether the installation of applications is restricted to the system drive. */
        public ?bool $storageRestrictAppInstallToSystemVolume = null,
        /** Whether the device is required to connect to the network. */
        public ?bool $tenantLockdownRequireNetworkDuringOutOfBoxExperience = null,
        /** Indicates whether or not to Block the user from USB connection. */
        public ?bool $usbBlocked = null,
        /** Indicates whether or not to Block the user from voice recording. */
        public ?bool $voiceRecordingBlocked = null,
        /** Indicates whether or not user's localhost IP address is displayed while making phone calls using the WebRTC */
        public ?bool $webRtcBlockLocalhostIpAddress = null,
        /** Indicating whether or not to block automatically connecting to Wi-Fi hotspots. Has no impact if Wi-Fi is blocked. */
        public ?bool $wiFiBlockAutomaticConnectHotspots = null,
        /** Indicates whether or not to Block the user from using Wi-Fi. */
        public ?bool $wiFiBlocked = null,
        /** Indicates whether or not to Block the user from using Wi-Fi manual configuration. */
        public ?bool $wiFiBlockManualConfiguration = null,
        /** Specify how often devices scan for Wi-Fi networks. Supported values are 1-500, where 100 = default, and 500 = low frequency. Valid values 1 to 500 */
        public ?float $wiFiScanInterval = null,
        /** Allows IT admins to block experiences that are typically for consumers only, such as Start suggestions, Membership notifications, Post-OOBE app install and redirect tiles. */
        public ?bool $windowsSpotlightBlockConsumerSpecificFeatures = null,
        /** Allows IT admins to turn off all Windows Spotlight features */
        public ?bool $windowsSpotlightBlocked = null,
        /** Block suggestions from Microsoft that show after each OS clean install, upgrade or in an on-going basis to introduce users to what is new or changed */
        public ?bool $windowsSpotlightBlockOnActionCenter = null,
        /** Block personalized content in Windows spotlight based on user’s device usage. */
        public ?bool $windowsSpotlightBlockTailoredExperiences = null,
        /** Block third party content delivered via Windows Spotlight */
        public ?bool $windowsSpotlightBlockThirdPartyNotifications = null,
        /** Block Windows Spotlight Windows welcome experience */
        public ?bool $windowsSpotlightBlockWelcomeExperience = null,
        /** Allows IT admins to turn off the popup of Windows Tips. */
        public ?bool $windowsSpotlightBlockWindowsTips = null,
        /**  */
        public ?string $windowsSpotlightConfigureOnLockScreen = null,
        /** Indicates whether or not to block automatic update of apps from Windows Store. */
        public ?bool $windowsStoreBlockAutoUpdate = null,
        /** Indicates whether or not to Block the user from using the Windows store. */
        public ?bool $windowsStoreBlocked = null,
        /** Indicates whether or not to enable Private Store Only. */
        public ?bool $windowsStoreEnablePrivateStoreOnly = null,
        /** Indicates whether or not to allow other devices from discovering this PC for projection. */
        public ?bool $wirelessDisplayBlockProjectionToThisDevice = null,
        /** Indicates whether or not to allow user input from wireless display receiver. */
        public ?bool $wirelessDisplayBlockUserInputFromReceiver = null,
        /** Indicates whether or not to require a PIN for new devices to initiate pairing. */
        public ?bool $wirelessDisplayRequirePinForPairing = null
    ) {}
}
