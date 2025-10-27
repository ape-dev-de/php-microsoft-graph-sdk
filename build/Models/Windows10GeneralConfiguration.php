<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows10GeneralConfiguration
 */
class Windows10GeneralConfiguration
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** DateTime the object was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Admin provided description of the Device Configuration. */
    public ?string $description = null;

    /** Admin provided name of the device configuration. */
    public ?string $displayName = null;

    /** DateTime the object was last modified. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** Version of the device configuration. */
    public ?float $version = null;

    /** 
     * The list of assignments for the device configuration profile.
     * @var DeviceConfigurationAssignment[]
     */
    public array $assignments = [];

    /** 
     * Device Configuration Setting State Device Summary
     * @var SettingStateDeviceSummary[]
     */
    public array $deviceSettingStateSummaries = [];

    /** 
     * Device configuration installation status by device.
     * @var DeviceConfigurationDeviceStatus[]
     */
    public array $deviceStatuses = [];

    /** 
     * Device Configuration devices status overview
     * @var DeviceConfigurationDeviceOverview|\stdClass|null
     */
    public DeviceConfigurationDeviceOverview|\stdClass|null $deviceStatusOverview = null;

    /** 
     * Device configuration installation status by user.
     * @var DeviceConfigurationUserStatus[]
     */
    public array $userStatuses = [];

    /** 
     * Device Configuration users status overview
     * @var DeviceConfigurationUserOverview|\stdClass|null
     */
    public DeviceConfigurationUserOverview|\stdClass|null $userStatusOverview = null;

    /** Indicates whether or not to Block the user from adding email accounts to the device that are not associated with a Microsoft account. */
    public ?bool $accountsBlockAddingNonMicrosoftAccountEmail = null;

    /** Indicates whether or not to block the user from selecting an AntiTheft mode preference (Windows 10 Mobile only). */
    public ?bool $antiTheftModeBlocked = null;

    /**  */
    public ?StateManagementSetting $appsAllowTrustedAppsSideloading = null;

    /** Indicates whether or not to disable the launch of all apps from Windows Store that came pre-installed or were downloaded. */
    public ?bool $appsBlockWindowsStoreOriginatedApps = null;

    /** 
     * Specify a list of allowed Bluetooth services and profiles in hex formatted strings.
     * @var string[]
     */
    public array $bluetoothAllowedServices = [];

    /** Whether or not to Block the user from using bluetooth advertising. */
    public ?bool $bluetoothBlockAdvertising = null;

    /** Whether or not to Block the user from using bluetooth discoverable mode. */
    public ?bool $bluetoothBlockDiscoverableMode = null;

    /** Whether or not to Block the user from using bluetooth. */
    public ?bool $bluetoothBlocked = null;

    /** Whether or not to block specific bundled Bluetooth peripherals to automatically pair with the host device. */
    public ?bool $bluetoothBlockPrePairing = null;

    /** Whether or not to Block the user from accessing the camera of the device. */
    public ?bool $cameraBlocked = null;

    /** Whether or not to Block the user from using data over cellular while roaming. */
    public ?bool $cellularBlockDataWhenRoaming = null;

    /** Whether or not to Block the user from using VPN over cellular. */
    public ?bool $cellularBlockVpn = null;

    /** Whether or not to Block the user from using VPN when roaming over cellular. */
    public ?bool $cellularBlockVpnWhenRoaming = null;

    /** Whether or not to Block the user from doing manual root certificate installation. */
    public ?bool $certificatesBlockManualRootCertificateInstallation = null;

    /** Whether or not to block Connected Devices Service which enables discovery and connection to other devices, remote messaging, remote app sessions and other cross-device experiences. */
    public ?bool $connectedDevicesServiceBlocked = null;

    /** Whether or not to Block the user from using copy paste. */
    public ?bool $copyPasteBlocked = null;

    /** Whether or not to Block the user from using Cortana. */
    public ?bool $cortanaBlocked = null;

    /** Whether or not to block end user access to Defender. */
    public ?bool $defenderBlockEndUserAccess = null;

    /**  */
    public ?DefenderCloudBlockLevelType $defenderCloudBlockLevel = null;

    /** Number of days before deleting quarantined malware. Valid values 0 to 90 */
    public ?float $defenderDaysBeforeDeletingQuarantinedMalware = null;

    /** 
     * Gets or sets Defender’s actions to take on detected Malware per threat level.
     * @var DefenderDetectedMalwareActions|\stdClass|null
     */
    public DefenderDetectedMalwareActions|\stdClass|null $defenderDetectedMalwareActions = null;

    /** 
     * File extensions to exclude from scans and real time protection.
     * @var string[]
     */
    public array $defenderFileExtensionsToExclude = [];

    /** 
     * Files and folder to exclude from scans and real time protection.
     * @var string[]
     */
    public array $defenderFilesAndFoldersToExclude = [];

    /**  */
    public ?DefenderMonitorFileActivity $defenderMonitorFileActivity = null;

    /** 
     * Processes to exclude from scans and real time protection.
     * @var string[]
     */
    public array $defenderProcessesToExclude = [];

    /**  */
    public ?DefenderPromptForSampleSubmission $defenderPromptForSampleSubmission = null;

    /** Indicates whether or not to require behavior monitoring. */
    public ?bool $defenderRequireBehaviorMonitoring = null;

    /** Indicates whether or not to require cloud protection. */
    public ?bool $defenderRequireCloudProtection = null;

    /** Indicates whether or not to require network inspection system. */
    public ?bool $defenderRequireNetworkInspectionSystem = null;

    /** Indicates whether or not to require real time monitoring. */
    public ?bool $defenderRequireRealTimeMonitoring = null;

    /** Indicates whether or not to scan archive files. */
    public ?bool $defenderScanArchiveFiles = null;

    /** Indicates whether or not to scan downloads. */
    public ?bool $defenderScanDownloads = null;

    /** Indicates whether or not to scan incoming mail messages. */
    public ?bool $defenderScanIncomingMail = null;

    /** Indicates whether or not to scan mapped network drives during full scan. */
    public ?bool $defenderScanMappedNetworkDrivesDuringFullScan = null;

    /** Max CPU usage percentage during scan. Valid values 0 to 100 */
    public ?float $defenderScanMaxCpu = null;

    /** Indicates whether or not to scan files opened from a network folder. */
    public ?bool $defenderScanNetworkFiles = null;

    /** Indicates whether or not to scan removable drives during full scan. */
    public ?bool $defenderScanRemovableDrivesDuringFullScan = null;

    /** Indicates whether or not to scan scripts loaded in Internet Explorer browser. */
    public ?bool $defenderScanScriptsLoadedInInternetExplorer = null;

    /**  */
    public ?DefenderScanType $defenderScanType = null;

    /** The time to perform a daily quick scan. */
    public ?string $defenderScheduledQuickScanTime = null;

    /** The defender time for the system scan. */
    public ?string $defenderScheduledScanTime = null;

    /** The signature update interval in hours. Specify 0 not to check. Valid values 0 to 24 */
    public ?float $defenderSignatureUpdateIntervalInHours = null;

    /**  */
    public ?WeeklySchedule $defenderSystemScanSchedule = null;

    /**  */
    public ?StateManagementSetting $developerUnlockSetting = null;

    /** Indicates whether or not to Block the user from resetting their phone. */
    public ?bool $deviceManagementBlockFactoryResetOnMobile = null;

    /** Indicates whether or not to Block the user from doing manual un-enrollment from device management. */
    public ?bool $deviceManagementBlockManualUnenroll = null;

    /**  */
    public ?DiagnosticDataSubmissionMode $diagnosticsDataSubmissionMode = null;

    /** Allow users to change Start pages on Edge. Use the EdgeHomepageUrls to specify the Start pages that the user would see by default when they open Edge. */
    public ?bool $edgeAllowStartPagesModification = null;

    /** Indicates whether or not to prevent access to about flags on Edge browser. */
    public ?bool $edgeBlockAccessToAboutFlags = null;

    /** Block the address bar dropdown functionality in Microsoft Edge. Disable this settings to minimize network connections from Microsoft Edge to Microsoft services. */
    public ?bool $edgeBlockAddressBarDropdown = null;

    /** Indicates whether or not to block auto fill. */
    public ?bool $edgeBlockAutofill = null;

    /** Block Microsoft compatibility list in Microsoft Edge. This list from Microsoft helps Edge properly display sites with known compatibility issues. */
    public ?bool $edgeBlockCompatibilityList = null;

    /** Indicates whether or not to block developer tools in the Edge browser. */
    public ?bool $edgeBlockDeveloperTools = null;

    /** Indicates whether or not to Block the user from using the Edge browser. */
    public ?bool $edgeBlocked = null;

    /** Indicates whether or not to block extensions in the Edge browser. */
    public ?bool $edgeBlockExtensions = null;

    /** Indicates whether or not to block InPrivate browsing on corporate networks, in the Edge browser. */
    public ?bool $edgeBlockInPrivateBrowsing = null;

    /** Indicates whether or not to Block the user from using JavaScript. */
    public ?bool $edgeBlockJavaScript = null;

    /** Block the collection of information by Microsoft for live tile creation when users pin a site to Start from Microsoft Edge. */
    public ?bool $edgeBlockLiveTileDataCollection = null;

    /** Indicates whether or not to Block password manager. */
    public ?bool $edgeBlockPasswordManager = null;

    /** Indicates whether or not to block popups. */
    public ?bool $edgeBlockPopups = null;

    /** Indicates whether or not to block the user from using the search suggestions in the address bar. */
    public ?bool $edgeBlockSearchSuggestions = null;

    /** Indicates whether or not to Block the user from sending the do not track header. */
    public ?bool $edgeBlockSendingDoNotTrackHeader = null;

    /** Indicates whether or not to switch the intranet traffic from Edge to Internet Explorer. Note: the name of this property is misleading; the property is obsolete, use EdgeSendIntranetTrafficToInternetExplorer instead. */
    public ?bool $edgeBlockSendingIntranetTrafficToInternetExplorer = null;

    /** Clear browsing data on exiting Microsoft Edge. */
    public ?bool $edgeClearBrowsingDataOnExit = null;

    /**  */
    public ?EdgeCookiePolicy $edgeCookiePolicy = null;

    /** Block the Microsoft web page that opens on the first use of Microsoft Edge. This policy allows enterprises, like those enrolled in zero emissions configurations, to block this page. */
    public ?bool $edgeDisableFirstRunPage = null;

    /** Indicates the enterprise mode site list location. Could be a local file, local network or http location. */
    public ?string $edgeEnterpriseModeSiteListLocation = null;

    /** The first run URL for when Edge browser is opened for the first time. */
    public ?string $edgeFirstRunUrl = null;

    /** 
     * The list of URLs for homepages shodwn on MDM-enrolled devices on Edge browser.
     * @var string[]
     */
    public array $edgeHomepageUrls = [];

    /** Indicates whether or not to Require the user to use the smart screen filter. */
    public ?bool $edgeRequireSmartScreen = null;

    /** 
     * Allows IT admins to set a default search engine for MDM-Controlled devices. Users can override this and change their default search engine provided the AllowSearchEngineCustomization policy is not set.
     * @var EdgeSearchEngineBase|\stdClass|null
     */
    public EdgeSearchEngineBase|\stdClass|null $edgeSearchEngine = null;

    /** Indicates whether or not to switch the intranet traffic from Edge to Internet Explorer. */
    public ?bool $edgeSendIntranetTrafficToInternetExplorer = null;

    /** Enable favorites sync between Internet Explorer and Microsoft Edge. Additions, deletions, modifications and order changes to favorites are shared between browsers. */
    public ?bool $edgeSyncFavoritesWithInternetExplorer = null;

    /** Endpoint for discovering cloud printers. */
    public ?string $enterpriseCloudPrintDiscoveryEndPoint = null;

    /** Maximum number of printers that should be queried from a discovery endpoint. This is a mobile only setting. Valid values 1 to 65535 */
    public ?float $enterpriseCloudPrintDiscoveryMaxLimit = null;

    /** OAuth resource URI for printer discovery service as configured in Azure portal. */
    public ?string $enterpriseCloudPrintMopriaDiscoveryResourceIdentifier = null;

    /** Authentication endpoint for acquiring OAuth tokens. */
    public ?string $enterpriseCloudPrintOAuthAuthority = null;

    /** GUID of a client application authorized to retrieve OAuth tokens from the OAuth Authority. */
    public ?string $enterpriseCloudPrintOAuthClientIdentifier = null;

    /** OAuth resource URI for print service as configured in the Azure portal. */
    public ?string $enterpriseCloudPrintResourceIdentifier = null;

    /** Indicates whether or not to enable device discovery UX. */
    public ?bool $experienceBlockDeviceDiscovery = null;

    /** Indicates whether or not to allow the error dialog from displaying if no SIM card is detected. */
    public ?bool $experienceBlockErrorDialogWhenNoSIM = null;

    /** Indicates whether or not to enable task switching on the device. */
    public ?bool $experienceBlockTaskSwitcher = null;

    /** Indicates whether or not to block DVR and broadcasting. */
    public ?bool $gameDvrBlocked = null;

    /** Indicates whether or not to Block the user from using internet sharing. */
    public ?bool $internetSharingBlocked = null;

    /** Indicates whether or not to Block the user from location services. */
    public ?bool $locationServicesBlocked = null;

    /** Specify whether to show a user-configurable setting to control the screen timeout while on the lock screen of Windows 10 Mobile devices. If this policy is set to Allow, the value set by lockScreenTimeoutInSeconds is ignored. */
    public ?bool $lockScreenAllowTimeoutConfiguration = null;

    /** Indicates whether or not to block action center notifications over lock screen. */
    public ?bool $lockScreenBlockActionCenterNotifications = null;

    /** Indicates whether or not the user can interact with Cortana using speech while the system is locked. */
    public ?bool $lockScreenBlockCortana = null;

    /** Indicates whether to allow toast notifications above the device lock screen. */
    public ?bool $lockScreenBlockToastNotifications = null;

    /** Set the duration (in seconds) from the screen locking to the screen turning off for Windows 10 Mobile devices. Supported values are 11-1800. Valid values 11 to 1800 */
    public ?float $lockScreenTimeoutInSeconds = null;

    /** Disables the ability to quickly switch between users that are logged on simultaneously without logging off. */
    public ?bool $logonBlockFastUserSwitching = null;

    /** Indicates whether or not to Block a Microsoft account. */
    public ?bool $microsoftAccountBlocked = null;

    /** Indicates whether or not to Block Microsoft account settings sync. */
    public ?bool $microsoftAccountBlockSettingsSync = null;

    /** If set, proxy settings will be applied to all processes and accounts in the device. Otherwise, it will be applied to the user account that’s enrolled into MDM. */
    public ?bool $networkProxyApplySettingsDeviceWide = null;

    /** Address to the proxy auto-config (PAC) script you want to use. */
    public ?string $networkProxyAutomaticConfigurationUrl = null;

    /** Disable automatic detection of settings. If enabled, the system will try to find the path to a proxy auto-config (PAC) script. */
    public ?bool $networkProxyDisableAutoDetect = null;

    /** 
     * Specifies manual proxy server settings.
     * @var Windows10NetworkProxyServer|\stdClass|null
     */
    public Windows10NetworkProxyServer|\stdClass|null $networkProxyServer = null;

    /** Indicates whether or not to Block the user from using near field communication. */
    public ?bool $nfcBlocked = null;

    /** Gets or sets a value allowing IT admins to prevent apps and features from working with files on OneDrive. */
    public ?bool $oneDriveDisableFileSync = null;

    /** Specify whether PINs or passwords such as '1111' or '1234' are allowed. For Windows 10 desktops, it also controls the use of picture passwords. */
    public ?bool $passwordBlockSimple = null;

    /** The password expiration in days. Valid values 0 to 730 */
    public ?float $passwordExpirationDays = null;

    /** The number of character sets required in the password. */
    public ?float $passwordMinimumCharacterSetCount = null;

    /** The minimum password length. Valid values 4 to 16 */
    public ?float $passwordMinimumLength = null;

    /** The minutes of inactivity before the screen times out. */
    public ?float $passwordMinutesOfInactivityBeforeScreenTimeout = null;

    /** The number of previous passwords to prevent reuse of. Valid values 0 to 50 */
    public ?float $passwordPreviousPasswordBlockCount = null;

    /** Indicates whether or not to require the user to have a password. */
    public ?bool $passwordRequired = null;

    /**  */
    public ?RequiredPasswordType $passwordRequiredType = null;

    /** Indicates whether or not to require a password upon resuming from an idle state. */
    public ?bool $passwordRequireWhenResumeFromIdleState = null;

    /** The number of sign in failures before factory reset. Valid values 0 to 999 */
    public ?float $passwordSignInFailureCountBeforeFactoryReset = null;

    /** A http or https Url to a jpg, jpeg or png image that needs to be downloaded and used as the Desktop Image or a file Url to a local image on the file system that needs to used as the Desktop Image. */
    public ?string $personalizationDesktopImageUrl = null;

    /** A http or https Url to a jpg, jpeg or png image that neeeds to be downloaded and used as the Lock Screen Image or a file Url to a local image on the file system that needs to be used as the Lock Screen Image. */
    public ?string $personalizationLockScreenImageUrl = null;

    /**  */
    public ?StateManagementSetting $privacyAdvertisingId = null;

    /** Indicates whether or not to allow the automatic acceptance of the pairing and privacy user consent dialog when launching apps. */
    public ?bool $privacyAutoAcceptPairingAndConsentPrompts = null;

    /** Indicates whether or not to block the usage of cloud based speech services for Cortana, Dictation, or Store applications. */
    public ?bool $privacyBlockInputPersonalization = null;

    /** Indicates whether or not to Block the user from reset protection mode. */
    public ?bool $resetProtectionModeBlocked = null;

    /**  */
    public ?SafeSearchFilterType $safeSearchFilter = null;

    /** Indicates whether or not to Block the user from taking Screenshots. */
    public ?bool $screenCaptureBlocked = null;

    /** Specifies if search can use diacritics. */
    public ?bool $searchBlockDiacritics = null;

    /** Specifies whether to use automatic language detection when indexing content and properties. */
    public ?bool $searchDisableAutoLanguageDetection = null;

    /** Indicates whether or not to disable the search indexer backoff feature. */
    public ?bool $searchDisableIndexerBackoff = null;

    /** Indicates whether or not to block indexing of WIP-protected items to prevent them from appearing in search results for Cortana or Explorer. */
    public ?bool $searchDisableIndexingEncryptedItems = null;

    /** Indicates whether or not to allow users to add locations on removable drives to libraries and to be indexed. */
    public ?bool $searchDisableIndexingRemovableDrive = null;

    /** Specifies minimum amount of hard drive space on the same drive as the index location before indexing stops. */
    public ?bool $searchEnableAutomaticIndexSizeManangement = null;

    /** Indicates whether or not to block remote queries of this computer’s index. */
    public ?bool $searchEnableRemoteQueries = null;

    /** Indicates whether or not to block access to Accounts in Settings app. */
    public ?bool $settingsBlockAccountsPage = null;

    /** Indicates whether or not to block the user from installing provisioning packages. */
    public ?bool $settingsBlockAddProvisioningPackage = null;

    /** Indicates whether or not to block access to Apps in Settings app. */
    public ?bool $settingsBlockAppsPage = null;

    /** Indicates whether or not to block the user from changing the language settings. */
    public ?bool $settingsBlockChangeLanguage = null;

    /** Indicates whether or not to block the user from changing power and sleep settings. */
    public ?bool $settingsBlockChangePowerSleep = null;

    /** Indicates whether or not to block the user from changing the region settings. */
    public ?bool $settingsBlockChangeRegion = null;

    /** Indicates whether or not to block the user from changing date and time settings. */
    public ?bool $settingsBlockChangeSystemTime = null;

    /** Indicates whether or not to block access to Devices in Settings app. */
    public ?bool $settingsBlockDevicesPage = null;

    /** Indicates whether or not to block access to Ease of Access in Settings app. */
    public ?bool $settingsBlockEaseOfAccessPage = null;

    /** Indicates whether or not to block the user from editing the device name. */
    public ?bool $settingsBlockEditDeviceName = null;

    /** Indicates whether or not to block access to Gaming in Settings app. */
    public ?bool $settingsBlockGamingPage = null;

    /** Indicates whether or not to block access to Network & Internet in Settings app. */
    public ?bool $settingsBlockNetworkInternetPage = null;

    /** Indicates whether or not to block access to Personalization in Settings app. */
    public ?bool $settingsBlockPersonalizationPage = null;

    /** Indicates whether or not to block access to Privacy in Settings app. */
    public ?bool $settingsBlockPrivacyPage = null;

    /** Indicates whether or not to block the runtime configuration agent from removing provisioning packages. */
    public ?bool $settingsBlockRemoveProvisioningPackage = null;

    /** Indicates whether or not to block access to Settings app. */
    public ?bool $settingsBlockSettingsApp = null;

    /** Indicates whether or not to block access to System in Settings app. */
    public ?bool $settingsBlockSystemPage = null;

    /** Indicates whether or not to block access to Time & Language in Settings app. */
    public ?bool $settingsBlockTimeLanguagePage = null;

    /** Indicates whether or not to block access to Update & Security in Settings app. */
    public ?bool $settingsBlockUpdateSecurityPage = null;

    /** Indicates whether or not to block multiple users of the same app to share data. */
    public ?bool $sharedUserAppDataAllowed = null;

    /** Indicates whether or not users can override SmartScreen Filter warnings about potentially malicious websites. */
    public ?bool $smartScreenBlockPromptOverride = null;

    /** Indicates whether or not users can override the SmartScreen Filter warnings about downloading unverified files */
    public ?bool $smartScreenBlockPromptOverrideForFiles = null;

    /** This property will be deprecated in July 2019 and will be replaced by property SmartScreenAppInstallControl. Allows IT Admins to control whether users are allowed to install apps from places other than the Store. */
    public ?bool $smartScreenEnableAppInstallControl = null;

    /** Indicates whether or not to block the user from unpinning apps from taskbar. */
    public ?bool $startBlockUnpinningAppsFromTaskbar = null;

    /**  */
    public ?WindowsStartMenuAppListVisibilityType $startMenuAppListVisibility = null;

    /** Enabling this policy hides the change account setting from appearing in the user tile in the start menu. */
    public ?bool $startMenuHideChangeAccountSettings = null;

    /** Enabling this policy hides the most used apps from appearing on the start menu and disables the corresponding toggle in the Settings app. */
    public ?bool $startMenuHideFrequentlyUsedApps = null;

    /** Enabling this policy hides hibernate from appearing in the power button in the start menu. */
    public ?bool $startMenuHideHibernate = null;

    /** Enabling this policy hides lock from appearing in the user tile in the start menu. */
    public ?bool $startMenuHideLock = null;

    /** Enabling this policy hides the power button from appearing in the start menu. */
    public ?bool $startMenuHidePowerButton = null;

    /** Enabling this policy hides recent jump lists from appearing on the start menu/taskbar and disables the corresponding toggle in the Settings app. */
    public ?bool $startMenuHideRecentJumpLists = null;

    /** Enabling this policy hides recently added apps from appearing on the start menu and disables the corresponding toggle in the Settings app. */
    public ?bool $startMenuHideRecentlyAddedApps = null;

    /** Enabling this policy hides 'Restart/Update and Restart' from appearing in the power button in the start menu. */
    public ?bool $startMenuHideRestartOptions = null;

    /** Enabling this policy hides shut down/update and shut down from appearing in the power button in the start menu. */
    public ?bool $startMenuHideShutDown = null;

    /** Enabling this policy hides sign out from appearing in the user tile in the start menu. */
    public ?bool $startMenuHideSignOut = null;

    /** Enabling this policy hides sleep from appearing in the power button in the start menu. */
    public ?bool $startMenuHideSleep = null;

    /** Enabling this policy hides switch account from appearing in the user tile in the start menu. */
    public ?bool $startMenuHideSwitchAccount = null;

    /** Enabling this policy hides the user tile from appearing in the start menu. */
    public ?bool $startMenuHideUserTile = null;

    /** This policy setting allows you to import Edge assets to be used with startMenuLayoutXml policy. Start layout can contain secondary tile from Edge app which looks for Edge local asset file. Edge local asset would not exist and cause Edge secondary tile to appear empty in this case. This policy only gets applied when startMenuLayoutXml policy is modified. The value should be a UTF-8 Base64 encoded byte array. */
    public ?string $startMenuLayoutEdgeAssetsXml = null;

    /** Allows admins to override the default Start menu layout and prevents the user from changing it. The layout is modified by specifying an XML file based on a layout modification schema. XML needs to be in a UTF8 encoded byte array format. */
    public ?string $startMenuLayoutXml = null;

    /**  */
    public ?WindowsStartMenuModeType $startMenuMode = null;

    /**  */
    public ?VisibilitySetting $startMenuPinnedFolderDocuments = null;

    /**  */
    public ?VisibilitySetting $startMenuPinnedFolderDownloads = null;

    /**  */
    public ?VisibilitySetting $startMenuPinnedFolderFileExplorer = null;

    /**  */
    public ?VisibilitySetting $startMenuPinnedFolderHomeGroup = null;

    /**  */
    public ?VisibilitySetting $startMenuPinnedFolderMusic = null;

    /**  */
    public ?VisibilitySetting $startMenuPinnedFolderNetwork = null;

    /**  */
    public ?VisibilitySetting $startMenuPinnedFolderPersonalFolder = null;

    /**  */
    public ?VisibilitySetting $startMenuPinnedFolderPictures = null;

    /**  */
    public ?VisibilitySetting $startMenuPinnedFolderSettings = null;

    /**  */
    public ?VisibilitySetting $startMenuPinnedFolderVideos = null;

    /** Indicates whether or not to Block the user from using removable storage. */
    public ?bool $storageBlockRemovableStorage = null;

    /** Indicating whether or not to require encryption on a mobile device. */
    public ?bool $storageRequireMobileDeviceEncryption = null;

    /** Indicates whether application data is restricted to the system drive. */
    public ?bool $storageRestrictAppDataToSystemVolume = null;

    /** Indicates whether the installation of applications is restricted to the system drive. */
    public ?bool $storageRestrictAppInstallToSystemVolume = null;

    /** Whether the device is required to connect to the network. */
    public ?bool $tenantLockdownRequireNetworkDuringOutOfBoxExperience = null;

    /** Indicates whether or not to Block the user from USB connection. */
    public ?bool $usbBlocked = null;

    /** Indicates whether or not to Block the user from voice recording. */
    public ?bool $voiceRecordingBlocked = null;

    /** Indicates whether or not user's localhost IP address is displayed while making phone calls using the WebRTC */
    public ?bool $webRtcBlockLocalhostIpAddress = null;

    /** Indicating whether or not to block automatically connecting to Wi-Fi hotspots. Has no impact if Wi-Fi is blocked. */
    public ?bool $wiFiBlockAutomaticConnectHotspots = null;

    /** Indicates whether or not to Block the user from using Wi-Fi. */
    public ?bool $wiFiBlocked = null;

    /** Indicates whether or not to Block the user from using Wi-Fi manual configuration. */
    public ?bool $wiFiBlockManualConfiguration = null;

    /** Specify how often devices scan for Wi-Fi networks. Supported values are 1-500, where 100 = default, and 500 = low frequency. Valid values 1 to 500 */
    public ?float $wiFiScanInterval = null;

    /** Allows IT admins to block experiences that are typically for consumers only, such as Start suggestions, Membership notifications, Post-OOBE app install and redirect tiles. */
    public ?bool $windowsSpotlightBlockConsumerSpecificFeatures = null;

    /** Allows IT admins to turn off all Windows Spotlight features */
    public ?bool $windowsSpotlightBlocked = null;

    /** Block suggestions from Microsoft that show after each OS clean install, upgrade or in an on-going basis to introduce users to what is new or changed */
    public ?bool $windowsSpotlightBlockOnActionCenter = null;

    /** Block personalized content in Windows spotlight based on user’s device usage. */
    public ?bool $windowsSpotlightBlockTailoredExperiences = null;

    /** Block third party content delivered via Windows Spotlight */
    public ?bool $windowsSpotlightBlockThirdPartyNotifications = null;

    /** Block Windows Spotlight Windows welcome experience */
    public ?bool $windowsSpotlightBlockWelcomeExperience = null;

    /** Allows IT admins to turn off the popup of Windows Tips. */
    public ?bool $windowsSpotlightBlockWindowsTips = null;

    /**  */
    public ?WindowsSpotlightEnablementSettings $windowsSpotlightConfigureOnLockScreen = null;

    /** Indicates whether or not to block automatic update of apps from Windows Store. */
    public ?bool $windowsStoreBlockAutoUpdate = null;

    /** Indicates whether or not to Block the user from using the Windows store. */
    public ?bool $windowsStoreBlocked = null;

    /** Indicates whether or not to enable Private Store Only. */
    public ?bool $windowsStoreEnablePrivateStoreOnly = null;

    /** Indicates whether or not to allow other devices from discovering this PC for projection. */
    public ?bool $wirelessDisplayBlockProjectionToThisDevice = null;

    /** Indicates whether or not to allow user input from wireless display receiver. */
    public ?bool $wirelessDisplayBlockUserInputFromReceiver = null;

    /** Indicates whether or not to require a PIN for new devices to initiate pairing. */
    public ?bool $wirelessDisplayRequirePinForPairing = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
        if (isset($data['assignments'])) {
            $this->assignments = $data['assignments'];
        }
        if (isset($data['deviceSettingStateSummaries'])) {
            $this->deviceSettingStateSummaries = $data['deviceSettingStateSummaries'];
        }
        if (isset($data['deviceStatuses'])) {
            $this->deviceStatuses = $data['deviceStatuses'];
        }
        if (isset($data['deviceStatusOverview'])) {
            $this->deviceStatusOverview = is_array($data['deviceStatusOverview']) ? new DeviceConfigurationDeviceOverview($data['deviceStatusOverview']) : $data['deviceStatusOverview'];
        }
        if (isset($data['userStatuses'])) {
            $this->userStatuses = $data['userStatuses'];
        }
        if (isset($data['userStatusOverview'])) {
            $this->userStatusOverview = is_array($data['userStatusOverview']) ? new DeviceConfigurationUserOverview($data['userStatusOverview']) : $data['userStatusOverview'];
        }
        if (isset($data['accountsBlockAddingNonMicrosoftAccountEmail'])) {
            $this->accountsBlockAddingNonMicrosoftAccountEmail = $data['accountsBlockAddingNonMicrosoftAccountEmail'];
        }
        if (isset($data['antiTheftModeBlocked'])) {
            $this->antiTheftModeBlocked = $data['antiTheftModeBlocked'];
        }
        if (isset($data['appsAllowTrustedAppsSideloading'])) {
            $this->appsAllowTrustedAppsSideloading = is_array($data['appsAllowTrustedAppsSideloading']) ? new StateManagementSetting($data['appsAllowTrustedAppsSideloading']) : $data['appsAllowTrustedAppsSideloading'];
        }
        if (isset($data['appsBlockWindowsStoreOriginatedApps'])) {
            $this->appsBlockWindowsStoreOriginatedApps = $data['appsBlockWindowsStoreOriginatedApps'];
        }
        if (isset($data['bluetoothAllowedServices'])) {
            $this->bluetoothAllowedServices = $data['bluetoothAllowedServices'];
        }
        if (isset($data['bluetoothBlockAdvertising'])) {
            $this->bluetoothBlockAdvertising = $data['bluetoothBlockAdvertising'];
        }
        if (isset($data['bluetoothBlockDiscoverableMode'])) {
            $this->bluetoothBlockDiscoverableMode = $data['bluetoothBlockDiscoverableMode'];
        }
        if (isset($data['bluetoothBlocked'])) {
            $this->bluetoothBlocked = $data['bluetoothBlocked'];
        }
        if (isset($data['bluetoothBlockPrePairing'])) {
            $this->bluetoothBlockPrePairing = $data['bluetoothBlockPrePairing'];
        }
        if (isset($data['cameraBlocked'])) {
            $this->cameraBlocked = $data['cameraBlocked'];
        }
        if (isset($data['cellularBlockDataWhenRoaming'])) {
            $this->cellularBlockDataWhenRoaming = $data['cellularBlockDataWhenRoaming'];
        }
        if (isset($data['cellularBlockVpn'])) {
            $this->cellularBlockVpn = $data['cellularBlockVpn'];
        }
        if (isset($data['cellularBlockVpnWhenRoaming'])) {
            $this->cellularBlockVpnWhenRoaming = $data['cellularBlockVpnWhenRoaming'];
        }
        if (isset($data['certificatesBlockManualRootCertificateInstallation'])) {
            $this->certificatesBlockManualRootCertificateInstallation = $data['certificatesBlockManualRootCertificateInstallation'];
        }
        if (isset($data['connectedDevicesServiceBlocked'])) {
            $this->connectedDevicesServiceBlocked = $data['connectedDevicesServiceBlocked'];
        }
        if (isset($data['copyPasteBlocked'])) {
            $this->copyPasteBlocked = $data['copyPasteBlocked'];
        }
        if (isset($data['cortanaBlocked'])) {
            $this->cortanaBlocked = $data['cortanaBlocked'];
        }
        if (isset($data['defenderBlockEndUserAccess'])) {
            $this->defenderBlockEndUserAccess = $data['defenderBlockEndUserAccess'];
        }
        if (isset($data['defenderCloudBlockLevel'])) {
            $this->defenderCloudBlockLevel = is_array($data['defenderCloudBlockLevel']) ? new DefenderCloudBlockLevelType($data['defenderCloudBlockLevel']) : $data['defenderCloudBlockLevel'];
        }
        if (isset($data['defenderDaysBeforeDeletingQuarantinedMalware'])) {
            $this->defenderDaysBeforeDeletingQuarantinedMalware = $data['defenderDaysBeforeDeletingQuarantinedMalware'];
        }
        if (isset($data['defenderDetectedMalwareActions'])) {
            $this->defenderDetectedMalwareActions = is_array($data['defenderDetectedMalwareActions']) ? new DefenderDetectedMalwareActions($data['defenderDetectedMalwareActions']) : $data['defenderDetectedMalwareActions'];
        }
        if (isset($data['defenderFileExtensionsToExclude'])) {
            $this->defenderFileExtensionsToExclude = $data['defenderFileExtensionsToExclude'];
        }
        if (isset($data['defenderFilesAndFoldersToExclude'])) {
            $this->defenderFilesAndFoldersToExclude = $data['defenderFilesAndFoldersToExclude'];
        }
        if (isset($data['defenderMonitorFileActivity'])) {
            $this->defenderMonitorFileActivity = is_array($data['defenderMonitorFileActivity']) ? new DefenderMonitorFileActivity($data['defenderMonitorFileActivity']) : $data['defenderMonitorFileActivity'];
        }
        if (isset($data['defenderProcessesToExclude'])) {
            $this->defenderProcessesToExclude = $data['defenderProcessesToExclude'];
        }
        if (isset($data['defenderPromptForSampleSubmission'])) {
            $this->defenderPromptForSampleSubmission = is_array($data['defenderPromptForSampleSubmission']) ? new DefenderPromptForSampleSubmission($data['defenderPromptForSampleSubmission']) : $data['defenderPromptForSampleSubmission'];
        }
        if (isset($data['defenderRequireBehaviorMonitoring'])) {
            $this->defenderRequireBehaviorMonitoring = $data['defenderRequireBehaviorMonitoring'];
        }
        if (isset($data['defenderRequireCloudProtection'])) {
            $this->defenderRequireCloudProtection = $data['defenderRequireCloudProtection'];
        }
        if (isset($data['defenderRequireNetworkInspectionSystem'])) {
            $this->defenderRequireNetworkInspectionSystem = $data['defenderRequireNetworkInspectionSystem'];
        }
        if (isset($data['defenderRequireRealTimeMonitoring'])) {
            $this->defenderRequireRealTimeMonitoring = $data['defenderRequireRealTimeMonitoring'];
        }
        if (isset($data['defenderScanArchiveFiles'])) {
            $this->defenderScanArchiveFiles = $data['defenderScanArchiveFiles'];
        }
        if (isset($data['defenderScanDownloads'])) {
            $this->defenderScanDownloads = $data['defenderScanDownloads'];
        }
        if (isset($data['defenderScanIncomingMail'])) {
            $this->defenderScanIncomingMail = $data['defenderScanIncomingMail'];
        }
        if (isset($data['defenderScanMappedNetworkDrivesDuringFullScan'])) {
            $this->defenderScanMappedNetworkDrivesDuringFullScan = $data['defenderScanMappedNetworkDrivesDuringFullScan'];
        }
        if (isset($data['defenderScanMaxCpu'])) {
            $this->defenderScanMaxCpu = $data['defenderScanMaxCpu'];
        }
        if (isset($data['defenderScanNetworkFiles'])) {
            $this->defenderScanNetworkFiles = $data['defenderScanNetworkFiles'];
        }
        if (isset($data['defenderScanRemovableDrivesDuringFullScan'])) {
            $this->defenderScanRemovableDrivesDuringFullScan = $data['defenderScanRemovableDrivesDuringFullScan'];
        }
        if (isset($data['defenderScanScriptsLoadedInInternetExplorer'])) {
            $this->defenderScanScriptsLoadedInInternetExplorer = $data['defenderScanScriptsLoadedInInternetExplorer'];
        }
        if (isset($data['defenderScanType'])) {
            $this->defenderScanType = is_array($data['defenderScanType']) ? new DefenderScanType($data['defenderScanType']) : $data['defenderScanType'];
        }
        if (isset($data['defenderScheduledQuickScanTime'])) {
            $this->defenderScheduledQuickScanTime = $data['defenderScheduledQuickScanTime'];
        }
        if (isset($data['defenderScheduledScanTime'])) {
            $this->defenderScheduledScanTime = $data['defenderScheduledScanTime'];
        }
        if (isset($data['defenderSignatureUpdateIntervalInHours'])) {
            $this->defenderSignatureUpdateIntervalInHours = $data['defenderSignatureUpdateIntervalInHours'];
        }
        if (isset($data['defenderSystemScanSchedule'])) {
            $this->defenderSystemScanSchedule = is_array($data['defenderSystemScanSchedule']) ? new WeeklySchedule($data['defenderSystemScanSchedule']) : $data['defenderSystemScanSchedule'];
        }
        if (isset($data['developerUnlockSetting'])) {
            $this->developerUnlockSetting = is_array($data['developerUnlockSetting']) ? new StateManagementSetting($data['developerUnlockSetting']) : $data['developerUnlockSetting'];
        }
        if (isset($data['deviceManagementBlockFactoryResetOnMobile'])) {
            $this->deviceManagementBlockFactoryResetOnMobile = $data['deviceManagementBlockFactoryResetOnMobile'];
        }
        if (isset($data['deviceManagementBlockManualUnenroll'])) {
            $this->deviceManagementBlockManualUnenroll = $data['deviceManagementBlockManualUnenroll'];
        }
        if (isset($data['diagnosticsDataSubmissionMode'])) {
            $this->diagnosticsDataSubmissionMode = is_array($data['diagnosticsDataSubmissionMode']) ? new DiagnosticDataSubmissionMode($data['diagnosticsDataSubmissionMode']) : $data['diagnosticsDataSubmissionMode'];
        }
        if (isset($data['edgeAllowStartPagesModification'])) {
            $this->edgeAllowStartPagesModification = $data['edgeAllowStartPagesModification'];
        }
        if (isset($data['edgeBlockAccessToAboutFlags'])) {
            $this->edgeBlockAccessToAboutFlags = $data['edgeBlockAccessToAboutFlags'];
        }
        if (isset($data['edgeBlockAddressBarDropdown'])) {
            $this->edgeBlockAddressBarDropdown = $data['edgeBlockAddressBarDropdown'];
        }
        if (isset($data['edgeBlockAutofill'])) {
            $this->edgeBlockAutofill = $data['edgeBlockAutofill'];
        }
        if (isset($data['edgeBlockCompatibilityList'])) {
            $this->edgeBlockCompatibilityList = $data['edgeBlockCompatibilityList'];
        }
        if (isset($data['edgeBlockDeveloperTools'])) {
            $this->edgeBlockDeveloperTools = $data['edgeBlockDeveloperTools'];
        }
        if (isset($data['edgeBlocked'])) {
            $this->edgeBlocked = $data['edgeBlocked'];
        }
        if (isset($data['edgeBlockExtensions'])) {
            $this->edgeBlockExtensions = $data['edgeBlockExtensions'];
        }
        if (isset($data['edgeBlockInPrivateBrowsing'])) {
            $this->edgeBlockInPrivateBrowsing = $data['edgeBlockInPrivateBrowsing'];
        }
        if (isset($data['edgeBlockJavaScript'])) {
            $this->edgeBlockJavaScript = $data['edgeBlockJavaScript'];
        }
        if (isset($data['edgeBlockLiveTileDataCollection'])) {
            $this->edgeBlockLiveTileDataCollection = $data['edgeBlockLiveTileDataCollection'];
        }
        if (isset($data['edgeBlockPasswordManager'])) {
            $this->edgeBlockPasswordManager = $data['edgeBlockPasswordManager'];
        }
        if (isset($data['edgeBlockPopups'])) {
            $this->edgeBlockPopups = $data['edgeBlockPopups'];
        }
        if (isset($data['edgeBlockSearchSuggestions'])) {
            $this->edgeBlockSearchSuggestions = $data['edgeBlockSearchSuggestions'];
        }
        if (isset($data['edgeBlockSendingDoNotTrackHeader'])) {
            $this->edgeBlockSendingDoNotTrackHeader = $data['edgeBlockSendingDoNotTrackHeader'];
        }
        if (isset($data['edgeBlockSendingIntranetTrafficToInternetExplorer'])) {
            $this->edgeBlockSendingIntranetTrafficToInternetExplorer = $data['edgeBlockSendingIntranetTrafficToInternetExplorer'];
        }
        if (isset($data['edgeClearBrowsingDataOnExit'])) {
            $this->edgeClearBrowsingDataOnExit = $data['edgeClearBrowsingDataOnExit'];
        }
        if (isset($data['edgeCookiePolicy'])) {
            $this->edgeCookiePolicy = is_array($data['edgeCookiePolicy']) ? new EdgeCookiePolicy($data['edgeCookiePolicy']) : $data['edgeCookiePolicy'];
        }
        if (isset($data['edgeDisableFirstRunPage'])) {
            $this->edgeDisableFirstRunPage = $data['edgeDisableFirstRunPage'];
        }
        if (isset($data['edgeEnterpriseModeSiteListLocation'])) {
            $this->edgeEnterpriseModeSiteListLocation = $data['edgeEnterpriseModeSiteListLocation'];
        }
        if (isset($data['edgeFirstRunUrl'])) {
            $this->edgeFirstRunUrl = $data['edgeFirstRunUrl'];
        }
        if (isset($data['edgeHomepageUrls'])) {
            $this->edgeHomepageUrls = $data['edgeHomepageUrls'];
        }
        if (isset($data['edgeRequireSmartScreen'])) {
            $this->edgeRequireSmartScreen = $data['edgeRequireSmartScreen'];
        }
        if (isset($data['edgeSearchEngine'])) {
            $this->edgeSearchEngine = is_array($data['edgeSearchEngine']) ? new EdgeSearchEngineBase($data['edgeSearchEngine']) : $data['edgeSearchEngine'];
        }
        if (isset($data['edgeSendIntranetTrafficToInternetExplorer'])) {
            $this->edgeSendIntranetTrafficToInternetExplorer = $data['edgeSendIntranetTrafficToInternetExplorer'];
        }
        if (isset($data['edgeSyncFavoritesWithInternetExplorer'])) {
            $this->edgeSyncFavoritesWithInternetExplorer = $data['edgeSyncFavoritesWithInternetExplorer'];
        }
        if (isset($data['enterpriseCloudPrintDiscoveryEndPoint'])) {
            $this->enterpriseCloudPrintDiscoveryEndPoint = $data['enterpriseCloudPrintDiscoveryEndPoint'];
        }
        if (isset($data['enterpriseCloudPrintDiscoveryMaxLimit'])) {
            $this->enterpriseCloudPrintDiscoveryMaxLimit = $data['enterpriseCloudPrintDiscoveryMaxLimit'];
        }
        if (isset($data['enterpriseCloudPrintMopriaDiscoveryResourceIdentifier'])) {
            $this->enterpriseCloudPrintMopriaDiscoveryResourceIdentifier = $data['enterpriseCloudPrintMopriaDiscoveryResourceIdentifier'];
        }
        if (isset($data['enterpriseCloudPrintOAuthAuthority'])) {
            $this->enterpriseCloudPrintOAuthAuthority = $data['enterpriseCloudPrintOAuthAuthority'];
        }
        if (isset($data['enterpriseCloudPrintOAuthClientIdentifier'])) {
            $this->enterpriseCloudPrintOAuthClientIdentifier = $data['enterpriseCloudPrintOAuthClientIdentifier'];
        }
        if (isset($data['enterpriseCloudPrintResourceIdentifier'])) {
            $this->enterpriseCloudPrintResourceIdentifier = $data['enterpriseCloudPrintResourceIdentifier'];
        }
        if (isset($data['experienceBlockDeviceDiscovery'])) {
            $this->experienceBlockDeviceDiscovery = $data['experienceBlockDeviceDiscovery'];
        }
        if (isset($data['experienceBlockErrorDialogWhenNoSIM'])) {
            $this->experienceBlockErrorDialogWhenNoSIM = $data['experienceBlockErrorDialogWhenNoSIM'];
        }
        if (isset($data['experienceBlockTaskSwitcher'])) {
            $this->experienceBlockTaskSwitcher = $data['experienceBlockTaskSwitcher'];
        }
        if (isset($data['gameDvrBlocked'])) {
            $this->gameDvrBlocked = $data['gameDvrBlocked'];
        }
        if (isset($data['internetSharingBlocked'])) {
            $this->internetSharingBlocked = $data['internetSharingBlocked'];
        }
        if (isset($data['locationServicesBlocked'])) {
            $this->locationServicesBlocked = $data['locationServicesBlocked'];
        }
        if (isset($data['lockScreenAllowTimeoutConfiguration'])) {
            $this->lockScreenAllowTimeoutConfiguration = $data['lockScreenAllowTimeoutConfiguration'];
        }
        if (isset($data['lockScreenBlockActionCenterNotifications'])) {
            $this->lockScreenBlockActionCenterNotifications = $data['lockScreenBlockActionCenterNotifications'];
        }
        if (isset($data['lockScreenBlockCortana'])) {
            $this->lockScreenBlockCortana = $data['lockScreenBlockCortana'];
        }
        if (isset($data['lockScreenBlockToastNotifications'])) {
            $this->lockScreenBlockToastNotifications = $data['lockScreenBlockToastNotifications'];
        }
        if (isset($data['lockScreenTimeoutInSeconds'])) {
            $this->lockScreenTimeoutInSeconds = $data['lockScreenTimeoutInSeconds'];
        }
        if (isset($data['logonBlockFastUserSwitching'])) {
            $this->logonBlockFastUserSwitching = $data['logonBlockFastUserSwitching'];
        }
        if (isset($data['microsoftAccountBlocked'])) {
            $this->microsoftAccountBlocked = $data['microsoftAccountBlocked'];
        }
        if (isset($data['microsoftAccountBlockSettingsSync'])) {
            $this->microsoftAccountBlockSettingsSync = $data['microsoftAccountBlockSettingsSync'];
        }
        if (isset($data['networkProxyApplySettingsDeviceWide'])) {
            $this->networkProxyApplySettingsDeviceWide = $data['networkProxyApplySettingsDeviceWide'];
        }
        if (isset($data['networkProxyAutomaticConfigurationUrl'])) {
            $this->networkProxyAutomaticConfigurationUrl = $data['networkProxyAutomaticConfigurationUrl'];
        }
        if (isset($data['networkProxyDisableAutoDetect'])) {
            $this->networkProxyDisableAutoDetect = $data['networkProxyDisableAutoDetect'];
        }
        if (isset($data['networkProxyServer'])) {
            $this->networkProxyServer = is_array($data['networkProxyServer']) ? new Windows10NetworkProxyServer($data['networkProxyServer']) : $data['networkProxyServer'];
        }
        if (isset($data['nfcBlocked'])) {
            $this->nfcBlocked = $data['nfcBlocked'];
        }
        if (isset($data['oneDriveDisableFileSync'])) {
            $this->oneDriveDisableFileSync = $data['oneDriveDisableFileSync'];
        }
        if (isset($data['passwordBlockSimple'])) {
            $this->passwordBlockSimple = $data['passwordBlockSimple'];
        }
        if (isset($data['passwordExpirationDays'])) {
            $this->passwordExpirationDays = $data['passwordExpirationDays'];
        }
        if (isset($data['passwordMinimumCharacterSetCount'])) {
            $this->passwordMinimumCharacterSetCount = $data['passwordMinimumCharacterSetCount'];
        }
        if (isset($data['passwordMinimumLength'])) {
            $this->passwordMinimumLength = $data['passwordMinimumLength'];
        }
        if (isset($data['passwordMinutesOfInactivityBeforeScreenTimeout'])) {
            $this->passwordMinutesOfInactivityBeforeScreenTimeout = $data['passwordMinutesOfInactivityBeforeScreenTimeout'];
        }
        if (isset($data['passwordPreviousPasswordBlockCount'])) {
            $this->passwordPreviousPasswordBlockCount = $data['passwordPreviousPasswordBlockCount'];
        }
        if (isset($data['passwordRequired'])) {
            $this->passwordRequired = $data['passwordRequired'];
        }
        if (isset($data['passwordRequiredType'])) {
            $this->passwordRequiredType = is_array($data['passwordRequiredType']) ? new RequiredPasswordType($data['passwordRequiredType']) : $data['passwordRequiredType'];
        }
        if (isset($data['passwordRequireWhenResumeFromIdleState'])) {
            $this->passwordRequireWhenResumeFromIdleState = $data['passwordRequireWhenResumeFromIdleState'];
        }
        if (isset($data['passwordSignInFailureCountBeforeFactoryReset'])) {
            $this->passwordSignInFailureCountBeforeFactoryReset = $data['passwordSignInFailureCountBeforeFactoryReset'];
        }
        if (isset($data['personalizationDesktopImageUrl'])) {
            $this->personalizationDesktopImageUrl = $data['personalizationDesktopImageUrl'];
        }
        if (isset($data['personalizationLockScreenImageUrl'])) {
            $this->personalizationLockScreenImageUrl = $data['personalizationLockScreenImageUrl'];
        }
        if (isset($data['privacyAdvertisingId'])) {
            $this->privacyAdvertisingId = is_array($data['privacyAdvertisingId']) ? new StateManagementSetting($data['privacyAdvertisingId']) : $data['privacyAdvertisingId'];
        }
        if (isset($data['privacyAutoAcceptPairingAndConsentPrompts'])) {
            $this->privacyAutoAcceptPairingAndConsentPrompts = $data['privacyAutoAcceptPairingAndConsentPrompts'];
        }
        if (isset($data['privacyBlockInputPersonalization'])) {
            $this->privacyBlockInputPersonalization = $data['privacyBlockInputPersonalization'];
        }
        if (isset($data['resetProtectionModeBlocked'])) {
            $this->resetProtectionModeBlocked = $data['resetProtectionModeBlocked'];
        }
        if (isset($data['safeSearchFilter'])) {
            $this->safeSearchFilter = is_array($data['safeSearchFilter']) ? new SafeSearchFilterType($data['safeSearchFilter']) : $data['safeSearchFilter'];
        }
        if (isset($data['screenCaptureBlocked'])) {
            $this->screenCaptureBlocked = $data['screenCaptureBlocked'];
        }
        if (isset($data['searchBlockDiacritics'])) {
            $this->searchBlockDiacritics = $data['searchBlockDiacritics'];
        }
        if (isset($data['searchDisableAutoLanguageDetection'])) {
            $this->searchDisableAutoLanguageDetection = $data['searchDisableAutoLanguageDetection'];
        }
        if (isset($data['searchDisableIndexerBackoff'])) {
            $this->searchDisableIndexerBackoff = $data['searchDisableIndexerBackoff'];
        }
        if (isset($data['searchDisableIndexingEncryptedItems'])) {
            $this->searchDisableIndexingEncryptedItems = $data['searchDisableIndexingEncryptedItems'];
        }
        if (isset($data['searchDisableIndexingRemovableDrive'])) {
            $this->searchDisableIndexingRemovableDrive = $data['searchDisableIndexingRemovableDrive'];
        }
        if (isset($data['searchEnableAutomaticIndexSizeManangement'])) {
            $this->searchEnableAutomaticIndexSizeManangement = $data['searchEnableAutomaticIndexSizeManangement'];
        }
        if (isset($data['searchEnableRemoteQueries'])) {
            $this->searchEnableRemoteQueries = $data['searchEnableRemoteQueries'];
        }
        if (isset($data['settingsBlockAccountsPage'])) {
            $this->settingsBlockAccountsPage = $data['settingsBlockAccountsPage'];
        }
        if (isset($data['settingsBlockAddProvisioningPackage'])) {
            $this->settingsBlockAddProvisioningPackage = $data['settingsBlockAddProvisioningPackage'];
        }
        if (isset($data['settingsBlockAppsPage'])) {
            $this->settingsBlockAppsPage = $data['settingsBlockAppsPage'];
        }
        if (isset($data['settingsBlockChangeLanguage'])) {
            $this->settingsBlockChangeLanguage = $data['settingsBlockChangeLanguage'];
        }
        if (isset($data['settingsBlockChangePowerSleep'])) {
            $this->settingsBlockChangePowerSleep = $data['settingsBlockChangePowerSleep'];
        }
        if (isset($data['settingsBlockChangeRegion'])) {
            $this->settingsBlockChangeRegion = $data['settingsBlockChangeRegion'];
        }
        if (isset($data['settingsBlockChangeSystemTime'])) {
            $this->settingsBlockChangeSystemTime = $data['settingsBlockChangeSystemTime'];
        }
        if (isset($data['settingsBlockDevicesPage'])) {
            $this->settingsBlockDevicesPage = $data['settingsBlockDevicesPage'];
        }
        if (isset($data['settingsBlockEaseOfAccessPage'])) {
            $this->settingsBlockEaseOfAccessPage = $data['settingsBlockEaseOfAccessPage'];
        }
        if (isset($data['settingsBlockEditDeviceName'])) {
            $this->settingsBlockEditDeviceName = $data['settingsBlockEditDeviceName'];
        }
        if (isset($data['settingsBlockGamingPage'])) {
            $this->settingsBlockGamingPage = $data['settingsBlockGamingPage'];
        }
        if (isset($data['settingsBlockNetworkInternetPage'])) {
            $this->settingsBlockNetworkInternetPage = $data['settingsBlockNetworkInternetPage'];
        }
        if (isset($data['settingsBlockPersonalizationPage'])) {
            $this->settingsBlockPersonalizationPage = $data['settingsBlockPersonalizationPage'];
        }
        if (isset($data['settingsBlockPrivacyPage'])) {
            $this->settingsBlockPrivacyPage = $data['settingsBlockPrivacyPage'];
        }
        if (isset($data['settingsBlockRemoveProvisioningPackage'])) {
            $this->settingsBlockRemoveProvisioningPackage = $data['settingsBlockRemoveProvisioningPackage'];
        }
        if (isset($data['settingsBlockSettingsApp'])) {
            $this->settingsBlockSettingsApp = $data['settingsBlockSettingsApp'];
        }
        if (isset($data['settingsBlockSystemPage'])) {
            $this->settingsBlockSystemPage = $data['settingsBlockSystemPage'];
        }
        if (isset($data['settingsBlockTimeLanguagePage'])) {
            $this->settingsBlockTimeLanguagePage = $data['settingsBlockTimeLanguagePage'];
        }
        if (isset($data['settingsBlockUpdateSecurityPage'])) {
            $this->settingsBlockUpdateSecurityPage = $data['settingsBlockUpdateSecurityPage'];
        }
        if (isset($data['sharedUserAppDataAllowed'])) {
            $this->sharedUserAppDataAllowed = $data['sharedUserAppDataAllowed'];
        }
        if (isset($data['smartScreenBlockPromptOverride'])) {
            $this->smartScreenBlockPromptOverride = $data['smartScreenBlockPromptOverride'];
        }
        if (isset($data['smartScreenBlockPromptOverrideForFiles'])) {
            $this->smartScreenBlockPromptOverrideForFiles = $data['smartScreenBlockPromptOverrideForFiles'];
        }
        if (isset($data['smartScreenEnableAppInstallControl'])) {
            $this->smartScreenEnableAppInstallControl = $data['smartScreenEnableAppInstallControl'];
        }
        if (isset($data['startBlockUnpinningAppsFromTaskbar'])) {
            $this->startBlockUnpinningAppsFromTaskbar = $data['startBlockUnpinningAppsFromTaskbar'];
        }
        if (isset($data['startMenuAppListVisibility'])) {
            $this->startMenuAppListVisibility = is_array($data['startMenuAppListVisibility']) ? new WindowsStartMenuAppListVisibilityType($data['startMenuAppListVisibility']) : $data['startMenuAppListVisibility'];
        }
        if (isset($data['startMenuHideChangeAccountSettings'])) {
            $this->startMenuHideChangeAccountSettings = $data['startMenuHideChangeAccountSettings'];
        }
        if (isset($data['startMenuHideFrequentlyUsedApps'])) {
            $this->startMenuHideFrequentlyUsedApps = $data['startMenuHideFrequentlyUsedApps'];
        }
        if (isset($data['startMenuHideHibernate'])) {
            $this->startMenuHideHibernate = $data['startMenuHideHibernate'];
        }
        if (isset($data['startMenuHideLock'])) {
            $this->startMenuHideLock = $data['startMenuHideLock'];
        }
        if (isset($data['startMenuHidePowerButton'])) {
            $this->startMenuHidePowerButton = $data['startMenuHidePowerButton'];
        }
        if (isset($data['startMenuHideRecentJumpLists'])) {
            $this->startMenuHideRecentJumpLists = $data['startMenuHideRecentJumpLists'];
        }
        if (isset($data['startMenuHideRecentlyAddedApps'])) {
            $this->startMenuHideRecentlyAddedApps = $data['startMenuHideRecentlyAddedApps'];
        }
        if (isset($data['startMenuHideRestartOptions'])) {
            $this->startMenuHideRestartOptions = $data['startMenuHideRestartOptions'];
        }
        if (isset($data['startMenuHideShutDown'])) {
            $this->startMenuHideShutDown = $data['startMenuHideShutDown'];
        }
        if (isset($data['startMenuHideSignOut'])) {
            $this->startMenuHideSignOut = $data['startMenuHideSignOut'];
        }
        if (isset($data['startMenuHideSleep'])) {
            $this->startMenuHideSleep = $data['startMenuHideSleep'];
        }
        if (isset($data['startMenuHideSwitchAccount'])) {
            $this->startMenuHideSwitchAccount = $data['startMenuHideSwitchAccount'];
        }
        if (isset($data['startMenuHideUserTile'])) {
            $this->startMenuHideUserTile = $data['startMenuHideUserTile'];
        }
        if (isset($data['startMenuLayoutEdgeAssetsXml'])) {
            $this->startMenuLayoutEdgeAssetsXml = $data['startMenuLayoutEdgeAssetsXml'];
        }
        if (isset($data['startMenuLayoutXml'])) {
            $this->startMenuLayoutXml = $data['startMenuLayoutXml'];
        }
        if (isset($data['startMenuMode'])) {
            $this->startMenuMode = is_array($data['startMenuMode']) ? new WindowsStartMenuModeType($data['startMenuMode']) : $data['startMenuMode'];
        }
        if (isset($data['startMenuPinnedFolderDocuments'])) {
            $this->startMenuPinnedFolderDocuments = is_array($data['startMenuPinnedFolderDocuments']) ? new VisibilitySetting($data['startMenuPinnedFolderDocuments']) : $data['startMenuPinnedFolderDocuments'];
        }
        if (isset($data['startMenuPinnedFolderDownloads'])) {
            $this->startMenuPinnedFolderDownloads = is_array($data['startMenuPinnedFolderDownloads']) ? new VisibilitySetting($data['startMenuPinnedFolderDownloads']) : $data['startMenuPinnedFolderDownloads'];
        }
        if (isset($data['startMenuPinnedFolderFileExplorer'])) {
            $this->startMenuPinnedFolderFileExplorer = is_array($data['startMenuPinnedFolderFileExplorer']) ? new VisibilitySetting($data['startMenuPinnedFolderFileExplorer']) : $data['startMenuPinnedFolderFileExplorer'];
        }
        if (isset($data['startMenuPinnedFolderHomeGroup'])) {
            $this->startMenuPinnedFolderHomeGroup = is_array($data['startMenuPinnedFolderHomeGroup']) ? new VisibilitySetting($data['startMenuPinnedFolderHomeGroup']) : $data['startMenuPinnedFolderHomeGroup'];
        }
        if (isset($data['startMenuPinnedFolderMusic'])) {
            $this->startMenuPinnedFolderMusic = is_array($data['startMenuPinnedFolderMusic']) ? new VisibilitySetting($data['startMenuPinnedFolderMusic']) : $data['startMenuPinnedFolderMusic'];
        }
        if (isset($data['startMenuPinnedFolderNetwork'])) {
            $this->startMenuPinnedFolderNetwork = is_array($data['startMenuPinnedFolderNetwork']) ? new VisibilitySetting($data['startMenuPinnedFolderNetwork']) : $data['startMenuPinnedFolderNetwork'];
        }
        if (isset($data['startMenuPinnedFolderPersonalFolder'])) {
            $this->startMenuPinnedFolderPersonalFolder = is_array($data['startMenuPinnedFolderPersonalFolder']) ? new VisibilitySetting($data['startMenuPinnedFolderPersonalFolder']) : $data['startMenuPinnedFolderPersonalFolder'];
        }
        if (isset($data['startMenuPinnedFolderPictures'])) {
            $this->startMenuPinnedFolderPictures = is_array($data['startMenuPinnedFolderPictures']) ? new VisibilitySetting($data['startMenuPinnedFolderPictures']) : $data['startMenuPinnedFolderPictures'];
        }
        if (isset($data['startMenuPinnedFolderSettings'])) {
            $this->startMenuPinnedFolderSettings = is_array($data['startMenuPinnedFolderSettings']) ? new VisibilitySetting($data['startMenuPinnedFolderSettings']) : $data['startMenuPinnedFolderSettings'];
        }
        if (isset($data['startMenuPinnedFolderVideos'])) {
            $this->startMenuPinnedFolderVideos = is_array($data['startMenuPinnedFolderVideos']) ? new VisibilitySetting($data['startMenuPinnedFolderVideos']) : $data['startMenuPinnedFolderVideos'];
        }
        if (isset($data['storageBlockRemovableStorage'])) {
            $this->storageBlockRemovableStorage = $data['storageBlockRemovableStorage'];
        }
        if (isset($data['storageRequireMobileDeviceEncryption'])) {
            $this->storageRequireMobileDeviceEncryption = $data['storageRequireMobileDeviceEncryption'];
        }
        if (isset($data['storageRestrictAppDataToSystemVolume'])) {
            $this->storageRestrictAppDataToSystemVolume = $data['storageRestrictAppDataToSystemVolume'];
        }
        if (isset($data['storageRestrictAppInstallToSystemVolume'])) {
            $this->storageRestrictAppInstallToSystemVolume = $data['storageRestrictAppInstallToSystemVolume'];
        }
        if (isset($data['tenantLockdownRequireNetworkDuringOutOfBoxExperience'])) {
            $this->tenantLockdownRequireNetworkDuringOutOfBoxExperience = $data['tenantLockdownRequireNetworkDuringOutOfBoxExperience'];
        }
        if (isset($data['usbBlocked'])) {
            $this->usbBlocked = $data['usbBlocked'];
        }
        if (isset($data['voiceRecordingBlocked'])) {
            $this->voiceRecordingBlocked = $data['voiceRecordingBlocked'];
        }
        if (isset($data['webRtcBlockLocalhostIpAddress'])) {
            $this->webRtcBlockLocalhostIpAddress = $data['webRtcBlockLocalhostIpAddress'];
        }
        if (isset($data['wiFiBlockAutomaticConnectHotspots'])) {
            $this->wiFiBlockAutomaticConnectHotspots = $data['wiFiBlockAutomaticConnectHotspots'];
        }
        if (isset($data['wiFiBlocked'])) {
            $this->wiFiBlocked = $data['wiFiBlocked'];
        }
        if (isset($data['wiFiBlockManualConfiguration'])) {
            $this->wiFiBlockManualConfiguration = $data['wiFiBlockManualConfiguration'];
        }
        if (isset($data['wiFiScanInterval'])) {
            $this->wiFiScanInterval = $data['wiFiScanInterval'];
        }
        if (isset($data['windowsSpotlightBlockConsumerSpecificFeatures'])) {
            $this->windowsSpotlightBlockConsumerSpecificFeatures = $data['windowsSpotlightBlockConsumerSpecificFeatures'];
        }
        if (isset($data['windowsSpotlightBlocked'])) {
            $this->windowsSpotlightBlocked = $data['windowsSpotlightBlocked'];
        }
        if (isset($data['windowsSpotlightBlockOnActionCenter'])) {
            $this->windowsSpotlightBlockOnActionCenter = $data['windowsSpotlightBlockOnActionCenter'];
        }
        if (isset($data['windowsSpotlightBlockTailoredExperiences'])) {
            $this->windowsSpotlightBlockTailoredExperiences = $data['windowsSpotlightBlockTailoredExperiences'];
        }
        if (isset($data['windowsSpotlightBlockThirdPartyNotifications'])) {
            $this->windowsSpotlightBlockThirdPartyNotifications = $data['windowsSpotlightBlockThirdPartyNotifications'];
        }
        if (isset($data['windowsSpotlightBlockWelcomeExperience'])) {
            $this->windowsSpotlightBlockWelcomeExperience = $data['windowsSpotlightBlockWelcomeExperience'];
        }
        if (isset($data['windowsSpotlightBlockWindowsTips'])) {
            $this->windowsSpotlightBlockWindowsTips = $data['windowsSpotlightBlockWindowsTips'];
        }
        if (isset($data['windowsSpotlightConfigureOnLockScreen'])) {
            $this->windowsSpotlightConfigureOnLockScreen = is_array($data['windowsSpotlightConfigureOnLockScreen']) ? new WindowsSpotlightEnablementSettings($data['windowsSpotlightConfigureOnLockScreen']) : $data['windowsSpotlightConfigureOnLockScreen'];
        }
        if (isset($data['windowsStoreBlockAutoUpdate'])) {
            $this->windowsStoreBlockAutoUpdate = $data['windowsStoreBlockAutoUpdate'];
        }
        if (isset($data['windowsStoreBlocked'])) {
            $this->windowsStoreBlocked = $data['windowsStoreBlocked'];
        }
        if (isset($data['windowsStoreEnablePrivateStoreOnly'])) {
            $this->windowsStoreEnablePrivateStoreOnly = $data['windowsStoreEnablePrivateStoreOnly'];
        }
        if (isset($data['wirelessDisplayBlockProjectionToThisDevice'])) {
            $this->wirelessDisplayBlockProjectionToThisDevice = $data['wirelessDisplayBlockProjectionToThisDevice'];
        }
        if (isset($data['wirelessDisplayBlockUserInputFromReceiver'])) {
            $this->wirelessDisplayBlockUserInputFromReceiver = $data['wirelessDisplayBlockUserInputFromReceiver'];
        }
        if (isset($data['wirelessDisplayRequirePinForPairing'])) {
            $this->wirelessDisplayRequirePinForPairing = $data['wirelessDisplayRequirePinForPairing'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
