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
            $this->version = is_numeric($data['version']) ? (float)$data['version'] : $data['version'];
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
            $this->accountsBlockAddingNonMicrosoftAccountEmail = is_bool($data['accountsBlockAddingNonMicrosoftAccountEmail']) ? $data['accountsBlockAddingNonMicrosoftAccountEmail'] : (bool)$data['accountsBlockAddingNonMicrosoftAccountEmail'];
        }
        if (isset($data['antiTheftModeBlocked'])) {
            $this->antiTheftModeBlocked = is_bool($data['antiTheftModeBlocked']) ? $data['antiTheftModeBlocked'] : (bool)$data['antiTheftModeBlocked'];
        }
        if (isset($data['appsAllowTrustedAppsSideloading'])) {
            $this->appsAllowTrustedAppsSideloading = is_string($data['appsAllowTrustedAppsSideloading']) ? StateManagementSetting::tryFrom($data['appsAllowTrustedAppsSideloading']) : $data['appsAllowTrustedAppsSideloading'];
        }
        if (isset($data['appsBlockWindowsStoreOriginatedApps'])) {
            $this->appsBlockWindowsStoreOriginatedApps = is_bool($data['appsBlockWindowsStoreOriginatedApps']) ? $data['appsBlockWindowsStoreOriginatedApps'] : (bool)$data['appsBlockWindowsStoreOriginatedApps'];
        }
        if (isset($data['bluetoothAllowedServices'])) {
            $this->bluetoothAllowedServices = $data['bluetoothAllowedServices'];
        }
        if (isset($data['bluetoothBlockAdvertising'])) {
            $this->bluetoothBlockAdvertising = is_bool($data['bluetoothBlockAdvertising']) ? $data['bluetoothBlockAdvertising'] : (bool)$data['bluetoothBlockAdvertising'];
        }
        if (isset($data['bluetoothBlockDiscoverableMode'])) {
            $this->bluetoothBlockDiscoverableMode = is_bool($data['bluetoothBlockDiscoverableMode']) ? $data['bluetoothBlockDiscoverableMode'] : (bool)$data['bluetoothBlockDiscoverableMode'];
        }
        if (isset($data['bluetoothBlocked'])) {
            $this->bluetoothBlocked = is_bool($data['bluetoothBlocked']) ? $data['bluetoothBlocked'] : (bool)$data['bluetoothBlocked'];
        }
        if (isset($data['bluetoothBlockPrePairing'])) {
            $this->bluetoothBlockPrePairing = is_bool($data['bluetoothBlockPrePairing']) ? $data['bluetoothBlockPrePairing'] : (bool)$data['bluetoothBlockPrePairing'];
        }
        if (isset($data['cameraBlocked'])) {
            $this->cameraBlocked = is_bool($data['cameraBlocked']) ? $data['cameraBlocked'] : (bool)$data['cameraBlocked'];
        }
        if (isset($data['cellularBlockDataWhenRoaming'])) {
            $this->cellularBlockDataWhenRoaming = is_bool($data['cellularBlockDataWhenRoaming']) ? $data['cellularBlockDataWhenRoaming'] : (bool)$data['cellularBlockDataWhenRoaming'];
        }
        if (isset($data['cellularBlockVpn'])) {
            $this->cellularBlockVpn = is_bool($data['cellularBlockVpn']) ? $data['cellularBlockVpn'] : (bool)$data['cellularBlockVpn'];
        }
        if (isset($data['cellularBlockVpnWhenRoaming'])) {
            $this->cellularBlockVpnWhenRoaming = is_bool($data['cellularBlockVpnWhenRoaming']) ? $data['cellularBlockVpnWhenRoaming'] : (bool)$data['cellularBlockVpnWhenRoaming'];
        }
        if (isset($data['certificatesBlockManualRootCertificateInstallation'])) {
            $this->certificatesBlockManualRootCertificateInstallation = is_bool($data['certificatesBlockManualRootCertificateInstallation']) ? $data['certificatesBlockManualRootCertificateInstallation'] : (bool)$data['certificatesBlockManualRootCertificateInstallation'];
        }
        if (isset($data['connectedDevicesServiceBlocked'])) {
            $this->connectedDevicesServiceBlocked = is_bool($data['connectedDevicesServiceBlocked']) ? $data['connectedDevicesServiceBlocked'] : (bool)$data['connectedDevicesServiceBlocked'];
        }
        if (isset($data['copyPasteBlocked'])) {
            $this->copyPasteBlocked = is_bool($data['copyPasteBlocked']) ? $data['copyPasteBlocked'] : (bool)$data['copyPasteBlocked'];
        }
        if (isset($data['cortanaBlocked'])) {
            $this->cortanaBlocked = is_bool($data['cortanaBlocked']) ? $data['cortanaBlocked'] : (bool)$data['cortanaBlocked'];
        }
        if (isset($data['defenderBlockEndUserAccess'])) {
            $this->defenderBlockEndUserAccess = is_bool($data['defenderBlockEndUserAccess']) ? $data['defenderBlockEndUserAccess'] : (bool)$data['defenderBlockEndUserAccess'];
        }
        if (isset($data['defenderCloudBlockLevel'])) {
            $this->defenderCloudBlockLevel = is_string($data['defenderCloudBlockLevel']) ? DefenderCloudBlockLevelType::tryFrom($data['defenderCloudBlockLevel']) : $data['defenderCloudBlockLevel'];
        }
        if (isset($data['defenderDaysBeforeDeletingQuarantinedMalware'])) {
            $this->defenderDaysBeforeDeletingQuarantinedMalware = is_numeric($data['defenderDaysBeforeDeletingQuarantinedMalware']) ? (float)$data['defenderDaysBeforeDeletingQuarantinedMalware'] : $data['defenderDaysBeforeDeletingQuarantinedMalware'];
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
            $this->defenderMonitorFileActivity = is_string($data['defenderMonitorFileActivity']) ? DefenderMonitorFileActivity::tryFrom($data['defenderMonitorFileActivity']) : $data['defenderMonitorFileActivity'];
        }
        if (isset($data['defenderProcessesToExclude'])) {
            $this->defenderProcessesToExclude = $data['defenderProcessesToExclude'];
        }
        if (isset($data['defenderPromptForSampleSubmission'])) {
            $this->defenderPromptForSampleSubmission = is_string($data['defenderPromptForSampleSubmission']) ? DefenderPromptForSampleSubmission::tryFrom($data['defenderPromptForSampleSubmission']) : $data['defenderPromptForSampleSubmission'];
        }
        if (isset($data['defenderRequireBehaviorMonitoring'])) {
            $this->defenderRequireBehaviorMonitoring = is_bool($data['defenderRequireBehaviorMonitoring']) ? $data['defenderRequireBehaviorMonitoring'] : (bool)$data['defenderRequireBehaviorMonitoring'];
        }
        if (isset($data['defenderRequireCloudProtection'])) {
            $this->defenderRequireCloudProtection = is_bool($data['defenderRequireCloudProtection']) ? $data['defenderRequireCloudProtection'] : (bool)$data['defenderRequireCloudProtection'];
        }
        if (isset($data['defenderRequireNetworkInspectionSystem'])) {
            $this->defenderRequireNetworkInspectionSystem = is_bool($data['defenderRequireNetworkInspectionSystem']) ? $data['defenderRequireNetworkInspectionSystem'] : (bool)$data['defenderRequireNetworkInspectionSystem'];
        }
        if (isset($data['defenderRequireRealTimeMonitoring'])) {
            $this->defenderRequireRealTimeMonitoring = is_bool($data['defenderRequireRealTimeMonitoring']) ? $data['defenderRequireRealTimeMonitoring'] : (bool)$data['defenderRequireRealTimeMonitoring'];
        }
        if (isset($data['defenderScanArchiveFiles'])) {
            $this->defenderScanArchiveFiles = is_bool($data['defenderScanArchiveFiles']) ? $data['defenderScanArchiveFiles'] : (bool)$data['defenderScanArchiveFiles'];
        }
        if (isset($data['defenderScanDownloads'])) {
            $this->defenderScanDownloads = is_bool($data['defenderScanDownloads']) ? $data['defenderScanDownloads'] : (bool)$data['defenderScanDownloads'];
        }
        if (isset($data['defenderScanIncomingMail'])) {
            $this->defenderScanIncomingMail = is_bool($data['defenderScanIncomingMail']) ? $data['defenderScanIncomingMail'] : (bool)$data['defenderScanIncomingMail'];
        }
        if (isset($data['defenderScanMappedNetworkDrivesDuringFullScan'])) {
            $this->defenderScanMappedNetworkDrivesDuringFullScan = is_bool($data['defenderScanMappedNetworkDrivesDuringFullScan']) ? $data['defenderScanMappedNetworkDrivesDuringFullScan'] : (bool)$data['defenderScanMappedNetworkDrivesDuringFullScan'];
        }
        if (isset($data['defenderScanMaxCpu'])) {
            $this->defenderScanMaxCpu = is_numeric($data['defenderScanMaxCpu']) ? (float)$data['defenderScanMaxCpu'] : $data['defenderScanMaxCpu'];
        }
        if (isset($data['defenderScanNetworkFiles'])) {
            $this->defenderScanNetworkFiles = is_bool($data['defenderScanNetworkFiles']) ? $data['defenderScanNetworkFiles'] : (bool)$data['defenderScanNetworkFiles'];
        }
        if (isset($data['defenderScanRemovableDrivesDuringFullScan'])) {
            $this->defenderScanRemovableDrivesDuringFullScan = is_bool($data['defenderScanRemovableDrivesDuringFullScan']) ? $data['defenderScanRemovableDrivesDuringFullScan'] : (bool)$data['defenderScanRemovableDrivesDuringFullScan'];
        }
        if (isset($data['defenderScanScriptsLoadedInInternetExplorer'])) {
            $this->defenderScanScriptsLoadedInInternetExplorer = is_bool($data['defenderScanScriptsLoadedInInternetExplorer']) ? $data['defenderScanScriptsLoadedInInternetExplorer'] : (bool)$data['defenderScanScriptsLoadedInInternetExplorer'];
        }
        if (isset($data['defenderScanType'])) {
            $this->defenderScanType = is_string($data['defenderScanType']) ? DefenderScanType::tryFrom($data['defenderScanType']) : $data['defenderScanType'];
        }
        if (isset($data['defenderScheduledQuickScanTime'])) {
            $this->defenderScheduledQuickScanTime = $data['defenderScheduledQuickScanTime'];
        }
        if (isset($data['defenderScheduledScanTime'])) {
            $this->defenderScheduledScanTime = $data['defenderScheduledScanTime'];
        }
        if (isset($data['defenderSignatureUpdateIntervalInHours'])) {
            $this->defenderSignatureUpdateIntervalInHours = is_numeric($data['defenderSignatureUpdateIntervalInHours']) ? (float)$data['defenderSignatureUpdateIntervalInHours'] : $data['defenderSignatureUpdateIntervalInHours'];
        }
        if (isset($data['defenderSystemScanSchedule'])) {
            $this->defenderSystemScanSchedule = is_string($data['defenderSystemScanSchedule']) ? WeeklySchedule::tryFrom($data['defenderSystemScanSchedule']) : $data['defenderSystemScanSchedule'];
        }
        if (isset($data['developerUnlockSetting'])) {
            $this->developerUnlockSetting = is_string($data['developerUnlockSetting']) ? StateManagementSetting::tryFrom($data['developerUnlockSetting']) : $data['developerUnlockSetting'];
        }
        if (isset($data['deviceManagementBlockFactoryResetOnMobile'])) {
            $this->deviceManagementBlockFactoryResetOnMobile = is_bool($data['deviceManagementBlockFactoryResetOnMobile']) ? $data['deviceManagementBlockFactoryResetOnMobile'] : (bool)$data['deviceManagementBlockFactoryResetOnMobile'];
        }
        if (isset($data['deviceManagementBlockManualUnenroll'])) {
            $this->deviceManagementBlockManualUnenroll = is_bool($data['deviceManagementBlockManualUnenroll']) ? $data['deviceManagementBlockManualUnenroll'] : (bool)$data['deviceManagementBlockManualUnenroll'];
        }
        if (isset($data['diagnosticsDataSubmissionMode'])) {
            $this->diagnosticsDataSubmissionMode = is_string($data['diagnosticsDataSubmissionMode']) ? DiagnosticDataSubmissionMode::tryFrom($data['diagnosticsDataSubmissionMode']) : $data['diagnosticsDataSubmissionMode'];
        }
        if (isset($data['edgeAllowStartPagesModification'])) {
            $this->edgeAllowStartPagesModification = is_bool($data['edgeAllowStartPagesModification']) ? $data['edgeAllowStartPagesModification'] : (bool)$data['edgeAllowStartPagesModification'];
        }
        if (isset($data['edgeBlockAccessToAboutFlags'])) {
            $this->edgeBlockAccessToAboutFlags = is_bool($data['edgeBlockAccessToAboutFlags']) ? $data['edgeBlockAccessToAboutFlags'] : (bool)$data['edgeBlockAccessToAboutFlags'];
        }
        if (isset($data['edgeBlockAddressBarDropdown'])) {
            $this->edgeBlockAddressBarDropdown = is_bool($data['edgeBlockAddressBarDropdown']) ? $data['edgeBlockAddressBarDropdown'] : (bool)$data['edgeBlockAddressBarDropdown'];
        }
        if (isset($data['edgeBlockAutofill'])) {
            $this->edgeBlockAutofill = is_bool($data['edgeBlockAutofill']) ? $data['edgeBlockAutofill'] : (bool)$data['edgeBlockAutofill'];
        }
        if (isset($data['edgeBlockCompatibilityList'])) {
            $this->edgeBlockCompatibilityList = is_bool($data['edgeBlockCompatibilityList']) ? $data['edgeBlockCompatibilityList'] : (bool)$data['edgeBlockCompatibilityList'];
        }
        if (isset($data['edgeBlockDeveloperTools'])) {
            $this->edgeBlockDeveloperTools = is_bool($data['edgeBlockDeveloperTools']) ? $data['edgeBlockDeveloperTools'] : (bool)$data['edgeBlockDeveloperTools'];
        }
        if (isset($data['edgeBlocked'])) {
            $this->edgeBlocked = is_bool($data['edgeBlocked']) ? $data['edgeBlocked'] : (bool)$data['edgeBlocked'];
        }
        if (isset($data['edgeBlockExtensions'])) {
            $this->edgeBlockExtensions = is_bool($data['edgeBlockExtensions']) ? $data['edgeBlockExtensions'] : (bool)$data['edgeBlockExtensions'];
        }
        if (isset($data['edgeBlockInPrivateBrowsing'])) {
            $this->edgeBlockInPrivateBrowsing = is_bool($data['edgeBlockInPrivateBrowsing']) ? $data['edgeBlockInPrivateBrowsing'] : (bool)$data['edgeBlockInPrivateBrowsing'];
        }
        if (isset($data['edgeBlockJavaScript'])) {
            $this->edgeBlockJavaScript = is_bool($data['edgeBlockJavaScript']) ? $data['edgeBlockJavaScript'] : (bool)$data['edgeBlockJavaScript'];
        }
        if (isset($data['edgeBlockLiveTileDataCollection'])) {
            $this->edgeBlockLiveTileDataCollection = is_bool($data['edgeBlockLiveTileDataCollection']) ? $data['edgeBlockLiveTileDataCollection'] : (bool)$data['edgeBlockLiveTileDataCollection'];
        }
        if (isset($data['edgeBlockPasswordManager'])) {
            $this->edgeBlockPasswordManager = is_bool($data['edgeBlockPasswordManager']) ? $data['edgeBlockPasswordManager'] : (bool)$data['edgeBlockPasswordManager'];
        }
        if (isset($data['edgeBlockPopups'])) {
            $this->edgeBlockPopups = is_bool($data['edgeBlockPopups']) ? $data['edgeBlockPopups'] : (bool)$data['edgeBlockPopups'];
        }
        if (isset($data['edgeBlockSearchSuggestions'])) {
            $this->edgeBlockSearchSuggestions = is_bool($data['edgeBlockSearchSuggestions']) ? $data['edgeBlockSearchSuggestions'] : (bool)$data['edgeBlockSearchSuggestions'];
        }
        if (isset($data['edgeBlockSendingDoNotTrackHeader'])) {
            $this->edgeBlockSendingDoNotTrackHeader = is_bool($data['edgeBlockSendingDoNotTrackHeader']) ? $data['edgeBlockSendingDoNotTrackHeader'] : (bool)$data['edgeBlockSendingDoNotTrackHeader'];
        }
        if (isset($data['edgeBlockSendingIntranetTrafficToInternetExplorer'])) {
            $this->edgeBlockSendingIntranetTrafficToInternetExplorer = is_bool($data['edgeBlockSendingIntranetTrafficToInternetExplorer']) ? $data['edgeBlockSendingIntranetTrafficToInternetExplorer'] : (bool)$data['edgeBlockSendingIntranetTrafficToInternetExplorer'];
        }
        if (isset($data['edgeClearBrowsingDataOnExit'])) {
            $this->edgeClearBrowsingDataOnExit = is_bool($data['edgeClearBrowsingDataOnExit']) ? $data['edgeClearBrowsingDataOnExit'] : (bool)$data['edgeClearBrowsingDataOnExit'];
        }
        if (isset($data['edgeCookiePolicy'])) {
            $this->edgeCookiePolicy = is_string($data['edgeCookiePolicy']) ? EdgeCookiePolicy::tryFrom($data['edgeCookiePolicy']) : $data['edgeCookiePolicy'];
        }
        if (isset($data['edgeDisableFirstRunPage'])) {
            $this->edgeDisableFirstRunPage = is_bool($data['edgeDisableFirstRunPage']) ? $data['edgeDisableFirstRunPage'] : (bool)$data['edgeDisableFirstRunPage'];
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
            $this->edgeRequireSmartScreen = is_bool($data['edgeRequireSmartScreen']) ? $data['edgeRequireSmartScreen'] : (bool)$data['edgeRequireSmartScreen'];
        }
        if (isset($data['edgeSearchEngine'])) {
            $this->edgeSearchEngine = is_array($data['edgeSearchEngine']) ? new EdgeSearchEngineBase($data['edgeSearchEngine']) : $data['edgeSearchEngine'];
        }
        if (isset($data['edgeSendIntranetTrafficToInternetExplorer'])) {
            $this->edgeSendIntranetTrafficToInternetExplorer = is_bool($data['edgeSendIntranetTrafficToInternetExplorer']) ? $data['edgeSendIntranetTrafficToInternetExplorer'] : (bool)$data['edgeSendIntranetTrafficToInternetExplorer'];
        }
        if (isset($data['edgeSyncFavoritesWithInternetExplorer'])) {
            $this->edgeSyncFavoritesWithInternetExplorer = is_bool($data['edgeSyncFavoritesWithInternetExplorer']) ? $data['edgeSyncFavoritesWithInternetExplorer'] : (bool)$data['edgeSyncFavoritesWithInternetExplorer'];
        }
        if (isset($data['enterpriseCloudPrintDiscoveryEndPoint'])) {
            $this->enterpriseCloudPrintDiscoveryEndPoint = $data['enterpriseCloudPrintDiscoveryEndPoint'];
        }
        if (isset($data['enterpriseCloudPrintDiscoveryMaxLimit'])) {
            $this->enterpriseCloudPrintDiscoveryMaxLimit = is_numeric($data['enterpriseCloudPrintDiscoveryMaxLimit']) ? (float)$data['enterpriseCloudPrintDiscoveryMaxLimit'] : $data['enterpriseCloudPrintDiscoveryMaxLimit'];
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
            $this->experienceBlockDeviceDiscovery = is_bool($data['experienceBlockDeviceDiscovery']) ? $data['experienceBlockDeviceDiscovery'] : (bool)$data['experienceBlockDeviceDiscovery'];
        }
        if (isset($data['experienceBlockErrorDialogWhenNoSIM'])) {
            $this->experienceBlockErrorDialogWhenNoSIM = is_bool($data['experienceBlockErrorDialogWhenNoSIM']) ? $data['experienceBlockErrorDialogWhenNoSIM'] : (bool)$data['experienceBlockErrorDialogWhenNoSIM'];
        }
        if (isset($data['experienceBlockTaskSwitcher'])) {
            $this->experienceBlockTaskSwitcher = is_bool($data['experienceBlockTaskSwitcher']) ? $data['experienceBlockTaskSwitcher'] : (bool)$data['experienceBlockTaskSwitcher'];
        }
        if (isset($data['gameDvrBlocked'])) {
            $this->gameDvrBlocked = is_bool($data['gameDvrBlocked']) ? $data['gameDvrBlocked'] : (bool)$data['gameDvrBlocked'];
        }
        if (isset($data['internetSharingBlocked'])) {
            $this->internetSharingBlocked = is_bool($data['internetSharingBlocked']) ? $data['internetSharingBlocked'] : (bool)$data['internetSharingBlocked'];
        }
        if (isset($data['locationServicesBlocked'])) {
            $this->locationServicesBlocked = is_bool($data['locationServicesBlocked']) ? $data['locationServicesBlocked'] : (bool)$data['locationServicesBlocked'];
        }
        if (isset($data['lockScreenAllowTimeoutConfiguration'])) {
            $this->lockScreenAllowTimeoutConfiguration = is_bool($data['lockScreenAllowTimeoutConfiguration']) ? $data['lockScreenAllowTimeoutConfiguration'] : (bool)$data['lockScreenAllowTimeoutConfiguration'];
        }
        if (isset($data['lockScreenBlockActionCenterNotifications'])) {
            $this->lockScreenBlockActionCenterNotifications = is_bool($data['lockScreenBlockActionCenterNotifications']) ? $data['lockScreenBlockActionCenterNotifications'] : (bool)$data['lockScreenBlockActionCenterNotifications'];
        }
        if (isset($data['lockScreenBlockCortana'])) {
            $this->lockScreenBlockCortana = is_bool($data['lockScreenBlockCortana']) ? $data['lockScreenBlockCortana'] : (bool)$data['lockScreenBlockCortana'];
        }
        if (isset($data['lockScreenBlockToastNotifications'])) {
            $this->lockScreenBlockToastNotifications = is_bool($data['lockScreenBlockToastNotifications']) ? $data['lockScreenBlockToastNotifications'] : (bool)$data['lockScreenBlockToastNotifications'];
        }
        if (isset($data['lockScreenTimeoutInSeconds'])) {
            $this->lockScreenTimeoutInSeconds = is_numeric($data['lockScreenTimeoutInSeconds']) ? (float)$data['lockScreenTimeoutInSeconds'] : $data['lockScreenTimeoutInSeconds'];
        }
        if (isset($data['logonBlockFastUserSwitching'])) {
            $this->logonBlockFastUserSwitching = is_bool($data['logonBlockFastUserSwitching']) ? $data['logonBlockFastUserSwitching'] : (bool)$data['logonBlockFastUserSwitching'];
        }
        if (isset($data['microsoftAccountBlocked'])) {
            $this->microsoftAccountBlocked = is_bool($data['microsoftAccountBlocked']) ? $data['microsoftAccountBlocked'] : (bool)$data['microsoftAccountBlocked'];
        }
        if (isset($data['microsoftAccountBlockSettingsSync'])) {
            $this->microsoftAccountBlockSettingsSync = is_bool($data['microsoftAccountBlockSettingsSync']) ? $data['microsoftAccountBlockSettingsSync'] : (bool)$data['microsoftAccountBlockSettingsSync'];
        }
        if (isset($data['networkProxyApplySettingsDeviceWide'])) {
            $this->networkProxyApplySettingsDeviceWide = is_bool($data['networkProxyApplySettingsDeviceWide']) ? $data['networkProxyApplySettingsDeviceWide'] : (bool)$data['networkProxyApplySettingsDeviceWide'];
        }
        if (isset($data['networkProxyAutomaticConfigurationUrl'])) {
            $this->networkProxyAutomaticConfigurationUrl = $data['networkProxyAutomaticConfigurationUrl'];
        }
        if (isset($data['networkProxyDisableAutoDetect'])) {
            $this->networkProxyDisableAutoDetect = is_bool($data['networkProxyDisableAutoDetect']) ? $data['networkProxyDisableAutoDetect'] : (bool)$data['networkProxyDisableAutoDetect'];
        }
        if (isset($data['networkProxyServer'])) {
            $this->networkProxyServer = is_array($data['networkProxyServer']) ? new Windows10NetworkProxyServer($data['networkProxyServer']) : $data['networkProxyServer'];
        }
        if (isset($data['nfcBlocked'])) {
            $this->nfcBlocked = is_bool($data['nfcBlocked']) ? $data['nfcBlocked'] : (bool)$data['nfcBlocked'];
        }
        if (isset($data['oneDriveDisableFileSync'])) {
            $this->oneDriveDisableFileSync = is_bool($data['oneDriveDisableFileSync']) ? $data['oneDriveDisableFileSync'] : (bool)$data['oneDriveDisableFileSync'];
        }
        if (isset($data['passwordBlockSimple'])) {
            $this->passwordBlockSimple = is_bool($data['passwordBlockSimple']) ? $data['passwordBlockSimple'] : (bool)$data['passwordBlockSimple'];
        }
        if (isset($data['passwordExpirationDays'])) {
            $this->passwordExpirationDays = is_numeric($data['passwordExpirationDays']) ? (float)$data['passwordExpirationDays'] : $data['passwordExpirationDays'];
        }
        if (isset($data['passwordMinimumCharacterSetCount'])) {
            $this->passwordMinimumCharacterSetCount = is_numeric($data['passwordMinimumCharacterSetCount']) ? (float)$data['passwordMinimumCharacterSetCount'] : $data['passwordMinimumCharacterSetCount'];
        }
        if (isset($data['passwordMinimumLength'])) {
            $this->passwordMinimumLength = is_numeric($data['passwordMinimumLength']) ? (float)$data['passwordMinimumLength'] : $data['passwordMinimumLength'];
        }
        if (isset($data['passwordMinutesOfInactivityBeforeScreenTimeout'])) {
            $this->passwordMinutesOfInactivityBeforeScreenTimeout = is_numeric($data['passwordMinutesOfInactivityBeforeScreenTimeout']) ? (float)$data['passwordMinutesOfInactivityBeforeScreenTimeout'] : $data['passwordMinutesOfInactivityBeforeScreenTimeout'];
        }
        if (isset($data['passwordPreviousPasswordBlockCount'])) {
            $this->passwordPreviousPasswordBlockCount = is_numeric($data['passwordPreviousPasswordBlockCount']) ? (float)$data['passwordPreviousPasswordBlockCount'] : $data['passwordPreviousPasswordBlockCount'];
        }
        if (isset($data['passwordRequired'])) {
            $this->passwordRequired = is_bool($data['passwordRequired']) ? $data['passwordRequired'] : (bool)$data['passwordRequired'];
        }
        if (isset($data['passwordRequiredType'])) {
            $this->passwordRequiredType = is_string($data['passwordRequiredType']) ? RequiredPasswordType::tryFrom($data['passwordRequiredType']) : $data['passwordRequiredType'];
        }
        if (isset($data['passwordRequireWhenResumeFromIdleState'])) {
            $this->passwordRequireWhenResumeFromIdleState = is_bool($data['passwordRequireWhenResumeFromIdleState']) ? $data['passwordRequireWhenResumeFromIdleState'] : (bool)$data['passwordRequireWhenResumeFromIdleState'];
        }
        if (isset($data['passwordSignInFailureCountBeforeFactoryReset'])) {
            $this->passwordSignInFailureCountBeforeFactoryReset = is_numeric($data['passwordSignInFailureCountBeforeFactoryReset']) ? (float)$data['passwordSignInFailureCountBeforeFactoryReset'] : $data['passwordSignInFailureCountBeforeFactoryReset'];
        }
        if (isset($data['personalizationDesktopImageUrl'])) {
            $this->personalizationDesktopImageUrl = $data['personalizationDesktopImageUrl'];
        }
        if (isset($data['personalizationLockScreenImageUrl'])) {
            $this->personalizationLockScreenImageUrl = $data['personalizationLockScreenImageUrl'];
        }
        if (isset($data['privacyAdvertisingId'])) {
            $this->privacyAdvertisingId = is_string($data['privacyAdvertisingId']) ? StateManagementSetting::tryFrom($data['privacyAdvertisingId']) : $data['privacyAdvertisingId'];
        }
        if (isset($data['privacyAutoAcceptPairingAndConsentPrompts'])) {
            $this->privacyAutoAcceptPairingAndConsentPrompts = is_bool($data['privacyAutoAcceptPairingAndConsentPrompts']) ? $data['privacyAutoAcceptPairingAndConsentPrompts'] : (bool)$data['privacyAutoAcceptPairingAndConsentPrompts'];
        }
        if (isset($data['privacyBlockInputPersonalization'])) {
            $this->privacyBlockInputPersonalization = is_bool($data['privacyBlockInputPersonalization']) ? $data['privacyBlockInputPersonalization'] : (bool)$data['privacyBlockInputPersonalization'];
        }
        if (isset($data['resetProtectionModeBlocked'])) {
            $this->resetProtectionModeBlocked = is_bool($data['resetProtectionModeBlocked']) ? $data['resetProtectionModeBlocked'] : (bool)$data['resetProtectionModeBlocked'];
        }
        if (isset($data['safeSearchFilter'])) {
            $this->safeSearchFilter = is_string($data['safeSearchFilter']) ? SafeSearchFilterType::tryFrom($data['safeSearchFilter']) : $data['safeSearchFilter'];
        }
        if (isset($data['screenCaptureBlocked'])) {
            $this->screenCaptureBlocked = is_bool($data['screenCaptureBlocked']) ? $data['screenCaptureBlocked'] : (bool)$data['screenCaptureBlocked'];
        }
        if (isset($data['searchBlockDiacritics'])) {
            $this->searchBlockDiacritics = is_bool($data['searchBlockDiacritics']) ? $data['searchBlockDiacritics'] : (bool)$data['searchBlockDiacritics'];
        }
        if (isset($data['searchDisableAutoLanguageDetection'])) {
            $this->searchDisableAutoLanguageDetection = is_bool($data['searchDisableAutoLanguageDetection']) ? $data['searchDisableAutoLanguageDetection'] : (bool)$data['searchDisableAutoLanguageDetection'];
        }
        if (isset($data['searchDisableIndexerBackoff'])) {
            $this->searchDisableIndexerBackoff = is_bool($data['searchDisableIndexerBackoff']) ? $data['searchDisableIndexerBackoff'] : (bool)$data['searchDisableIndexerBackoff'];
        }
        if (isset($data['searchDisableIndexingEncryptedItems'])) {
            $this->searchDisableIndexingEncryptedItems = is_bool($data['searchDisableIndexingEncryptedItems']) ? $data['searchDisableIndexingEncryptedItems'] : (bool)$data['searchDisableIndexingEncryptedItems'];
        }
        if (isset($data['searchDisableIndexingRemovableDrive'])) {
            $this->searchDisableIndexingRemovableDrive = is_bool($data['searchDisableIndexingRemovableDrive']) ? $data['searchDisableIndexingRemovableDrive'] : (bool)$data['searchDisableIndexingRemovableDrive'];
        }
        if (isset($data['searchEnableAutomaticIndexSizeManangement'])) {
            $this->searchEnableAutomaticIndexSizeManangement = is_bool($data['searchEnableAutomaticIndexSizeManangement']) ? $data['searchEnableAutomaticIndexSizeManangement'] : (bool)$data['searchEnableAutomaticIndexSizeManangement'];
        }
        if (isset($data['searchEnableRemoteQueries'])) {
            $this->searchEnableRemoteQueries = is_bool($data['searchEnableRemoteQueries']) ? $data['searchEnableRemoteQueries'] : (bool)$data['searchEnableRemoteQueries'];
        }
        if (isset($data['settingsBlockAccountsPage'])) {
            $this->settingsBlockAccountsPage = is_bool($data['settingsBlockAccountsPage']) ? $data['settingsBlockAccountsPage'] : (bool)$data['settingsBlockAccountsPage'];
        }
        if (isset($data['settingsBlockAddProvisioningPackage'])) {
            $this->settingsBlockAddProvisioningPackage = is_bool($data['settingsBlockAddProvisioningPackage']) ? $data['settingsBlockAddProvisioningPackage'] : (bool)$data['settingsBlockAddProvisioningPackage'];
        }
        if (isset($data['settingsBlockAppsPage'])) {
            $this->settingsBlockAppsPage = is_bool($data['settingsBlockAppsPage']) ? $data['settingsBlockAppsPage'] : (bool)$data['settingsBlockAppsPage'];
        }
        if (isset($data['settingsBlockChangeLanguage'])) {
            $this->settingsBlockChangeLanguage = is_bool($data['settingsBlockChangeLanguage']) ? $data['settingsBlockChangeLanguage'] : (bool)$data['settingsBlockChangeLanguage'];
        }
        if (isset($data['settingsBlockChangePowerSleep'])) {
            $this->settingsBlockChangePowerSleep = is_bool($data['settingsBlockChangePowerSleep']) ? $data['settingsBlockChangePowerSleep'] : (bool)$data['settingsBlockChangePowerSleep'];
        }
        if (isset($data['settingsBlockChangeRegion'])) {
            $this->settingsBlockChangeRegion = is_bool($data['settingsBlockChangeRegion']) ? $data['settingsBlockChangeRegion'] : (bool)$data['settingsBlockChangeRegion'];
        }
        if (isset($data['settingsBlockChangeSystemTime'])) {
            $this->settingsBlockChangeSystemTime = is_bool($data['settingsBlockChangeSystemTime']) ? $data['settingsBlockChangeSystemTime'] : (bool)$data['settingsBlockChangeSystemTime'];
        }
        if (isset($data['settingsBlockDevicesPage'])) {
            $this->settingsBlockDevicesPage = is_bool($data['settingsBlockDevicesPage']) ? $data['settingsBlockDevicesPage'] : (bool)$data['settingsBlockDevicesPage'];
        }
        if (isset($data['settingsBlockEaseOfAccessPage'])) {
            $this->settingsBlockEaseOfAccessPage = is_bool($data['settingsBlockEaseOfAccessPage']) ? $data['settingsBlockEaseOfAccessPage'] : (bool)$data['settingsBlockEaseOfAccessPage'];
        }
        if (isset($data['settingsBlockEditDeviceName'])) {
            $this->settingsBlockEditDeviceName = is_bool($data['settingsBlockEditDeviceName']) ? $data['settingsBlockEditDeviceName'] : (bool)$data['settingsBlockEditDeviceName'];
        }
        if (isset($data['settingsBlockGamingPage'])) {
            $this->settingsBlockGamingPage = is_bool($data['settingsBlockGamingPage']) ? $data['settingsBlockGamingPage'] : (bool)$data['settingsBlockGamingPage'];
        }
        if (isset($data['settingsBlockNetworkInternetPage'])) {
            $this->settingsBlockNetworkInternetPage = is_bool($data['settingsBlockNetworkInternetPage']) ? $data['settingsBlockNetworkInternetPage'] : (bool)$data['settingsBlockNetworkInternetPage'];
        }
        if (isset($data['settingsBlockPersonalizationPage'])) {
            $this->settingsBlockPersonalizationPage = is_bool($data['settingsBlockPersonalizationPage']) ? $data['settingsBlockPersonalizationPage'] : (bool)$data['settingsBlockPersonalizationPage'];
        }
        if (isset($data['settingsBlockPrivacyPage'])) {
            $this->settingsBlockPrivacyPage = is_bool($data['settingsBlockPrivacyPage']) ? $data['settingsBlockPrivacyPage'] : (bool)$data['settingsBlockPrivacyPage'];
        }
        if (isset($data['settingsBlockRemoveProvisioningPackage'])) {
            $this->settingsBlockRemoveProvisioningPackage = is_bool($data['settingsBlockRemoveProvisioningPackage']) ? $data['settingsBlockRemoveProvisioningPackage'] : (bool)$data['settingsBlockRemoveProvisioningPackage'];
        }
        if (isset($data['settingsBlockSettingsApp'])) {
            $this->settingsBlockSettingsApp = is_bool($data['settingsBlockSettingsApp']) ? $data['settingsBlockSettingsApp'] : (bool)$data['settingsBlockSettingsApp'];
        }
        if (isset($data['settingsBlockSystemPage'])) {
            $this->settingsBlockSystemPage = is_bool($data['settingsBlockSystemPage']) ? $data['settingsBlockSystemPage'] : (bool)$data['settingsBlockSystemPage'];
        }
        if (isset($data['settingsBlockTimeLanguagePage'])) {
            $this->settingsBlockTimeLanguagePage = is_bool($data['settingsBlockTimeLanguagePage']) ? $data['settingsBlockTimeLanguagePage'] : (bool)$data['settingsBlockTimeLanguagePage'];
        }
        if (isset($data['settingsBlockUpdateSecurityPage'])) {
            $this->settingsBlockUpdateSecurityPage = is_bool($data['settingsBlockUpdateSecurityPage']) ? $data['settingsBlockUpdateSecurityPage'] : (bool)$data['settingsBlockUpdateSecurityPage'];
        }
        if (isset($data['sharedUserAppDataAllowed'])) {
            $this->sharedUserAppDataAllowed = is_bool($data['sharedUserAppDataAllowed']) ? $data['sharedUserAppDataAllowed'] : (bool)$data['sharedUserAppDataAllowed'];
        }
        if (isset($data['smartScreenBlockPromptOverride'])) {
            $this->smartScreenBlockPromptOverride = is_bool($data['smartScreenBlockPromptOverride']) ? $data['smartScreenBlockPromptOverride'] : (bool)$data['smartScreenBlockPromptOverride'];
        }
        if (isset($data['smartScreenBlockPromptOverrideForFiles'])) {
            $this->smartScreenBlockPromptOverrideForFiles = is_bool($data['smartScreenBlockPromptOverrideForFiles']) ? $data['smartScreenBlockPromptOverrideForFiles'] : (bool)$data['smartScreenBlockPromptOverrideForFiles'];
        }
        if (isset($data['smartScreenEnableAppInstallControl'])) {
            $this->smartScreenEnableAppInstallControl = is_bool($data['smartScreenEnableAppInstallControl']) ? $data['smartScreenEnableAppInstallControl'] : (bool)$data['smartScreenEnableAppInstallControl'];
        }
        if (isset($data['startBlockUnpinningAppsFromTaskbar'])) {
            $this->startBlockUnpinningAppsFromTaskbar = is_bool($data['startBlockUnpinningAppsFromTaskbar']) ? $data['startBlockUnpinningAppsFromTaskbar'] : (bool)$data['startBlockUnpinningAppsFromTaskbar'];
        }
        if (isset($data['startMenuAppListVisibility'])) {
            $this->startMenuAppListVisibility = is_string($data['startMenuAppListVisibility']) ? WindowsStartMenuAppListVisibilityType::tryFrom($data['startMenuAppListVisibility']) : $data['startMenuAppListVisibility'];
        }
        if (isset($data['startMenuHideChangeAccountSettings'])) {
            $this->startMenuHideChangeAccountSettings = is_bool($data['startMenuHideChangeAccountSettings']) ? $data['startMenuHideChangeAccountSettings'] : (bool)$data['startMenuHideChangeAccountSettings'];
        }
        if (isset($data['startMenuHideFrequentlyUsedApps'])) {
            $this->startMenuHideFrequentlyUsedApps = is_bool($data['startMenuHideFrequentlyUsedApps']) ? $data['startMenuHideFrequentlyUsedApps'] : (bool)$data['startMenuHideFrequentlyUsedApps'];
        }
        if (isset($data['startMenuHideHibernate'])) {
            $this->startMenuHideHibernate = is_bool($data['startMenuHideHibernate']) ? $data['startMenuHideHibernate'] : (bool)$data['startMenuHideHibernate'];
        }
        if (isset($data['startMenuHideLock'])) {
            $this->startMenuHideLock = is_bool($data['startMenuHideLock']) ? $data['startMenuHideLock'] : (bool)$data['startMenuHideLock'];
        }
        if (isset($data['startMenuHidePowerButton'])) {
            $this->startMenuHidePowerButton = is_bool($data['startMenuHidePowerButton']) ? $data['startMenuHidePowerButton'] : (bool)$data['startMenuHidePowerButton'];
        }
        if (isset($data['startMenuHideRecentJumpLists'])) {
            $this->startMenuHideRecentJumpLists = is_bool($data['startMenuHideRecentJumpLists']) ? $data['startMenuHideRecentJumpLists'] : (bool)$data['startMenuHideRecentJumpLists'];
        }
        if (isset($data['startMenuHideRecentlyAddedApps'])) {
            $this->startMenuHideRecentlyAddedApps = is_bool($data['startMenuHideRecentlyAddedApps']) ? $data['startMenuHideRecentlyAddedApps'] : (bool)$data['startMenuHideRecentlyAddedApps'];
        }
        if (isset($data['startMenuHideRestartOptions'])) {
            $this->startMenuHideRestartOptions = is_bool($data['startMenuHideRestartOptions']) ? $data['startMenuHideRestartOptions'] : (bool)$data['startMenuHideRestartOptions'];
        }
        if (isset($data['startMenuHideShutDown'])) {
            $this->startMenuHideShutDown = is_bool($data['startMenuHideShutDown']) ? $data['startMenuHideShutDown'] : (bool)$data['startMenuHideShutDown'];
        }
        if (isset($data['startMenuHideSignOut'])) {
            $this->startMenuHideSignOut = is_bool($data['startMenuHideSignOut']) ? $data['startMenuHideSignOut'] : (bool)$data['startMenuHideSignOut'];
        }
        if (isset($data['startMenuHideSleep'])) {
            $this->startMenuHideSleep = is_bool($data['startMenuHideSleep']) ? $data['startMenuHideSleep'] : (bool)$data['startMenuHideSleep'];
        }
        if (isset($data['startMenuHideSwitchAccount'])) {
            $this->startMenuHideSwitchAccount = is_bool($data['startMenuHideSwitchAccount']) ? $data['startMenuHideSwitchAccount'] : (bool)$data['startMenuHideSwitchAccount'];
        }
        if (isset($data['startMenuHideUserTile'])) {
            $this->startMenuHideUserTile = is_bool($data['startMenuHideUserTile']) ? $data['startMenuHideUserTile'] : (bool)$data['startMenuHideUserTile'];
        }
        if (isset($data['startMenuLayoutEdgeAssetsXml'])) {
            $this->startMenuLayoutEdgeAssetsXml = $data['startMenuLayoutEdgeAssetsXml'];
        }
        if (isset($data['startMenuLayoutXml'])) {
            $this->startMenuLayoutXml = $data['startMenuLayoutXml'];
        }
        if (isset($data['startMenuMode'])) {
            $this->startMenuMode = is_string($data['startMenuMode']) ? WindowsStartMenuModeType::tryFrom($data['startMenuMode']) : $data['startMenuMode'];
        }
        if (isset($data['startMenuPinnedFolderDocuments'])) {
            $this->startMenuPinnedFolderDocuments = is_string($data['startMenuPinnedFolderDocuments']) ? VisibilitySetting::tryFrom($data['startMenuPinnedFolderDocuments']) : $data['startMenuPinnedFolderDocuments'];
        }
        if (isset($data['startMenuPinnedFolderDownloads'])) {
            $this->startMenuPinnedFolderDownloads = is_string($data['startMenuPinnedFolderDownloads']) ? VisibilitySetting::tryFrom($data['startMenuPinnedFolderDownloads']) : $data['startMenuPinnedFolderDownloads'];
        }
        if (isset($data['startMenuPinnedFolderFileExplorer'])) {
            $this->startMenuPinnedFolderFileExplorer = is_string($data['startMenuPinnedFolderFileExplorer']) ? VisibilitySetting::tryFrom($data['startMenuPinnedFolderFileExplorer']) : $data['startMenuPinnedFolderFileExplorer'];
        }
        if (isset($data['startMenuPinnedFolderHomeGroup'])) {
            $this->startMenuPinnedFolderHomeGroup = is_string($data['startMenuPinnedFolderHomeGroup']) ? VisibilitySetting::tryFrom($data['startMenuPinnedFolderHomeGroup']) : $data['startMenuPinnedFolderHomeGroup'];
        }
        if (isset($data['startMenuPinnedFolderMusic'])) {
            $this->startMenuPinnedFolderMusic = is_string($data['startMenuPinnedFolderMusic']) ? VisibilitySetting::tryFrom($data['startMenuPinnedFolderMusic']) : $data['startMenuPinnedFolderMusic'];
        }
        if (isset($data['startMenuPinnedFolderNetwork'])) {
            $this->startMenuPinnedFolderNetwork = is_string($data['startMenuPinnedFolderNetwork']) ? VisibilitySetting::tryFrom($data['startMenuPinnedFolderNetwork']) : $data['startMenuPinnedFolderNetwork'];
        }
        if (isset($data['startMenuPinnedFolderPersonalFolder'])) {
            $this->startMenuPinnedFolderPersonalFolder = is_string($data['startMenuPinnedFolderPersonalFolder']) ? VisibilitySetting::tryFrom($data['startMenuPinnedFolderPersonalFolder']) : $data['startMenuPinnedFolderPersonalFolder'];
        }
        if (isset($data['startMenuPinnedFolderPictures'])) {
            $this->startMenuPinnedFolderPictures = is_string($data['startMenuPinnedFolderPictures']) ? VisibilitySetting::tryFrom($data['startMenuPinnedFolderPictures']) : $data['startMenuPinnedFolderPictures'];
        }
        if (isset($data['startMenuPinnedFolderSettings'])) {
            $this->startMenuPinnedFolderSettings = is_string($data['startMenuPinnedFolderSettings']) ? VisibilitySetting::tryFrom($data['startMenuPinnedFolderSettings']) : $data['startMenuPinnedFolderSettings'];
        }
        if (isset($data['startMenuPinnedFolderVideos'])) {
            $this->startMenuPinnedFolderVideos = is_string($data['startMenuPinnedFolderVideos']) ? VisibilitySetting::tryFrom($data['startMenuPinnedFolderVideos']) : $data['startMenuPinnedFolderVideos'];
        }
        if (isset($data['storageBlockRemovableStorage'])) {
            $this->storageBlockRemovableStorage = is_bool($data['storageBlockRemovableStorage']) ? $data['storageBlockRemovableStorage'] : (bool)$data['storageBlockRemovableStorage'];
        }
        if (isset($data['storageRequireMobileDeviceEncryption'])) {
            $this->storageRequireMobileDeviceEncryption = is_bool($data['storageRequireMobileDeviceEncryption']) ? $data['storageRequireMobileDeviceEncryption'] : (bool)$data['storageRequireMobileDeviceEncryption'];
        }
        if (isset($data['storageRestrictAppDataToSystemVolume'])) {
            $this->storageRestrictAppDataToSystemVolume = is_bool($data['storageRestrictAppDataToSystemVolume']) ? $data['storageRestrictAppDataToSystemVolume'] : (bool)$data['storageRestrictAppDataToSystemVolume'];
        }
        if (isset($data['storageRestrictAppInstallToSystemVolume'])) {
            $this->storageRestrictAppInstallToSystemVolume = is_bool($data['storageRestrictAppInstallToSystemVolume']) ? $data['storageRestrictAppInstallToSystemVolume'] : (bool)$data['storageRestrictAppInstallToSystemVolume'];
        }
        if (isset($data['tenantLockdownRequireNetworkDuringOutOfBoxExperience'])) {
            $this->tenantLockdownRequireNetworkDuringOutOfBoxExperience = is_bool($data['tenantLockdownRequireNetworkDuringOutOfBoxExperience']) ? $data['tenantLockdownRequireNetworkDuringOutOfBoxExperience'] : (bool)$data['tenantLockdownRequireNetworkDuringOutOfBoxExperience'];
        }
        if (isset($data['usbBlocked'])) {
            $this->usbBlocked = is_bool($data['usbBlocked']) ? $data['usbBlocked'] : (bool)$data['usbBlocked'];
        }
        if (isset($data['voiceRecordingBlocked'])) {
            $this->voiceRecordingBlocked = is_bool($data['voiceRecordingBlocked']) ? $data['voiceRecordingBlocked'] : (bool)$data['voiceRecordingBlocked'];
        }
        if (isset($data['webRtcBlockLocalhostIpAddress'])) {
            $this->webRtcBlockLocalhostIpAddress = is_bool($data['webRtcBlockLocalhostIpAddress']) ? $data['webRtcBlockLocalhostIpAddress'] : (bool)$data['webRtcBlockLocalhostIpAddress'];
        }
        if (isset($data['wiFiBlockAutomaticConnectHotspots'])) {
            $this->wiFiBlockAutomaticConnectHotspots = is_bool($data['wiFiBlockAutomaticConnectHotspots']) ? $data['wiFiBlockAutomaticConnectHotspots'] : (bool)$data['wiFiBlockAutomaticConnectHotspots'];
        }
        if (isset($data['wiFiBlocked'])) {
            $this->wiFiBlocked = is_bool($data['wiFiBlocked']) ? $data['wiFiBlocked'] : (bool)$data['wiFiBlocked'];
        }
        if (isset($data['wiFiBlockManualConfiguration'])) {
            $this->wiFiBlockManualConfiguration = is_bool($data['wiFiBlockManualConfiguration']) ? $data['wiFiBlockManualConfiguration'] : (bool)$data['wiFiBlockManualConfiguration'];
        }
        if (isset($data['wiFiScanInterval'])) {
            $this->wiFiScanInterval = is_numeric($data['wiFiScanInterval']) ? (float)$data['wiFiScanInterval'] : $data['wiFiScanInterval'];
        }
        if (isset($data['windowsSpotlightBlockConsumerSpecificFeatures'])) {
            $this->windowsSpotlightBlockConsumerSpecificFeatures = is_bool($data['windowsSpotlightBlockConsumerSpecificFeatures']) ? $data['windowsSpotlightBlockConsumerSpecificFeatures'] : (bool)$data['windowsSpotlightBlockConsumerSpecificFeatures'];
        }
        if (isset($data['windowsSpotlightBlocked'])) {
            $this->windowsSpotlightBlocked = is_bool($data['windowsSpotlightBlocked']) ? $data['windowsSpotlightBlocked'] : (bool)$data['windowsSpotlightBlocked'];
        }
        if (isset($data['windowsSpotlightBlockOnActionCenter'])) {
            $this->windowsSpotlightBlockOnActionCenter = is_bool($data['windowsSpotlightBlockOnActionCenter']) ? $data['windowsSpotlightBlockOnActionCenter'] : (bool)$data['windowsSpotlightBlockOnActionCenter'];
        }
        if (isset($data['windowsSpotlightBlockTailoredExperiences'])) {
            $this->windowsSpotlightBlockTailoredExperiences = is_bool($data['windowsSpotlightBlockTailoredExperiences']) ? $data['windowsSpotlightBlockTailoredExperiences'] : (bool)$data['windowsSpotlightBlockTailoredExperiences'];
        }
        if (isset($data['windowsSpotlightBlockThirdPartyNotifications'])) {
            $this->windowsSpotlightBlockThirdPartyNotifications = is_bool($data['windowsSpotlightBlockThirdPartyNotifications']) ? $data['windowsSpotlightBlockThirdPartyNotifications'] : (bool)$data['windowsSpotlightBlockThirdPartyNotifications'];
        }
        if (isset($data['windowsSpotlightBlockWelcomeExperience'])) {
            $this->windowsSpotlightBlockWelcomeExperience = is_bool($data['windowsSpotlightBlockWelcomeExperience']) ? $data['windowsSpotlightBlockWelcomeExperience'] : (bool)$data['windowsSpotlightBlockWelcomeExperience'];
        }
        if (isset($data['windowsSpotlightBlockWindowsTips'])) {
            $this->windowsSpotlightBlockWindowsTips = is_bool($data['windowsSpotlightBlockWindowsTips']) ? $data['windowsSpotlightBlockWindowsTips'] : (bool)$data['windowsSpotlightBlockWindowsTips'];
        }
        if (isset($data['windowsSpotlightConfigureOnLockScreen'])) {
            $this->windowsSpotlightConfigureOnLockScreen = is_string($data['windowsSpotlightConfigureOnLockScreen']) ? WindowsSpotlightEnablementSettings::tryFrom($data['windowsSpotlightConfigureOnLockScreen']) : $data['windowsSpotlightConfigureOnLockScreen'];
        }
        if (isset($data['windowsStoreBlockAutoUpdate'])) {
            $this->windowsStoreBlockAutoUpdate = is_bool($data['windowsStoreBlockAutoUpdate']) ? $data['windowsStoreBlockAutoUpdate'] : (bool)$data['windowsStoreBlockAutoUpdate'];
        }
        if (isset($data['windowsStoreBlocked'])) {
            $this->windowsStoreBlocked = is_bool($data['windowsStoreBlocked']) ? $data['windowsStoreBlocked'] : (bool)$data['windowsStoreBlocked'];
        }
        if (isset($data['windowsStoreEnablePrivateStoreOnly'])) {
            $this->windowsStoreEnablePrivateStoreOnly = is_bool($data['windowsStoreEnablePrivateStoreOnly']) ? $data['windowsStoreEnablePrivateStoreOnly'] : (bool)$data['windowsStoreEnablePrivateStoreOnly'];
        }
        if (isset($data['wirelessDisplayBlockProjectionToThisDevice'])) {
            $this->wirelessDisplayBlockProjectionToThisDevice = is_bool($data['wirelessDisplayBlockProjectionToThisDevice']) ? $data['wirelessDisplayBlockProjectionToThisDevice'] : (bool)$data['wirelessDisplayBlockProjectionToThisDevice'];
        }
        if (isset($data['wirelessDisplayBlockUserInputFromReceiver'])) {
            $this->wirelessDisplayBlockUserInputFromReceiver = is_bool($data['wirelessDisplayBlockUserInputFromReceiver']) ? $data['wirelessDisplayBlockUserInputFromReceiver'] : (bool)$data['wirelessDisplayBlockUserInputFromReceiver'];
        }
        if (isset($data['wirelessDisplayRequirePinForPairing'])) {
            $this->wirelessDisplayRequirePinForPairing = is_bool($data['wirelessDisplayRequirePinForPairing']) ? $data['wirelessDisplayRequirePinForPairing'] : (bool)$data['wirelessDisplayRequirePinForPairing'];
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
