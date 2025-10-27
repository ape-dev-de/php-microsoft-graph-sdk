<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosGeneralDeviceConfiguration
 */
class IosGeneralDeviceConfiguration
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

    /** Indicates whether or not to allow account modification when the device is in supervised mode. */
    public ?bool $accountBlockModification = null;

    /** Indicates whether or not to allow activation lock when the device is in the supervised mode. */
    public ?bool $activationLockAllowWhenSupervised = null;

    /** Indicates whether or not to allow AirDrop when the device is in supervised mode. */
    public ?bool $airDropBlocked = null;

    /** Indicates whether or not to cause AirDrop to be considered an unmanaged drop target (iOS 9.0 and later). */
    public ?bool $airDropForceUnmanagedDropTarget = null;

    /** Indicates whether or not to enforce all devices receiving AirPlay requests from this device to use a pairing password. */
    public ?bool $airPlayForcePairingPasswordForOutgoingRequests = null;

    /** Indicates whether or not to block the user from using News when the device is in supervised mode (iOS 9.0 and later). */
    public ?bool $appleNewsBlocked = null;

    /** Indicates whether or not to allow Apple Watch pairing when the device is in supervised mode (iOS 9.0 and later). */
    public ?bool $appleWatchBlockPairing = null;

    /** Indicates whether or not to force a paired Apple Watch to use Wrist Detection (iOS 8.2 and later). */
    public ?bool $appleWatchForceWristDetection = null;

    /** 
     * Gets or sets the list of iOS apps allowed to autonomously enter Single App Mode. Supervised only. iOS 7.0 and later. This collection can contain a maximum of 500 elements.
     * @var AppListItem[]
     */
    public array $appsSingleAppModeList = [];

    /** Indicates whether or not to block the automatic downloading of apps purchased on other devices when the device is in supervised mode (iOS 9.0 and later). */
    public ?bool $appStoreBlockAutomaticDownloads = null;

    /** Indicates whether or not to block the user from using the App Store. Requires a supervised device for iOS 13 and later. */
    public ?bool $appStoreBlocked = null;

    /** Indicates whether or not to block the user from making in app purchases. */
    public ?bool $appStoreBlockInAppPurchases = null;

    /** Indicates whether or not to block the App Store app, not restricting installation through Host apps. Applies to supervised mode only (iOS 9.0 and later). */
    public ?bool $appStoreBlockUIAppInstallation = null;

    /** Indicates whether or not to require a password when using the app store. */
    public ?bool $appStoreRequirePassword = null;

    /** 
     * List of apps in the visibility list (either visible/launchable apps list or hidden/unlaunchable apps list, controlled by AppsVisibilityListType) (iOS 9.3 and later). This collection can contain a maximum of 10000 elements.
     * @var AppListItem[]
     */
    public array $appsVisibilityList = [];

    /**  */
    public ?AppListType $appsVisibilityListType = null;

    /** Indicates whether or not to allow modification of Bluetooth settings when the device is in supervised mode (iOS 10.0 and later). */
    public ?bool $bluetoothBlockModification = null;

    /** Indicates whether or not to block the user from accessing the camera of the device. Requires a supervised device for iOS 13 and later. */
    public ?bool $cameraBlocked = null;

    /** Indicates whether or not to block data roaming. */
    public ?bool $cellularBlockDataRoaming = null;

    /** Indicates whether or not to block global background fetch while roaming. */
    public ?bool $cellularBlockGlobalBackgroundFetchWhileRoaming = null;

    /** Indicates whether or not to allow changes to cellular app data usage settings when the device is in supervised mode. */
    public ?bool $cellularBlockPerAppDataModification = null;

    /** Indicates whether or not to block Personal Hotspot. */
    public ?bool $cellularBlockPersonalHotspot = null;

    /** Indicates whether or not to block voice roaming. */
    public ?bool $cellularBlockVoiceRoaming = null;

    /** Indicates whether or not to block untrusted TLS certificates. */
    public ?bool $certificatesBlockUntrustedTlsCertificates = null;

    /** Indicates whether or not to allow remote screen observation by Classroom app when the device is in supervised mode (iOS 9.3 and later). */
    public ?bool $classroomAppBlockRemoteScreenObservation = null;

    /** Indicates whether or not to automatically give permission to the teacher of a managed course on the Classroom app to view a student's screen without prompting when the device is in supervised mode. */
    public ?bool $classroomAppForceUnpromptedScreenObservation = null;

    /**  */
    public ?AppListType $compliantAppListType = null;

    /** 
     * List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements.
     * @var AppListItem[]
     */
    public array $compliantAppsList = [];

    /** Indicates whether or not to block the user from installing configuration profiles and certificates interactively when the device is in supervised mode. */
    public ?bool $configurationProfileBlockChanges = null;

    /** Indicates whether or not to block definition lookup when the device is in supervised mode (iOS 8.1.3 and later ). */
    public ?bool $definitionLookupBlocked = null;

    /** Indicates whether or not to allow the user to enables restrictions in the device settings when the device is in supervised mode. */
    public ?bool $deviceBlockEnableRestrictions = null;

    /** Indicates whether or not to allow the use of the 'Erase all content and settings' option on the device when the device is in supervised mode. */
    public ?bool $deviceBlockEraseContentAndSettings = null;

    /** Indicates whether or not to allow device name modification when the device is in supervised mode (iOS 9.0 and later). */
    public ?bool $deviceBlockNameModification = null;

    /** Indicates whether or not to block diagnostic data submission. */
    public ?bool $diagnosticDataBlockSubmission = null;

    /** Indicates whether or not to allow diagnostics submission settings modification when the device is in supervised mode (iOS 9.3.2 and later). */
    public ?bool $diagnosticDataBlockSubmissionModification = null;

    /** Indicates whether or not to block the user from viewing managed documents in unmanaged apps. */
    public ?bool $documentsBlockManagedDocumentsInUnmanagedApps = null;

    /** Indicates whether or not to block the user from viewing unmanaged documents in managed apps. */
    public ?bool $documentsBlockUnmanagedDocumentsInManagedApps = null;

    /** 
     * An email address lacking a suffix that matches any of these strings will be considered out-of-domain.
     * @var string[]
     */
    public array $emailInDomainSuffixes = [];

    /** Indicates whether or not to block the user from trusting an enterprise app. */
    public ?bool $enterpriseAppBlockTrust = null;

    /** [Deprecated] Configuring this setting and setting the value to 'true' has no effect on the device. */
    public ?bool $enterpriseAppBlockTrustModification = null;

    /** Indicates whether or not to block the user from using FaceTime. Requires a supervised device for iOS 13 and later. */
    public ?bool $faceTimeBlocked = null;

    /** Indicates whether or not to block changes to Find My Friends when the device is in supervised mode. */
    public ?bool $findMyFriendsBlocked = null;

    /** Indicates whether or not to block the user from using Game Center when the device is in supervised mode. */
    public ?bool $gameCenterBlocked = null;

    /** Indicates whether or not to block the user from having friends in Game Center. Requires a supervised device for iOS 13 and later. */
    public ?bool $gamingBlockGameCenterFriends = null;

    /** Indicates whether or not to block the user from using multiplayer gaming. Requires a supervised device for iOS 13 and later. */
    public ?bool $gamingBlockMultiplayer = null;

    /** indicates whether or not to allow host pairing to control the devices an iOS device can pair with when the iOS device is in supervised mode. */
    public ?bool $hostPairingBlocked = null;

    /** Indicates whether or not to block the user from using the iBooks Store when the device is in supervised mode. */
    public ?bool $iBooksStoreBlocked = null;

    /** Indicates whether or not to block the user from downloading media from the iBookstore that has been tagged as erotica. */
    public ?bool $iBooksStoreBlockErotica = null;

    /** Indicates whether or not to block the user from continuing work they started on iOS device to another iOS or macOS device. */
    public ?bool $iCloudBlockActivityContinuation = null;

    /** Indicates whether or not to block iCloud backup. Requires a supervised device for iOS 13 and later. */
    public ?bool $iCloudBlockBackup = null;

    /** Indicates whether or not to block iCloud document sync. Requires a supervised device for iOS 13 and later. */
    public ?bool $iCloudBlockDocumentSync = null;

    /** Indicates whether or not to block Managed Apps Cloud Sync. */
    public ?bool $iCloudBlockManagedAppsSync = null;

    /** Indicates whether or not to block iCloud Photo Library. */
    public ?bool $iCloudBlockPhotoLibrary = null;

    /** Indicates whether or not to block iCloud Photo Stream Sync. */
    public ?bool $iCloudBlockPhotoStreamSync = null;

    /** Indicates whether or not to block Shared Photo Stream. */
    public ?bool $iCloudBlockSharedPhotoStream = null;

    /** Indicates whether or not to require backups to iCloud be encrypted. */
    public ?bool $iCloudRequireEncryptedBackup = null;

    /** Indicates whether or not to block the user from accessing explicit content in iTunes and the App Store. Requires a supervised device for iOS 13 and later. */
    public ?bool $iTunesBlockExplicitContent = null;

    /** Indicates whether or not to block Music service and revert Music app to classic mode when the device is in supervised mode (iOS 9.3 and later and macOS 10.12 and later). */
    public ?bool $iTunesBlockMusicService = null;

    /** Indicates whether or not to block the user from using iTunes Radio when the device is in supervised mode (iOS 9.3 and later). */
    public ?bool $iTunesBlockRadio = null;

    /** Indicates whether or not to block keyboard auto-correction when the device is in supervised mode (iOS 8.1.3 and later). */
    public ?bool $keyboardBlockAutoCorrect = null;

    /** Indicates whether or not to block the user from using dictation input when the device is in supervised mode. */
    public ?bool $keyboardBlockDictation = null;

    /** Indicates whether or not to block predictive keyboards when device is in supervised mode (iOS 8.1.3 and later). */
    public ?bool $keyboardBlockPredictive = null;

    /** Indicates whether or not to block keyboard shortcuts when the device is in supervised mode (iOS 9.0 and later). */
    public ?bool $keyboardBlockShortcuts = null;

    /** Indicates whether or not to block keyboard spell-checking when the device is in supervised mode (iOS 8.1.3 and later). */
    public ?bool $keyboardBlockSpellCheck = null;

    /** Indicates whether or not to allow assistive speak while in kiosk mode. */
    public ?bool $kioskModeAllowAssistiveSpeak = null;

    /** Indicates whether or not to allow access to the Assistive Touch Settings while in kiosk mode. */
    public ?bool $kioskModeAllowAssistiveTouchSettings = null;

    /** Indicates whether or not to allow device auto lock while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockAutoLock instead. */
    public ?bool $kioskModeAllowAutoLock = null;

    /** Indicates whether or not to allow access to the Color Inversion Settings while in kiosk mode. */
    public ?bool $kioskModeAllowColorInversionSettings = null;

    /** Indicates whether or not to allow use of the ringer switch while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockRingerSwitch instead. */
    public ?bool $kioskModeAllowRingerSwitch = null;

    /** Indicates whether or not to allow screen rotation while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockScreenRotation instead. */
    public ?bool $kioskModeAllowScreenRotation = null;

    /** Indicates whether or not to allow use of the sleep button while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockSleepButton instead. */
    public ?bool $kioskModeAllowSleepButton = null;

    /** Indicates whether or not to allow use of the touchscreen while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockTouchscreen instead. */
    public ?bool $kioskModeAllowTouchscreen = null;

    /** Indicates whether or not to allow access to the voice over settings while in kiosk mode. */
    public ?bool $kioskModeAllowVoiceOverSettings = null;

    /** Indicates whether or not to allow use of the volume buttons while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockVolumeButtons instead. */
    public ?bool $kioskModeAllowVolumeButtons = null;

    /** Indicates whether or not to allow access to the zoom settings while in kiosk mode. */
    public ?bool $kioskModeAllowZoomSettings = null;

    /** URL in the app store to the app to use for kiosk mode. Use if KioskModeManagedAppId is not known. */
    public ?string $kioskModeAppStoreUrl = null;

    /** ID for built-in apps to use for kiosk mode. Used when KioskModeManagedAppId and KioskModeAppStoreUrl are not set. */
    public ?string $kioskModeBuiltInAppId = null;

    /** Managed app id of the app to use for kiosk mode. If KioskModeManagedAppId is specified then KioskModeAppStoreUrl will be ignored. */
    public ?string $kioskModeManagedAppId = null;

    /** Indicates whether or not to require assistive touch while in kiosk mode. */
    public ?bool $kioskModeRequireAssistiveTouch = null;

    /** Indicates whether or not to require color inversion while in kiosk mode. */
    public ?bool $kioskModeRequireColorInversion = null;

    /** Indicates whether or not to require mono audio while in kiosk mode. */
    public ?bool $kioskModeRequireMonoAudio = null;

    /** Indicates whether or not to require voice over while in kiosk mode. */
    public ?bool $kioskModeRequireVoiceOver = null;

    /** Indicates whether or not to require zoom while in kiosk mode. */
    public ?bool $kioskModeRequireZoom = null;

    /** Indicates whether or not to block the user from using control center on the lock screen. */
    public ?bool $lockScreenBlockControlCenter = null;

    /** Indicates whether or not to block the user from using the notification view on the lock screen. */
    public ?bool $lockScreenBlockNotificationView = null;

    /** Indicates whether or not to block the user from using passbook when the device is locked. */
    public ?bool $lockScreenBlockPassbook = null;

    /** Indicates whether or not to block the user from using the Today View on the lock screen. */
    public ?bool $lockScreenBlockTodayView = null;

    /**  */
    public ?RatingAppsType $mediaContentRatingApps = null;

    /** 
     * Media content rating settings for Australia
     * @var MediaContentRatingAustralia|\stdClass|null
     */
    public MediaContentRatingAustralia|\stdClass|null $mediaContentRatingAustralia = null;

    /** 
     * Media content rating settings for Canada
     * @var MediaContentRatingCanada|\stdClass|null
     */
    public MediaContentRatingCanada|\stdClass|null $mediaContentRatingCanada = null;

    /** 
     * Media content rating settings for France
     * @var MediaContentRatingFrance|\stdClass|null
     */
    public MediaContentRatingFrance|\stdClass|null $mediaContentRatingFrance = null;

    /** 
     * Media content rating settings for Germany
     * @var MediaContentRatingGermany|\stdClass|null
     */
    public MediaContentRatingGermany|\stdClass|null $mediaContentRatingGermany = null;

    /** 
     * Media content rating settings for Ireland
     * @var MediaContentRatingIreland|\stdClass|null
     */
    public MediaContentRatingIreland|\stdClass|null $mediaContentRatingIreland = null;

    /** 
     * Media content rating settings for Japan
     * @var MediaContentRatingJapan|\stdClass|null
     */
    public MediaContentRatingJapan|\stdClass|null $mediaContentRatingJapan = null;

    /** 
     * Media content rating settings for New Zealand
     * @var MediaContentRatingNewZealand|\stdClass|null
     */
    public MediaContentRatingNewZealand|\stdClass|null $mediaContentRatingNewZealand = null;

    /** 
     * Media content rating settings for United Kingdom
     * @var MediaContentRatingUnitedKingdom|\stdClass|null
     */
    public MediaContentRatingUnitedKingdom|\stdClass|null $mediaContentRatingUnitedKingdom = null;

    /** 
     * Media content rating settings for United States
     * @var MediaContentRatingUnitedStates|\stdClass|null
     */
    public MediaContentRatingUnitedStates|\stdClass|null $mediaContentRatingUnitedStates = null;

    /** Indicates whether or not to block the user from using the Messages app on the supervised device. */
    public ?bool $messagesBlocked = null;

    /** 
     * List of managed apps and the network rules that applies to them. This collection can contain a maximum of 1000 elements.
     * @var IosNetworkUsageRule[]
     */
    public array $networkUsageRules = [];

    /** Indicates whether or not to allow notifications settings modification (iOS 9.3 and later). */
    public ?bool $notificationsBlockSettingsModification = null;

    /** Block modification of registered Touch ID fingerprints when in supervised mode. */
    public ?bool $passcodeBlockFingerprintModification = null;

    /** Indicates whether or not to block fingerprint unlock. */
    public ?bool $passcodeBlockFingerprintUnlock = null;

    /** Indicates whether or not to allow passcode modification on the supervised device (iOS 9.0 and later). */
    public ?bool $passcodeBlockModification = null;

    /** Indicates whether or not to block simple passcodes. */
    public ?bool $passcodeBlockSimple = null;

    /** Number of days before the passcode expires. Valid values 1 to 65535 */
    public ?float $passcodeExpirationDays = null;

    /** Number of character sets a passcode must contain. Valid values 0 to 4 */
    public ?float $passcodeMinimumCharacterSetCount = null;

    /** Minimum length of passcode. Valid values 4 to 14 */
    public ?float $passcodeMinimumLength = null;

    /** Minutes of inactivity before a passcode is required. */
    public ?float $passcodeMinutesOfInactivityBeforeLock = null;

    /** Minutes of inactivity before the screen times out. */
    public ?float $passcodeMinutesOfInactivityBeforeScreenTimeout = null;

    /** Number of previous passcodes to block. Valid values 1 to 24 */
    public ?float $passcodePreviousPasscodeBlockCount = null;

    /** Indicates whether or not to require a passcode. */
    public ?bool $passcodeRequired = null;

    /**  */
    public ?RequiredPasswordType $passcodeRequiredType = null;

    /** Number of sign in failures allowed before wiping the device. Valid values 2 to 11 */
    public ?float $passcodeSignInFailureCountBeforeWipe = null;

    /** Indicates whether or not to block the user from using podcasts on the supervised device (iOS 8.0 and later). */
    public ?bool $podcastsBlocked = null;

    /** Indicates whether or not to block the user from using Auto fill in Safari. Requires a supervised device for iOS 13 and later. */
    public ?bool $safariBlockAutofill = null;

    /** Indicates whether or not to block the user from using Safari. Requires a supervised device for iOS 13 and later. */
    public ?bool $safariBlocked = null;

    /** Indicates whether or not to block JavaScript in Safari. */
    public ?bool $safariBlockJavaScript = null;

    /** Indicates whether or not to block popups in Safari. */
    public ?bool $safariBlockPopups = null;

    /**  */
    public ?WebBrowserCookieSettings $safariCookieSettings = null;

    /** 
     * URLs matching the patterns listed here will be considered managed.
     * @var string[]
     */
    public array $safariManagedDomains = [];

    /** 
     * Users can save passwords in Safari only from URLs matching the patterns listed here. Applies to devices in supervised mode (iOS 9.3 and later).
     * @var string[]
     */
    public array $safariPasswordAutoFillDomains = [];

    /** Indicates whether or not to require fraud warning in Safari. */
    public ?bool $safariRequireFraudWarning = null;

    /** Indicates whether or not to block the user from taking Screenshots. */
    public ?bool $screenCaptureBlocked = null;

    /** Indicates whether or not to block the user from using Siri. */
    public ?bool $siriBlocked = null;

    /** Indicates whether or not to block the user from using Siri when locked. */
    public ?bool $siriBlockedWhenLocked = null;

    /** Indicates whether or not to block Siri from querying user-generated content when used on a supervised device. */
    public ?bool $siriBlockUserGeneratedContent = null;

    /** Indicates whether or not to prevent Siri from dictating, or speaking profane language on supervised device. */
    public ?bool $siriRequireProfanityFilter = null;

    /** Indicates whether or not to block Spotlight search from returning internet results on supervised device. */
    public ?bool $spotlightBlockInternetResults = null;

    /** Indicates whether or not to block voice dialing. */
    public ?bool $voiceDialingBlocked = null;

    /** Indicates whether or not to allow wallpaper modification on supervised device (iOS 9.0 and later) . */
    public ?bool $wallpaperBlockModification = null;

    /** Indicates whether or not to force the device to use only Wi-Fi networks from configuration profiles when the device is in supervised mode. Available for devices running iOS and iPadOS versions 14.4 and earlier. Devices running 14.5+ should use the setting, 'WiFiConnectToAllowedNetworksOnlyForced. */
    public ?bool $wiFiConnectOnlyToConfiguredNetworks = null;


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
        if (isset($data['accountBlockModification'])) {
            $this->accountBlockModification = is_bool($data['accountBlockModification']) ? $data['accountBlockModification'] : (bool)$data['accountBlockModification'];
        }
        if (isset($data['activationLockAllowWhenSupervised'])) {
            $this->activationLockAllowWhenSupervised = is_bool($data['activationLockAllowWhenSupervised']) ? $data['activationLockAllowWhenSupervised'] : (bool)$data['activationLockAllowWhenSupervised'];
        }
        if (isset($data['airDropBlocked'])) {
            $this->airDropBlocked = is_bool($data['airDropBlocked']) ? $data['airDropBlocked'] : (bool)$data['airDropBlocked'];
        }
        if (isset($data['airDropForceUnmanagedDropTarget'])) {
            $this->airDropForceUnmanagedDropTarget = is_bool($data['airDropForceUnmanagedDropTarget']) ? $data['airDropForceUnmanagedDropTarget'] : (bool)$data['airDropForceUnmanagedDropTarget'];
        }
        if (isset($data['airPlayForcePairingPasswordForOutgoingRequests'])) {
            $this->airPlayForcePairingPasswordForOutgoingRequests = is_bool($data['airPlayForcePairingPasswordForOutgoingRequests']) ? $data['airPlayForcePairingPasswordForOutgoingRequests'] : (bool)$data['airPlayForcePairingPasswordForOutgoingRequests'];
        }
        if (isset($data['appleNewsBlocked'])) {
            $this->appleNewsBlocked = is_bool($data['appleNewsBlocked']) ? $data['appleNewsBlocked'] : (bool)$data['appleNewsBlocked'];
        }
        if (isset($data['appleWatchBlockPairing'])) {
            $this->appleWatchBlockPairing = is_bool($data['appleWatchBlockPairing']) ? $data['appleWatchBlockPairing'] : (bool)$data['appleWatchBlockPairing'];
        }
        if (isset($data['appleWatchForceWristDetection'])) {
            $this->appleWatchForceWristDetection = is_bool($data['appleWatchForceWristDetection']) ? $data['appleWatchForceWristDetection'] : (bool)$data['appleWatchForceWristDetection'];
        }
        if (isset($data['appsSingleAppModeList'])) {
            $this->appsSingleAppModeList = $data['appsSingleAppModeList'];
        }
        if (isset($data['appStoreBlockAutomaticDownloads'])) {
            $this->appStoreBlockAutomaticDownloads = is_bool($data['appStoreBlockAutomaticDownloads']) ? $data['appStoreBlockAutomaticDownloads'] : (bool)$data['appStoreBlockAutomaticDownloads'];
        }
        if (isset($data['appStoreBlocked'])) {
            $this->appStoreBlocked = is_bool($data['appStoreBlocked']) ? $data['appStoreBlocked'] : (bool)$data['appStoreBlocked'];
        }
        if (isset($data['appStoreBlockInAppPurchases'])) {
            $this->appStoreBlockInAppPurchases = is_bool($data['appStoreBlockInAppPurchases']) ? $data['appStoreBlockInAppPurchases'] : (bool)$data['appStoreBlockInAppPurchases'];
        }
        if (isset($data['appStoreBlockUIAppInstallation'])) {
            $this->appStoreBlockUIAppInstallation = is_bool($data['appStoreBlockUIAppInstallation']) ? $data['appStoreBlockUIAppInstallation'] : (bool)$data['appStoreBlockUIAppInstallation'];
        }
        if (isset($data['appStoreRequirePassword'])) {
            $this->appStoreRequirePassword = is_bool($data['appStoreRequirePassword']) ? $data['appStoreRequirePassword'] : (bool)$data['appStoreRequirePassword'];
        }
        if (isset($data['appsVisibilityList'])) {
            $this->appsVisibilityList = $data['appsVisibilityList'];
        }
        if (isset($data['appsVisibilityListType'])) {
            $this->appsVisibilityListType = is_array($data['appsVisibilityListType']) ? new AppListType($data['appsVisibilityListType']) : $data['appsVisibilityListType'];
        }
        if (isset($data['bluetoothBlockModification'])) {
            $this->bluetoothBlockModification = is_bool($data['bluetoothBlockModification']) ? $data['bluetoothBlockModification'] : (bool)$data['bluetoothBlockModification'];
        }
        if (isset($data['cameraBlocked'])) {
            $this->cameraBlocked = is_bool($data['cameraBlocked']) ? $data['cameraBlocked'] : (bool)$data['cameraBlocked'];
        }
        if (isset($data['cellularBlockDataRoaming'])) {
            $this->cellularBlockDataRoaming = is_bool($data['cellularBlockDataRoaming']) ? $data['cellularBlockDataRoaming'] : (bool)$data['cellularBlockDataRoaming'];
        }
        if (isset($data['cellularBlockGlobalBackgroundFetchWhileRoaming'])) {
            $this->cellularBlockGlobalBackgroundFetchWhileRoaming = is_bool($data['cellularBlockGlobalBackgroundFetchWhileRoaming']) ? $data['cellularBlockGlobalBackgroundFetchWhileRoaming'] : (bool)$data['cellularBlockGlobalBackgroundFetchWhileRoaming'];
        }
        if (isset($data['cellularBlockPerAppDataModification'])) {
            $this->cellularBlockPerAppDataModification = is_bool($data['cellularBlockPerAppDataModification']) ? $data['cellularBlockPerAppDataModification'] : (bool)$data['cellularBlockPerAppDataModification'];
        }
        if (isset($data['cellularBlockPersonalHotspot'])) {
            $this->cellularBlockPersonalHotspot = is_bool($data['cellularBlockPersonalHotspot']) ? $data['cellularBlockPersonalHotspot'] : (bool)$data['cellularBlockPersonalHotspot'];
        }
        if (isset($data['cellularBlockVoiceRoaming'])) {
            $this->cellularBlockVoiceRoaming = is_bool($data['cellularBlockVoiceRoaming']) ? $data['cellularBlockVoiceRoaming'] : (bool)$data['cellularBlockVoiceRoaming'];
        }
        if (isset($data['certificatesBlockUntrustedTlsCertificates'])) {
            $this->certificatesBlockUntrustedTlsCertificates = is_bool($data['certificatesBlockUntrustedTlsCertificates']) ? $data['certificatesBlockUntrustedTlsCertificates'] : (bool)$data['certificatesBlockUntrustedTlsCertificates'];
        }
        if (isset($data['classroomAppBlockRemoteScreenObservation'])) {
            $this->classroomAppBlockRemoteScreenObservation = is_bool($data['classroomAppBlockRemoteScreenObservation']) ? $data['classroomAppBlockRemoteScreenObservation'] : (bool)$data['classroomAppBlockRemoteScreenObservation'];
        }
        if (isset($data['classroomAppForceUnpromptedScreenObservation'])) {
            $this->classroomAppForceUnpromptedScreenObservation = is_bool($data['classroomAppForceUnpromptedScreenObservation']) ? $data['classroomAppForceUnpromptedScreenObservation'] : (bool)$data['classroomAppForceUnpromptedScreenObservation'];
        }
        if (isset($data['compliantAppListType'])) {
            $this->compliantAppListType = is_array($data['compliantAppListType']) ? new AppListType($data['compliantAppListType']) : $data['compliantAppListType'];
        }
        if (isset($data['compliantAppsList'])) {
            $this->compliantAppsList = $data['compliantAppsList'];
        }
        if (isset($data['configurationProfileBlockChanges'])) {
            $this->configurationProfileBlockChanges = is_bool($data['configurationProfileBlockChanges']) ? $data['configurationProfileBlockChanges'] : (bool)$data['configurationProfileBlockChanges'];
        }
        if (isset($data['definitionLookupBlocked'])) {
            $this->definitionLookupBlocked = is_bool($data['definitionLookupBlocked']) ? $data['definitionLookupBlocked'] : (bool)$data['definitionLookupBlocked'];
        }
        if (isset($data['deviceBlockEnableRestrictions'])) {
            $this->deviceBlockEnableRestrictions = is_bool($data['deviceBlockEnableRestrictions']) ? $data['deviceBlockEnableRestrictions'] : (bool)$data['deviceBlockEnableRestrictions'];
        }
        if (isset($data['deviceBlockEraseContentAndSettings'])) {
            $this->deviceBlockEraseContentAndSettings = is_bool($data['deviceBlockEraseContentAndSettings']) ? $data['deviceBlockEraseContentAndSettings'] : (bool)$data['deviceBlockEraseContentAndSettings'];
        }
        if (isset($data['deviceBlockNameModification'])) {
            $this->deviceBlockNameModification = is_bool($data['deviceBlockNameModification']) ? $data['deviceBlockNameModification'] : (bool)$data['deviceBlockNameModification'];
        }
        if (isset($data['diagnosticDataBlockSubmission'])) {
            $this->diagnosticDataBlockSubmission = is_bool($data['diagnosticDataBlockSubmission']) ? $data['diagnosticDataBlockSubmission'] : (bool)$data['diagnosticDataBlockSubmission'];
        }
        if (isset($data['diagnosticDataBlockSubmissionModification'])) {
            $this->diagnosticDataBlockSubmissionModification = is_bool($data['diagnosticDataBlockSubmissionModification']) ? $data['diagnosticDataBlockSubmissionModification'] : (bool)$data['diagnosticDataBlockSubmissionModification'];
        }
        if (isset($data['documentsBlockManagedDocumentsInUnmanagedApps'])) {
            $this->documentsBlockManagedDocumentsInUnmanagedApps = is_bool($data['documentsBlockManagedDocumentsInUnmanagedApps']) ? $data['documentsBlockManagedDocumentsInUnmanagedApps'] : (bool)$data['documentsBlockManagedDocumentsInUnmanagedApps'];
        }
        if (isset($data['documentsBlockUnmanagedDocumentsInManagedApps'])) {
            $this->documentsBlockUnmanagedDocumentsInManagedApps = is_bool($data['documentsBlockUnmanagedDocumentsInManagedApps']) ? $data['documentsBlockUnmanagedDocumentsInManagedApps'] : (bool)$data['documentsBlockUnmanagedDocumentsInManagedApps'];
        }
        if (isset($data['emailInDomainSuffixes'])) {
            $this->emailInDomainSuffixes = $data['emailInDomainSuffixes'];
        }
        if (isset($data['enterpriseAppBlockTrust'])) {
            $this->enterpriseAppBlockTrust = is_bool($data['enterpriseAppBlockTrust']) ? $data['enterpriseAppBlockTrust'] : (bool)$data['enterpriseAppBlockTrust'];
        }
        if (isset($data['enterpriseAppBlockTrustModification'])) {
            $this->enterpriseAppBlockTrustModification = is_bool($data['enterpriseAppBlockTrustModification']) ? $data['enterpriseAppBlockTrustModification'] : (bool)$data['enterpriseAppBlockTrustModification'];
        }
        if (isset($data['faceTimeBlocked'])) {
            $this->faceTimeBlocked = is_bool($data['faceTimeBlocked']) ? $data['faceTimeBlocked'] : (bool)$data['faceTimeBlocked'];
        }
        if (isset($data['findMyFriendsBlocked'])) {
            $this->findMyFriendsBlocked = is_bool($data['findMyFriendsBlocked']) ? $data['findMyFriendsBlocked'] : (bool)$data['findMyFriendsBlocked'];
        }
        if (isset($data['gameCenterBlocked'])) {
            $this->gameCenterBlocked = is_bool($data['gameCenterBlocked']) ? $data['gameCenterBlocked'] : (bool)$data['gameCenterBlocked'];
        }
        if (isset($data['gamingBlockGameCenterFriends'])) {
            $this->gamingBlockGameCenterFriends = is_bool($data['gamingBlockGameCenterFriends']) ? $data['gamingBlockGameCenterFriends'] : (bool)$data['gamingBlockGameCenterFriends'];
        }
        if (isset($data['gamingBlockMultiplayer'])) {
            $this->gamingBlockMultiplayer = is_bool($data['gamingBlockMultiplayer']) ? $data['gamingBlockMultiplayer'] : (bool)$data['gamingBlockMultiplayer'];
        }
        if (isset($data['hostPairingBlocked'])) {
            $this->hostPairingBlocked = is_bool($data['hostPairingBlocked']) ? $data['hostPairingBlocked'] : (bool)$data['hostPairingBlocked'];
        }
        if (isset($data['iBooksStoreBlocked'])) {
            $this->iBooksStoreBlocked = is_bool($data['iBooksStoreBlocked']) ? $data['iBooksStoreBlocked'] : (bool)$data['iBooksStoreBlocked'];
        }
        if (isset($data['iBooksStoreBlockErotica'])) {
            $this->iBooksStoreBlockErotica = is_bool($data['iBooksStoreBlockErotica']) ? $data['iBooksStoreBlockErotica'] : (bool)$data['iBooksStoreBlockErotica'];
        }
        if (isset($data['iCloudBlockActivityContinuation'])) {
            $this->iCloudBlockActivityContinuation = is_bool($data['iCloudBlockActivityContinuation']) ? $data['iCloudBlockActivityContinuation'] : (bool)$data['iCloudBlockActivityContinuation'];
        }
        if (isset($data['iCloudBlockBackup'])) {
            $this->iCloudBlockBackup = is_bool($data['iCloudBlockBackup']) ? $data['iCloudBlockBackup'] : (bool)$data['iCloudBlockBackup'];
        }
        if (isset($data['iCloudBlockDocumentSync'])) {
            $this->iCloudBlockDocumentSync = is_bool($data['iCloudBlockDocumentSync']) ? $data['iCloudBlockDocumentSync'] : (bool)$data['iCloudBlockDocumentSync'];
        }
        if (isset($data['iCloudBlockManagedAppsSync'])) {
            $this->iCloudBlockManagedAppsSync = is_bool($data['iCloudBlockManagedAppsSync']) ? $data['iCloudBlockManagedAppsSync'] : (bool)$data['iCloudBlockManagedAppsSync'];
        }
        if (isset($data['iCloudBlockPhotoLibrary'])) {
            $this->iCloudBlockPhotoLibrary = is_bool($data['iCloudBlockPhotoLibrary']) ? $data['iCloudBlockPhotoLibrary'] : (bool)$data['iCloudBlockPhotoLibrary'];
        }
        if (isset($data['iCloudBlockPhotoStreamSync'])) {
            $this->iCloudBlockPhotoStreamSync = is_bool($data['iCloudBlockPhotoStreamSync']) ? $data['iCloudBlockPhotoStreamSync'] : (bool)$data['iCloudBlockPhotoStreamSync'];
        }
        if (isset($data['iCloudBlockSharedPhotoStream'])) {
            $this->iCloudBlockSharedPhotoStream = is_bool($data['iCloudBlockSharedPhotoStream']) ? $data['iCloudBlockSharedPhotoStream'] : (bool)$data['iCloudBlockSharedPhotoStream'];
        }
        if (isset($data['iCloudRequireEncryptedBackup'])) {
            $this->iCloudRequireEncryptedBackup = is_bool($data['iCloudRequireEncryptedBackup']) ? $data['iCloudRequireEncryptedBackup'] : (bool)$data['iCloudRequireEncryptedBackup'];
        }
        if (isset($data['iTunesBlockExplicitContent'])) {
            $this->iTunesBlockExplicitContent = is_bool($data['iTunesBlockExplicitContent']) ? $data['iTunesBlockExplicitContent'] : (bool)$data['iTunesBlockExplicitContent'];
        }
        if (isset($data['iTunesBlockMusicService'])) {
            $this->iTunesBlockMusicService = is_bool($data['iTunesBlockMusicService']) ? $data['iTunesBlockMusicService'] : (bool)$data['iTunesBlockMusicService'];
        }
        if (isset($data['iTunesBlockRadio'])) {
            $this->iTunesBlockRadio = is_bool($data['iTunesBlockRadio']) ? $data['iTunesBlockRadio'] : (bool)$data['iTunesBlockRadio'];
        }
        if (isset($data['keyboardBlockAutoCorrect'])) {
            $this->keyboardBlockAutoCorrect = is_bool($data['keyboardBlockAutoCorrect']) ? $data['keyboardBlockAutoCorrect'] : (bool)$data['keyboardBlockAutoCorrect'];
        }
        if (isset($data['keyboardBlockDictation'])) {
            $this->keyboardBlockDictation = is_bool($data['keyboardBlockDictation']) ? $data['keyboardBlockDictation'] : (bool)$data['keyboardBlockDictation'];
        }
        if (isset($data['keyboardBlockPredictive'])) {
            $this->keyboardBlockPredictive = is_bool($data['keyboardBlockPredictive']) ? $data['keyboardBlockPredictive'] : (bool)$data['keyboardBlockPredictive'];
        }
        if (isset($data['keyboardBlockShortcuts'])) {
            $this->keyboardBlockShortcuts = is_bool($data['keyboardBlockShortcuts']) ? $data['keyboardBlockShortcuts'] : (bool)$data['keyboardBlockShortcuts'];
        }
        if (isset($data['keyboardBlockSpellCheck'])) {
            $this->keyboardBlockSpellCheck = is_bool($data['keyboardBlockSpellCheck']) ? $data['keyboardBlockSpellCheck'] : (bool)$data['keyboardBlockSpellCheck'];
        }
        if (isset($data['kioskModeAllowAssistiveSpeak'])) {
            $this->kioskModeAllowAssistiveSpeak = is_bool($data['kioskModeAllowAssistiveSpeak']) ? $data['kioskModeAllowAssistiveSpeak'] : (bool)$data['kioskModeAllowAssistiveSpeak'];
        }
        if (isset($data['kioskModeAllowAssistiveTouchSettings'])) {
            $this->kioskModeAllowAssistiveTouchSettings = is_bool($data['kioskModeAllowAssistiveTouchSettings']) ? $data['kioskModeAllowAssistiveTouchSettings'] : (bool)$data['kioskModeAllowAssistiveTouchSettings'];
        }
        if (isset($data['kioskModeAllowAutoLock'])) {
            $this->kioskModeAllowAutoLock = is_bool($data['kioskModeAllowAutoLock']) ? $data['kioskModeAllowAutoLock'] : (bool)$data['kioskModeAllowAutoLock'];
        }
        if (isset($data['kioskModeAllowColorInversionSettings'])) {
            $this->kioskModeAllowColorInversionSettings = is_bool($data['kioskModeAllowColorInversionSettings']) ? $data['kioskModeAllowColorInversionSettings'] : (bool)$data['kioskModeAllowColorInversionSettings'];
        }
        if (isset($data['kioskModeAllowRingerSwitch'])) {
            $this->kioskModeAllowRingerSwitch = is_bool($data['kioskModeAllowRingerSwitch']) ? $data['kioskModeAllowRingerSwitch'] : (bool)$data['kioskModeAllowRingerSwitch'];
        }
        if (isset($data['kioskModeAllowScreenRotation'])) {
            $this->kioskModeAllowScreenRotation = is_bool($data['kioskModeAllowScreenRotation']) ? $data['kioskModeAllowScreenRotation'] : (bool)$data['kioskModeAllowScreenRotation'];
        }
        if (isset($data['kioskModeAllowSleepButton'])) {
            $this->kioskModeAllowSleepButton = is_bool($data['kioskModeAllowSleepButton']) ? $data['kioskModeAllowSleepButton'] : (bool)$data['kioskModeAllowSleepButton'];
        }
        if (isset($data['kioskModeAllowTouchscreen'])) {
            $this->kioskModeAllowTouchscreen = is_bool($data['kioskModeAllowTouchscreen']) ? $data['kioskModeAllowTouchscreen'] : (bool)$data['kioskModeAllowTouchscreen'];
        }
        if (isset($data['kioskModeAllowVoiceOverSettings'])) {
            $this->kioskModeAllowVoiceOverSettings = is_bool($data['kioskModeAllowVoiceOverSettings']) ? $data['kioskModeAllowVoiceOverSettings'] : (bool)$data['kioskModeAllowVoiceOverSettings'];
        }
        if (isset($data['kioskModeAllowVolumeButtons'])) {
            $this->kioskModeAllowVolumeButtons = is_bool($data['kioskModeAllowVolumeButtons']) ? $data['kioskModeAllowVolumeButtons'] : (bool)$data['kioskModeAllowVolumeButtons'];
        }
        if (isset($data['kioskModeAllowZoomSettings'])) {
            $this->kioskModeAllowZoomSettings = is_bool($data['kioskModeAllowZoomSettings']) ? $data['kioskModeAllowZoomSettings'] : (bool)$data['kioskModeAllowZoomSettings'];
        }
        if (isset($data['kioskModeAppStoreUrl'])) {
            $this->kioskModeAppStoreUrl = $data['kioskModeAppStoreUrl'];
        }
        if (isset($data['kioskModeBuiltInAppId'])) {
            $this->kioskModeBuiltInAppId = $data['kioskModeBuiltInAppId'];
        }
        if (isset($data['kioskModeManagedAppId'])) {
            $this->kioskModeManagedAppId = $data['kioskModeManagedAppId'];
        }
        if (isset($data['kioskModeRequireAssistiveTouch'])) {
            $this->kioskModeRequireAssistiveTouch = is_bool($data['kioskModeRequireAssistiveTouch']) ? $data['kioskModeRequireAssistiveTouch'] : (bool)$data['kioskModeRequireAssistiveTouch'];
        }
        if (isset($data['kioskModeRequireColorInversion'])) {
            $this->kioskModeRequireColorInversion = is_bool($data['kioskModeRequireColorInversion']) ? $data['kioskModeRequireColorInversion'] : (bool)$data['kioskModeRequireColorInversion'];
        }
        if (isset($data['kioskModeRequireMonoAudio'])) {
            $this->kioskModeRequireMonoAudio = is_bool($data['kioskModeRequireMonoAudio']) ? $data['kioskModeRequireMonoAudio'] : (bool)$data['kioskModeRequireMonoAudio'];
        }
        if (isset($data['kioskModeRequireVoiceOver'])) {
            $this->kioskModeRequireVoiceOver = is_bool($data['kioskModeRequireVoiceOver']) ? $data['kioskModeRequireVoiceOver'] : (bool)$data['kioskModeRequireVoiceOver'];
        }
        if (isset($data['kioskModeRequireZoom'])) {
            $this->kioskModeRequireZoom = is_bool($data['kioskModeRequireZoom']) ? $data['kioskModeRequireZoom'] : (bool)$data['kioskModeRequireZoom'];
        }
        if (isset($data['lockScreenBlockControlCenter'])) {
            $this->lockScreenBlockControlCenter = is_bool($data['lockScreenBlockControlCenter']) ? $data['lockScreenBlockControlCenter'] : (bool)$data['lockScreenBlockControlCenter'];
        }
        if (isset($data['lockScreenBlockNotificationView'])) {
            $this->lockScreenBlockNotificationView = is_bool($data['lockScreenBlockNotificationView']) ? $data['lockScreenBlockNotificationView'] : (bool)$data['lockScreenBlockNotificationView'];
        }
        if (isset($data['lockScreenBlockPassbook'])) {
            $this->lockScreenBlockPassbook = is_bool($data['lockScreenBlockPassbook']) ? $data['lockScreenBlockPassbook'] : (bool)$data['lockScreenBlockPassbook'];
        }
        if (isset($data['lockScreenBlockTodayView'])) {
            $this->lockScreenBlockTodayView = is_bool($data['lockScreenBlockTodayView']) ? $data['lockScreenBlockTodayView'] : (bool)$data['lockScreenBlockTodayView'];
        }
        if (isset($data['mediaContentRatingApps'])) {
            $this->mediaContentRatingApps = is_array($data['mediaContentRatingApps']) ? new RatingAppsType($data['mediaContentRatingApps']) : $data['mediaContentRatingApps'];
        }
        if (isset($data['mediaContentRatingAustralia'])) {
            $this->mediaContentRatingAustralia = is_array($data['mediaContentRatingAustralia']) ? new MediaContentRatingAustralia($data['mediaContentRatingAustralia']) : $data['mediaContentRatingAustralia'];
        }
        if (isset($data['mediaContentRatingCanada'])) {
            $this->mediaContentRatingCanada = is_array($data['mediaContentRatingCanada']) ? new MediaContentRatingCanada($data['mediaContentRatingCanada']) : $data['mediaContentRatingCanada'];
        }
        if (isset($data['mediaContentRatingFrance'])) {
            $this->mediaContentRatingFrance = is_array($data['mediaContentRatingFrance']) ? new MediaContentRatingFrance($data['mediaContentRatingFrance']) : $data['mediaContentRatingFrance'];
        }
        if (isset($data['mediaContentRatingGermany'])) {
            $this->mediaContentRatingGermany = is_array($data['mediaContentRatingGermany']) ? new MediaContentRatingGermany($data['mediaContentRatingGermany']) : $data['mediaContentRatingGermany'];
        }
        if (isset($data['mediaContentRatingIreland'])) {
            $this->mediaContentRatingIreland = is_array($data['mediaContentRatingIreland']) ? new MediaContentRatingIreland($data['mediaContentRatingIreland']) : $data['mediaContentRatingIreland'];
        }
        if (isset($data['mediaContentRatingJapan'])) {
            $this->mediaContentRatingJapan = is_array($data['mediaContentRatingJapan']) ? new MediaContentRatingJapan($data['mediaContentRatingJapan']) : $data['mediaContentRatingJapan'];
        }
        if (isset($data['mediaContentRatingNewZealand'])) {
            $this->mediaContentRatingNewZealand = is_array($data['mediaContentRatingNewZealand']) ? new MediaContentRatingNewZealand($data['mediaContentRatingNewZealand']) : $data['mediaContentRatingNewZealand'];
        }
        if (isset($data['mediaContentRatingUnitedKingdom'])) {
            $this->mediaContentRatingUnitedKingdom = is_array($data['mediaContentRatingUnitedKingdom']) ? new MediaContentRatingUnitedKingdom($data['mediaContentRatingUnitedKingdom']) : $data['mediaContentRatingUnitedKingdom'];
        }
        if (isset($data['mediaContentRatingUnitedStates'])) {
            $this->mediaContentRatingUnitedStates = is_array($data['mediaContentRatingUnitedStates']) ? new MediaContentRatingUnitedStates($data['mediaContentRatingUnitedStates']) : $data['mediaContentRatingUnitedStates'];
        }
        if (isset($data['messagesBlocked'])) {
            $this->messagesBlocked = is_bool($data['messagesBlocked']) ? $data['messagesBlocked'] : (bool)$data['messagesBlocked'];
        }
        if (isset($data['networkUsageRules'])) {
            $this->networkUsageRules = $data['networkUsageRules'];
        }
        if (isset($data['notificationsBlockSettingsModification'])) {
            $this->notificationsBlockSettingsModification = is_bool($data['notificationsBlockSettingsModification']) ? $data['notificationsBlockSettingsModification'] : (bool)$data['notificationsBlockSettingsModification'];
        }
        if (isset($data['passcodeBlockFingerprintModification'])) {
            $this->passcodeBlockFingerprintModification = is_bool($data['passcodeBlockFingerprintModification']) ? $data['passcodeBlockFingerprintModification'] : (bool)$data['passcodeBlockFingerprintModification'];
        }
        if (isset($data['passcodeBlockFingerprintUnlock'])) {
            $this->passcodeBlockFingerprintUnlock = is_bool($data['passcodeBlockFingerprintUnlock']) ? $data['passcodeBlockFingerprintUnlock'] : (bool)$data['passcodeBlockFingerprintUnlock'];
        }
        if (isset($data['passcodeBlockModification'])) {
            $this->passcodeBlockModification = is_bool($data['passcodeBlockModification']) ? $data['passcodeBlockModification'] : (bool)$data['passcodeBlockModification'];
        }
        if (isset($data['passcodeBlockSimple'])) {
            $this->passcodeBlockSimple = is_bool($data['passcodeBlockSimple']) ? $data['passcodeBlockSimple'] : (bool)$data['passcodeBlockSimple'];
        }
        if (isset($data['passcodeExpirationDays'])) {
            $this->passcodeExpirationDays = is_numeric($data['passcodeExpirationDays']) ? (float)$data['passcodeExpirationDays'] : $data['passcodeExpirationDays'];
        }
        if (isset($data['passcodeMinimumCharacterSetCount'])) {
            $this->passcodeMinimumCharacterSetCount = is_numeric($data['passcodeMinimumCharacterSetCount']) ? (float)$data['passcodeMinimumCharacterSetCount'] : $data['passcodeMinimumCharacterSetCount'];
        }
        if (isset($data['passcodeMinimumLength'])) {
            $this->passcodeMinimumLength = is_numeric($data['passcodeMinimumLength']) ? (float)$data['passcodeMinimumLength'] : $data['passcodeMinimumLength'];
        }
        if (isset($data['passcodeMinutesOfInactivityBeforeLock'])) {
            $this->passcodeMinutesOfInactivityBeforeLock = is_numeric($data['passcodeMinutesOfInactivityBeforeLock']) ? (float)$data['passcodeMinutesOfInactivityBeforeLock'] : $data['passcodeMinutesOfInactivityBeforeLock'];
        }
        if (isset($data['passcodeMinutesOfInactivityBeforeScreenTimeout'])) {
            $this->passcodeMinutesOfInactivityBeforeScreenTimeout = is_numeric($data['passcodeMinutesOfInactivityBeforeScreenTimeout']) ? (float)$data['passcodeMinutesOfInactivityBeforeScreenTimeout'] : $data['passcodeMinutesOfInactivityBeforeScreenTimeout'];
        }
        if (isset($data['passcodePreviousPasscodeBlockCount'])) {
            $this->passcodePreviousPasscodeBlockCount = is_numeric($data['passcodePreviousPasscodeBlockCount']) ? (float)$data['passcodePreviousPasscodeBlockCount'] : $data['passcodePreviousPasscodeBlockCount'];
        }
        if (isset($data['passcodeRequired'])) {
            $this->passcodeRequired = is_bool($data['passcodeRequired']) ? $data['passcodeRequired'] : (bool)$data['passcodeRequired'];
        }
        if (isset($data['passcodeRequiredType'])) {
            $this->passcodeRequiredType = is_array($data['passcodeRequiredType']) ? new RequiredPasswordType($data['passcodeRequiredType']) : $data['passcodeRequiredType'];
        }
        if (isset($data['passcodeSignInFailureCountBeforeWipe'])) {
            $this->passcodeSignInFailureCountBeforeWipe = is_numeric($data['passcodeSignInFailureCountBeforeWipe']) ? (float)$data['passcodeSignInFailureCountBeforeWipe'] : $data['passcodeSignInFailureCountBeforeWipe'];
        }
        if (isset($data['podcastsBlocked'])) {
            $this->podcastsBlocked = is_bool($data['podcastsBlocked']) ? $data['podcastsBlocked'] : (bool)$data['podcastsBlocked'];
        }
        if (isset($data['safariBlockAutofill'])) {
            $this->safariBlockAutofill = is_bool($data['safariBlockAutofill']) ? $data['safariBlockAutofill'] : (bool)$data['safariBlockAutofill'];
        }
        if (isset($data['safariBlocked'])) {
            $this->safariBlocked = is_bool($data['safariBlocked']) ? $data['safariBlocked'] : (bool)$data['safariBlocked'];
        }
        if (isset($data['safariBlockJavaScript'])) {
            $this->safariBlockJavaScript = is_bool($data['safariBlockJavaScript']) ? $data['safariBlockJavaScript'] : (bool)$data['safariBlockJavaScript'];
        }
        if (isset($data['safariBlockPopups'])) {
            $this->safariBlockPopups = is_bool($data['safariBlockPopups']) ? $data['safariBlockPopups'] : (bool)$data['safariBlockPopups'];
        }
        if (isset($data['safariCookieSettings'])) {
            $this->safariCookieSettings = is_array($data['safariCookieSettings']) ? new WebBrowserCookieSettings($data['safariCookieSettings']) : $data['safariCookieSettings'];
        }
        if (isset($data['safariManagedDomains'])) {
            $this->safariManagedDomains = $data['safariManagedDomains'];
        }
        if (isset($data['safariPasswordAutoFillDomains'])) {
            $this->safariPasswordAutoFillDomains = $data['safariPasswordAutoFillDomains'];
        }
        if (isset($data['safariRequireFraudWarning'])) {
            $this->safariRequireFraudWarning = is_bool($data['safariRequireFraudWarning']) ? $data['safariRequireFraudWarning'] : (bool)$data['safariRequireFraudWarning'];
        }
        if (isset($data['screenCaptureBlocked'])) {
            $this->screenCaptureBlocked = is_bool($data['screenCaptureBlocked']) ? $data['screenCaptureBlocked'] : (bool)$data['screenCaptureBlocked'];
        }
        if (isset($data['siriBlocked'])) {
            $this->siriBlocked = is_bool($data['siriBlocked']) ? $data['siriBlocked'] : (bool)$data['siriBlocked'];
        }
        if (isset($data['siriBlockedWhenLocked'])) {
            $this->siriBlockedWhenLocked = is_bool($data['siriBlockedWhenLocked']) ? $data['siriBlockedWhenLocked'] : (bool)$data['siriBlockedWhenLocked'];
        }
        if (isset($data['siriBlockUserGeneratedContent'])) {
            $this->siriBlockUserGeneratedContent = is_bool($data['siriBlockUserGeneratedContent']) ? $data['siriBlockUserGeneratedContent'] : (bool)$data['siriBlockUserGeneratedContent'];
        }
        if (isset($data['siriRequireProfanityFilter'])) {
            $this->siriRequireProfanityFilter = is_bool($data['siriRequireProfanityFilter']) ? $data['siriRequireProfanityFilter'] : (bool)$data['siriRequireProfanityFilter'];
        }
        if (isset($data['spotlightBlockInternetResults'])) {
            $this->spotlightBlockInternetResults = is_bool($data['spotlightBlockInternetResults']) ? $data['spotlightBlockInternetResults'] : (bool)$data['spotlightBlockInternetResults'];
        }
        if (isset($data['voiceDialingBlocked'])) {
            $this->voiceDialingBlocked = is_bool($data['voiceDialingBlocked']) ? $data['voiceDialingBlocked'] : (bool)$data['voiceDialingBlocked'];
        }
        if (isset($data['wallpaperBlockModification'])) {
            $this->wallpaperBlockModification = is_bool($data['wallpaperBlockModification']) ? $data['wallpaperBlockModification'] : (bool)$data['wallpaperBlockModification'];
        }
        if (isset($data['wiFiConnectOnlyToConfiguredNetworks'])) {
            $this->wiFiConnectOnlyToConfiguredNetworks = is_bool($data['wiFiConnectOnlyToConfiguredNetworks']) ? $data['wiFiConnectOnlyToConfiguredNetworks'] : (bool)$data['wiFiConnectOnlyToConfiguredNetworks'];
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
