<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosGeneralDeviceConfiguration
 */
class IosGeneralDeviceConfiguration
{
    /**
     * Indicates whether or not to allow account modification when the device is in supervised mode.
     */
    private ?bool $accountBlockModification;

    /**
     * Indicates whether or not to allow activation lock when the device is in the supervised mode.
     */
    private ?bool $activationLockAllowWhenSupervised;

    /**
     * Indicates whether or not to allow AirDrop when the device is in supervised mode.
     */
    private ?bool $airDropBlocked;

    /**
     * Indicates whether or not to cause AirDrop to be considered an unmanaged drop target (iOS 9.0 and later).
     */
    private ?bool $airDropForceUnmanagedDropTarget;

    /**
     * Indicates whether or not to enforce all devices receiving AirPlay requests from this device to use a pairing password.
     */
    private ?bool $airPlayForcePairingPasswordForOutgoingRequests;

    /**
     * Indicates whether or not to block the user from using News when the device is in supervised mode (iOS 9.0 and later).
     */
    private ?bool $appleNewsBlocked;

    /**
     * Indicates whether or not to allow Apple Watch pairing when the device is in supervised mode (iOS 9.0 and later).
     */
    private ?bool $appleWatchBlockPairing;

    /**
     * Indicates whether or not to force a paired Apple Watch to use Wrist Detection (iOS 8.2 and later).
     */
    private ?bool $appleWatchForceWristDetection;

    /**
     * Gets or sets the list of iOS apps allowed to autonomously enter Single App Mode. Supervised only. iOS 7.0 and later. This collection can contain a maximum of 500 elements.
     */
    private array $appsSingleAppModeList = [];

    /**
     * Indicates whether or not to block the automatic downloading of apps purchased on other devices when the device is in supervised mode (iOS 9.0 and later).
     */
    private ?bool $appStoreBlockAutomaticDownloads;

    /**
     * Indicates whether or not to block the user from using the App Store. Requires a supervised device for iOS 13 and later.
     */
    private ?bool $appStoreBlocked;

    /**
     * Indicates whether or not to block the user from making in app purchases.
     */
    private ?bool $appStoreBlockInAppPurchases;

    /**
     * Indicates whether or not to block the App Store app, not restricting installation through Host apps. Applies to supervised mode only (iOS 9.0 and later).
     */
    private ?bool $appStoreBlockUIAppInstallation;

    /**
     * Indicates whether or not to require a password when using the app store.
     */
    private ?bool $appStoreRequirePassword;

    /**
     * List of apps in the visibility list (either visible/launchable apps list or hidden/unlaunchable apps list, controlled by AppsVisibilityListType) (iOS 9.3 and later). This collection can contain a maximum of 10000 elements.
     */
    private array $appsVisibilityList = [];

    /**
     */
    private ?string $appsVisibilityListType;

    /**
     * Indicates whether or not to allow modification of Bluetooth settings when the device is in supervised mode (iOS 10.0 and later).
     */
    private ?bool $bluetoothBlockModification;

    /**
     * Indicates whether or not to block the user from accessing the camera of the device. Requires a supervised device for iOS 13 and later.
     */
    private ?bool $cameraBlocked;

    /**
     * Indicates whether or not to block data roaming.
     */
    private ?bool $cellularBlockDataRoaming;

    /**
     * Indicates whether or not to block global background fetch while roaming.
     */
    private ?bool $cellularBlockGlobalBackgroundFetchWhileRoaming;

    /**
     * Indicates whether or not to allow changes to cellular app data usage settings when the device is in supervised mode.
     */
    private ?bool $cellularBlockPerAppDataModification;

    /**
     * Indicates whether or not to block Personal Hotspot.
     */
    private ?bool $cellularBlockPersonalHotspot;

    /**
     * Indicates whether or not to block voice roaming.
     */
    private ?bool $cellularBlockVoiceRoaming;

    /**
     * Indicates whether or not to block untrusted TLS certificates.
     */
    private ?bool $certificatesBlockUntrustedTlsCertificates;

    /**
     * Indicates whether or not to allow remote screen observation by Classroom app when the device is in supervised mode (iOS 9.3 and later).
     */
    private ?bool $classroomAppBlockRemoteScreenObservation;

    /**
     * Indicates whether or not to automatically give permission to the teacher of a managed course on the Classroom app to view a student's screen without prompting when the device is in supervised mode.
     */
    private ?bool $classroomAppForceUnpromptedScreenObservation;

    /**
     */
    private ?string $compliantAppListType;

    /**
     * List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements.
     */
    private array $compliantAppsList = [];

    /**
     * Indicates whether or not to block the user from installing configuration profiles and certificates interactively when the device is in supervised mode.
     */
    private ?bool $configurationProfileBlockChanges;

    /**
     * Indicates whether or not to block definition lookup when the device is in supervised mode (iOS 8.1.3 and later ).
     */
    private ?bool $definitionLookupBlocked;

    /**
     * Indicates whether or not to allow the user to enables restrictions in the device settings when the device is in supervised mode.
     */
    private ?bool $deviceBlockEnableRestrictions;

    /**
     * Indicates whether or not to allow the use of the 'Erase all content and settings' option on the device when the device is in supervised mode.
     */
    private ?bool $deviceBlockEraseContentAndSettings;

    /**
     * Indicates whether or not to allow device name modification when the device is in supervised mode (iOS 9.0 and later).
     */
    private ?bool $deviceBlockNameModification;

    /**
     * Indicates whether or not to block diagnostic data submission.
     */
    private ?bool $diagnosticDataBlockSubmission;

    /**
     * Indicates whether or not to allow diagnostics submission settings modification when the device is in supervised mode (iOS 9.3.2 and later).
     */
    private ?bool $diagnosticDataBlockSubmissionModification;

    /**
     * Indicates whether or not to block the user from viewing managed documents in unmanaged apps.
     */
    private ?bool $documentsBlockManagedDocumentsInUnmanagedApps;

    /**
     * Indicates whether or not to block the user from viewing unmanaged documents in managed apps.
     */
    private ?bool $documentsBlockUnmanagedDocumentsInManagedApps;

    /**
     * An email address lacking a suffix that matches any of these strings will be considered out-of-domain.
     * @var string[]
     */
    private array $emailInDomainSuffixes = [];

    /**
     * Indicates whether or not to block the user from trusting an enterprise app.
     */
    private ?bool $enterpriseAppBlockTrust;

    /**
     * [Deprecated] Configuring this setting and setting the value to ''true'' has no effect on the device.
     */
    private ?bool $enterpriseAppBlockTrustModification;

    /**
     * Indicates whether or not to block the user from using FaceTime. Requires a supervised device for iOS 13 and later.
     */
    private ?bool $faceTimeBlocked;

    /**
     * Indicates whether or not to block changes to Find My Friends when the device is in supervised mode.
     */
    private ?bool $findMyFriendsBlocked;

    /**
     * Indicates whether or not to block the user from using Game Center when the device is in supervised mode.
     */
    private ?bool $gameCenterBlocked;

    /**
     * Indicates whether or not to block the user from having friends in Game Center. Requires a supervised device for iOS 13 and later.
     */
    private ?bool $gamingBlockGameCenterFriends;

    /**
     * Indicates whether or not to block the user from using multiplayer gaming. Requires a supervised device for iOS 13 and later.
     */
    private ?bool $gamingBlockMultiplayer;

    /**
     * indicates whether or not to allow host pairing to control the devices an iOS device can pair with when the iOS device is in supervised mode.
     */
    private ?bool $hostPairingBlocked;

    /**
     * Indicates whether or not to block the user from using the iBooks Store when the device is in supervised mode.
     */
    private ?bool $iBooksStoreBlocked;

    /**
     * Indicates whether or not to block the user from downloading media from the iBookstore that has been tagged as erotica.
     */
    private ?bool $iBooksStoreBlockErotica;

    /**
     * Indicates whether or not to block the user from continuing work they started on iOS device to another iOS or macOS device.
     */
    private ?bool $iCloudBlockActivityContinuation;

    /**
     * Indicates whether or not to block iCloud backup. Requires a supervised device for iOS 13 and later.
     */
    private ?bool $iCloudBlockBackup;

    /**
     * Indicates whether or not to block iCloud document sync. Requires a supervised device for iOS 13 and later.
     */
    private ?bool $iCloudBlockDocumentSync;

    /**
     * Indicates whether or not to block Managed Apps Cloud Sync.
     */
    private ?bool $iCloudBlockManagedAppsSync;

    /**
     * Indicates whether or not to block iCloud Photo Library.
     */
    private ?bool $iCloudBlockPhotoLibrary;

    /**
     * Indicates whether or not to block iCloud Photo Stream Sync.
     */
    private ?bool $iCloudBlockPhotoStreamSync;

    /**
     * Indicates whether or not to block Shared Photo Stream.
     */
    private ?bool $iCloudBlockSharedPhotoStream;

    /**
     * Indicates whether or not to require backups to iCloud be encrypted.
     */
    private ?bool $iCloudRequireEncryptedBackup;

    /**
     * Indicates whether or not to block the user from accessing explicit content in iTunes and the App Store. Requires a supervised device for iOS 13 and later.
     */
    private ?bool $iTunesBlockExplicitContent;

    /**
     * Indicates whether or not to block Music service and revert Music app to classic mode when the device is in supervised mode (iOS 9.3 and later and macOS 10.12 and later).
     */
    private ?bool $iTunesBlockMusicService;

    /**
     * Indicates whether or not to block the user from using iTunes Radio when the device is in supervised mode (iOS 9.3 and later).
     */
    private ?bool $iTunesBlockRadio;

    /**
     * Indicates whether or not to block keyboard auto-correction when the device is in supervised mode (iOS 8.1.3 and later).
     */
    private ?bool $keyboardBlockAutoCorrect;

    /**
     * Indicates whether or not to block the user from using dictation input when the device is in supervised mode.
     */
    private ?bool $keyboardBlockDictation;

    /**
     * Indicates whether or not to block predictive keyboards when device is in supervised mode (iOS 8.1.3 and later).
     */
    private ?bool $keyboardBlockPredictive;

    /**
     * Indicates whether or not to block keyboard shortcuts when the device is in supervised mode (iOS 9.0 and later).
     */
    private ?bool $keyboardBlockShortcuts;

    /**
     * Indicates whether or not to block keyboard spell-checking when the device is in supervised mode (iOS 8.1.3 and later).
     */
    private ?bool $keyboardBlockSpellCheck;

    /**
     * Indicates whether or not to allow assistive speak while in kiosk mode.
     */
    private ?bool $kioskModeAllowAssistiveSpeak;

    /**
     * Indicates whether or not to allow access to the Assistive Touch Settings while in kiosk mode.
     */
    private ?bool $kioskModeAllowAssistiveTouchSettings;

    /**
     * Indicates whether or not to allow device auto lock while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockAutoLock instead.
     */
    private ?bool $kioskModeAllowAutoLock;

    /**
     * Indicates whether or not to allow access to the Color Inversion Settings while in kiosk mode.
     */
    private ?bool $kioskModeAllowColorInversionSettings;

    /**
     * Indicates whether or not to allow use of the ringer switch while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockRingerSwitch instead.
     */
    private ?bool $kioskModeAllowRingerSwitch;

    /**
     * Indicates whether or not to allow screen rotation while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockScreenRotation instead.
     */
    private ?bool $kioskModeAllowScreenRotation;

    /**
     * Indicates whether or not to allow use of the sleep button while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockSleepButton instead.
     */
    private ?bool $kioskModeAllowSleepButton;

    /**
     * Indicates whether or not to allow use of the touchscreen while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockTouchscreen instead.
     */
    private ?bool $kioskModeAllowTouchscreen;

    /**
     * Indicates whether or not to allow access to the voice over settings while in kiosk mode.
     */
    private ?bool $kioskModeAllowVoiceOverSettings;

    /**
     * Indicates whether or not to allow use of the volume buttons while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockVolumeButtons instead.
     */
    private ?bool $kioskModeAllowVolumeButtons;

    /**
     * Indicates whether or not to allow access to the zoom settings while in kiosk mode.
     */
    private ?bool $kioskModeAllowZoomSettings;

    /**
     * URL in the app store to the app to use for kiosk mode. Use if KioskModeManagedAppId is not known.
     */
    private ?string $kioskModeAppStoreUrl;

    /**
     * ID for built-in apps to use for kiosk mode. Used when KioskModeManagedAppId and KioskModeAppStoreUrl are not set.
     */
    private ?string $kioskModeBuiltInAppId;

    /**
     * Managed app id of the app to use for kiosk mode. If KioskModeManagedAppId is specified then KioskModeAppStoreUrl will be ignored.
     */
    private ?string $kioskModeManagedAppId;

    /**
     * Indicates whether or not to require assistive touch while in kiosk mode.
     */
    private ?bool $kioskModeRequireAssistiveTouch;

    /**
     * Indicates whether or not to require color inversion while in kiosk mode.
     */
    private ?bool $kioskModeRequireColorInversion;

    /**
     * Indicates whether or not to require mono audio while in kiosk mode.
     */
    private ?bool $kioskModeRequireMonoAudio;

    /**
     * Indicates whether or not to require voice over while in kiosk mode.
     */
    private ?bool $kioskModeRequireVoiceOver;

    /**
     * Indicates whether or not to require zoom while in kiosk mode.
     */
    private ?bool $kioskModeRequireZoom;

    /**
     * Indicates whether or not to block the user from using control center on the lock screen.
     */
    private ?bool $lockScreenBlockControlCenter;

    /**
     * Indicates whether or not to block the user from using the notification view on the lock screen.
     */
    private ?bool $lockScreenBlockNotificationView;

    /**
     * Indicates whether or not to block the user from using passbook when the device is locked.
     */
    private ?bool $lockScreenBlockPassbook;

    /**
     * Indicates whether or not to block the user from using the Today View on the lock screen.
     */
    private ?bool $lockScreenBlockTodayView;

    /**
     */
    private ?string $mediaContentRatingApps;

    /**
     * Media content rating settings for Australia
     */
    private ?string $mediaContentRatingAustralia;

    /**
     * Media content rating settings for Canada
     */
    private ?string $mediaContentRatingCanada;

    /**
     * Media content rating settings for France
     */
    private ?string $mediaContentRatingFrance;

    /**
     * Media content rating settings for Germany
     */
    private ?string $mediaContentRatingGermany;

    /**
     * Media content rating settings for Ireland
     */
    private ?string $mediaContentRatingIreland;

    /**
     * Media content rating settings for Japan
     */
    private ?string $mediaContentRatingJapan;

    /**
     * Media content rating settings for New Zealand
     */
    private ?string $mediaContentRatingNewZealand;

    /**
     * Media content rating settings for United Kingdom
     */
    private ?string $mediaContentRatingUnitedKingdom;

    /**
     * Media content rating settings for United States
     */
    private ?string $mediaContentRatingUnitedStates;

    /**
     * Indicates whether or not to block the user from using the Messages app on the supervised device.
     */
    private ?bool $messagesBlocked;

    /**
     * List of managed apps and the network rules that applies to them. This collection can contain a maximum of 1000 elements.
     */
    private array $networkUsageRules = [];

    /**
     * Indicates whether or not to allow notifications settings modification (iOS 9.3 and later).
     */
    private ?bool $notificationsBlockSettingsModification;

    /**
     * Block modification of registered Touch ID fingerprints when in supervised mode.
     */
    private ?bool $passcodeBlockFingerprintModification;

    /**
     * Indicates whether or not to block fingerprint unlock.
     */
    private ?bool $passcodeBlockFingerprintUnlock;

    /**
     * Indicates whether or not to allow passcode modification on the supervised device (iOS 9.0 and later).
     */
    private ?bool $passcodeBlockModification;

    /**
     * Indicates whether or not to block simple passcodes.
     */
    private ?bool $passcodeBlockSimple;

    /**
     * Number of days before the passcode expires. Valid values 1 to 65535
     */
    private ?float $passcodeExpirationDays;

    /**
     * Number of character sets a passcode must contain. Valid values 0 to 4
     */
    private ?float $passcodeMinimumCharacterSetCount;

    /**
     * Minimum length of passcode. Valid values 4 to 14
     */
    private ?float $passcodeMinimumLength;

    /**
     * Minutes of inactivity before a passcode is required.
     */
    private ?float $passcodeMinutesOfInactivityBeforeLock;

    /**
     * Minutes of inactivity before the screen times out.
     */
    private ?float $passcodeMinutesOfInactivityBeforeScreenTimeout;

    /**
     * Number of previous passcodes to block. Valid values 1 to 24
     */
    private ?float $passcodePreviousPasscodeBlockCount;

    /**
     * Indicates whether or not to require a passcode.
     */
    private ?bool $passcodeRequired;

    /**
     */
    private ?string $passcodeRequiredType;

    /**
     * Number of sign in failures allowed before wiping the device. Valid values 2 to 11
     */
    private ?float $passcodeSignInFailureCountBeforeWipe;

    /**
     * Indicates whether or not to block the user from using podcasts on the supervised device (iOS 8.0 and later).
     */
    private ?bool $podcastsBlocked;

    /**
     * Indicates whether or not to block the user from using Auto fill in Safari. Requires a supervised device for iOS 13 and later.
     */
    private ?bool $safariBlockAutofill;

    /**
     * Indicates whether or not to block the user from using Safari. Requires a supervised device for iOS 13 and later.
     */
    private ?bool $safariBlocked;

    /**
     * Indicates whether or not to block JavaScript in Safari.
     */
    private ?bool $safariBlockJavaScript;

    /**
     * Indicates whether or not to block popups in Safari.
     */
    private ?bool $safariBlockPopups;

    /**
     */
    private ?string $safariCookieSettings;

    /**
     * URLs matching the patterns listed here will be considered managed.
     * @var string[]
     */
    private array $safariManagedDomains = [];

    /**
     * Users can save passwords in Safari only from URLs matching the patterns listed here. Applies to devices in supervised mode (iOS 9.3 and later).
     * @var string[]
     */
    private array $safariPasswordAutoFillDomains = [];

    /**
     * Indicates whether or not to require fraud warning in Safari.
     */
    private ?bool $safariRequireFraudWarning;

    /**
     * Indicates whether or not to block the user from taking Screenshots.
     */
    private ?bool $screenCaptureBlocked;

    /**
     * Indicates whether or not to block the user from using Siri.
     */
    private ?bool $siriBlocked;

    /**
     * Indicates whether or not to block the user from using Siri when locked.
     */
    private ?bool $siriBlockedWhenLocked;

    /**
     * Indicates whether or not to block Siri from querying user-generated content when used on a supervised device.
     */
    private ?bool $siriBlockUserGeneratedContent;

    /**
     * Indicates whether or not to prevent Siri from dictating, or speaking profane language on supervised device.
     */
    private ?bool $siriRequireProfanityFilter;

    /**
     * Indicates whether or not to block Spotlight search from returning internet results on supervised device.
     */
    private ?bool $spotlightBlockInternetResults;

    /**
     * Indicates whether or not to block voice dialing.
     */
    private ?bool $voiceDialingBlocked;

    /**
     * Indicates whether or not to allow wallpaper modification on supervised device (iOS 9.0 and later) .
     */
    private ?bool $wallpaperBlockModification;

    /**
     * This topic provides descriptions of the declared methods, properties and relationships exposed by the iosGeneralDeviceConfiguration resource.
     */
    private ?string $wiFiConnectOnlyToConfiguredNetworks;


    public function getAccountBlockModification(): ?bool
    {
        return $this->accountBlockModification;
    }

    public function setAccountBlockModification(?bool $accountBlockModification): self
    {
        $this->accountBlockModification = $accountBlockModification;
        return $this;
    }

    public function getActivationLockAllowWhenSupervised(): ?bool
    {
        return $this->activationLockAllowWhenSupervised;
    }

    public function setActivationLockAllowWhenSupervised(?bool $activationLockAllowWhenSupervised): self
    {
        $this->activationLockAllowWhenSupervised = $activationLockAllowWhenSupervised;
        return $this;
    }

    public function getAirDropBlocked(): ?bool
    {
        return $this->airDropBlocked;
    }

    public function setAirDropBlocked(?bool $airDropBlocked): self
    {
        $this->airDropBlocked = $airDropBlocked;
        return $this;
    }

    public function getAirDropForceUnmanagedDropTarget(): ?bool
    {
        return $this->airDropForceUnmanagedDropTarget;
    }

    public function setAirDropForceUnmanagedDropTarget(?bool $airDropForceUnmanagedDropTarget): self
    {
        $this->airDropForceUnmanagedDropTarget = $airDropForceUnmanagedDropTarget;
        return $this;
    }

    public function getAirPlayForcePairingPasswordForOutgoingRequests(): ?bool
    {
        return $this->airPlayForcePairingPasswordForOutgoingRequests;
    }

    public function setAirPlayForcePairingPasswordForOutgoingRequests(?bool $airPlayForcePairingPasswordForOutgoingRequests): self
    {
        $this->airPlayForcePairingPasswordForOutgoingRequests = $airPlayForcePairingPasswordForOutgoingRequests;
        return $this;
    }

    public function getAppleNewsBlocked(): ?bool
    {
        return $this->appleNewsBlocked;
    }

    public function setAppleNewsBlocked(?bool $appleNewsBlocked): self
    {
        $this->appleNewsBlocked = $appleNewsBlocked;
        return $this;
    }

    public function getAppleWatchBlockPairing(): ?bool
    {
        return $this->appleWatchBlockPairing;
    }

    public function setAppleWatchBlockPairing(?bool $appleWatchBlockPairing): self
    {
        $this->appleWatchBlockPairing = $appleWatchBlockPairing;
        return $this;
    }

    public function getAppleWatchForceWristDetection(): ?bool
    {
        return $this->appleWatchForceWristDetection;
    }

    public function setAppleWatchForceWristDetection(?bool $appleWatchForceWristDetection): self
    {
        $this->appleWatchForceWristDetection = $appleWatchForceWristDetection;
        return $this;
    }

    public function getAppsSingleAppModeList(): array
    {
        return $this->appsSingleAppModeList;
    }

    public function setAppsSingleAppModeList(array $appsSingleAppModeList): self
    {
        $this->appsSingleAppModeList = $appsSingleAppModeList;
        return $this;
    }

    public function getAppStoreBlockAutomaticDownloads(): ?bool
    {
        return $this->appStoreBlockAutomaticDownloads;
    }

    public function setAppStoreBlockAutomaticDownloads(?bool $appStoreBlockAutomaticDownloads): self
    {
        $this->appStoreBlockAutomaticDownloads = $appStoreBlockAutomaticDownloads;
        return $this;
    }

    public function getAppStoreBlocked(): ?bool
    {
        return $this->appStoreBlocked;
    }

    public function setAppStoreBlocked(?bool $appStoreBlocked): self
    {
        $this->appStoreBlocked = $appStoreBlocked;
        return $this;
    }

    public function getAppStoreBlockInAppPurchases(): ?bool
    {
        return $this->appStoreBlockInAppPurchases;
    }

    public function setAppStoreBlockInAppPurchases(?bool $appStoreBlockInAppPurchases): self
    {
        $this->appStoreBlockInAppPurchases = $appStoreBlockInAppPurchases;
        return $this;
    }

    public function getAppStoreBlockUIAppInstallation(): ?bool
    {
        return $this->appStoreBlockUIAppInstallation;
    }

    public function setAppStoreBlockUIAppInstallation(?bool $appStoreBlockUIAppInstallation): self
    {
        $this->appStoreBlockUIAppInstallation = $appStoreBlockUIAppInstallation;
        return $this;
    }

    public function getAppStoreRequirePassword(): ?bool
    {
        return $this->appStoreRequirePassword;
    }

    public function setAppStoreRequirePassword(?bool $appStoreRequirePassword): self
    {
        $this->appStoreRequirePassword = $appStoreRequirePassword;
        return $this;
    }

    public function getAppsVisibilityList(): array
    {
        return $this->appsVisibilityList;
    }

    public function setAppsVisibilityList(array $appsVisibilityList): self
    {
        $this->appsVisibilityList = $appsVisibilityList;
        return $this;
    }

    public function getAppsVisibilityListType(): ?string
    {
        return $this->appsVisibilityListType;
    }

    public function setAppsVisibilityListType(?string $appsVisibilityListType): self
    {
        $this->appsVisibilityListType = $appsVisibilityListType;
        return $this;
    }

    public function getBluetoothBlockModification(): ?bool
    {
        return $this->bluetoothBlockModification;
    }

    public function setBluetoothBlockModification(?bool $bluetoothBlockModification): self
    {
        $this->bluetoothBlockModification = $bluetoothBlockModification;
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

    public function getCellularBlockDataRoaming(): ?bool
    {
        return $this->cellularBlockDataRoaming;
    }

    public function setCellularBlockDataRoaming(?bool $cellularBlockDataRoaming): self
    {
        $this->cellularBlockDataRoaming = $cellularBlockDataRoaming;
        return $this;
    }

    public function getCellularBlockGlobalBackgroundFetchWhileRoaming(): ?bool
    {
        return $this->cellularBlockGlobalBackgroundFetchWhileRoaming;
    }

    public function setCellularBlockGlobalBackgroundFetchWhileRoaming(?bool $cellularBlockGlobalBackgroundFetchWhileRoaming): self
    {
        $this->cellularBlockGlobalBackgroundFetchWhileRoaming = $cellularBlockGlobalBackgroundFetchWhileRoaming;
        return $this;
    }

    public function getCellularBlockPerAppDataModification(): ?bool
    {
        return $this->cellularBlockPerAppDataModification;
    }

    public function setCellularBlockPerAppDataModification(?bool $cellularBlockPerAppDataModification): self
    {
        $this->cellularBlockPerAppDataModification = $cellularBlockPerAppDataModification;
        return $this;
    }

    public function getCellularBlockPersonalHotspot(): ?bool
    {
        return $this->cellularBlockPersonalHotspot;
    }

    public function setCellularBlockPersonalHotspot(?bool $cellularBlockPersonalHotspot): self
    {
        $this->cellularBlockPersonalHotspot = $cellularBlockPersonalHotspot;
        return $this;
    }

    public function getCellularBlockVoiceRoaming(): ?bool
    {
        return $this->cellularBlockVoiceRoaming;
    }

    public function setCellularBlockVoiceRoaming(?bool $cellularBlockVoiceRoaming): self
    {
        $this->cellularBlockVoiceRoaming = $cellularBlockVoiceRoaming;
        return $this;
    }

    public function getCertificatesBlockUntrustedTlsCertificates(): ?bool
    {
        return $this->certificatesBlockUntrustedTlsCertificates;
    }

    public function setCertificatesBlockUntrustedTlsCertificates(?bool $certificatesBlockUntrustedTlsCertificates): self
    {
        $this->certificatesBlockUntrustedTlsCertificates = $certificatesBlockUntrustedTlsCertificates;
        return $this;
    }

    public function getClassroomAppBlockRemoteScreenObservation(): ?bool
    {
        return $this->classroomAppBlockRemoteScreenObservation;
    }

    public function setClassroomAppBlockRemoteScreenObservation(?bool $classroomAppBlockRemoteScreenObservation): self
    {
        $this->classroomAppBlockRemoteScreenObservation = $classroomAppBlockRemoteScreenObservation;
        return $this;
    }

    public function getClassroomAppForceUnpromptedScreenObservation(): ?bool
    {
        return $this->classroomAppForceUnpromptedScreenObservation;
    }

    public function setClassroomAppForceUnpromptedScreenObservation(?bool $classroomAppForceUnpromptedScreenObservation): self
    {
        $this->classroomAppForceUnpromptedScreenObservation = $classroomAppForceUnpromptedScreenObservation;
        return $this;
    }

    public function getCompliantAppListType(): ?string
    {
        return $this->compliantAppListType;
    }

    public function setCompliantAppListType(?string $compliantAppListType): self
    {
        $this->compliantAppListType = $compliantAppListType;
        return $this;
    }

    public function getCompliantAppsList(): array
    {
        return $this->compliantAppsList;
    }

    public function setCompliantAppsList(array $compliantAppsList): self
    {
        $this->compliantAppsList = $compliantAppsList;
        return $this;
    }

    public function getConfigurationProfileBlockChanges(): ?bool
    {
        return $this->configurationProfileBlockChanges;
    }

    public function setConfigurationProfileBlockChanges(?bool $configurationProfileBlockChanges): self
    {
        $this->configurationProfileBlockChanges = $configurationProfileBlockChanges;
        return $this;
    }

    public function getDefinitionLookupBlocked(): ?bool
    {
        return $this->definitionLookupBlocked;
    }

    public function setDefinitionLookupBlocked(?bool $definitionLookupBlocked): self
    {
        $this->definitionLookupBlocked = $definitionLookupBlocked;
        return $this;
    }

    public function getDeviceBlockEnableRestrictions(): ?bool
    {
        return $this->deviceBlockEnableRestrictions;
    }

    public function setDeviceBlockEnableRestrictions(?bool $deviceBlockEnableRestrictions): self
    {
        $this->deviceBlockEnableRestrictions = $deviceBlockEnableRestrictions;
        return $this;
    }

    public function getDeviceBlockEraseContentAndSettings(): ?bool
    {
        return $this->deviceBlockEraseContentAndSettings;
    }

    public function setDeviceBlockEraseContentAndSettings(?bool $deviceBlockEraseContentAndSettings): self
    {
        $this->deviceBlockEraseContentAndSettings = $deviceBlockEraseContentAndSettings;
        return $this;
    }

    public function getDeviceBlockNameModification(): ?bool
    {
        return $this->deviceBlockNameModification;
    }

    public function setDeviceBlockNameModification(?bool $deviceBlockNameModification): self
    {
        $this->deviceBlockNameModification = $deviceBlockNameModification;
        return $this;
    }

    public function getDiagnosticDataBlockSubmission(): ?bool
    {
        return $this->diagnosticDataBlockSubmission;
    }

    public function setDiagnosticDataBlockSubmission(?bool $diagnosticDataBlockSubmission): self
    {
        $this->diagnosticDataBlockSubmission = $diagnosticDataBlockSubmission;
        return $this;
    }

    public function getDiagnosticDataBlockSubmissionModification(): ?bool
    {
        return $this->diagnosticDataBlockSubmissionModification;
    }

    public function setDiagnosticDataBlockSubmissionModification(?bool $diagnosticDataBlockSubmissionModification): self
    {
        $this->diagnosticDataBlockSubmissionModification = $diagnosticDataBlockSubmissionModification;
        return $this;
    }

    public function getDocumentsBlockManagedDocumentsInUnmanagedApps(): ?bool
    {
        return $this->documentsBlockManagedDocumentsInUnmanagedApps;
    }

    public function setDocumentsBlockManagedDocumentsInUnmanagedApps(?bool $documentsBlockManagedDocumentsInUnmanagedApps): self
    {
        $this->documentsBlockManagedDocumentsInUnmanagedApps = $documentsBlockManagedDocumentsInUnmanagedApps;
        return $this;
    }

    public function getDocumentsBlockUnmanagedDocumentsInManagedApps(): ?bool
    {
        return $this->documentsBlockUnmanagedDocumentsInManagedApps;
    }

    public function setDocumentsBlockUnmanagedDocumentsInManagedApps(?bool $documentsBlockUnmanagedDocumentsInManagedApps): self
    {
        $this->documentsBlockUnmanagedDocumentsInManagedApps = $documentsBlockUnmanagedDocumentsInManagedApps;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getEmailInDomainSuffixes(): array
    {
        return $this->emailInDomainSuffixes;
    }

    /**
     * @param string[] $emailInDomainSuffixes
     */
    public function setEmailInDomainSuffixes(array $emailInDomainSuffixes): self
    {
        $this->emailInDomainSuffixes = $emailInDomainSuffixes;
        return $this;
    }

    public function getEnterpriseAppBlockTrust(): ?bool
    {
        return $this->enterpriseAppBlockTrust;
    }

    public function setEnterpriseAppBlockTrust(?bool $enterpriseAppBlockTrust): self
    {
        $this->enterpriseAppBlockTrust = $enterpriseAppBlockTrust;
        return $this;
    }

    public function getEnterpriseAppBlockTrustModification(): ?bool
    {
        return $this->enterpriseAppBlockTrustModification;
    }

    public function setEnterpriseAppBlockTrustModification(?bool $enterpriseAppBlockTrustModification): self
    {
        $this->enterpriseAppBlockTrustModification = $enterpriseAppBlockTrustModification;
        return $this;
    }

    public function getFaceTimeBlocked(): ?bool
    {
        return $this->faceTimeBlocked;
    }

    public function setFaceTimeBlocked(?bool $faceTimeBlocked): self
    {
        $this->faceTimeBlocked = $faceTimeBlocked;
        return $this;
    }

    public function getFindMyFriendsBlocked(): ?bool
    {
        return $this->findMyFriendsBlocked;
    }

    public function setFindMyFriendsBlocked(?bool $findMyFriendsBlocked): self
    {
        $this->findMyFriendsBlocked = $findMyFriendsBlocked;
        return $this;
    }

    public function getGameCenterBlocked(): ?bool
    {
        return $this->gameCenterBlocked;
    }

    public function setGameCenterBlocked(?bool $gameCenterBlocked): self
    {
        $this->gameCenterBlocked = $gameCenterBlocked;
        return $this;
    }

    public function getGamingBlockGameCenterFriends(): ?bool
    {
        return $this->gamingBlockGameCenterFriends;
    }

    public function setGamingBlockGameCenterFriends(?bool $gamingBlockGameCenterFriends): self
    {
        $this->gamingBlockGameCenterFriends = $gamingBlockGameCenterFriends;
        return $this;
    }

    public function getGamingBlockMultiplayer(): ?bool
    {
        return $this->gamingBlockMultiplayer;
    }

    public function setGamingBlockMultiplayer(?bool $gamingBlockMultiplayer): self
    {
        $this->gamingBlockMultiplayer = $gamingBlockMultiplayer;
        return $this;
    }

    public function getHostPairingBlocked(): ?bool
    {
        return $this->hostPairingBlocked;
    }

    public function setHostPairingBlocked(?bool $hostPairingBlocked): self
    {
        $this->hostPairingBlocked = $hostPairingBlocked;
        return $this;
    }

    public function getIBooksStoreBlocked(): ?bool
    {
        return $this->iBooksStoreBlocked;
    }

    public function setIBooksStoreBlocked(?bool $iBooksStoreBlocked): self
    {
        $this->iBooksStoreBlocked = $iBooksStoreBlocked;
        return $this;
    }

    public function getIBooksStoreBlockErotica(): ?bool
    {
        return $this->iBooksStoreBlockErotica;
    }

    public function setIBooksStoreBlockErotica(?bool $iBooksStoreBlockErotica): self
    {
        $this->iBooksStoreBlockErotica = $iBooksStoreBlockErotica;
        return $this;
    }

    public function getICloudBlockActivityContinuation(): ?bool
    {
        return $this->iCloudBlockActivityContinuation;
    }

    public function setICloudBlockActivityContinuation(?bool $iCloudBlockActivityContinuation): self
    {
        $this->iCloudBlockActivityContinuation = $iCloudBlockActivityContinuation;
        return $this;
    }

    public function getICloudBlockBackup(): ?bool
    {
        return $this->iCloudBlockBackup;
    }

    public function setICloudBlockBackup(?bool $iCloudBlockBackup): self
    {
        $this->iCloudBlockBackup = $iCloudBlockBackup;
        return $this;
    }

    public function getICloudBlockDocumentSync(): ?bool
    {
        return $this->iCloudBlockDocumentSync;
    }

    public function setICloudBlockDocumentSync(?bool $iCloudBlockDocumentSync): self
    {
        $this->iCloudBlockDocumentSync = $iCloudBlockDocumentSync;
        return $this;
    }

    public function getICloudBlockManagedAppsSync(): ?bool
    {
        return $this->iCloudBlockManagedAppsSync;
    }

    public function setICloudBlockManagedAppsSync(?bool $iCloudBlockManagedAppsSync): self
    {
        $this->iCloudBlockManagedAppsSync = $iCloudBlockManagedAppsSync;
        return $this;
    }

    public function getICloudBlockPhotoLibrary(): ?bool
    {
        return $this->iCloudBlockPhotoLibrary;
    }

    public function setICloudBlockPhotoLibrary(?bool $iCloudBlockPhotoLibrary): self
    {
        $this->iCloudBlockPhotoLibrary = $iCloudBlockPhotoLibrary;
        return $this;
    }

    public function getICloudBlockPhotoStreamSync(): ?bool
    {
        return $this->iCloudBlockPhotoStreamSync;
    }

    public function setICloudBlockPhotoStreamSync(?bool $iCloudBlockPhotoStreamSync): self
    {
        $this->iCloudBlockPhotoStreamSync = $iCloudBlockPhotoStreamSync;
        return $this;
    }

    public function getICloudBlockSharedPhotoStream(): ?bool
    {
        return $this->iCloudBlockSharedPhotoStream;
    }

    public function setICloudBlockSharedPhotoStream(?bool $iCloudBlockSharedPhotoStream): self
    {
        $this->iCloudBlockSharedPhotoStream = $iCloudBlockSharedPhotoStream;
        return $this;
    }

    public function getICloudRequireEncryptedBackup(): ?bool
    {
        return $this->iCloudRequireEncryptedBackup;
    }

    public function setICloudRequireEncryptedBackup(?bool $iCloudRequireEncryptedBackup): self
    {
        $this->iCloudRequireEncryptedBackup = $iCloudRequireEncryptedBackup;
        return $this;
    }

    public function getITunesBlockExplicitContent(): ?bool
    {
        return $this->iTunesBlockExplicitContent;
    }

    public function setITunesBlockExplicitContent(?bool $iTunesBlockExplicitContent): self
    {
        $this->iTunesBlockExplicitContent = $iTunesBlockExplicitContent;
        return $this;
    }

    public function getITunesBlockMusicService(): ?bool
    {
        return $this->iTunesBlockMusicService;
    }

    public function setITunesBlockMusicService(?bool $iTunesBlockMusicService): self
    {
        $this->iTunesBlockMusicService = $iTunesBlockMusicService;
        return $this;
    }

    public function getITunesBlockRadio(): ?bool
    {
        return $this->iTunesBlockRadio;
    }

    public function setITunesBlockRadio(?bool $iTunesBlockRadio): self
    {
        $this->iTunesBlockRadio = $iTunesBlockRadio;
        return $this;
    }

    public function getKeyboardBlockAutoCorrect(): ?bool
    {
        return $this->keyboardBlockAutoCorrect;
    }

    public function setKeyboardBlockAutoCorrect(?bool $keyboardBlockAutoCorrect): self
    {
        $this->keyboardBlockAutoCorrect = $keyboardBlockAutoCorrect;
        return $this;
    }

    public function getKeyboardBlockDictation(): ?bool
    {
        return $this->keyboardBlockDictation;
    }

    public function setKeyboardBlockDictation(?bool $keyboardBlockDictation): self
    {
        $this->keyboardBlockDictation = $keyboardBlockDictation;
        return $this;
    }

    public function getKeyboardBlockPredictive(): ?bool
    {
        return $this->keyboardBlockPredictive;
    }

    public function setKeyboardBlockPredictive(?bool $keyboardBlockPredictive): self
    {
        $this->keyboardBlockPredictive = $keyboardBlockPredictive;
        return $this;
    }

    public function getKeyboardBlockShortcuts(): ?bool
    {
        return $this->keyboardBlockShortcuts;
    }

    public function setKeyboardBlockShortcuts(?bool $keyboardBlockShortcuts): self
    {
        $this->keyboardBlockShortcuts = $keyboardBlockShortcuts;
        return $this;
    }

    public function getKeyboardBlockSpellCheck(): ?bool
    {
        return $this->keyboardBlockSpellCheck;
    }

    public function setKeyboardBlockSpellCheck(?bool $keyboardBlockSpellCheck): self
    {
        $this->keyboardBlockSpellCheck = $keyboardBlockSpellCheck;
        return $this;
    }

    public function getKioskModeAllowAssistiveSpeak(): ?bool
    {
        return $this->kioskModeAllowAssistiveSpeak;
    }

    public function setKioskModeAllowAssistiveSpeak(?bool $kioskModeAllowAssistiveSpeak): self
    {
        $this->kioskModeAllowAssistiveSpeak = $kioskModeAllowAssistiveSpeak;
        return $this;
    }

    public function getKioskModeAllowAssistiveTouchSettings(): ?bool
    {
        return $this->kioskModeAllowAssistiveTouchSettings;
    }

    public function setKioskModeAllowAssistiveTouchSettings(?bool $kioskModeAllowAssistiveTouchSettings): self
    {
        $this->kioskModeAllowAssistiveTouchSettings = $kioskModeAllowAssistiveTouchSettings;
        return $this;
    }

    public function getKioskModeAllowAutoLock(): ?bool
    {
        return $this->kioskModeAllowAutoLock;
    }

    public function setKioskModeAllowAutoLock(?bool $kioskModeAllowAutoLock): self
    {
        $this->kioskModeAllowAutoLock = $kioskModeAllowAutoLock;
        return $this;
    }

    public function getKioskModeAllowColorInversionSettings(): ?bool
    {
        return $this->kioskModeAllowColorInversionSettings;
    }

    public function setKioskModeAllowColorInversionSettings(?bool $kioskModeAllowColorInversionSettings): self
    {
        $this->kioskModeAllowColorInversionSettings = $kioskModeAllowColorInversionSettings;
        return $this;
    }

    public function getKioskModeAllowRingerSwitch(): ?bool
    {
        return $this->kioskModeAllowRingerSwitch;
    }

    public function setKioskModeAllowRingerSwitch(?bool $kioskModeAllowRingerSwitch): self
    {
        $this->kioskModeAllowRingerSwitch = $kioskModeAllowRingerSwitch;
        return $this;
    }

    public function getKioskModeAllowScreenRotation(): ?bool
    {
        return $this->kioskModeAllowScreenRotation;
    }

    public function setKioskModeAllowScreenRotation(?bool $kioskModeAllowScreenRotation): self
    {
        $this->kioskModeAllowScreenRotation = $kioskModeAllowScreenRotation;
        return $this;
    }

    public function getKioskModeAllowSleepButton(): ?bool
    {
        return $this->kioskModeAllowSleepButton;
    }

    public function setKioskModeAllowSleepButton(?bool $kioskModeAllowSleepButton): self
    {
        $this->kioskModeAllowSleepButton = $kioskModeAllowSleepButton;
        return $this;
    }

    public function getKioskModeAllowTouchscreen(): ?bool
    {
        return $this->kioskModeAllowTouchscreen;
    }

    public function setKioskModeAllowTouchscreen(?bool $kioskModeAllowTouchscreen): self
    {
        $this->kioskModeAllowTouchscreen = $kioskModeAllowTouchscreen;
        return $this;
    }

    public function getKioskModeAllowVoiceOverSettings(): ?bool
    {
        return $this->kioskModeAllowVoiceOverSettings;
    }

    public function setKioskModeAllowVoiceOverSettings(?bool $kioskModeAllowVoiceOverSettings): self
    {
        $this->kioskModeAllowVoiceOverSettings = $kioskModeAllowVoiceOverSettings;
        return $this;
    }

    public function getKioskModeAllowVolumeButtons(): ?bool
    {
        return $this->kioskModeAllowVolumeButtons;
    }

    public function setKioskModeAllowVolumeButtons(?bool $kioskModeAllowVolumeButtons): self
    {
        $this->kioskModeAllowVolumeButtons = $kioskModeAllowVolumeButtons;
        return $this;
    }

    public function getKioskModeAllowZoomSettings(): ?bool
    {
        return $this->kioskModeAllowZoomSettings;
    }

    public function setKioskModeAllowZoomSettings(?bool $kioskModeAllowZoomSettings): self
    {
        $this->kioskModeAllowZoomSettings = $kioskModeAllowZoomSettings;
        return $this;
    }

    public function getKioskModeAppStoreUrl(): ?string
    {
        return $this->kioskModeAppStoreUrl;
    }

    public function setKioskModeAppStoreUrl(?string $kioskModeAppStoreUrl): self
    {
        $this->kioskModeAppStoreUrl = $kioskModeAppStoreUrl;
        return $this;
    }

    public function getKioskModeBuiltInAppId(): ?string
    {
        return $this->kioskModeBuiltInAppId;
    }

    public function setKioskModeBuiltInAppId(?string $kioskModeBuiltInAppId): self
    {
        $this->kioskModeBuiltInAppId = $kioskModeBuiltInAppId;
        return $this;
    }

    public function getKioskModeManagedAppId(): ?string
    {
        return $this->kioskModeManagedAppId;
    }

    public function setKioskModeManagedAppId(?string $kioskModeManagedAppId): self
    {
        $this->kioskModeManagedAppId = $kioskModeManagedAppId;
        return $this;
    }

    public function getKioskModeRequireAssistiveTouch(): ?bool
    {
        return $this->kioskModeRequireAssistiveTouch;
    }

    public function setKioskModeRequireAssistiveTouch(?bool $kioskModeRequireAssistiveTouch): self
    {
        $this->kioskModeRequireAssistiveTouch = $kioskModeRequireAssistiveTouch;
        return $this;
    }

    public function getKioskModeRequireColorInversion(): ?bool
    {
        return $this->kioskModeRequireColorInversion;
    }

    public function setKioskModeRequireColorInversion(?bool $kioskModeRequireColorInversion): self
    {
        $this->kioskModeRequireColorInversion = $kioskModeRequireColorInversion;
        return $this;
    }

    public function getKioskModeRequireMonoAudio(): ?bool
    {
        return $this->kioskModeRequireMonoAudio;
    }

    public function setKioskModeRequireMonoAudio(?bool $kioskModeRequireMonoAudio): self
    {
        $this->kioskModeRequireMonoAudio = $kioskModeRequireMonoAudio;
        return $this;
    }

    public function getKioskModeRequireVoiceOver(): ?bool
    {
        return $this->kioskModeRequireVoiceOver;
    }

    public function setKioskModeRequireVoiceOver(?bool $kioskModeRequireVoiceOver): self
    {
        $this->kioskModeRequireVoiceOver = $kioskModeRequireVoiceOver;
        return $this;
    }

    public function getKioskModeRequireZoom(): ?bool
    {
        return $this->kioskModeRequireZoom;
    }

    public function setKioskModeRequireZoom(?bool $kioskModeRequireZoom): self
    {
        $this->kioskModeRequireZoom = $kioskModeRequireZoom;
        return $this;
    }

    public function getLockScreenBlockControlCenter(): ?bool
    {
        return $this->lockScreenBlockControlCenter;
    }

    public function setLockScreenBlockControlCenter(?bool $lockScreenBlockControlCenter): self
    {
        $this->lockScreenBlockControlCenter = $lockScreenBlockControlCenter;
        return $this;
    }

    public function getLockScreenBlockNotificationView(): ?bool
    {
        return $this->lockScreenBlockNotificationView;
    }

    public function setLockScreenBlockNotificationView(?bool $lockScreenBlockNotificationView): self
    {
        $this->lockScreenBlockNotificationView = $lockScreenBlockNotificationView;
        return $this;
    }

    public function getLockScreenBlockPassbook(): ?bool
    {
        return $this->lockScreenBlockPassbook;
    }

    public function setLockScreenBlockPassbook(?bool $lockScreenBlockPassbook): self
    {
        $this->lockScreenBlockPassbook = $lockScreenBlockPassbook;
        return $this;
    }

    public function getLockScreenBlockTodayView(): ?bool
    {
        return $this->lockScreenBlockTodayView;
    }

    public function setLockScreenBlockTodayView(?bool $lockScreenBlockTodayView): self
    {
        $this->lockScreenBlockTodayView = $lockScreenBlockTodayView;
        return $this;
    }

    public function getMediaContentRatingApps(): ?string
    {
        return $this->mediaContentRatingApps;
    }

    public function setMediaContentRatingApps(?string $mediaContentRatingApps): self
    {
        $this->mediaContentRatingApps = $mediaContentRatingApps;
        return $this;
    }

    public function getMediaContentRatingAustralia(): ?string
    {
        return $this->mediaContentRatingAustralia;
    }

    public function setMediaContentRatingAustralia(?string $mediaContentRatingAustralia): self
    {
        $this->mediaContentRatingAustralia = $mediaContentRatingAustralia;
        return $this;
    }

    public function getMediaContentRatingCanada(): ?string
    {
        return $this->mediaContentRatingCanada;
    }

    public function setMediaContentRatingCanada(?string $mediaContentRatingCanada): self
    {
        $this->mediaContentRatingCanada = $mediaContentRatingCanada;
        return $this;
    }

    public function getMediaContentRatingFrance(): ?string
    {
        return $this->mediaContentRatingFrance;
    }

    public function setMediaContentRatingFrance(?string $mediaContentRatingFrance): self
    {
        $this->mediaContentRatingFrance = $mediaContentRatingFrance;
        return $this;
    }

    public function getMediaContentRatingGermany(): ?string
    {
        return $this->mediaContentRatingGermany;
    }

    public function setMediaContentRatingGermany(?string $mediaContentRatingGermany): self
    {
        $this->mediaContentRatingGermany = $mediaContentRatingGermany;
        return $this;
    }

    public function getMediaContentRatingIreland(): ?string
    {
        return $this->mediaContentRatingIreland;
    }

    public function setMediaContentRatingIreland(?string $mediaContentRatingIreland): self
    {
        $this->mediaContentRatingIreland = $mediaContentRatingIreland;
        return $this;
    }

    public function getMediaContentRatingJapan(): ?string
    {
        return $this->mediaContentRatingJapan;
    }

    public function setMediaContentRatingJapan(?string $mediaContentRatingJapan): self
    {
        $this->mediaContentRatingJapan = $mediaContentRatingJapan;
        return $this;
    }

    public function getMediaContentRatingNewZealand(): ?string
    {
        return $this->mediaContentRatingNewZealand;
    }

    public function setMediaContentRatingNewZealand(?string $mediaContentRatingNewZealand): self
    {
        $this->mediaContentRatingNewZealand = $mediaContentRatingNewZealand;
        return $this;
    }

    public function getMediaContentRatingUnitedKingdom(): ?string
    {
        return $this->mediaContentRatingUnitedKingdom;
    }

    public function setMediaContentRatingUnitedKingdom(?string $mediaContentRatingUnitedKingdom): self
    {
        $this->mediaContentRatingUnitedKingdom = $mediaContentRatingUnitedKingdom;
        return $this;
    }

    public function getMediaContentRatingUnitedStates(): ?string
    {
        return $this->mediaContentRatingUnitedStates;
    }

    public function setMediaContentRatingUnitedStates(?string $mediaContentRatingUnitedStates): self
    {
        $this->mediaContentRatingUnitedStates = $mediaContentRatingUnitedStates;
        return $this;
    }

    public function getMessagesBlocked(): ?bool
    {
        return $this->messagesBlocked;
    }

    public function setMessagesBlocked(?bool $messagesBlocked): self
    {
        $this->messagesBlocked = $messagesBlocked;
        return $this;
    }

    public function getNetworkUsageRules(): array
    {
        return $this->networkUsageRules;
    }

    public function setNetworkUsageRules(array $networkUsageRules): self
    {
        $this->networkUsageRules = $networkUsageRules;
        return $this;
    }

    public function getNotificationsBlockSettingsModification(): ?bool
    {
        return $this->notificationsBlockSettingsModification;
    }

    public function setNotificationsBlockSettingsModification(?bool $notificationsBlockSettingsModification): self
    {
        $this->notificationsBlockSettingsModification = $notificationsBlockSettingsModification;
        return $this;
    }

    public function getPasscodeBlockFingerprintModification(): ?bool
    {
        return $this->passcodeBlockFingerprintModification;
    }

    public function setPasscodeBlockFingerprintModification(?bool $passcodeBlockFingerprintModification): self
    {
        $this->passcodeBlockFingerprintModification = $passcodeBlockFingerprintModification;
        return $this;
    }

    public function getPasscodeBlockFingerprintUnlock(): ?bool
    {
        return $this->passcodeBlockFingerprintUnlock;
    }

    public function setPasscodeBlockFingerprintUnlock(?bool $passcodeBlockFingerprintUnlock): self
    {
        $this->passcodeBlockFingerprintUnlock = $passcodeBlockFingerprintUnlock;
        return $this;
    }

    public function getPasscodeBlockModification(): ?bool
    {
        return $this->passcodeBlockModification;
    }

    public function setPasscodeBlockModification(?bool $passcodeBlockModification): self
    {
        $this->passcodeBlockModification = $passcodeBlockModification;
        return $this;
    }

    public function getPasscodeBlockSimple(): ?bool
    {
        return $this->passcodeBlockSimple;
    }

    public function setPasscodeBlockSimple(?bool $passcodeBlockSimple): self
    {
        $this->passcodeBlockSimple = $passcodeBlockSimple;
        return $this;
    }

    public function getPasscodeExpirationDays(): ?float
    {
        return $this->passcodeExpirationDays;
    }

    public function setPasscodeExpirationDays(?float $passcodeExpirationDays): self
    {
        $this->passcodeExpirationDays = $passcodeExpirationDays;
        return $this;
    }

    public function getPasscodeMinimumCharacterSetCount(): ?float
    {
        return $this->passcodeMinimumCharacterSetCount;
    }

    public function setPasscodeMinimumCharacterSetCount(?float $passcodeMinimumCharacterSetCount): self
    {
        $this->passcodeMinimumCharacterSetCount = $passcodeMinimumCharacterSetCount;
        return $this;
    }

    public function getPasscodeMinimumLength(): ?float
    {
        return $this->passcodeMinimumLength;
    }

    public function setPasscodeMinimumLength(?float $passcodeMinimumLength): self
    {
        $this->passcodeMinimumLength = $passcodeMinimumLength;
        return $this;
    }

    public function getPasscodeMinutesOfInactivityBeforeLock(): ?float
    {
        return $this->passcodeMinutesOfInactivityBeforeLock;
    }

    public function setPasscodeMinutesOfInactivityBeforeLock(?float $passcodeMinutesOfInactivityBeforeLock): self
    {
        $this->passcodeMinutesOfInactivityBeforeLock = $passcodeMinutesOfInactivityBeforeLock;
        return $this;
    }

    public function getPasscodeMinutesOfInactivityBeforeScreenTimeout(): ?float
    {
        return $this->passcodeMinutesOfInactivityBeforeScreenTimeout;
    }

    public function setPasscodeMinutesOfInactivityBeforeScreenTimeout(?float $passcodeMinutesOfInactivityBeforeScreenTimeout): self
    {
        $this->passcodeMinutesOfInactivityBeforeScreenTimeout = $passcodeMinutesOfInactivityBeforeScreenTimeout;
        return $this;
    }

    public function getPasscodePreviousPasscodeBlockCount(): ?float
    {
        return $this->passcodePreviousPasscodeBlockCount;
    }

    public function setPasscodePreviousPasscodeBlockCount(?float $passcodePreviousPasscodeBlockCount): self
    {
        $this->passcodePreviousPasscodeBlockCount = $passcodePreviousPasscodeBlockCount;
        return $this;
    }

    public function getPasscodeRequired(): ?bool
    {
        return $this->passcodeRequired;
    }

    public function setPasscodeRequired(?bool $passcodeRequired): self
    {
        $this->passcodeRequired = $passcodeRequired;
        return $this;
    }

    public function getPasscodeRequiredType(): ?string
    {
        return $this->passcodeRequiredType;
    }

    public function setPasscodeRequiredType(?string $passcodeRequiredType): self
    {
        $this->passcodeRequiredType = $passcodeRequiredType;
        return $this;
    }

    public function getPasscodeSignInFailureCountBeforeWipe(): ?float
    {
        return $this->passcodeSignInFailureCountBeforeWipe;
    }

    public function setPasscodeSignInFailureCountBeforeWipe(?float $passcodeSignInFailureCountBeforeWipe): self
    {
        $this->passcodeSignInFailureCountBeforeWipe = $passcodeSignInFailureCountBeforeWipe;
        return $this;
    }

    public function getPodcastsBlocked(): ?bool
    {
        return $this->podcastsBlocked;
    }

    public function setPodcastsBlocked(?bool $podcastsBlocked): self
    {
        $this->podcastsBlocked = $podcastsBlocked;
        return $this;
    }

    public function getSafariBlockAutofill(): ?bool
    {
        return $this->safariBlockAutofill;
    }

    public function setSafariBlockAutofill(?bool $safariBlockAutofill): self
    {
        $this->safariBlockAutofill = $safariBlockAutofill;
        return $this;
    }

    public function getSafariBlocked(): ?bool
    {
        return $this->safariBlocked;
    }

    public function setSafariBlocked(?bool $safariBlocked): self
    {
        $this->safariBlocked = $safariBlocked;
        return $this;
    }

    public function getSafariBlockJavaScript(): ?bool
    {
        return $this->safariBlockJavaScript;
    }

    public function setSafariBlockJavaScript(?bool $safariBlockJavaScript): self
    {
        $this->safariBlockJavaScript = $safariBlockJavaScript;
        return $this;
    }

    public function getSafariBlockPopups(): ?bool
    {
        return $this->safariBlockPopups;
    }

    public function setSafariBlockPopups(?bool $safariBlockPopups): self
    {
        $this->safariBlockPopups = $safariBlockPopups;
        return $this;
    }

    public function getSafariCookieSettings(): ?string
    {
        return $this->safariCookieSettings;
    }

    public function setSafariCookieSettings(?string $safariCookieSettings): self
    {
        $this->safariCookieSettings = $safariCookieSettings;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSafariManagedDomains(): array
    {
        return $this->safariManagedDomains;
    }

    /**
     * @param string[] $safariManagedDomains
     */
    public function setSafariManagedDomains(array $safariManagedDomains): self
    {
        $this->safariManagedDomains = $safariManagedDomains;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSafariPasswordAutoFillDomains(): array
    {
        return $this->safariPasswordAutoFillDomains;
    }

    /**
     * @param string[] $safariPasswordAutoFillDomains
     */
    public function setSafariPasswordAutoFillDomains(array $safariPasswordAutoFillDomains): self
    {
        $this->safariPasswordAutoFillDomains = $safariPasswordAutoFillDomains;
        return $this;
    }

    public function getSafariRequireFraudWarning(): ?bool
    {
        return $this->safariRequireFraudWarning;
    }

    public function setSafariRequireFraudWarning(?bool $safariRequireFraudWarning): self
    {
        $this->safariRequireFraudWarning = $safariRequireFraudWarning;
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

    public function getSiriBlocked(): ?bool
    {
        return $this->siriBlocked;
    }

    public function setSiriBlocked(?bool $siriBlocked): self
    {
        $this->siriBlocked = $siriBlocked;
        return $this;
    }

    public function getSiriBlockedWhenLocked(): ?bool
    {
        return $this->siriBlockedWhenLocked;
    }

    public function setSiriBlockedWhenLocked(?bool $siriBlockedWhenLocked): self
    {
        $this->siriBlockedWhenLocked = $siriBlockedWhenLocked;
        return $this;
    }

    public function getSiriBlockUserGeneratedContent(): ?bool
    {
        return $this->siriBlockUserGeneratedContent;
    }

    public function setSiriBlockUserGeneratedContent(?bool $siriBlockUserGeneratedContent): self
    {
        $this->siriBlockUserGeneratedContent = $siriBlockUserGeneratedContent;
        return $this;
    }

    public function getSiriRequireProfanityFilter(): ?bool
    {
        return $this->siriRequireProfanityFilter;
    }

    public function setSiriRequireProfanityFilter(?bool $siriRequireProfanityFilter): self
    {
        $this->siriRequireProfanityFilter = $siriRequireProfanityFilter;
        return $this;
    }

    public function getSpotlightBlockInternetResults(): ?bool
    {
        return $this->spotlightBlockInternetResults;
    }

    public function setSpotlightBlockInternetResults(?bool $spotlightBlockInternetResults): self
    {
        $this->spotlightBlockInternetResults = $spotlightBlockInternetResults;
        return $this;
    }

    public function getVoiceDialingBlocked(): ?bool
    {
        return $this->voiceDialingBlocked;
    }

    public function setVoiceDialingBlocked(?bool $voiceDialingBlocked): self
    {
        $this->voiceDialingBlocked = $voiceDialingBlocked;
        return $this;
    }

    public function getWallpaperBlockModification(): ?bool
    {
        return $this->wallpaperBlockModification;
    }

    public function setWallpaperBlockModification(?bool $wallpaperBlockModification): self
    {
        $this->wallpaperBlockModification = $wallpaperBlockModification;
        return $this;
    }

    public function getWiFiConnectOnlyToConfiguredNetworks(): ?string
    {
        return $this->wiFiConnectOnlyToConfiguredNetworks;
    }

    public function setWiFiConnectOnlyToConfiguredNetworks(?string $wiFiConnectOnlyToConfiguredNetworks): self
    {
        $this->wiFiConnectOnlyToConfiguredNetworks = $wiFiConnectOnlyToConfiguredNetworks;
        return $this;
    }

}
