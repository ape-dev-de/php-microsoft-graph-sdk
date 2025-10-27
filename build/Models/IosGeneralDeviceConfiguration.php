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
    public mixed $deviceStatusOverview = null;

    /** 
     * Device configuration installation status by user.
     * @var DeviceConfigurationUserStatus[]
     */
    public array $userStatuses = [];

    /** 
     * Device Configuration users status overview
     * @var DeviceConfigurationUserOverview|\stdClass|null
     */
    public mixed $userStatusOverview = null;

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
    public mixed $mediaContentRatingAustralia = null;

    /** 
     * Media content rating settings for Canada
     * @var MediaContentRatingCanada|\stdClass|null
     */
    public mixed $mediaContentRatingCanada = null;

    /** 
     * Media content rating settings for France
     * @var MediaContentRatingFrance|\stdClass|null
     */
    public mixed $mediaContentRatingFrance = null;

    /** 
     * Media content rating settings for Germany
     * @var MediaContentRatingGermany|\stdClass|null
     */
    public mixed $mediaContentRatingGermany = null;

    /** 
     * Media content rating settings for Ireland
     * @var MediaContentRatingIreland|\stdClass|null
     */
    public mixed $mediaContentRatingIreland = null;

    /** 
     * Media content rating settings for Japan
     * @var MediaContentRatingJapan|\stdClass|null
     */
    public mixed $mediaContentRatingJapan = null;

    /** 
     * Media content rating settings for New Zealand
     * @var MediaContentRatingNewZealand|\stdClass|null
     */
    public mixed $mediaContentRatingNewZealand = null;

    /** 
     * Media content rating settings for United Kingdom
     * @var MediaContentRatingUnitedKingdom|\stdClass|null
     */
    public mixed $mediaContentRatingUnitedKingdom = null;

    /** 
     * Media content rating settings for United States
     * @var MediaContentRatingUnitedStates|\stdClass|null
     */
    public mixed $mediaContentRatingUnitedStates = null;

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
        if (isset($data['accountBlockModification'])) {
            $this->accountBlockModification = $data['accountBlockModification'];
        }
        if (isset($data['activationLockAllowWhenSupervised'])) {
            $this->activationLockAllowWhenSupervised = $data['activationLockAllowWhenSupervised'];
        }
        if (isset($data['airDropBlocked'])) {
            $this->airDropBlocked = $data['airDropBlocked'];
        }
        if (isset($data['airDropForceUnmanagedDropTarget'])) {
            $this->airDropForceUnmanagedDropTarget = $data['airDropForceUnmanagedDropTarget'];
        }
        if (isset($data['airPlayForcePairingPasswordForOutgoingRequests'])) {
            $this->airPlayForcePairingPasswordForOutgoingRequests = $data['airPlayForcePairingPasswordForOutgoingRequests'];
        }
        if (isset($data['appleNewsBlocked'])) {
            $this->appleNewsBlocked = $data['appleNewsBlocked'];
        }
        if (isset($data['appleWatchBlockPairing'])) {
            $this->appleWatchBlockPairing = $data['appleWatchBlockPairing'];
        }
        if (isset($data['appleWatchForceWristDetection'])) {
            $this->appleWatchForceWristDetection = $data['appleWatchForceWristDetection'];
        }
        if (isset($data['appsSingleAppModeList'])) {
            $this->appsSingleAppModeList = $data['appsSingleAppModeList'];
        }
        if (isset($data['appStoreBlockAutomaticDownloads'])) {
            $this->appStoreBlockAutomaticDownloads = $data['appStoreBlockAutomaticDownloads'];
        }
        if (isset($data['appStoreBlocked'])) {
            $this->appStoreBlocked = $data['appStoreBlocked'];
        }
        if (isset($data['appStoreBlockInAppPurchases'])) {
            $this->appStoreBlockInAppPurchases = $data['appStoreBlockInAppPurchases'];
        }
        if (isset($data['appStoreBlockUIAppInstallation'])) {
            $this->appStoreBlockUIAppInstallation = $data['appStoreBlockUIAppInstallation'];
        }
        if (isset($data['appStoreRequirePassword'])) {
            $this->appStoreRequirePassword = $data['appStoreRequirePassword'];
        }
        if (isset($data['appsVisibilityList'])) {
            $this->appsVisibilityList = $data['appsVisibilityList'];
        }
        if (isset($data['appsVisibilityListType'])) {
            $this->appsVisibilityListType = is_array($data['appsVisibilityListType']) ? new AppListType($data['appsVisibilityListType']) : $data['appsVisibilityListType'];
        }
        if (isset($data['bluetoothBlockModification'])) {
            $this->bluetoothBlockModification = $data['bluetoothBlockModification'];
        }
        if (isset($data['cameraBlocked'])) {
            $this->cameraBlocked = $data['cameraBlocked'];
        }
        if (isset($data['cellularBlockDataRoaming'])) {
            $this->cellularBlockDataRoaming = $data['cellularBlockDataRoaming'];
        }
        if (isset($data['cellularBlockGlobalBackgroundFetchWhileRoaming'])) {
            $this->cellularBlockGlobalBackgroundFetchWhileRoaming = $data['cellularBlockGlobalBackgroundFetchWhileRoaming'];
        }
        if (isset($data['cellularBlockPerAppDataModification'])) {
            $this->cellularBlockPerAppDataModification = $data['cellularBlockPerAppDataModification'];
        }
        if (isset($data['cellularBlockPersonalHotspot'])) {
            $this->cellularBlockPersonalHotspot = $data['cellularBlockPersonalHotspot'];
        }
        if (isset($data['cellularBlockVoiceRoaming'])) {
            $this->cellularBlockVoiceRoaming = $data['cellularBlockVoiceRoaming'];
        }
        if (isset($data['certificatesBlockUntrustedTlsCertificates'])) {
            $this->certificatesBlockUntrustedTlsCertificates = $data['certificatesBlockUntrustedTlsCertificates'];
        }
        if (isset($data['classroomAppBlockRemoteScreenObservation'])) {
            $this->classroomAppBlockRemoteScreenObservation = $data['classroomAppBlockRemoteScreenObservation'];
        }
        if (isset($data['classroomAppForceUnpromptedScreenObservation'])) {
            $this->classroomAppForceUnpromptedScreenObservation = $data['classroomAppForceUnpromptedScreenObservation'];
        }
        if (isset($data['compliantAppListType'])) {
            $this->compliantAppListType = is_array($data['compliantAppListType']) ? new AppListType($data['compliantAppListType']) : $data['compliantAppListType'];
        }
        if (isset($data['compliantAppsList'])) {
            $this->compliantAppsList = $data['compliantAppsList'];
        }
        if (isset($data['configurationProfileBlockChanges'])) {
            $this->configurationProfileBlockChanges = $data['configurationProfileBlockChanges'];
        }
        if (isset($data['definitionLookupBlocked'])) {
            $this->definitionLookupBlocked = $data['definitionLookupBlocked'];
        }
        if (isset($data['deviceBlockEnableRestrictions'])) {
            $this->deviceBlockEnableRestrictions = $data['deviceBlockEnableRestrictions'];
        }
        if (isset($data['deviceBlockEraseContentAndSettings'])) {
            $this->deviceBlockEraseContentAndSettings = $data['deviceBlockEraseContentAndSettings'];
        }
        if (isset($data['deviceBlockNameModification'])) {
            $this->deviceBlockNameModification = $data['deviceBlockNameModification'];
        }
        if (isset($data['diagnosticDataBlockSubmission'])) {
            $this->diagnosticDataBlockSubmission = $data['diagnosticDataBlockSubmission'];
        }
        if (isset($data['diagnosticDataBlockSubmissionModification'])) {
            $this->diagnosticDataBlockSubmissionModification = $data['diagnosticDataBlockSubmissionModification'];
        }
        if (isset($data['documentsBlockManagedDocumentsInUnmanagedApps'])) {
            $this->documentsBlockManagedDocumentsInUnmanagedApps = $data['documentsBlockManagedDocumentsInUnmanagedApps'];
        }
        if (isset($data['documentsBlockUnmanagedDocumentsInManagedApps'])) {
            $this->documentsBlockUnmanagedDocumentsInManagedApps = $data['documentsBlockUnmanagedDocumentsInManagedApps'];
        }
        if (isset($data['emailInDomainSuffixes'])) {
            $this->emailInDomainSuffixes = $data['emailInDomainSuffixes'];
        }
        if (isset($data['enterpriseAppBlockTrust'])) {
            $this->enterpriseAppBlockTrust = $data['enterpriseAppBlockTrust'];
        }
        if (isset($data['enterpriseAppBlockTrustModification'])) {
            $this->enterpriseAppBlockTrustModification = $data['enterpriseAppBlockTrustModification'];
        }
        if (isset($data['faceTimeBlocked'])) {
            $this->faceTimeBlocked = $data['faceTimeBlocked'];
        }
        if (isset($data['findMyFriendsBlocked'])) {
            $this->findMyFriendsBlocked = $data['findMyFriendsBlocked'];
        }
        if (isset($data['gameCenterBlocked'])) {
            $this->gameCenterBlocked = $data['gameCenterBlocked'];
        }
        if (isset($data['gamingBlockGameCenterFriends'])) {
            $this->gamingBlockGameCenterFriends = $data['gamingBlockGameCenterFriends'];
        }
        if (isset($data['gamingBlockMultiplayer'])) {
            $this->gamingBlockMultiplayer = $data['gamingBlockMultiplayer'];
        }
        if (isset($data['hostPairingBlocked'])) {
            $this->hostPairingBlocked = $data['hostPairingBlocked'];
        }
        if (isset($data['iBooksStoreBlocked'])) {
            $this->iBooksStoreBlocked = $data['iBooksStoreBlocked'];
        }
        if (isset($data['iBooksStoreBlockErotica'])) {
            $this->iBooksStoreBlockErotica = $data['iBooksStoreBlockErotica'];
        }
        if (isset($data['iCloudBlockActivityContinuation'])) {
            $this->iCloudBlockActivityContinuation = $data['iCloudBlockActivityContinuation'];
        }
        if (isset($data['iCloudBlockBackup'])) {
            $this->iCloudBlockBackup = $data['iCloudBlockBackup'];
        }
        if (isset($data['iCloudBlockDocumentSync'])) {
            $this->iCloudBlockDocumentSync = $data['iCloudBlockDocumentSync'];
        }
        if (isset($data['iCloudBlockManagedAppsSync'])) {
            $this->iCloudBlockManagedAppsSync = $data['iCloudBlockManagedAppsSync'];
        }
        if (isset($data['iCloudBlockPhotoLibrary'])) {
            $this->iCloudBlockPhotoLibrary = $data['iCloudBlockPhotoLibrary'];
        }
        if (isset($data['iCloudBlockPhotoStreamSync'])) {
            $this->iCloudBlockPhotoStreamSync = $data['iCloudBlockPhotoStreamSync'];
        }
        if (isset($data['iCloudBlockSharedPhotoStream'])) {
            $this->iCloudBlockSharedPhotoStream = $data['iCloudBlockSharedPhotoStream'];
        }
        if (isset($data['iCloudRequireEncryptedBackup'])) {
            $this->iCloudRequireEncryptedBackup = $data['iCloudRequireEncryptedBackup'];
        }
        if (isset($data['iTunesBlockExplicitContent'])) {
            $this->iTunesBlockExplicitContent = $data['iTunesBlockExplicitContent'];
        }
        if (isset($data['iTunesBlockMusicService'])) {
            $this->iTunesBlockMusicService = $data['iTunesBlockMusicService'];
        }
        if (isset($data['iTunesBlockRadio'])) {
            $this->iTunesBlockRadio = $data['iTunesBlockRadio'];
        }
        if (isset($data['keyboardBlockAutoCorrect'])) {
            $this->keyboardBlockAutoCorrect = $data['keyboardBlockAutoCorrect'];
        }
        if (isset($data['keyboardBlockDictation'])) {
            $this->keyboardBlockDictation = $data['keyboardBlockDictation'];
        }
        if (isset($data['keyboardBlockPredictive'])) {
            $this->keyboardBlockPredictive = $data['keyboardBlockPredictive'];
        }
        if (isset($data['keyboardBlockShortcuts'])) {
            $this->keyboardBlockShortcuts = $data['keyboardBlockShortcuts'];
        }
        if (isset($data['keyboardBlockSpellCheck'])) {
            $this->keyboardBlockSpellCheck = $data['keyboardBlockSpellCheck'];
        }
        if (isset($data['kioskModeAllowAssistiveSpeak'])) {
            $this->kioskModeAllowAssistiveSpeak = $data['kioskModeAllowAssistiveSpeak'];
        }
        if (isset($data['kioskModeAllowAssistiveTouchSettings'])) {
            $this->kioskModeAllowAssistiveTouchSettings = $data['kioskModeAllowAssistiveTouchSettings'];
        }
        if (isset($data['kioskModeAllowAutoLock'])) {
            $this->kioskModeAllowAutoLock = $data['kioskModeAllowAutoLock'];
        }
        if (isset($data['kioskModeAllowColorInversionSettings'])) {
            $this->kioskModeAllowColorInversionSettings = $data['kioskModeAllowColorInversionSettings'];
        }
        if (isset($data['kioskModeAllowRingerSwitch'])) {
            $this->kioskModeAllowRingerSwitch = $data['kioskModeAllowRingerSwitch'];
        }
        if (isset($data['kioskModeAllowScreenRotation'])) {
            $this->kioskModeAllowScreenRotation = $data['kioskModeAllowScreenRotation'];
        }
        if (isset($data['kioskModeAllowSleepButton'])) {
            $this->kioskModeAllowSleepButton = $data['kioskModeAllowSleepButton'];
        }
        if (isset($data['kioskModeAllowTouchscreen'])) {
            $this->kioskModeAllowTouchscreen = $data['kioskModeAllowTouchscreen'];
        }
        if (isset($data['kioskModeAllowVoiceOverSettings'])) {
            $this->kioskModeAllowVoiceOverSettings = $data['kioskModeAllowVoiceOverSettings'];
        }
        if (isset($data['kioskModeAllowVolumeButtons'])) {
            $this->kioskModeAllowVolumeButtons = $data['kioskModeAllowVolumeButtons'];
        }
        if (isset($data['kioskModeAllowZoomSettings'])) {
            $this->kioskModeAllowZoomSettings = $data['kioskModeAllowZoomSettings'];
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
            $this->kioskModeRequireAssistiveTouch = $data['kioskModeRequireAssistiveTouch'];
        }
        if (isset($data['kioskModeRequireColorInversion'])) {
            $this->kioskModeRequireColorInversion = $data['kioskModeRequireColorInversion'];
        }
        if (isset($data['kioskModeRequireMonoAudio'])) {
            $this->kioskModeRequireMonoAudio = $data['kioskModeRequireMonoAudio'];
        }
        if (isset($data['kioskModeRequireVoiceOver'])) {
            $this->kioskModeRequireVoiceOver = $data['kioskModeRequireVoiceOver'];
        }
        if (isset($data['kioskModeRequireZoom'])) {
            $this->kioskModeRequireZoom = $data['kioskModeRequireZoom'];
        }
        if (isset($data['lockScreenBlockControlCenter'])) {
            $this->lockScreenBlockControlCenter = $data['lockScreenBlockControlCenter'];
        }
        if (isset($data['lockScreenBlockNotificationView'])) {
            $this->lockScreenBlockNotificationView = $data['lockScreenBlockNotificationView'];
        }
        if (isset($data['lockScreenBlockPassbook'])) {
            $this->lockScreenBlockPassbook = $data['lockScreenBlockPassbook'];
        }
        if (isset($data['lockScreenBlockTodayView'])) {
            $this->lockScreenBlockTodayView = $data['lockScreenBlockTodayView'];
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
            $this->messagesBlocked = $data['messagesBlocked'];
        }
        if (isset($data['networkUsageRules'])) {
            $this->networkUsageRules = $data['networkUsageRules'];
        }
        if (isset($data['notificationsBlockSettingsModification'])) {
            $this->notificationsBlockSettingsModification = $data['notificationsBlockSettingsModification'];
        }
        if (isset($data['passcodeBlockFingerprintModification'])) {
            $this->passcodeBlockFingerprintModification = $data['passcodeBlockFingerprintModification'];
        }
        if (isset($data['passcodeBlockFingerprintUnlock'])) {
            $this->passcodeBlockFingerprintUnlock = $data['passcodeBlockFingerprintUnlock'];
        }
        if (isset($data['passcodeBlockModification'])) {
            $this->passcodeBlockModification = $data['passcodeBlockModification'];
        }
        if (isset($data['passcodeBlockSimple'])) {
            $this->passcodeBlockSimple = $data['passcodeBlockSimple'];
        }
        if (isset($data['passcodeExpirationDays'])) {
            $this->passcodeExpirationDays = $data['passcodeExpirationDays'];
        }
        if (isset($data['passcodeMinimumCharacterSetCount'])) {
            $this->passcodeMinimumCharacterSetCount = $data['passcodeMinimumCharacterSetCount'];
        }
        if (isset($data['passcodeMinimumLength'])) {
            $this->passcodeMinimumLength = $data['passcodeMinimumLength'];
        }
        if (isset($data['passcodeMinutesOfInactivityBeforeLock'])) {
            $this->passcodeMinutesOfInactivityBeforeLock = $data['passcodeMinutesOfInactivityBeforeLock'];
        }
        if (isset($data['passcodeMinutesOfInactivityBeforeScreenTimeout'])) {
            $this->passcodeMinutesOfInactivityBeforeScreenTimeout = $data['passcodeMinutesOfInactivityBeforeScreenTimeout'];
        }
        if (isset($data['passcodePreviousPasscodeBlockCount'])) {
            $this->passcodePreviousPasscodeBlockCount = $data['passcodePreviousPasscodeBlockCount'];
        }
        if (isset($data['passcodeRequired'])) {
            $this->passcodeRequired = $data['passcodeRequired'];
        }
        if (isset($data['passcodeRequiredType'])) {
            $this->passcodeRequiredType = is_array($data['passcodeRequiredType']) ? new RequiredPasswordType($data['passcodeRequiredType']) : $data['passcodeRequiredType'];
        }
        if (isset($data['passcodeSignInFailureCountBeforeWipe'])) {
            $this->passcodeSignInFailureCountBeforeWipe = $data['passcodeSignInFailureCountBeforeWipe'];
        }
        if (isset($data['podcastsBlocked'])) {
            $this->podcastsBlocked = $data['podcastsBlocked'];
        }
        if (isset($data['safariBlockAutofill'])) {
            $this->safariBlockAutofill = $data['safariBlockAutofill'];
        }
        if (isset($data['safariBlocked'])) {
            $this->safariBlocked = $data['safariBlocked'];
        }
        if (isset($data['safariBlockJavaScript'])) {
            $this->safariBlockJavaScript = $data['safariBlockJavaScript'];
        }
        if (isset($data['safariBlockPopups'])) {
            $this->safariBlockPopups = $data['safariBlockPopups'];
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
            $this->safariRequireFraudWarning = $data['safariRequireFraudWarning'];
        }
        if (isset($data['screenCaptureBlocked'])) {
            $this->screenCaptureBlocked = $data['screenCaptureBlocked'];
        }
        if (isset($data['siriBlocked'])) {
            $this->siriBlocked = $data['siriBlocked'];
        }
        if (isset($data['siriBlockedWhenLocked'])) {
            $this->siriBlockedWhenLocked = $data['siriBlockedWhenLocked'];
        }
        if (isset($data['siriBlockUserGeneratedContent'])) {
            $this->siriBlockUserGeneratedContent = $data['siriBlockUserGeneratedContent'];
        }
        if (isset($data['siriRequireProfanityFilter'])) {
            $this->siriRequireProfanityFilter = $data['siriRequireProfanityFilter'];
        }
        if (isset($data['spotlightBlockInternetResults'])) {
            $this->spotlightBlockInternetResults = $data['spotlightBlockInternetResults'];
        }
        if (isset($data['voiceDialingBlocked'])) {
            $this->voiceDialingBlocked = $data['voiceDialingBlocked'];
        }
        if (isset($data['wallpaperBlockModification'])) {
            $this->wallpaperBlockModification = $data['wallpaperBlockModification'];
        }
        if (isset($data['wiFiConnectOnlyToConfiguredNetworks'])) {
            $this->wiFiConnectOnlyToConfiguredNetworks = $data['wiFiConnectOnlyToConfiguredNetworks'];
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
