<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows10GeneralConfiguration
 */
class Windows10GeneralConfiguration
{
    /**
     * Indicates whether or not to Block the user from adding email accounts to the device that are not associated with a Microsoft account.
     */
    private ?bool $accountsBlockAddingNonMicrosoftAccountEmail;

    /**
     * Indicates whether or not to block the user from selecting an AntiTheft mode preference (Windows 10 Mobile only).
     */
    private ?bool $antiTheftModeBlocked;

    /**
     */
    private ?string $appsAllowTrustedAppsSideloading;

    /**
     * Indicates whether or not to disable the launch of all apps from Windows Store that came pre-installed or were downloaded.
     */
    private ?bool $appsBlockWindowsStoreOriginatedApps;

    /**
     * Specify a list of allowed Bluetooth services and profiles in hex formatted strings.
     */
    private ?string $bluetoothAllowedServices;

    /**
     * Whether or not to Block the user from using bluetooth advertising.
     */
    private ?bool $bluetoothBlockAdvertising;

    /**
     * Whether or not to Block the user from using bluetooth discoverable mode.
     */
    private ?bool $bluetoothBlockDiscoverableMode;

    /**
     * Whether or not to Block the user from using bluetooth.
     */
    private ?bool $bluetoothBlocked;

    /**
     * Whether or not to block specific bundled Bluetooth peripherals to automatically pair with the host device.
     */
    private ?bool $bluetoothBlockPrePairing;

    /**
     * Whether or not to Block the user from accessing the camera of the device.
     */
    private ?bool $cameraBlocked;

    /**
     * Whether or not to Block the user from using data over cellular while roaming.
     */
    private ?bool $cellularBlockDataWhenRoaming;

    /**
     * Whether or not to Block the user from using VPN over cellular.
     */
    private ?bool $cellularBlockVpn;

    /**
     * Whether or not to Block the user from using VPN when roaming over cellular.
     */
    private ?bool $cellularBlockVpnWhenRoaming;

    /**
     * Whether or not to Block the user from doing manual root certificate installation.
     */
    private ?bool $certificatesBlockManualRootCertificateInstallation;

    /**
     * Whether or not to block Connected Devices Service which enables discovery and connection to other devices, remote messaging, remote app sessions and other cross-device experiences.
     */
    private ?bool $connectedDevicesServiceBlocked;

    /**
     * Whether or not to Block the user from using copy paste.
     */
    private ?bool $copyPasteBlocked;

    /**
     * Whether or not to Block the user from using Cortana.
     */
    private ?bool $cortanaBlocked;

    /**
     * Whether or not to block end user access to Defender.
     */
    private ?bool $defenderBlockEndUserAccess;

    /**
     */
    private ?string $defenderCloudBlockLevel;

    /**
     * Number of days before deleting quarantined malware. Valid values 0 to 90
     */
    private ?float $defenderDaysBeforeDeletingQuarantinedMalware;

    /**
     * Gets or sets Defender’s actions to take on detected Malware per threat level.
     */
    private ?string $defenderDetectedMalwareActions;

    /**
     * File extensions to exclude from scans and real time protection.
     */
    private ?string $defenderFileExtensionsToExclude;

    /**
     * Files and folder to exclude from scans and real time protection.
     */
    private ?string $defenderFilesAndFoldersToExclude;

    /**
     */
    private ?string $defenderMonitorFileActivity;

    /**
     * Processes to exclude from scans and real time protection.
     */
    private ?string $defenderProcessesToExclude;

    /**
     */
    private ?string $defenderPromptForSampleSubmission;

    /**
     * Indicates whether or not to require behavior monitoring.
     */
    private ?bool $defenderRequireBehaviorMonitoring;

    /**
     * Indicates whether or not to require cloud protection.
     */
    private ?bool $defenderRequireCloudProtection;

    /**
     * Indicates whether or not to require network inspection system.
     */
    private ?bool $defenderRequireNetworkInspectionSystem;

    /**
     * Indicates whether or not to require real time monitoring.
     */
    private ?bool $defenderRequireRealTimeMonitoring;

    /**
     * Indicates whether or not to scan archive files.
     */
    private ?bool $defenderScanArchiveFiles;

    /**
     * Indicates whether or not to scan downloads.
     */
    private ?bool $defenderScanDownloads;

    /**
     * Indicates whether or not to scan incoming mail messages.
     */
    private ?bool $defenderScanIncomingMail;

    /**
     * Indicates whether or not to scan mapped network drives during full scan.
     */
    private ?bool $defenderScanMappedNetworkDrivesDuringFullScan;

    /**
     * Max CPU usage percentage during scan. Valid values 0 to 100
     */
    private ?float $defenderScanMaxCpu;

    /**
     * Indicates whether or not to scan files opened from a network folder.
     */
    private ?bool $defenderScanNetworkFiles;

    /**
     * Indicates whether or not to scan removable drives during full scan.
     */
    private ?bool $defenderScanRemovableDrivesDuringFullScan;

    /**
     * Indicates whether or not to scan scripts loaded in Internet Explorer browser.
     */
    private ?bool $defenderScanScriptsLoadedInInternetExplorer;

    /**
     */
    private ?string $defenderScanType;

    /**
     * The time to perform a daily quick scan.
     */
    private ?string $defenderScheduledQuickScanTime;

    /**
     * The defender time for the system scan.
     */
    private ?string $defenderScheduledScanTime;

    /**
     * The signature update interval in hours. Specify 0 not to check. Valid values 0 to 24
     */
    private ?float $defenderSignatureUpdateIntervalInHours;

    /**
     */
    private ?string $defenderSystemScanSchedule;

    /**
     */
    private ?string $developerUnlockSetting;

    /**
     * Indicates whether or not to Block the user from resetting their phone.
     */
    private ?bool $deviceManagementBlockFactoryResetOnMobile;

    /**
     * Indicates whether or not to Block the user from doing manual un-enrollment from device management.
     */
    private ?bool $deviceManagementBlockManualUnenroll;

    /**
     */
    private ?string $diagnosticsDataSubmissionMode;

    /**
     * Allow users to change Start pages on Edge. Use the EdgeHomepageUrls to specify the Start pages that the user would see by default when they open Edge.
     */
    private ?bool $edgeAllowStartPagesModification;

    /**
     * Indicates whether or not to prevent access to about flags on Edge browser.
     */
    private ?bool $edgeBlockAccessToAboutFlags;

    /**
     * Block the address bar dropdown functionality in Microsoft Edge. Disable this settings to minimize network connections from Microsoft Edge to Microsoft services.
     */
    private ?bool $edgeBlockAddressBarDropdown;

    /**
     * Indicates whether or not to block auto fill.
     */
    private ?bool $edgeBlockAutofill;

    /**
     * Block Microsoft compatibility list in Microsoft Edge. This list from Microsoft helps Edge properly display sites with known compatibility issues.
     */
    private ?bool $edgeBlockCompatibilityList;

    /**
     * Indicates whether or not to block developer tools in the Edge browser.
     */
    private ?bool $edgeBlockDeveloperTools;

    /**
     * Indicates whether or not to Block the user from using the Edge browser.
     */
    private ?bool $edgeBlocked;

    /**
     * Indicates whether or not to block extensions in the Edge browser.
     */
    private ?bool $edgeBlockExtensions;

    /**
     * Indicates whether or not to block InPrivate browsing on corporate networks, in the Edge browser.
     */
    private ?bool $edgeBlockInPrivateBrowsing;

    /**
     * Indicates whether or not to Block the user from using JavaScript.
     */
    private ?bool $edgeBlockJavaScript;

    /**
     * Block the collection of information by Microsoft for live tile creation when users pin a site to Start from Microsoft Edge.
     */
    private ?bool $edgeBlockLiveTileDataCollection;

    /**
     * Indicates whether or not to Block password manager.
     */
    private ?bool $edgeBlockPasswordManager;

    /**
     * Indicates whether or not to block popups.
     */
    private ?bool $edgeBlockPopups;

    /**
     * Indicates whether or not to block the user from using the search suggestions in the address bar.
     */
    private ?bool $edgeBlockSearchSuggestions;

    /**
     * Indicates whether or not to Block the user from sending the do not track header.
     */
    private ?bool $edgeBlockSendingDoNotTrackHeader;

    /**
     * Indicates whether or not to switch the intranet traffic from Edge to Internet Explorer. Note: the name of this property is misleading; the property is obsolete, use EdgeSendIntranetTrafficToInternetExplorer instead.
     */
    private ?bool $edgeBlockSendingIntranetTrafficToInternetExplorer;

    /**
     * Clear browsing data on exiting Microsoft Edge.
     */
    private ?bool $edgeClearBrowsingDataOnExit;

    /**
     */
    private ?string $edgeCookiePolicy;

    /**
     * Block the Microsoft web page that opens on the first use of Microsoft Edge. This policy allows enterprises, like those enrolled in zero emissions configurations, to block this page.
     */
    private ?bool $edgeDisableFirstRunPage;

    /**
     * Indicates the enterprise mode site list location. Could be a local file, local network or http location.
     */
    private ?string $edgeEnterpriseModeSiteListLocation;

    /**
     * The first run URL for when Edge browser is opened for the first time.
     */
    private ?string $edgeFirstRunUrl;

    /**
     * The list of URLs for homepages shodwn on MDM-enrolled devices on Edge browser.
     */
    private ?string $edgeHomepageUrls;

    /**
     * Indicates whether or not to Require the user to use the smart screen filter.
     */
    private ?bool $edgeRequireSmartScreen;

    /**
     * Allows IT admins to set a default search engine for MDM-Controlled devices. Users can override this and change their default search engine provided the AllowSearchEngineCustomization policy is not set.
     */
    private ?string $edgeSearchEngine;

    /**
     * Indicates whether or not to switch the intranet traffic from Edge to Internet Explorer.
     */
    private ?bool $edgeSendIntranetTrafficToInternetExplorer;

    /**
     * Enable favorites sync between Internet Explorer and Microsoft Edge. Additions, deletions, modifications and order changes to favorites are shared between browsers.
     */
    private ?bool $edgeSyncFavoritesWithInternetExplorer;

    /**
     * Endpoint for discovering cloud printers.
     */
    private ?string $enterpriseCloudPrintDiscoveryEndPoint;

    /**
     * Maximum number of printers that should be queried from a discovery endpoint. This is a mobile only setting. Valid values 1 to 65535
     */
    private ?float $enterpriseCloudPrintDiscoveryMaxLimit;

    /**
     * OAuth resource URI for printer discovery service as configured in Azure portal.
     */
    private ?string $enterpriseCloudPrintMopriaDiscoveryResourceIdentifier;

    /**
     * Authentication endpoint for acquiring OAuth tokens.
     */
    private ?string $enterpriseCloudPrintOAuthAuthority;

    /**
     * GUID of a client application authorized to retrieve OAuth tokens from the OAuth Authority.
     */
    private ?string $enterpriseCloudPrintOAuthClientIdentifier;

    /**
     * OAuth resource URI for print service as configured in the Azure portal.
     */
    private ?string $enterpriseCloudPrintResourceIdentifier;

    /**
     * Indicates whether or not to enable device discovery UX.
     */
    private ?bool $experienceBlockDeviceDiscovery;

    /**
     * Indicates whether or not to allow the error dialog from displaying if no SIM card is detected.
     */
    private ?bool $experienceBlockErrorDialogWhenNoSIM;

    /**
     * Indicates whether or not to enable task switching on the device.
     */
    private ?bool $experienceBlockTaskSwitcher;

    /**
     * Indicates whether or not to block DVR and broadcasting.
     */
    private ?bool $gameDvrBlocked;

    /**
     * Indicates whether or not to Block the user from using internet sharing.
     */
    private ?bool $internetSharingBlocked;

    /**
     * Indicates whether or not to Block the user from location services.
     */
    private ?bool $locationServicesBlocked;

    /**
     * Specify whether to show a user-configurable setting to control the screen timeout while on the lock screen of Windows 10 Mobile devices. If this policy is set to Allow, the value set by lockScreenTimeoutInSeconds is ignored.
     */
    private ?bool $lockScreenAllowTimeoutConfiguration;

    /**
     * Indicates whether or not to block action center notifications over lock screen.
     */
    private ?bool $lockScreenBlockActionCenterNotifications;

    /**
     * Indicates whether or not the user can interact with Cortana using speech while the system is locked.
     */
    private ?bool $lockScreenBlockCortana;

    /**
     * Indicates whether to allow toast notifications above the device lock screen.
     */
    private ?bool $lockScreenBlockToastNotifications;

    /**
     * Set the duration (in seconds) from the screen locking to the screen turning off for Windows 10 Mobile devices. Supported values are 11-1800. Valid values 11 to 1800
     */
    private ?float $lockScreenTimeoutInSeconds;

    /**
     * Disables the ability to quickly switch between users that are logged on simultaneously without logging off.
     */
    private ?bool $logonBlockFastUserSwitching;

    /**
     * Indicates whether or not to Block a Microsoft account.
     */
    private ?bool $microsoftAccountBlocked;

    /**
     * Indicates whether or not to Block Microsoft account settings sync.
     */
    private ?bool $microsoftAccountBlockSettingsSync;

    /**
     * If set, proxy settings will be applied to all processes and accounts in the device. Otherwise, it will be applied to the user account that’s enrolled into MDM.
     */
    private ?bool $networkProxyApplySettingsDeviceWide;

    /**
     * Address to the proxy auto-config (PAC) script you want to use.
     */
    private ?string $networkProxyAutomaticConfigurationUrl;

    /**
     * Disable automatic detection of settings. If enabled, the system will try to find the path to a proxy auto-config (PAC) script.
     */
    private ?bool $networkProxyDisableAutoDetect;

    /**
     * Specifies manual proxy server settings.
     */
    private ?string $networkProxyServer;

    /**
     * Indicates whether or not to Block the user from using near field communication.
     */
    private ?bool $nfcBlocked;

    /**
     * Gets or sets a value allowing IT admins to prevent apps and features from working with files on OneDrive.
     */
    private ?bool $oneDriveDisableFileSync;

    /**
     * Specify whether PINs or passwords such as ''1111'' or ''1234'' are allowed. For Windows 10 desktops, it also controls the use of picture passwords.
     */
    private ?bool $passwordBlockSimple;

    /**
     * The password expiration in days. Valid values 0 to 730
     */
    private ?float $passwordExpirationDays;

    /**
     * The number of character sets required in the password.
     */
    private ?float $passwordMinimumCharacterSetCount;

    /**
     * The minimum password length. Valid values 4 to 16
     */
    private ?float $passwordMinimumLength;

    /**
     * The minutes of inactivity before the screen times out.
     */
    private ?float $passwordMinutesOfInactivityBeforeScreenTimeout;

    /**
     * The number of previous passwords to prevent reuse of. Valid values 0 to 50
     */
    private ?float $passwordPreviousPasswordBlockCount;

    /**
     * Indicates whether or not to require the user to have a password.
     */
    private ?bool $passwordRequired;

    /**
     */
    private ?string $passwordRequiredType;

    /**
     * Indicates whether or not to require a password upon resuming from an idle state.
     */
    private ?bool $passwordRequireWhenResumeFromIdleState;

    /**
     * The number of sign in failures before factory reset. Valid values 0 to 999
     */
    private ?float $passwordSignInFailureCountBeforeFactoryReset;

    /**
     * A http or https Url to a jpg, jpeg or png image that needs to be downloaded and used as the Desktop Image or a file Url to a local image on the file system that needs to used as the Desktop Image.
     */
    private ?string $personalizationDesktopImageUrl;

    /**
     * A http or https Url to a jpg, jpeg or png image that neeeds to be downloaded and used as the Lock Screen Image or a file Url to a local image on the file system that needs to be used as the Lock Screen Image.
     */
    private ?string $personalizationLockScreenImageUrl;

    /**
     */
    private ?string $privacyAdvertisingId;

    /**
     * Indicates whether or not to allow the automatic acceptance of the pairing and privacy user consent dialog when launching apps.
     */
    private ?bool $privacyAutoAcceptPairingAndConsentPrompts;

    /**
     * Indicates whether or not to block the usage of cloud based speech services for Cortana, Dictation, or Store applications.
     */
    private ?bool $privacyBlockInputPersonalization;

    /**
     * Indicates whether or not to Block the user from reset protection mode.
     */
    private ?bool $resetProtectionModeBlocked;

    /**
     */
    private ?string $safeSearchFilter;

    /**
     * Indicates whether or not to Block the user from taking Screenshots.
     */
    private ?bool $screenCaptureBlocked;

    /**
     * Specifies if search can use diacritics.
     */
    private ?bool $searchBlockDiacritics;

    /**
     * Specifies whether to use automatic language detection when indexing content and properties.
     */
    private ?bool $searchDisableAutoLanguageDetection;

    /**
     * Indicates whether or not to disable the search indexer backoff feature.
     */
    private ?bool $searchDisableIndexerBackoff;

    /**
     * Indicates whether or not to block indexing of WIP-protected items to prevent them from appearing in search results for Cortana or Explorer.
     */
    private ?bool $searchDisableIndexingEncryptedItems;

    /**
     * Indicates whether or not to allow users to add locations on removable drives to libraries and to be indexed.
     */
    private ?bool $searchDisableIndexingRemovableDrive;

    /**
     * Specifies minimum amount of hard drive space on the same drive as the index location before indexing stops.
     */
    private ?bool $searchEnableAutomaticIndexSizeManangement;

    /**
     * Indicates whether or not to block remote queries of this computer’s index.
     */
    private ?bool $searchEnableRemoteQueries;

    /**
     * Indicates whether or not to block access to Accounts in Settings app.
     */
    private ?bool $settingsBlockAccountsPage;

    /**
     * Indicates whether or not to block the user from installing provisioning packages.
     */
    private ?bool $settingsBlockAddProvisioningPackage;

    /**
     * Indicates whether or not to block access to Apps in Settings app.
     */
    private ?bool $settingsBlockAppsPage;

    /**
     * Indicates whether or not to block the user from changing the language settings.
     */
    private ?bool $settingsBlockChangeLanguage;

    /**
     * Indicates whether or not to block the user from changing power and sleep settings.
     */
    private ?bool $settingsBlockChangePowerSleep;

    /**
     * Indicates whether or not to block the user from changing the region settings.
     */
    private ?bool $settingsBlockChangeRegion;

    /**
     * Indicates whether or not to block the user from changing date and time settings.
     */
    private ?bool $settingsBlockChangeSystemTime;

    /**
     * Indicates whether or not to block access to Devices in Settings app.
     */
    private ?bool $settingsBlockDevicesPage;

    /**
     * Indicates whether or not to block access to Ease of Access in Settings app.
     */
    private ?bool $settingsBlockEaseOfAccessPage;

    /**
     * Indicates whether or not to block the user from editing the device name.
     */
    private ?bool $settingsBlockEditDeviceName;

    /**
     * Indicates whether or not to block access to Gaming in Settings app.
     */
    private ?bool $settingsBlockGamingPage;

    /**
     * Indicates whether or not to block access to Network & Internet in Settings app.
     */
    private ?bool $settingsBlockNetworkInternetPage;

    /**
     * Indicates whether or not to block access to Personalization in Settings app.
     */
    private ?bool $settingsBlockPersonalizationPage;

    /**
     * Indicates whether or not to block access to Privacy in Settings app.
     */
    private ?bool $settingsBlockPrivacyPage;

    /**
     * Indicates whether or not to block the runtime configuration agent from removing provisioning packages.
     */
    private ?bool $settingsBlockRemoveProvisioningPackage;

    /**
     * Indicates whether or not to block access to Settings app.
     */
    private ?bool $settingsBlockSettingsApp;

    /**
     * Indicates whether or not to block access to System in Settings app.
     */
    private ?bool $settingsBlockSystemPage;

    /**
     * Indicates whether or not to block access to Time & Language in Settings app.
     */
    private ?bool $settingsBlockTimeLanguagePage;

    /**
     * Indicates whether or not to block access to Update & Security in Settings app.
     */
    private ?bool $settingsBlockUpdateSecurityPage;

    /**
     * Indicates whether or not to block multiple users of the same app to share data.
     */
    private ?bool $sharedUserAppDataAllowed;

    /**
     * Indicates whether or not users can override SmartScreen Filter warnings about potentially malicious websites.
     */
    private ?bool $smartScreenBlockPromptOverride;

    /**
     * Indicates whether or not users can override the SmartScreen Filter warnings about downloading unverified files
     */
    private ?bool $smartScreenBlockPromptOverrideForFiles;

    /**
     * This property will be deprecated in July 2019 and will be replaced by property SmartScreenAppInstallControl. Allows IT Admins to control whether users are allowed to install apps from places other than the Store.
     */
    private ?bool $smartScreenEnableAppInstallControl;

    /**
     * Indicates whether or not to block the user from unpinning apps from taskbar.
     */
    private ?bool $startBlockUnpinningAppsFromTaskbar;

    /**
     */
    private ?string $startMenuAppListVisibility;

    /**
     * Enabling this policy hides the change account setting from appearing in the user tile in the start menu.
     */
    private ?bool $startMenuHideChangeAccountSettings;

    /**
     * Enabling this policy hides the most used apps from appearing on the start menu and disables the corresponding toggle in the Settings app.
     */
    private ?bool $startMenuHideFrequentlyUsedApps;

    /**
     * Enabling this policy hides hibernate from appearing in the power button in the start menu.
     */
    private ?bool $startMenuHideHibernate;

    /**
     * Enabling this policy hides lock from appearing in the user tile in the start menu.
     */
    private ?bool $startMenuHideLock;

    /**
     * Enabling this policy hides the power button from appearing in the start menu.
     */
    private ?bool $startMenuHidePowerButton;

    /**
     * Enabling this policy hides recent jump lists from appearing on the start menu/taskbar and disables the corresponding toggle in the Settings app.
     */
    private ?bool $startMenuHideRecentJumpLists;

    /**
     * Enabling this policy hides recently added apps from appearing on the start menu and disables the corresponding toggle in the Settings app.
     */
    private ?bool $startMenuHideRecentlyAddedApps;

    /**
     * Enabling this policy hides 'Restart/Update and Restart' from appearing in the power button in the start menu.
     */
    private ?bool $startMenuHideRestartOptions;

    /**
     * Enabling this policy hides shut down/update and shut down from appearing in the power button in the start menu.
     */
    private ?bool $startMenuHideShutDown;

    /**
     * Enabling this policy hides sign out from appearing in the user tile in the start menu.
     */
    private ?bool $startMenuHideSignOut;

    /**
     * Enabling this policy hides sleep from appearing in the power button in the start menu.
     */
    private ?bool $startMenuHideSleep;

    /**
     * Enabling this policy hides switch account from appearing in the user tile in the start menu.
     */
    private ?bool $startMenuHideSwitchAccount;

    /**
     * Enabling this policy hides the user tile from appearing in the start menu.
     */
    private ?bool $startMenuHideUserTile;

    /**
     * This policy setting allows you to import Edge assets to be used with startMenuLayoutXml policy. Start layout can contain secondary tile from Edge app which looks for Edge local asset file. Edge local asset would not exist and cause Edge secondary tile to appear empty in this case. This policy only gets applied when startMenuLayoutXml policy is modified. The value should be a UTF-8 Base64 encoded byte array.
     */
    private ?string $startMenuLayoutEdgeAssetsXml;

    /**
     * Allows admins to override the default Start menu layout and prevents the user from changing it. The layout is modified by specifying an XML file based on a layout modification schema. XML needs to be in a UTF8 encoded byte array format.
     */
    private ?string $startMenuLayoutXml;

    /**
     */
    private ?string $startMenuMode;

    /**
     */
    private ?string $startMenuPinnedFolderDocuments;

    /**
     */
    private ?string $startMenuPinnedFolderDownloads;

    /**
     */
    private ?string $startMenuPinnedFolderFileExplorer;

    /**
     */
    private ?string $startMenuPinnedFolderHomeGroup;

    /**
     */
    private ?string $startMenuPinnedFolderMusic;

    /**
     */
    private ?string $startMenuPinnedFolderNetwork;

    /**
     */
    private ?string $startMenuPinnedFolderPersonalFolder;

    /**
     */
    private ?string $startMenuPinnedFolderPictures;

    /**
     */
    private ?string $startMenuPinnedFolderSettings;

    /**
     */
    private ?string $startMenuPinnedFolderVideos;

    /**
     * Indicates whether or not to Block the user from using removable storage.
     */
    private ?bool $storageBlockRemovableStorage;

    /**
     * Indicating whether or not to require encryption on a mobile device.
     */
    private ?bool $storageRequireMobileDeviceEncryption;

    /**
     * Indicates whether application data is restricted to the system drive.
     */
    private ?bool $storageRestrictAppDataToSystemVolume;

    /**
     * Indicates whether the installation of applications is restricted to the system drive.
     */
    private ?bool $storageRestrictAppInstallToSystemVolume;

    /**
     * Whether the device is required to connect to the network.
     */
    private ?bool $tenantLockdownRequireNetworkDuringOutOfBoxExperience;

    /**
     * Indicates whether or not to Block the user from USB connection.
     */
    private ?bool $usbBlocked;

    /**
     * Indicates whether or not to Block the user from voice recording.
     */
    private ?bool $voiceRecordingBlocked;

    /**
     * Indicates whether or not user's localhost IP address is displayed while making phone calls using the WebRTC
     */
    private ?bool $webRtcBlockLocalhostIpAddress;

    /**
     * Indicating whether or not to block automatically connecting to Wi-Fi hotspots. Has no impact if Wi-Fi is blocked.
     */
    private ?bool $wiFiBlockAutomaticConnectHotspots;

    /**
     * Indicates whether or not to Block the user from using Wi-Fi.
     */
    private ?bool $wiFiBlocked;

    /**
     * Indicates whether or not to Block the user from using Wi-Fi manual configuration.
     */
    private ?bool $wiFiBlockManualConfiguration;

    /**
     * Specify how often devices scan for Wi-Fi networks. Supported values are 1-500, where 100 = default, and 500 = low frequency. Valid values 1 to 500
     */
    private ?float $wiFiScanInterval;

    /**
     * Allows IT admins to block experiences that are typically for consumers only, such as Start suggestions, Membership notifications, Post-OOBE app install and redirect tiles.
     */
    private ?bool $windowsSpotlightBlockConsumerSpecificFeatures;

    /**
     * Allows IT admins to turn off all Windows Spotlight features
     */
    private ?bool $windowsSpotlightBlocked;

    /**
     * Block suggestions from Microsoft that show after each OS clean install, upgrade or in an on-going basis to introduce users to what is new or changed
     */
    private ?bool $windowsSpotlightBlockOnActionCenter;

    /**
     * Block personalized content in Windows spotlight based on user’s device usage.
     */
    private ?bool $windowsSpotlightBlockTailoredExperiences;

    /**
     * Block third party content delivered via Windows Spotlight
     */
    private ?bool $windowsSpotlightBlockThirdPartyNotifications;

    /**
     * Block Windows Spotlight Windows welcome experience
     */
    private ?bool $windowsSpotlightBlockWelcomeExperience;

    /**
     * Allows IT admins to turn off the popup of Windows Tips.
     */
    private ?bool $windowsSpotlightBlockWindowsTips;

    /**
     */
    private ?string $windowsSpotlightConfigureOnLockScreen;

    /**
     * Indicates whether or not to block automatic update of apps from Windows Store.
     */
    private ?bool $windowsStoreBlockAutoUpdate;

    /**
     * Indicates whether or not to Block the user from using the Windows store.
     */
    private ?bool $windowsStoreBlocked;

    /**
     * Indicates whether or not to enable Private Store Only.
     */
    private ?bool $windowsStoreEnablePrivateStoreOnly;

    /**
     * Indicates whether or not to allow other devices from discovering this PC for projection.
     */
    private ?bool $wirelessDisplayBlockProjectionToThisDevice;

    /**
     * Indicates whether or not to allow user input from wireless display receiver.
     */
    private ?bool $wirelessDisplayBlockUserInputFromReceiver;

    /**
     * This topic provides descriptions of the declared methods, properties and relationships exposed by the windows10GeneralConfiguration resource.
     */
    private ?string $wirelessDisplayRequirePinForPairing;

    public function getAccountsBlockAddingNonMicrosoftAccountEmail(): ?bool
    {
        return $this->accountsBlockAddingNonMicrosoftAccountEmail;
    }

    public function setAccountsBlockAddingNonMicrosoftAccountEmail(?bool $accountsBlockAddingNonMicrosoftAccountEmail): self
    {
        $this->accountsBlockAddingNonMicrosoftAccountEmail = $accountsBlockAddingNonMicrosoftAccountEmail;
        return $this;
    }

    public function getAntiTheftModeBlocked(): ?bool
    {
        return $this->antiTheftModeBlocked;
    }

    public function setAntiTheftModeBlocked(?bool $antiTheftModeBlocked): self
    {
        $this->antiTheftModeBlocked = $antiTheftModeBlocked;
        return $this;
    }

    public function getAppsAllowTrustedAppsSideloading(): ?string
    {
        return $this->appsAllowTrustedAppsSideloading;
    }

    public function setAppsAllowTrustedAppsSideloading(?string $appsAllowTrustedAppsSideloading): self
    {
        $this->appsAllowTrustedAppsSideloading = $appsAllowTrustedAppsSideloading;
        return $this;
    }

    public function getAppsBlockWindowsStoreOriginatedApps(): ?bool
    {
        return $this->appsBlockWindowsStoreOriginatedApps;
    }

    public function setAppsBlockWindowsStoreOriginatedApps(?bool $appsBlockWindowsStoreOriginatedApps): self
    {
        $this->appsBlockWindowsStoreOriginatedApps = $appsBlockWindowsStoreOriginatedApps;
        return $this;
    }

    public function getBluetoothAllowedServices(): ?string
    {
        return $this->bluetoothAllowedServices;
    }

    public function setBluetoothAllowedServices(?string $bluetoothAllowedServices): self
    {
        $this->bluetoothAllowedServices = $bluetoothAllowedServices;
        return $this;
    }

    public function getBluetoothBlockAdvertising(): ?bool
    {
        return $this->bluetoothBlockAdvertising;
    }

    public function setBluetoothBlockAdvertising(?bool $bluetoothBlockAdvertising): self
    {
        $this->bluetoothBlockAdvertising = $bluetoothBlockAdvertising;
        return $this;
    }

    public function getBluetoothBlockDiscoverableMode(): ?bool
    {
        return $this->bluetoothBlockDiscoverableMode;
    }

    public function setBluetoothBlockDiscoverableMode(?bool $bluetoothBlockDiscoverableMode): self
    {
        $this->bluetoothBlockDiscoverableMode = $bluetoothBlockDiscoverableMode;
        return $this;
    }

    public function getBluetoothBlocked(): ?bool
    {
        return $this->bluetoothBlocked;
    }

    public function setBluetoothBlocked(?bool $bluetoothBlocked): self
    {
        $this->bluetoothBlocked = $bluetoothBlocked;
        return $this;
    }

    public function getBluetoothBlockPrePairing(): ?bool
    {
        return $this->bluetoothBlockPrePairing;
    }

    public function setBluetoothBlockPrePairing(?bool $bluetoothBlockPrePairing): self
    {
        $this->bluetoothBlockPrePairing = $bluetoothBlockPrePairing;
        return $this;
    }

    public function getCameraBlocked(): ?bool
    {
        return $this->cameraBlocked;
    }

    public function setCameraBlocked(?bool $cameraBlocked): self
    {
        $this->cameraBlocked = $cameraBlocked;
        return $this;
    }

    public function getCellularBlockDataWhenRoaming(): ?bool
    {
        return $this->cellularBlockDataWhenRoaming;
    }

    public function setCellularBlockDataWhenRoaming(?bool $cellularBlockDataWhenRoaming): self
    {
        $this->cellularBlockDataWhenRoaming = $cellularBlockDataWhenRoaming;
        return $this;
    }

    public function getCellularBlockVpn(): ?bool
    {
        return $this->cellularBlockVpn;
    }

    public function setCellularBlockVpn(?bool $cellularBlockVpn): self
    {
        $this->cellularBlockVpn = $cellularBlockVpn;
        return $this;
    }

    public function getCellularBlockVpnWhenRoaming(): ?bool
    {
        return $this->cellularBlockVpnWhenRoaming;
    }

    public function setCellularBlockVpnWhenRoaming(?bool $cellularBlockVpnWhenRoaming): self
    {
        $this->cellularBlockVpnWhenRoaming = $cellularBlockVpnWhenRoaming;
        return $this;
    }

    public function getCertificatesBlockManualRootCertificateInstallation(): ?bool
    {
        return $this->certificatesBlockManualRootCertificateInstallation;
    }

    public function setCertificatesBlockManualRootCertificateInstallation(?bool $certificatesBlockManualRootCertificateInstallation): self
    {
        $this->certificatesBlockManualRootCertificateInstallation = $certificatesBlockManualRootCertificateInstallation;
        return $this;
    }

    public function getConnectedDevicesServiceBlocked(): ?bool
    {
        return $this->connectedDevicesServiceBlocked;
    }

    public function setConnectedDevicesServiceBlocked(?bool $connectedDevicesServiceBlocked): self
    {
        $this->connectedDevicesServiceBlocked = $connectedDevicesServiceBlocked;
        return $this;
    }

    public function getCopyPasteBlocked(): ?bool
    {
        return $this->copyPasteBlocked;
    }

    public function setCopyPasteBlocked(?bool $copyPasteBlocked): self
    {
        $this->copyPasteBlocked = $copyPasteBlocked;
        return $this;
    }

    public function getCortanaBlocked(): ?bool
    {
        return $this->cortanaBlocked;
    }

    public function setCortanaBlocked(?bool $cortanaBlocked): self
    {
        $this->cortanaBlocked = $cortanaBlocked;
        return $this;
    }

    public function getDefenderBlockEndUserAccess(): ?bool
    {
        return $this->defenderBlockEndUserAccess;
    }

    public function setDefenderBlockEndUserAccess(?bool $defenderBlockEndUserAccess): self
    {
        $this->defenderBlockEndUserAccess = $defenderBlockEndUserAccess;
        return $this;
    }

    public function getDefenderCloudBlockLevel(): ?string
    {
        return $this->defenderCloudBlockLevel;
    }

    public function setDefenderCloudBlockLevel(?string $defenderCloudBlockLevel): self
    {
        $this->defenderCloudBlockLevel = $defenderCloudBlockLevel;
        return $this;
    }

    public function getDefenderDaysBeforeDeletingQuarantinedMalware(): ?float
    {
        return $this->defenderDaysBeforeDeletingQuarantinedMalware;
    }

    public function setDefenderDaysBeforeDeletingQuarantinedMalware(?float $defenderDaysBeforeDeletingQuarantinedMalware): self
    {
        $this->defenderDaysBeforeDeletingQuarantinedMalware = $defenderDaysBeforeDeletingQuarantinedMalware;
        return $this;
    }

    public function getDefenderDetectedMalwareActions(): ?string
    {
        return $this->defenderDetectedMalwareActions;
    }

    public function setDefenderDetectedMalwareActions(?string $defenderDetectedMalwareActions): self
    {
        $this->defenderDetectedMalwareActions = $defenderDetectedMalwareActions;
        return $this;
    }

    public function getDefenderFileExtensionsToExclude(): ?string
    {
        return $this->defenderFileExtensionsToExclude;
    }

    public function setDefenderFileExtensionsToExclude(?string $defenderFileExtensionsToExclude): self
    {
        $this->defenderFileExtensionsToExclude = $defenderFileExtensionsToExclude;
        return $this;
    }

    public function getDefenderFilesAndFoldersToExclude(): ?string
    {
        return $this->defenderFilesAndFoldersToExclude;
    }

    public function setDefenderFilesAndFoldersToExclude(?string $defenderFilesAndFoldersToExclude): self
    {
        $this->defenderFilesAndFoldersToExclude = $defenderFilesAndFoldersToExclude;
        return $this;
    }

    public function getDefenderMonitorFileActivity(): ?string
    {
        return $this->defenderMonitorFileActivity;
    }

    public function setDefenderMonitorFileActivity(?string $defenderMonitorFileActivity): self
    {
        $this->defenderMonitorFileActivity = $defenderMonitorFileActivity;
        return $this;
    }

    public function getDefenderProcessesToExclude(): ?string
    {
        return $this->defenderProcessesToExclude;
    }

    public function setDefenderProcessesToExclude(?string $defenderProcessesToExclude): self
    {
        $this->defenderProcessesToExclude = $defenderProcessesToExclude;
        return $this;
    }

    public function getDefenderPromptForSampleSubmission(): ?string
    {
        return $this->defenderPromptForSampleSubmission;
    }

    public function setDefenderPromptForSampleSubmission(?string $defenderPromptForSampleSubmission): self
    {
        $this->defenderPromptForSampleSubmission = $defenderPromptForSampleSubmission;
        return $this;
    }

    public function getDefenderRequireBehaviorMonitoring(): ?bool
    {
        return $this->defenderRequireBehaviorMonitoring;
    }

    public function setDefenderRequireBehaviorMonitoring(?bool $defenderRequireBehaviorMonitoring): self
    {
        $this->defenderRequireBehaviorMonitoring = $defenderRequireBehaviorMonitoring;
        return $this;
    }

    public function getDefenderRequireCloudProtection(): ?bool
    {
        return $this->defenderRequireCloudProtection;
    }

    public function setDefenderRequireCloudProtection(?bool $defenderRequireCloudProtection): self
    {
        $this->defenderRequireCloudProtection = $defenderRequireCloudProtection;
        return $this;
    }

    public function getDefenderRequireNetworkInspectionSystem(): ?bool
    {
        return $this->defenderRequireNetworkInspectionSystem;
    }

    public function setDefenderRequireNetworkInspectionSystem(?bool $defenderRequireNetworkInspectionSystem): self
    {
        $this->defenderRequireNetworkInspectionSystem = $defenderRequireNetworkInspectionSystem;
        return $this;
    }

    public function getDefenderRequireRealTimeMonitoring(): ?bool
    {
        return $this->defenderRequireRealTimeMonitoring;
    }

    public function setDefenderRequireRealTimeMonitoring(?bool $defenderRequireRealTimeMonitoring): self
    {
        $this->defenderRequireRealTimeMonitoring = $defenderRequireRealTimeMonitoring;
        return $this;
    }

    public function getDefenderScanArchiveFiles(): ?bool
    {
        return $this->defenderScanArchiveFiles;
    }

    public function setDefenderScanArchiveFiles(?bool $defenderScanArchiveFiles): self
    {
        $this->defenderScanArchiveFiles = $defenderScanArchiveFiles;
        return $this;
    }

    public function getDefenderScanDownloads(): ?bool
    {
        return $this->defenderScanDownloads;
    }

    public function setDefenderScanDownloads(?bool $defenderScanDownloads): self
    {
        $this->defenderScanDownloads = $defenderScanDownloads;
        return $this;
    }

    public function getDefenderScanIncomingMail(): ?bool
    {
        return $this->defenderScanIncomingMail;
    }

    public function setDefenderScanIncomingMail(?bool $defenderScanIncomingMail): self
    {
        $this->defenderScanIncomingMail = $defenderScanIncomingMail;
        return $this;
    }

    public function getDefenderScanMappedNetworkDrivesDuringFullScan(): ?bool
    {
        return $this->defenderScanMappedNetworkDrivesDuringFullScan;
    }

    public function setDefenderScanMappedNetworkDrivesDuringFullScan(?bool $defenderScanMappedNetworkDrivesDuringFullScan): self
    {
        $this->defenderScanMappedNetworkDrivesDuringFullScan = $defenderScanMappedNetworkDrivesDuringFullScan;
        return $this;
    }

    public function getDefenderScanMaxCpu(): ?float
    {
        return $this->defenderScanMaxCpu;
    }

    public function setDefenderScanMaxCpu(?float $defenderScanMaxCpu): self
    {
        $this->defenderScanMaxCpu = $defenderScanMaxCpu;
        return $this;
    }

    public function getDefenderScanNetworkFiles(): ?bool
    {
        return $this->defenderScanNetworkFiles;
    }

    public function setDefenderScanNetworkFiles(?bool $defenderScanNetworkFiles): self
    {
        $this->defenderScanNetworkFiles = $defenderScanNetworkFiles;
        return $this;
    }

    public function getDefenderScanRemovableDrivesDuringFullScan(): ?bool
    {
        return $this->defenderScanRemovableDrivesDuringFullScan;
    }

    public function setDefenderScanRemovableDrivesDuringFullScan(?bool $defenderScanRemovableDrivesDuringFullScan): self
    {
        $this->defenderScanRemovableDrivesDuringFullScan = $defenderScanRemovableDrivesDuringFullScan;
        return $this;
    }

    public function getDefenderScanScriptsLoadedInInternetExplorer(): ?bool
    {
        return $this->defenderScanScriptsLoadedInInternetExplorer;
    }

    public function setDefenderScanScriptsLoadedInInternetExplorer(?bool $defenderScanScriptsLoadedInInternetExplorer): self
    {
        $this->defenderScanScriptsLoadedInInternetExplorer = $defenderScanScriptsLoadedInInternetExplorer;
        return $this;
    }

    public function getDefenderScanType(): ?string
    {
        return $this->defenderScanType;
    }

    public function setDefenderScanType(?string $defenderScanType): self
    {
        $this->defenderScanType = $defenderScanType;
        return $this;
    }

    public function getDefenderScheduledQuickScanTime(): ?string
    {
        return $this->defenderScheduledQuickScanTime;
    }

    public function setDefenderScheduledQuickScanTime(?string $defenderScheduledQuickScanTime): self
    {
        $this->defenderScheduledQuickScanTime = $defenderScheduledQuickScanTime;
        return $this;
    }

    public function getDefenderScheduledScanTime(): ?string
    {
        return $this->defenderScheduledScanTime;
    }

    public function setDefenderScheduledScanTime(?string $defenderScheduledScanTime): self
    {
        $this->defenderScheduledScanTime = $defenderScheduledScanTime;
        return $this;
    }

    public function getDefenderSignatureUpdateIntervalInHours(): ?float
    {
        return $this->defenderSignatureUpdateIntervalInHours;
    }

    public function setDefenderSignatureUpdateIntervalInHours(?float $defenderSignatureUpdateIntervalInHours): self
    {
        $this->defenderSignatureUpdateIntervalInHours = $defenderSignatureUpdateIntervalInHours;
        return $this;
    }

    public function getDefenderSystemScanSchedule(): ?string
    {
        return $this->defenderSystemScanSchedule;
    }

    public function setDefenderSystemScanSchedule(?string $defenderSystemScanSchedule): self
    {
        $this->defenderSystemScanSchedule = $defenderSystemScanSchedule;
        return $this;
    }

    public function getDeveloperUnlockSetting(): ?string
    {
        return $this->developerUnlockSetting;
    }

    public function setDeveloperUnlockSetting(?string $developerUnlockSetting): self
    {
        $this->developerUnlockSetting = $developerUnlockSetting;
        return $this;
    }

    public function getDeviceManagementBlockFactoryResetOnMobile(): ?bool
    {
        return $this->deviceManagementBlockFactoryResetOnMobile;
    }

    public function setDeviceManagementBlockFactoryResetOnMobile(?bool $deviceManagementBlockFactoryResetOnMobile): self
    {
        $this->deviceManagementBlockFactoryResetOnMobile = $deviceManagementBlockFactoryResetOnMobile;
        return $this;
    }

    public function getDeviceManagementBlockManualUnenroll(): ?bool
    {
        return $this->deviceManagementBlockManualUnenroll;
    }

    public function setDeviceManagementBlockManualUnenroll(?bool $deviceManagementBlockManualUnenroll): self
    {
        $this->deviceManagementBlockManualUnenroll = $deviceManagementBlockManualUnenroll;
        return $this;
    }

    public function getDiagnosticsDataSubmissionMode(): ?string
    {
        return $this->diagnosticsDataSubmissionMode;
    }

    public function setDiagnosticsDataSubmissionMode(?string $diagnosticsDataSubmissionMode): self
    {
        $this->diagnosticsDataSubmissionMode = $diagnosticsDataSubmissionMode;
        return $this;
    }

    public function getEdgeAllowStartPagesModification(): ?bool
    {
        return $this->edgeAllowStartPagesModification;
    }

    public function setEdgeAllowStartPagesModification(?bool $edgeAllowStartPagesModification): self
    {
        $this->edgeAllowStartPagesModification = $edgeAllowStartPagesModification;
        return $this;
    }

    public function getEdgeBlockAccessToAboutFlags(): ?bool
    {
        return $this->edgeBlockAccessToAboutFlags;
    }

    public function setEdgeBlockAccessToAboutFlags(?bool $edgeBlockAccessToAboutFlags): self
    {
        $this->edgeBlockAccessToAboutFlags = $edgeBlockAccessToAboutFlags;
        return $this;
    }

    public function getEdgeBlockAddressBarDropdown(): ?bool
    {
        return $this->edgeBlockAddressBarDropdown;
    }

    public function setEdgeBlockAddressBarDropdown(?bool $edgeBlockAddressBarDropdown): self
    {
        $this->edgeBlockAddressBarDropdown = $edgeBlockAddressBarDropdown;
        return $this;
    }

    public function getEdgeBlockAutofill(): ?bool
    {
        return $this->edgeBlockAutofill;
    }

    public function setEdgeBlockAutofill(?bool $edgeBlockAutofill): self
    {
        $this->edgeBlockAutofill = $edgeBlockAutofill;
        return $this;
    }

    public function getEdgeBlockCompatibilityList(): ?bool
    {
        return $this->edgeBlockCompatibilityList;
    }

    public function setEdgeBlockCompatibilityList(?bool $edgeBlockCompatibilityList): self
    {
        $this->edgeBlockCompatibilityList = $edgeBlockCompatibilityList;
        return $this;
    }

    public function getEdgeBlockDeveloperTools(): ?bool
    {
        return $this->edgeBlockDeveloperTools;
    }

    public function setEdgeBlockDeveloperTools(?bool $edgeBlockDeveloperTools): self
    {
        $this->edgeBlockDeveloperTools = $edgeBlockDeveloperTools;
        return $this;
    }

    public function getEdgeBlocked(): ?bool
    {
        return $this->edgeBlocked;
    }

    public function setEdgeBlocked(?bool $edgeBlocked): self
    {
        $this->edgeBlocked = $edgeBlocked;
        return $this;
    }

    public function getEdgeBlockExtensions(): ?bool
    {
        return $this->edgeBlockExtensions;
    }

    public function setEdgeBlockExtensions(?bool $edgeBlockExtensions): self
    {
        $this->edgeBlockExtensions = $edgeBlockExtensions;
        return $this;
    }

    public function getEdgeBlockInPrivateBrowsing(): ?bool
    {
        return $this->edgeBlockInPrivateBrowsing;
    }

    public function setEdgeBlockInPrivateBrowsing(?bool $edgeBlockInPrivateBrowsing): self
    {
        $this->edgeBlockInPrivateBrowsing = $edgeBlockInPrivateBrowsing;
        return $this;
    }

    public function getEdgeBlockJavaScript(): ?bool
    {
        return $this->edgeBlockJavaScript;
    }

    public function setEdgeBlockJavaScript(?bool $edgeBlockJavaScript): self
    {
        $this->edgeBlockJavaScript = $edgeBlockJavaScript;
        return $this;
    }

    public function getEdgeBlockLiveTileDataCollection(): ?bool
    {
        return $this->edgeBlockLiveTileDataCollection;
    }

    public function setEdgeBlockLiveTileDataCollection(?bool $edgeBlockLiveTileDataCollection): self
    {
        $this->edgeBlockLiveTileDataCollection = $edgeBlockLiveTileDataCollection;
        return $this;
    }

    public function getEdgeBlockPasswordManager(): ?bool
    {
        return $this->edgeBlockPasswordManager;
    }

    public function setEdgeBlockPasswordManager(?bool $edgeBlockPasswordManager): self
    {
        $this->edgeBlockPasswordManager = $edgeBlockPasswordManager;
        return $this;
    }

    public function getEdgeBlockPopups(): ?bool
    {
        return $this->edgeBlockPopups;
    }

    public function setEdgeBlockPopups(?bool $edgeBlockPopups): self
    {
        $this->edgeBlockPopups = $edgeBlockPopups;
        return $this;
    }

    public function getEdgeBlockSearchSuggestions(): ?bool
    {
        return $this->edgeBlockSearchSuggestions;
    }

    public function setEdgeBlockSearchSuggestions(?bool $edgeBlockSearchSuggestions): self
    {
        $this->edgeBlockSearchSuggestions = $edgeBlockSearchSuggestions;
        return $this;
    }

    public function getEdgeBlockSendingDoNotTrackHeader(): ?bool
    {
        return $this->edgeBlockSendingDoNotTrackHeader;
    }

    public function setEdgeBlockSendingDoNotTrackHeader(?bool $edgeBlockSendingDoNotTrackHeader): self
    {
        $this->edgeBlockSendingDoNotTrackHeader = $edgeBlockSendingDoNotTrackHeader;
        return $this;
    }

    public function getEdgeBlockSendingIntranetTrafficToInternetExplorer(): ?bool
    {
        return $this->edgeBlockSendingIntranetTrafficToInternetExplorer;
    }

    public function setEdgeBlockSendingIntranetTrafficToInternetExplorer(?bool $edgeBlockSendingIntranetTrafficToInternetExplorer): self
    {
        $this->edgeBlockSendingIntranetTrafficToInternetExplorer = $edgeBlockSendingIntranetTrafficToInternetExplorer;
        return $this;
    }

    public function getEdgeClearBrowsingDataOnExit(): ?bool
    {
        return $this->edgeClearBrowsingDataOnExit;
    }

    public function setEdgeClearBrowsingDataOnExit(?bool $edgeClearBrowsingDataOnExit): self
    {
        $this->edgeClearBrowsingDataOnExit = $edgeClearBrowsingDataOnExit;
        return $this;
    }

    public function getEdgeCookiePolicy(): ?string
    {
        return $this->edgeCookiePolicy;
    }

    public function setEdgeCookiePolicy(?string $edgeCookiePolicy): self
    {
        $this->edgeCookiePolicy = $edgeCookiePolicy;
        return $this;
    }

    public function getEdgeDisableFirstRunPage(): ?bool
    {
        return $this->edgeDisableFirstRunPage;
    }

    public function setEdgeDisableFirstRunPage(?bool $edgeDisableFirstRunPage): self
    {
        $this->edgeDisableFirstRunPage = $edgeDisableFirstRunPage;
        return $this;
    }

    public function getEdgeEnterpriseModeSiteListLocation(): ?string
    {
        return $this->edgeEnterpriseModeSiteListLocation;
    }

    public function setEdgeEnterpriseModeSiteListLocation(?string $edgeEnterpriseModeSiteListLocation): self
    {
        $this->edgeEnterpriseModeSiteListLocation = $edgeEnterpriseModeSiteListLocation;
        return $this;
    }

    public function getEdgeFirstRunUrl(): ?string
    {
        return $this->edgeFirstRunUrl;
    }

    public function setEdgeFirstRunUrl(?string $edgeFirstRunUrl): self
    {
        $this->edgeFirstRunUrl = $edgeFirstRunUrl;
        return $this;
    }

    public function getEdgeHomepageUrls(): ?string
    {
        return $this->edgeHomepageUrls;
    }

    public function setEdgeHomepageUrls(?string $edgeHomepageUrls): self
    {
        $this->edgeHomepageUrls = $edgeHomepageUrls;
        return $this;
    }

    public function getEdgeRequireSmartScreen(): ?bool
    {
        return $this->edgeRequireSmartScreen;
    }

    public function setEdgeRequireSmartScreen(?bool $edgeRequireSmartScreen): self
    {
        $this->edgeRequireSmartScreen = $edgeRequireSmartScreen;
        return $this;
    }

    public function getEdgeSearchEngine(): ?string
    {
        return $this->edgeSearchEngine;
    }

    public function setEdgeSearchEngine(?string $edgeSearchEngine): self
    {
        $this->edgeSearchEngine = $edgeSearchEngine;
        return $this;
    }

    public function getEdgeSendIntranetTrafficToInternetExplorer(): ?bool
    {
        return $this->edgeSendIntranetTrafficToInternetExplorer;
    }

    public function setEdgeSendIntranetTrafficToInternetExplorer(?bool $edgeSendIntranetTrafficToInternetExplorer): self
    {
        $this->edgeSendIntranetTrafficToInternetExplorer = $edgeSendIntranetTrafficToInternetExplorer;
        return $this;
    }

    public function getEdgeSyncFavoritesWithInternetExplorer(): ?bool
    {
        return $this->edgeSyncFavoritesWithInternetExplorer;
    }

    public function setEdgeSyncFavoritesWithInternetExplorer(?bool $edgeSyncFavoritesWithInternetExplorer): self
    {
        $this->edgeSyncFavoritesWithInternetExplorer = $edgeSyncFavoritesWithInternetExplorer;
        return $this;
    }

    public function getEnterpriseCloudPrintDiscoveryEndPoint(): ?string
    {
        return $this->enterpriseCloudPrintDiscoveryEndPoint;
    }

    public function setEnterpriseCloudPrintDiscoveryEndPoint(?string $enterpriseCloudPrintDiscoveryEndPoint): self
    {
        $this->enterpriseCloudPrintDiscoveryEndPoint = $enterpriseCloudPrintDiscoveryEndPoint;
        return $this;
    }

    public function getEnterpriseCloudPrintDiscoveryMaxLimit(): ?float
    {
        return $this->enterpriseCloudPrintDiscoveryMaxLimit;
    }

    public function setEnterpriseCloudPrintDiscoveryMaxLimit(?float $enterpriseCloudPrintDiscoveryMaxLimit): self
    {
        $this->enterpriseCloudPrintDiscoveryMaxLimit = $enterpriseCloudPrintDiscoveryMaxLimit;
        return $this;
    }

    public function getEnterpriseCloudPrintMopriaDiscoveryResourceIdentifier(): ?string
    {
        return $this->enterpriseCloudPrintMopriaDiscoveryResourceIdentifier;
    }

    public function setEnterpriseCloudPrintMopriaDiscoveryResourceIdentifier(?string $enterpriseCloudPrintMopriaDiscoveryResourceIdentifier): self
    {
        $this->enterpriseCloudPrintMopriaDiscoveryResourceIdentifier = $enterpriseCloudPrintMopriaDiscoveryResourceIdentifier;
        return $this;
    }

    public function getEnterpriseCloudPrintOAuthAuthority(): ?string
    {
        return $this->enterpriseCloudPrintOAuthAuthority;
    }

    public function setEnterpriseCloudPrintOAuthAuthority(?string $enterpriseCloudPrintOAuthAuthority): self
    {
        $this->enterpriseCloudPrintOAuthAuthority = $enterpriseCloudPrintOAuthAuthority;
        return $this;
    }

    public function getEnterpriseCloudPrintOAuthClientIdentifier(): ?string
    {
        return $this->enterpriseCloudPrintOAuthClientIdentifier;
    }

    public function setEnterpriseCloudPrintOAuthClientIdentifier(?string $enterpriseCloudPrintOAuthClientIdentifier): self
    {
        $this->enterpriseCloudPrintOAuthClientIdentifier = $enterpriseCloudPrintOAuthClientIdentifier;
        return $this;
    }

    public function getEnterpriseCloudPrintResourceIdentifier(): ?string
    {
        return $this->enterpriseCloudPrintResourceIdentifier;
    }

    public function setEnterpriseCloudPrintResourceIdentifier(?string $enterpriseCloudPrintResourceIdentifier): self
    {
        $this->enterpriseCloudPrintResourceIdentifier = $enterpriseCloudPrintResourceIdentifier;
        return $this;
    }

    public function getExperienceBlockDeviceDiscovery(): ?bool
    {
        return $this->experienceBlockDeviceDiscovery;
    }

    public function setExperienceBlockDeviceDiscovery(?bool $experienceBlockDeviceDiscovery): self
    {
        $this->experienceBlockDeviceDiscovery = $experienceBlockDeviceDiscovery;
        return $this;
    }

    public function getExperienceBlockErrorDialogWhenNoSIM(): ?bool
    {
        return $this->experienceBlockErrorDialogWhenNoSIM;
    }

    public function setExperienceBlockErrorDialogWhenNoSIM(?bool $experienceBlockErrorDialogWhenNoSIM): self
    {
        $this->experienceBlockErrorDialogWhenNoSIM = $experienceBlockErrorDialogWhenNoSIM;
        return $this;
    }

    public function getExperienceBlockTaskSwitcher(): ?bool
    {
        return $this->experienceBlockTaskSwitcher;
    }

    public function setExperienceBlockTaskSwitcher(?bool $experienceBlockTaskSwitcher): self
    {
        $this->experienceBlockTaskSwitcher = $experienceBlockTaskSwitcher;
        return $this;
    }

    public function getGameDvrBlocked(): ?bool
    {
        return $this->gameDvrBlocked;
    }

    public function setGameDvrBlocked(?bool $gameDvrBlocked): self
    {
        $this->gameDvrBlocked = $gameDvrBlocked;
        return $this;
    }

    public function getInternetSharingBlocked(): ?bool
    {
        return $this->internetSharingBlocked;
    }

    public function setInternetSharingBlocked(?bool $internetSharingBlocked): self
    {
        $this->internetSharingBlocked = $internetSharingBlocked;
        return $this;
    }

    public function getLocationServicesBlocked(): ?bool
    {
        return $this->locationServicesBlocked;
    }

    public function setLocationServicesBlocked(?bool $locationServicesBlocked): self
    {
        $this->locationServicesBlocked = $locationServicesBlocked;
        return $this;
    }

    public function getLockScreenAllowTimeoutConfiguration(): ?bool
    {
        return $this->lockScreenAllowTimeoutConfiguration;
    }

    public function setLockScreenAllowTimeoutConfiguration(?bool $lockScreenAllowTimeoutConfiguration): self
    {
        $this->lockScreenAllowTimeoutConfiguration = $lockScreenAllowTimeoutConfiguration;
        return $this;
    }

    public function getLockScreenBlockActionCenterNotifications(): ?bool
    {
        return $this->lockScreenBlockActionCenterNotifications;
    }

    public function setLockScreenBlockActionCenterNotifications(?bool $lockScreenBlockActionCenterNotifications): self
    {
        $this->lockScreenBlockActionCenterNotifications = $lockScreenBlockActionCenterNotifications;
        return $this;
    }

    public function getLockScreenBlockCortana(): ?bool
    {
        return $this->lockScreenBlockCortana;
    }

    public function setLockScreenBlockCortana(?bool $lockScreenBlockCortana): self
    {
        $this->lockScreenBlockCortana = $lockScreenBlockCortana;
        return $this;
    }

    public function getLockScreenBlockToastNotifications(): ?bool
    {
        return $this->lockScreenBlockToastNotifications;
    }

    public function setLockScreenBlockToastNotifications(?bool $lockScreenBlockToastNotifications): self
    {
        $this->lockScreenBlockToastNotifications = $lockScreenBlockToastNotifications;
        return $this;
    }

    public function getLockScreenTimeoutInSeconds(): ?float
    {
        return $this->lockScreenTimeoutInSeconds;
    }

    public function setLockScreenTimeoutInSeconds(?float $lockScreenTimeoutInSeconds): self
    {
        $this->lockScreenTimeoutInSeconds = $lockScreenTimeoutInSeconds;
        return $this;
    }

    public function getLogonBlockFastUserSwitching(): ?bool
    {
        return $this->logonBlockFastUserSwitching;
    }

    public function setLogonBlockFastUserSwitching(?bool $logonBlockFastUserSwitching): self
    {
        $this->logonBlockFastUserSwitching = $logonBlockFastUserSwitching;
        return $this;
    }

    public function getMicrosoftAccountBlocked(): ?bool
    {
        return $this->microsoftAccountBlocked;
    }

    public function setMicrosoftAccountBlocked(?bool $microsoftAccountBlocked): self
    {
        $this->microsoftAccountBlocked = $microsoftAccountBlocked;
        return $this;
    }

    public function getMicrosoftAccountBlockSettingsSync(): ?bool
    {
        return $this->microsoftAccountBlockSettingsSync;
    }

    public function setMicrosoftAccountBlockSettingsSync(?bool $microsoftAccountBlockSettingsSync): self
    {
        $this->microsoftAccountBlockSettingsSync = $microsoftAccountBlockSettingsSync;
        return $this;
    }

    public function getNetworkProxyApplySettingsDeviceWide(): ?bool
    {
        return $this->networkProxyApplySettingsDeviceWide;
    }

    public function setNetworkProxyApplySettingsDeviceWide(?bool $networkProxyApplySettingsDeviceWide): self
    {
        $this->networkProxyApplySettingsDeviceWide = $networkProxyApplySettingsDeviceWide;
        return $this;
    }

    public function getNetworkProxyAutomaticConfigurationUrl(): ?string
    {
        return $this->networkProxyAutomaticConfigurationUrl;
    }

    public function setNetworkProxyAutomaticConfigurationUrl(?string $networkProxyAutomaticConfigurationUrl): self
    {
        $this->networkProxyAutomaticConfigurationUrl = $networkProxyAutomaticConfigurationUrl;
        return $this;
    }

    public function getNetworkProxyDisableAutoDetect(): ?bool
    {
        return $this->networkProxyDisableAutoDetect;
    }

    public function setNetworkProxyDisableAutoDetect(?bool $networkProxyDisableAutoDetect): self
    {
        $this->networkProxyDisableAutoDetect = $networkProxyDisableAutoDetect;
        return $this;
    }

    public function getNetworkProxyServer(): ?string
    {
        return $this->networkProxyServer;
    }

    public function setNetworkProxyServer(?string $networkProxyServer): self
    {
        $this->networkProxyServer = $networkProxyServer;
        return $this;
    }

    public function getNfcBlocked(): ?bool
    {
        return $this->nfcBlocked;
    }

    public function setNfcBlocked(?bool $nfcBlocked): self
    {
        $this->nfcBlocked = $nfcBlocked;
        return $this;
    }

    public function getOneDriveDisableFileSync(): ?bool
    {
        return $this->oneDriveDisableFileSync;
    }

    public function setOneDriveDisableFileSync(?bool $oneDriveDisableFileSync): self
    {
        $this->oneDriveDisableFileSync = $oneDriveDisableFileSync;
        return $this;
    }

    public function getPasswordBlockSimple(): ?bool
    {
        return $this->passwordBlockSimple;
    }

    public function setPasswordBlockSimple(?bool $passwordBlockSimple): self
    {
        $this->passwordBlockSimple = $passwordBlockSimple;
        return $this;
    }

    public function getPasswordExpirationDays(): ?float
    {
        return $this->passwordExpirationDays;
    }

    public function setPasswordExpirationDays(?float $passwordExpirationDays): self
    {
        $this->passwordExpirationDays = $passwordExpirationDays;
        return $this;
    }

    public function getPasswordMinimumCharacterSetCount(): ?float
    {
        return $this->passwordMinimumCharacterSetCount;
    }

    public function setPasswordMinimumCharacterSetCount(?float $passwordMinimumCharacterSetCount): self
    {
        $this->passwordMinimumCharacterSetCount = $passwordMinimumCharacterSetCount;
        return $this;
    }

    public function getPasswordMinimumLength(): ?float
    {
        return $this->passwordMinimumLength;
    }

    public function setPasswordMinimumLength(?float $passwordMinimumLength): self
    {
        $this->passwordMinimumLength = $passwordMinimumLength;
        return $this;
    }

    public function getPasswordMinutesOfInactivityBeforeScreenTimeout(): ?float
    {
        return $this->passwordMinutesOfInactivityBeforeScreenTimeout;
    }

    public function setPasswordMinutesOfInactivityBeforeScreenTimeout(?float $passwordMinutesOfInactivityBeforeScreenTimeout): self
    {
        $this->passwordMinutesOfInactivityBeforeScreenTimeout = $passwordMinutesOfInactivityBeforeScreenTimeout;
        return $this;
    }

    public function getPasswordPreviousPasswordBlockCount(): ?float
    {
        return $this->passwordPreviousPasswordBlockCount;
    }

    public function setPasswordPreviousPasswordBlockCount(?float $passwordPreviousPasswordBlockCount): self
    {
        $this->passwordPreviousPasswordBlockCount = $passwordPreviousPasswordBlockCount;
        return $this;
    }

    public function getPasswordRequired(): ?bool
    {
        return $this->passwordRequired;
    }

    public function setPasswordRequired(?bool $passwordRequired): self
    {
        $this->passwordRequired = $passwordRequired;
        return $this;
    }

    public function getPasswordRequiredType(): ?string
    {
        return $this->passwordRequiredType;
    }

    public function setPasswordRequiredType(?string $passwordRequiredType): self
    {
        $this->passwordRequiredType = $passwordRequiredType;
        return $this;
    }

    public function getPasswordRequireWhenResumeFromIdleState(): ?bool
    {
        return $this->passwordRequireWhenResumeFromIdleState;
    }

    public function setPasswordRequireWhenResumeFromIdleState(?bool $passwordRequireWhenResumeFromIdleState): self
    {
        $this->passwordRequireWhenResumeFromIdleState = $passwordRequireWhenResumeFromIdleState;
        return $this;
    }

    public function getPasswordSignInFailureCountBeforeFactoryReset(): ?float
    {
        return $this->passwordSignInFailureCountBeforeFactoryReset;
    }

    public function setPasswordSignInFailureCountBeforeFactoryReset(?float $passwordSignInFailureCountBeforeFactoryReset): self
    {
        $this->passwordSignInFailureCountBeforeFactoryReset = $passwordSignInFailureCountBeforeFactoryReset;
        return $this;
    }

    public function getPersonalizationDesktopImageUrl(): ?string
    {
        return $this->personalizationDesktopImageUrl;
    }

    public function setPersonalizationDesktopImageUrl(?string $personalizationDesktopImageUrl): self
    {
        $this->personalizationDesktopImageUrl = $personalizationDesktopImageUrl;
        return $this;
    }

    public function getPersonalizationLockScreenImageUrl(): ?string
    {
        return $this->personalizationLockScreenImageUrl;
    }

    public function setPersonalizationLockScreenImageUrl(?string $personalizationLockScreenImageUrl): self
    {
        $this->personalizationLockScreenImageUrl = $personalizationLockScreenImageUrl;
        return $this;
    }

    public function getPrivacyAdvertisingId(): ?string
    {
        return $this->privacyAdvertisingId;
    }

    public function setPrivacyAdvertisingId(?string $privacyAdvertisingId): self
    {
        $this->privacyAdvertisingId = $privacyAdvertisingId;
        return $this;
    }

    public function getPrivacyAutoAcceptPairingAndConsentPrompts(): ?bool
    {
        return $this->privacyAutoAcceptPairingAndConsentPrompts;
    }

    public function setPrivacyAutoAcceptPairingAndConsentPrompts(?bool $privacyAutoAcceptPairingAndConsentPrompts): self
    {
        $this->privacyAutoAcceptPairingAndConsentPrompts = $privacyAutoAcceptPairingAndConsentPrompts;
        return $this;
    }

    public function getPrivacyBlockInputPersonalization(): ?bool
    {
        return $this->privacyBlockInputPersonalization;
    }

    public function setPrivacyBlockInputPersonalization(?bool $privacyBlockInputPersonalization): self
    {
        $this->privacyBlockInputPersonalization = $privacyBlockInputPersonalization;
        return $this;
    }

    public function getResetProtectionModeBlocked(): ?bool
    {
        return $this->resetProtectionModeBlocked;
    }

    public function setResetProtectionModeBlocked(?bool $resetProtectionModeBlocked): self
    {
        $this->resetProtectionModeBlocked = $resetProtectionModeBlocked;
        return $this;
    }

    public function getSafeSearchFilter(): ?string
    {
        return $this->safeSearchFilter;
    }

    public function setSafeSearchFilter(?string $safeSearchFilter): self
    {
        $this->safeSearchFilter = $safeSearchFilter;
        return $this;
    }

    public function getScreenCaptureBlocked(): ?bool
    {
        return $this->screenCaptureBlocked;
    }

    public function setScreenCaptureBlocked(?bool $screenCaptureBlocked): self
    {
        $this->screenCaptureBlocked = $screenCaptureBlocked;
        return $this;
    }

    public function getSearchBlockDiacritics(): ?bool
    {
        return $this->searchBlockDiacritics;
    }

    public function setSearchBlockDiacritics(?bool $searchBlockDiacritics): self
    {
        $this->searchBlockDiacritics = $searchBlockDiacritics;
        return $this;
    }

    public function getSearchDisableAutoLanguageDetection(): ?bool
    {
        return $this->searchDisableAutoLanguageDetection;
    }

    public function setSearchDisableAutoLanguageDetection(?bool $searchDisableAutoLanguageDetection): self
    {
        $this->searchDisableAutoLanguageDetection = $searchDisableAutoLanguageDetection;
        return $this;
    }

    public function getSearchDisableIndexerBackoff(): ?bool
    {
        return $this->searchDisableIndexerBackoff;
    }

    public function setSearchDisableIndexerBackoff(?bool $searchDisableIndexerBackoff): self
    {
        $this->searchDisableIndexerBackoff = $searchDisableIndexerBackoff;
        return $this;
    }

    public function getSearchDisableIndexingEncryptedItems(): ?bool
    {
        return $this->searchDisableIndexingEncryptedItems;
    }

    public function setSearchDisableIndexingEncryptedItems(?bool $searchDisableIndexingEncryptedItems): self
    {
        $this->searchDisableIndexingEncryptedItems = $searchDisableIndexingEncryptedItems;
        return $this;
    }

    public function getSearchDisableIndexingRemovableDrive(): ?bool
    {
        return $this->searchDisableIndexingRemovableDrive;
    }

    public function setSearchDisableIndexingRemovableDrive(?bool $searchDisableIndexingRemovableDrive): self
    {
        $this->searchDisableIndexingRemovableDrive = $searchDisableIndexingRemovableDrive;
        return $this;
    }

    public function getSearchEnableAutomaticIndexSizeManangement(): ?bool
    {
        return $this->searchEnableAutomaticIndexSizeManangement;
    }

    public function setSearchEnableAutomaticIndexSizeManangement(?bool $searchEnableAutomaticIndexSizeManangement): self
    {
        $this->searchEnableAutomaticIndexSizeManangement = $searchEnableAutomaticIndexSizeManangement;
        return $this;
    }

    public function getSearchEnableRemoteQueries(): ?bool
    {
        return $this->searchEnableRemoteQueries;
    }

    public function setSearchEnableRemoteQueries(?bool $searchEnableRemoteQueries): self
    {
        $this->searchEnableRemoteQueries = $searchEnableRemoteQueries;
        return $this;
    }

    public function getSettingsBlockAccountsPage(): ?bool
    {
        return $this->settingsBlockAccountsPage;
    }

    public function setSettingsBlockAccountsPage(?bool $settingsBlockAccountsPage): self
    {
        $this->settingsBlockAccountsPage = $settingsBlockAccountsPage;
        return $this;
    }

    public function getSettingsBlockAddProvisioningPackage(): ?bool
    {
        return $this->settingsBlockAddProvisioningPackage;
    }

    public function setSettingsBlockAddProvisioningPackage(?bool $settingsBlockAddProvisioningPackage): self
    {
        $this->settingsBlockAddProvisioningPackage = $settingsBlockAddProvisioningPackage;
        return $this;
    }

    public function getSettingsBlockAppsPage(): ?bool
    {
        return $this->settingsBlockAppsPage;
    }

    public function setSettingsBlockAppsPage(?bool $settingsBlockAppsPage): self
    {
        $this->settingsBlockAppsPage = $settingsBlockAppsPage;
        return $this;
    }

    public function getSettingsBlockChangeLanguage(): ?bool
    {
        return $this->settingsBlockChangeLanguage;
    }

    public function setSettingsBlockChangeLanguage(?bool $settingsBlockChangeLanguage): self
    {
        $this->settingsBlockChangeLanguage = $settingsBlockChangeLanguage;
        return $this;
    }

    public function getSettingsBlockChangePowerSleep(): ?bool
    {
        return $this->settingsBlockChangePowerSleep;
    }

    public function setSettingsBlockChangePowerSleep(?bool $settingsBlockChangePowerSleep): self
    {
        $this->settingsBlockChangePowerSleep = $settingsBlockChangePowerSleep;
        return $this;
    }

    public function getSettingsBlockChangeRegion(): ?bool
    {
        return $this->settingsBlockChangeRegion;
    }

    public function setSettingsBlockChangeRegion(?bool $settingsBlockChangeRegion): self
    {
        $this->settingsBlockChangeRegion = $settingsBlockChangeRegion;
        return $this;
    }

    public function getSettingsBlockChangeSystemTime(): ?bool
    {
        return $this->settingsBlockChangeSystemTime;
    }

    public function setSettingsBlockChangeSystemTime(?bool $settingsBlockChangeSystemTime): self
    {
        $this->settingsBlockChangeSystemTime = $settingsBlockChangeSystemTime;
        return $this;
    }

    public function getSettingsBlockDevicesPage(): ?bool
    {
        return $this->settingsBlockDevicesPage;
    }

    public function setSettingsBlockDevicesPage(?bool $settingsBlockDevicesPage): self
    {
        $this->settingsBlockDevicesPage = $settingsBlockDevicesPage;
        return $this;
    }

    public function getSettingsBlockEaseOfAccessPage(): ?bool
    {
        return $this->settingsBlockEaseOfAccessPage;
    }

    public function setSettingsBlockEaseOfAccessPage(?bool $settingsBlockEaseOfAccessPage): self
    {
        $this->settingsBlockEaseOfAccessPage = $settingsBlockEaseOfAccessPage;
        return $this;
    }

    public function getSettingsBlockEditDeviceName(): ?bool
    {
        return $this->settingsBlockEditDeviceName;
    }

    public function setSettingsBlockEditDeviceName(?bool $settingsBlockEditDeviceName): self
    {
        $this->settingsBlockEditDeviceName = $settingsBlockEditDeviceName;
        return $this;
    }

    public function getSettingsBlockGamingPage(): ?bool
    {
        return $this->settingsBlockGamingPage;
    }

    public function setSettingsBlockGamingPage(?bool $settingsBlockGamingPage): self
    {
        $this->settingsBlockGamingPage = $settingsBlockGamingPage;
        return $this;
    }

    public function getSettingsBlockNetworkInternetPage(): ?bool
    {
        return $this->settingsBlockNetworkInternetPage;
    }

    public function setSettingsBlockNetworkInternetPage(?bool $settingsBlockNetworkInternetPage): self
    {
        $this->settingsBlockNetworkInternetPage = $settingsBlockNetworkInternetPage;
        return $this;
    }

    public function getSettingsBlockPersonalizationPage(): ?bool
    {
        return $this->settingsBlockPersonalizationPage;
    }

    public function setSettingsBlockPersonalizationPage(?bool $settingsBlockPersonalizationPage): self
    {
        $this->settingsBlockPersonalizationPage = $settingsBlockPersonalizationPage;
        return $this;
    }

    public function getSettingsBlockPrivacyPage(): ?bool
    {
        return $this->settingsBlockPrivacyPage;
    }

    public function setSettingsBlockPrivacyPage(?bool $settingsBlockPrivacyPage): self
    {
        $this->settingsBlockPrivacyPage = $settingsBlockPrivacyPage;
        return $this;
    }

    public function getSettingsBlockRemoveProvisioningPackage(): ?bool
    {
        return $this->settingsBlockRemoveProvisioningPackage;
    }

    public function setSettingsBlockRemoveProvisioningPackage(?bool $settingsBlockRemoveProvisioningPackage): self
    {
        $this->settingsBlockRemoveProvisioningPackage = $settingsBlockRemoveProvisioningPackage;
        return $this;
    }

    public function getSettingsBlockSettingsApp(): ?bool
    {
        return $this->settingsBlockSettingsApp;
    }

    public function setSettingsBlockSettingsApp(?bool $settingsBlockSettingsApp): self
    {
        $this->settingsBlockSettingsApp = $settingsBlockSettingsApp;
        return $this;
    }

    public function getSettingsBlockSystemPage(): ?bool
    {
        return $this->settingsBlockSystemPage;
    }

    public function setSettingsBlockSystemPage(?bool $settingsBlockSystemPage): self
    {
        $this->settingsBlockSystemPage = $settingsBlockSystemPage;
        return $this;
    }

    public function getSettingsBlockTimeLanguagePage(): ?bool
    {
        return $this->settingsBlockTimeLanguagePage;
    }

    public function setSettingsBlockTimeLanguagePage(?bool $settingsBlockTimeLanguagePage): self
    {
        $this->settingsBlockTimeLanguagePage = $settingsBlockTimeLanguagePage;
        return $this;
    }

    public function getSettingsBlockUpdateSecurityPage(): ?bool
    {
        return $this->settingsBlockUpdateSecurityPage;
    }

    public function setSettingsBlockUpdateSecurityPage(?bool $settingsBlockUpdateSecurityPage): self
    {
        $this->settingsBlockUpdateSecurityPage = $settingsBlockUpdateSecurityPage;
        return $this;
    }

    public function getSharedUserAppDataAllowed(): ?bool
    {
        return $this->sharedUserAppDataAllowed;
    }

    public function setSharedUserAppDataAllowed(?bool $sharedUserAppDataAllowed): self
    {
        $this->sharedUserAppDataAllowed = $sharedUserAppDataAllowed;
        return $this;
    }

    public function getSmartScreenBlockPromptOverride(): ?bool
    {
        return $this->smartScreenBlockPromptOverride;
    }

    public function setSmartScreenBlockPromptOverride(?bool $smartScreenBlockPromptOverride): self
    {
        $this->smartScreenBlockPromptOverride = $smartScreenBlockPromptOverride;
        return $this;
    }

    public function getSmartScreenBlockPromptOverrideForFiles(): ?bool
    {
        return $this->smartScreenBlockPromptOverrideForFiles;
    }

    public function setSmartScreenBlockPromptOverrideForFiles(?bool $smartScreenBlockPromptOverrideForFiles): self
    {
        $this->smartScreenBlockPromptOverrideForFiles = $smartScreenBlockPromptOverrideForFiles;
        return $this;
    }

    public function getSmartScreenEnableAppInstallControl(): ?bool
    {
        return $this->smartScreenEnableAppInstallControl;
    }

    public function setSmartScreenEnableAppInstallControl(?bool $smartScreenEnableAppInstallControl): self
    {
        $this->smartScreenEnableAppInstallControl = $smartScreenEnableAppInstallControl;
        return $this;
    }

    public function getStartBlockUnpinningAppsFromTaskbar(): ?bool
    {
        return $this->startBlockUnpinningAppsFromTaskbar;
    }

    public function setStartBlockUnpinningAppsFromTaskbar(?bool $startBlockUnpinningAppsFromTaskbar): self
    {
        $this->startBlockUnpinningAppsFromTaskbar = $startBlockUnpinningAppsFromTaskbar;
        return $this;
    }

    public function getStartMenuAppListVisibility(): ?string
    {
        return $this->startMenuAppListVisibility;
    }

    public function setStartMenuAppListVisibility(?string $startMenuAppListVisibility): self
    {
        $this->startMenuAppListVisibility = $startMenuAppListVisibility;
        return $this;
    }

    public function getStartMenuHideChangeAccountSettings(): ?bool
    {
        return $this->startMenuHideChangeAccountSettings;
    }

    public function setStartMenuHideChangeAccountSettings(?bool $startMenuHideChangeAccountSettings): self
    {
        $this->startMenuHideChangeAccountSettings = $startMenuHideChangeAccountSettings;
        return $this;
    }

    public function getStartMenuHideFrequentlyUsedApps(): ?bool
    {
        return $this->startMenuHideFrequentlyUsedApps;
    }

    public function setStartMenuHideFrequentlyUsedApps(?bool $startMenuHideFrequentlyUsedApps): self
    {
        $this->startMenuHideFrequentlyUsedApps = $startMenuHideFrequentlyUsedApps;
        return $this;
    }

    public function getStartMenuHideHibernate(): ?bool
    {
        return $this->startMenuHideHibernate;
    }

    public function setStartMenuHideHibernate(?bool $startMenuHideHibernate): self
    {
        $this->startMenuHideHibernate = $startMenuHideHibernate;
        return $this;
    }

    public function getStartMenuHideLock(): ?bool
    {
        return $this->startMenuHideLock;
    }

    public function setStartMenuHideLock(?bool $startMenuHideLock): self
    {
        $this->startMenuHideLock = $startMenuHideLock;
        return $this;
    }

    public function getStartMenuHidePowerButton(): ?bool
    {
        return $this->startMenuHidePowerButton;
    }

    public function setStartMenuHidePowerButton(?bool $startMenuHidePowerButton): self
    {
        $this->startMenuHidePowerButton = $startMenuHidePowerButton;
        return $this;
    }

    public function getStartMenuHideRecentJumpLists(): ?bool
    {
        return $this->startMenuHideRecentJumpLists;
    }

    public function setStartMenuHideRecentJumpLists(?bool $startMenuHideRecentJumpLists): self
    {
        $this->startMenuHideRecentJumpLists = $startMenuHideRecentJumpLists;
        return $this;
    }

    public function getStartMenuHideRecentlyAddedApps(): ?bool
    {
        return $this->startMenuHideRecentlyAddedApps;
    }

    public function setStartMenuHideRecentlyAddedApps(?bool $startMenuHideRecentlyAddedApps): self
    {
        $this->startMenuHideRecentlyAddedApps = $startMenuHideRecentlyAddedApps;
        return $this;
    }

    public function getStartMenuHideRestartOptions(): ?bool
    {
        return $this->startMenuHideRestartOptions;
    }

    public function setStartMenuHideRestartOptions(?bool $startMenuHideRestartOptions): self
    {
        $this->startMenuHideRestartOptions = $startMenuHideRestartOptions;
        return $this;
    }

    public function getStartMenuHideShutDown(): ?bool
    {
        return $this->startMenuHideShutDown;
    }

    public function setStartMenuHideShutDown(?bool $startMenuHideShutDown): self
    {
        $this->startMenuHideShutDown = $startMenuHideShutDown;
        return $this;
    }

    public function getStartMenuHideSignOut(): ?bool
    {
        return $this->startMenuHideSignOut;
    }

    public function setStartMenuHideSignOut(?bool $startMenuHideSignOut): self
    {
        $this->startMenuHideSignOut = $startMenuHideSignOut;
        return $this;
    }

    public function getStartMenuHideSleep(): ?bool
    {
        return $this->startMenuHideSleep;
    }

    public function setStartMenuHideSleep(?bool $startMenuHideSleep): self
    {
        $this->startMenuHideSleep = $startMenuHideSleep;
        return $this;
    }

    public function getStartMenuHideSwitchAccount(): ?bool
    {
        return $this->startMenuHideSwitchAccount;
    }

    public function setStartMenuHideSwitchAccount(?bool $startMenuHideSwitchAccount): self
    {
        $this->startMenuHideSwitchAccount = $startMenuHideSwitchAccount;
        return $this;
    }

    public function getStartMenuHideUserTile(): ?bool
    {
        return $this->startMenuHideUserTile;
    }

    public function setStartMenuHideUserTile(?bool $startMenuHideUserTile): self
    {
        $this->startMenuHideUserTile = $startMenuHideUserTile;
        return $this;
    }

    public function getStartMenuLayoutEdgeAssetsXml(): ?string
    {
        return $this->startMenuLayoutEdgeAssetsXml;
    }

    public function setStartMenuLayoutEdgeAssetsXml(?string $startMenuLayoutEdgeAssetsXml): self
    {
        $this->startMenuLayoutEdgeAssetsXml = $startMenuLayoutEdgeAssetsXml;
        return $this;
    }

    public function getStartMenuLayoutXml(): ?string
    {
        return $this->startMenuLayoutXml;
    }

    public function setStartMenuLayoutXml(?string $startMenuLayoutXml): self
    {
        $this->startMenuLayoutXml = $startMenuLayoutXml;
        return $this;
    }

    public function getStartMenuMode(): ?string
    {
        return $this->startMenuMode;
    }

    public function setStartMenuMode(?string $startMenuMode): self
    {
        $this->startMenuMode = $startMenuMode;
        return $this;
    }

    public function getStartMenuPinnedFolderDocuments(): ?string
    {
        return $this->startMenuPinnedFolderDocuments;
    }

    public function setStartMenuPinnedFolderDocuments(?string $startMenuPinnedFolderDocuments): self
    {
        $this->startMenuPinnedFolderDocuments = $startMenuPinnedFolderDocuments;
        return $this;
    }

    public function getStartMenuPinnedFolderDownloads(): ?string
    {
        return $this->startMenuPinnedFolderDownloads;
    }

    public function setStartMenuPinnedFolderDownloads(?string $startMenuPinnedFolderDownloads): self
    {
        $this->startMenuPinnedFolderDownloads = $startMenuPinnedFolderDownloads;
        return $this;
    }

    public function getStartMenuPinnedFolderFileExplorer(): ?string
    {
        return $this->startMenuPinnedFolderFileExplorer;
    }

    public function setStartMenuPinnedFolderFileExplorer(?string $startMenuPinnedFolderFileExplorer): self
    {
        $this->startMenuPinnedFolderFileExplorer = $startMenuPinnedFolderFileExplorer;
        return $this;
    }

    public function getStartMenuPinnedFolderHomeGroup(): ?string
    {
        return $this->startMenuPinnedFolderHomeGroup;
    }

    public function setStartMenuPinnedFolderHomeGroup(?string $startMenuPinnedFolderHomeGroup): self
    {
        $this->startMenuPinnedFolderHomeGroup = $startMenuPinnedFolderHomeGroup;
        return $this;
    }

    public function getStartMenuPinnedFolderMusic(): ?string
    {
        return $this->startMenuPinnedFolderMusic;
    }

    public function setStartMenuPinnedFolderMusic(?string $startMenuPinnedFolderMusic): self
    {
        $this->startMenuPinnedFolderMusic = $startMenuPinnedFolderMusic;
        return $this;
    }

    public function getStartMenuPinnedFolderNetwork(): ?string
    {
        return $this->startMenuPinnedFolderNetwork;
    }

    public function setStartMenuPinnedFolderNetwork(?string $startMenuPinnedFolderNetwork): self
    {
        $this->startMenuPinnedFolderNetwork = $startMenuPinnedFolderNetwork;
        return $this;
    }

    public function getStartMenuPinnedFolderPersonalFolder(): ?string
    {
        return $this->startMenuPinnedFolderPersonalFolder;
    }

    public function setStartMenuPinnedFolderPersonalFolder(?string $startMenuPinnedFolderPersonalFolder): self
    {
        $this->startMenuPinnedFolderPersonalFolder = $startMenuPinnedFolderPersonalFolder;
        return $this;
    }

    public function getStartMenuPinnedFolderPictures(): ?string
    {
        return $this->startMenuPinnedFolderPictures;
    }

    public function setStartMenuPinnedFolderPictures(?string $startMenuPinnedFolderPictures): self
    {
        $this->startMenuPinnedFolderPictures = $startMenuPinnedFolderPictures;
        return $this;
    }

    public function getStartMenuPinnedFolderSettings(): ?string
    {
        return $this->startMenuPinnedFolderSettings;
    }

    public function setStartMenuPinnedFolderSettings(?string $startMenuPinnedFolderSettings): self
    {
        $this->startMenuPinnedFolderSettings = $startMenuPinnedFolderSettings;
        return $this;
    }

    public function getStartMenuPinnedFolderVideos(): ?string
    {
        return $this->startMenuPinnedFolderVideos;
    }

    public function setStartMenuPinnedFolderVideos(?string $startMenuPinnedFolderVideos): self
    {
        $this->startMenuPinnedFolderVideos = $startMenuPinnedFolderVideos;
        return $this;
    }

    public function getStorageBlockRemovableStorage(): ?bool
    {
        return $this->storageBlockRemovableStorage;
    }

    public function setStorageBlockRemovableStorage(?bool $storageBlockRemovableStorage): self
    {
        $this->storageBlockRemovableStorage = $storageBlockRemovableStorage;
        return $this;
    }

    public function getStorageRequireMobileDeviceEncryption(): ?bool
    {
        return $this->storageRequireMobileDeviceEncryption;
    }

    public function setStorageRequireMobileDeviceEncryption(?bool $storageRequireMobileDeviceEncryption): self
    {
        $this->storageRequireMobileDeviceEncryption = $storageRequireMobileDeviceEncryption;
        return $this;
    }

    public function getStorageRestrictAppDataToSystemVolume(): ?bool
    {
        return $this->storageRestrictAppDataToSystemVolume;
    }

    public function setStorageRestrictAppDataToSystemVolume(?bool $storageRestrictAppDataToSystemVolume): self
    {
        $this->storageRestrictAppDataToSystemVolume = $storageRestrictAppDataToSystemVolume;
        return $this;
    }

    public function getStorageRestrictAppInstallToSystemVolume(): ?bool
    {
        return $this->storageRestrictAppInstallToSystemVolume;
    }

    public function setStorageRestrictAppInstallToSystemVolume(?bool $storageRestrictAppInstallToSystemVolume): self
    {
        $this->storageRestrictAppInstallToSystemVolume = $storageRestrictAppInstallToSystemVolume;
        return $this;
    }

    public function getTenantLockdownRequireNetworkDuringOutOfBoxExperience(): ?bool
    {
        return $this->tenantLockdownRequireNetworkDuringOutOfBoxExperience;
    }

    public function setTenantLockdownRequireNetworkDuringOutOfBoxExperience(?bool $tenantLockdownRequireNetworkDuringOutOfBoxExperience): self
    {
        $this->tenantLockdownRequireNetworkDuringOutOfBoxExperience = $tenantLockdownRequireNetworkDuringOutOfBoxExperience;
        return $this;
    }

    public function getUsbBlocked(): ?bool
    {
        return $this->usbBlocked;
    }

    public function setUsbBlocked(?bool $usbBlocked): self
    {
        $this->usbBlocked = $usbBlocked;
        return $this;
    }

    public function getVoiceRecordingBlocked(): ?bool
    {
        return $this->voiceRecordingBlocked;
    }

    public function setVoiceRecordingBlocked(?bool $voiceRecordingBlocked): self
    {
        $this->voiceRecordingBlocked = $voiceRecordingBlocked;
        return $this;
    }

    public function getWebRtcBlockLocalhostIpAddress(): ?bool
    {
        return $this->webRtcBlockLocalhostIpAddress;
    }

    public function setWebRtcBlockLocalhostIpAddress(?bool $webRtcBlockLocalhostIpAddress): self
    {
        $this->webRtcBlockLocalhostIpAddress = $webRtcBlockLocalhostIpAddress;
        return $this;
    }

    public function getWiFiBlockAutomaticConnectHotspots(): ?bool
    {
        return $this->wiFiBlockAutomaticConnectHotspots;
    }

    public function setWiFiBlockAutomaticConnectHotspots(?bool $wiFiBlockAutomaticConnectHotspots): self
    {
        $this->wiFiBlockAutomaticConnectHotspots = $wiFiBlockAutomaticConnectHotspots;
        return $this;
    }

    public function getWiFiBlocked(): ?bool
    {
        return $this->wiFiBlocked;
    }

    public function setWiFiBlocked(?bool $wiFiBlocked): self
    {
        $this->wiFiBlocked = $wiFiBlocked;
        return $this;
    }

    public function getWiFiBlockManualConfiguration(): ?bool
    {
        return $this->wiFiBlockManualConfiguration;
    }

    public function setWiFiBlockManualConfiguration(?bool $wiFiBlockManualConfiguration): self
    {
        $this->wiFiBlockManualConfiguration = $wiFiBlockManualConfiguration;
        return $this;
    }

    public function getWiFiScanInterval(): ?float
    {
        return $this->wiFiScanInterval;
    }

    public function setWiFiScanInterval(?float $wiFiScanInterval): self
    {
        $this->wiFiScanInterval = $wiFiScanInterval;
        return $this;
    }

    public function getWindowsSpotlightBlockConsumerSpecificFeatures(): ?bool
    {
        return $this->windowsSpotlightBlockConsumerSpecificFeatures;
    }

    public function setWindowsSpotlightBlockConsumerSpecificFeatures(?bool $windowsSpotlightBlockConsumerSpecificFeatures): self
    {
        $this->windowsSpotlightBlockConsumerSpecificFeatures = $windowsSpotlightBlockConsumerSpecificFeatures;
        return $this;
    }

    public function getWindowsSpotlightBlocked(): ?bool
    {
        return $this->windowsSpotlightBlocked;
    }

    public function setWindowsSpotlightBlocked(?bool $windowsSpotlightBlocked): self
    {
        $this->windowsSpotlightBlocked = $windowsSpotlightBlocked;
        return $this;
    }

    public function getWindowsSpotlightBlockOnActionCenter(): ?bool
    {
        return $this->windowsSpotlightBlockOnActionCenter;
    }

    public function setWindowsSpotlightBlockOnActionCenter(?bool $windowsSpotlightBlockOnActionCenter): self
    {
        $this->windowsSpotlightBlockOnActionCenter = $windowsSpotlightBlockOnActionCenter;
        return $this;
    }

    public function getWindowsSpotlightBlockTailoredExperiences(): ?bool
    {
        return $this->windowsSpotlightBlockTailoredExperiences;
    }

    public function setWindowsSpotlightBlockTailoredExperiences(?bool $windowsSpotlightBlockTailoredExperiences): self
    {
        $this->windowsSpotlightBlockTailoredExperiences = $windowsSpotlightBlockTailoredExperiences;
        return $this;
    }

    public function getWindowsSpotlightBlockThirdPartyNotifications(): ?bool
    {
        return $this->windowsSpotlightBlockThirdPartyNotifications;
    }

    public function setWindowsSpotlightBlockThirdPartyNotifications(?bool $windowsSpotlightBlockThirdPartyNotifications): self
    {
        $this->windowsSpotlightBlockThirdPartyNotifications = $windowsSpotlightBlockThirdPartyNotifications;
        return $this;
    }

    public function getWindowsSpotlightBlockWelcomeExperience(): ?bool
    {
        return $this->windowsSpotlightBlockWelcomeExperience;
    }

    public function setWindowsSpotlightBlockWelcomeExperience(?bool $windowsSpotlightBlockWelcomeExperience): self
    {
        $this->windowsSpotlightBlockWelcomeExperience = $windowsSpotlightBlockWelcomeExperience;
        return $this;
    }

    public function getWindowsSpotlightBlockWindowsTips(): ?bool
    {
        return $this->windowsSpotlightBlockWindowsTips;
    }

    public function setWindowsSpotlightBlockWindowsTips(?bool $windowsSpotlightBlockWindowsTips): self
    {
        $this->windowsSpotlightBlockWindowsTips = $windowsSpotlightBlockWindowsTips;
        return $this;
    }

    public function getWindowsSpotlightConfigureOnLockScreen(): ?string
    {
        return $this->windowsSpotlightConfigureOnLockScreen;
    }

    public function setWindowsSpotlightConfigureOnLockScreen(?string $windowsSpotlightConfigureOnLockScreen): self
    {
        $this->windowsSpotlightConfigureOnLockScreen = $windowsSpotlightConfigureOnLockScreen;
        return $this;
    }

    public function getWindowsStoreBlockAutoUpdate(): ?bool
    {
        return $this->windowsStoreBlockAutoUpdate;
    }

    public function setWindowsStoreBlockAutoUpdate(?bool $windowsStoreBlockAutoUpdate): self
    {
        $this->windowsStoreBlockAutoUpdate = $windowsStoreBlockAutoUpdate;
        return $this;
    }

    public function getWindowsStoreBlocked(): ?bool
    {
        return $this->windowsStoreBlocked;
    }

    public function setWindowsStoreBlocked(?bool $windowsStoreBlocked): self
    {
        $this->windowsStoreBlocked = $windowsStoreBlocked;
        return $this;
    }

    public function getWindowsStoreEnablePrivateStoreOnly(): ?bool
    {
        return $this->windowsStoreEnablePrivateStoreOnly;
    }

    public function setWindowsStoreEnablePrivateStoreOnly(?bool $windowsStoreEnablePrivateStoreOnly): self
    {
        $this->windowsStoreEnablePrivateStoreOnly = $windowsStoreEnablePrivateStoreOnly;
        return $this;
    }

    public function getWirelessDisplayBlockProjectionToThisDevice(): ?bool
    {
        return $this->wirelessDisplayBlockProjectionToThisDevice;
    }

    public function setWirelessDisplayBlockProjectionToThisDevice(?bool $wirelessDisplayBlockProjectionToThisDevice): self
    {
        $this->wirelessDisplayBlockProjectionToThisDevice = $wirelessDisplayBlockProjectionToThisDevice;
        return $this;
    }

    public function getWirelessDisplayBlockUserInputFromReceiver(): ?bool
    {
        return $this->wirelessDisplayBlockUserInputFromReceiver;
    }

    public function setWirelessDisplayBlockUserInputFromReceiver(?bool $wirelessDisplayBlockUserInputFromReceiver): self
    {
        $this->wirelessDisplayBlockUserInputFromReceiver = $wirelessDisplayBlockUserInputFromReceiver;
        return $this;
    }

    public function getWirelessDisplayRequirePinForPairing(): ?string
    {
        return $this->wirelessDisplayRequirePinForPairing;
    }

    public function setWirelessDisplayRequirePinForPairing(?string $wirelessDisplayRequirePinForPairing): self
    {
        $this->wirelessDisplayRequirePinForPairing = $wirelessDisplayRequirePinForPairing;
        return $this;
    }

}
