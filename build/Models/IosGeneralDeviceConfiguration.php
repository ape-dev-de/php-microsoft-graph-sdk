<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosGeneralDeviceConfiguration
 */
class IosGeneralDeviceConfiguration
{
    public function __construct(
        /** Indicates whether or not to allow account modification when the device is in supervised mode. */
        public ?bool $accountBlockModification = null,
        /** Indicates whether or not to allow activation lock when the device is in the supervised mode. */
        public ?bool $activationLockAllowWhenSupervised = null,
        /** Indicates whether or not to allow AirDrop when the device is in supervised mode. */
        public ?bool $airDropBlocked = null,
        /** Indicates whether or not to cause AirDrop to be considered an unmanaged drop target (iOS 9.0 and later). */
        public ?bool $airDropForceUnmanagedDropTarget = null,
        /** Indicates whether or not to enforce all devices receiving AirPlay requests from this device to use a pairing password. */
        public ?bool $airPlayForcePairingPasswordForOutgoingRequests = null,
        /** Indicates whether or not to block the user from using News when the device is in supervised mode (iOS 9.0 and later). */
        public ?bool $appleNewsBlocked = null,
        /** Indicates whether or not to allow Apple Watch pairing when the device is in supervised mode (iOS 9.0 and later). */
        public ?bool $appleWatchBlockPairing = null,
        /** Indicates whether or not to force a paired Apple Watch to use Wrist Detection (iOS 8.2 and later). */
        public ?bool $appleWatchForceWristDetection = null,
        /** Gets or sets the list of iOS apps allowed to autonomously enter Single App Mode. Supervised only. iOS 7.0 and later. This collection can contain a maximum of 500 elements. */
        public array $appsSingleAppModeList = [],
        /** Indicates whether or not to block the automatic downloading of apps purchased on other devices when the device is in supervised mode (iOS 9.0 and later). */
        public ?bool $appStoreBlockAutomaticDownloads = null,
        /** Indicates whether or not to block the user from using the App Store. Requires a supervised device for iOS 13 and later. */
        public ?bool $appStoreBlocked = null,
        /** Indicates whether or not to block the user from making in app purchases. */
        public ?bool $appStoreBlockInAppPurchases = null,
        /** Indicates whether or not to block the App Store app, not restricting installation through Host apps. Applies to supervised mode only (iOS 9.0 and later). */
        public ?bool $appStoreBlockUIAppInstallation = null,
        /** Indicates whether or not to require a password when using the app store. */
        public ?bool $appStoreRequirePassword = null,
        /** List of apps in the visibility list (either visible/launchable apps list or hidden/unlaunchable apps list, controlled by AppsVisibilityListType) (iOS 9.3 and later). This collection can contain a maximum of 10000 elements. */
        public array $appsVisibilityList = [],
        /**  */
        public ?string $appsVisibilityListType = null,
        /** Indicates whether or not to allow modification of Bluetooth settings when the device is in supervised mode (iOS 10.0 and later). */
        public ?bool $bluetoothBlockModification = null,
        /** Indicates whether or not to block the user from accessing the camera of the device. Requires a supervised device for iOS 13 and later. */
        public ?bool $cameraBlocked = null,
        /** Indicates whether or not to block data roaming. */
        public ?bool $cellularBlockDataRoaming = null,
        /** Indicates whether or not to block global background fetch while roaming. */
        public ?bool $cellularBlockGlobalBackgroundFetchWhileRoaming = null,
        /** Indicates whether or not to allow changes to cellular app data usage settings when the device is in supervised mode. */
        public ?bool $cellularBlockPerAppDataModification = null,
        /** Indicates whether or not to block Personal Hotspot. */
        public ?bool $cellularBlockPersonalHotspot = null,
        /** Indicates whether or not to block voice roaming. */
        public ?bool $cellularBlockVoiceRoaming = null,
        /** Indicates whether or not to block untrusted TLS certificates. */
        public ?bool $certificatesBlockUntrustedTlsCertificates = null,
        /** Indicates whether or not to allow remote screen observation by Classroom app when the device is in supervised mode (iOS 9.3 and later). */
        public ?bool $classroomAppBlockRemoteScreenObservation = null,
        /** Indicates whether or not to automatically give permission to the teacher of a managed course on the Classroom app to view a student's screen without prompting when the device is in supervised mode. */
        public ?bool $classroomAppForceUnpromptedScreenObservation = null,
        /**  */
        public ?string $compliantAppListType = null,
        /** List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements. */
        public array $compliantAppsList = [],
        /** Indicates whether or not to block the user from installing configuration profiles and certificates interactively when the device is in supervised mode. */
        public ?bool $configurationProfileBlockChanges = null,
        /** Indicates whether or not to block definition lookup when the device is in supervised mode (iOS 8.1.3 and later ). */
        public ?bool $definitionLookupBlocked = null,
        /** Indicates whether or not to allow the user to enables restrictions in the device settings when the device is in supervised mode. */
        public ?bool $deviceBlockEnableRestrictions = null,
        /** Indicates whether or not to allow the use of the 'Erase all content and settings' option on the device when the device is in supervised mode. */
        public ?bool $deviceBlockEraseContentAndSettings = null,
        /** Indicates whether or not to allow device name modification when the device is in supervised mode (iOS 9.0 and later). */
        public ?bool $deviceBlockNameModification = null,
        /** Indicates whether or not to block diagnostic data submission. */
        public ?bool $diagnosticDataBlockSubmission = null,
        /** Indicates whether or not to allow diagnostics submission settings modification when the device is in supervised mode (iOS 9.3.2 and later). */
        public ?bool $diagnosticDataBlockSubmissionModification = null,
        /** Indicates whether or not to block the user from viewing managed documents in unmanaged apps. */
        public ?bool $documentsBlockManagedDocumentsInUnmanagedApps = null,
        /** Indicates whether or not to block the user from viewing unmanaged documents in managed apps. */
        public ?bool $documentsBlockUnmanagedDocumentsInManagedApps = null,
        /** @var string[] An email address lacking a suffix that matches any of these strings will be considered out-of-domain. */
        public array $emailInDomainSuffixes = [],
        /** Indicates whether or not to block the user from trusting an enterprise app. */
        public ?bool $enterpriseAppBlockTrust = null,
        /** [Deprecated] Configuring this setting and setting the value to ''true'' has no effect on the device. */
        public ?bool $enterpriseAppBlockTrustModification = null,
        /** Indicates whether or not to block the user from using FaceTime. Requires a supervised device for iOS 13 and later. */
        public ?bool $faceTimeBlocked = null,
        /** Indicates whether or not to block changes to Find My Friends when the device is in supervised mode. */
        public ?bool $findMyFriendsBlocked = null,
        /** Indicates whether or not to block the user from using Game Center when the device is in supervised mode. */
        public ?bool $gameCenterBlocked = null,
        /** Indicates whether or not to block the user from having friends in Game Center. Requires a supervised device for iOS 13 and later. */
        public ?bool $gamingBlockGameCenterFriends = null,
        /** Indicates whether or not to block the user from using multiplayer gaming. Requires a supervised device for iOS 13 and later. */
        public ?bool $gamingBlockMultiplayer = null,
        /** indicates whether or not to allow host pairing to control the devices an iOS device can pair with when the iOS device is in supervised mode. */
        public ?bool $hostPairingBlocked = null,
        /** Indicates whether or not to block the user from using the iBooks Store when the device is in supervised mode. */
        public ?bool $iBooksStoreBlocked = null,
        /** Indicates whether or not to block the user from downloading media from the iBookstore that has been tagged as erotica. */
        public ?bool $iBooksStoreBlockErotica = null,
        /** Indicates whether or not to block the user from continuing work they started on iOS device to another iOS or macOS device. */
        public ?bool $iCloudBlockActivityContinuation = null,
        /** Indicates whether or not to block iCloud backup. Requires a supervised device for iOS 13 and later. */
        public ?bool $iCloudBlockBackup = null,
        /** Indicates whether or not to block iCloud document sync. Requires a supervised device for iOS 13 and later. */
        public ?bool $iCloudBlockDocumentSync = null,
        /** Indicates whether or not to block Managed Apps Cloud Sync. */
        public ?bool $iCloudBlockManagedAppsSync = null,
        /** Indicates whether or not to block iCloud Photo Library. */
        public ?bool $iCloudBlockPhotoLibrary = null,
        /** Indicates whether or not to block iCloud Photo Stream Sync. */
        public ?bool $iCloudBlockPhotoStreamSync = null,
        /** Indicates whether or not to block Shared Photo Stream. */
        public ?bool $iCloudBlockSharedPhotoStream = null,
        /** Indicates whether or not to require backups to iCloud be encrypted. */
        public ?bool $iCloudRequireEncryptedBackup = null,
        /** Indicates whether or not to block the user from accessing explicit content in iTunes and the App Store. Requires a supervised device for iOS 13 and later. */
        public ?bool $iTunesBlockExplicitContent = null,
        /** Indicates whether or not to block Music service and revert Music app to classic mode when the device is in supervised mode (iOS 9.3 and later and macOS 10.12 and later). */
        public ?bool $iTunesBlockMusicService = null,
        /** Indicates whether or not to block the user from using iTunes Radio when the device is in supervised mode (iOS 9.3 and later). */
        public ?bool $iTunesBlockRadio = null,
        /** Indicates whether or not to block keyboard auto-correction when the device is in supervised mode (iOS 8.1.3 and later). */
        public ?bool $keyboardBlockAutoCorrect = null,
        /** Indicates whether or not to block the user from using dictation input when the device is in supervised mode. */
        public ?bool $keyboardBlockDictation = null,
        /** Indicates whether or not to block predictive keyboards when device is in supervised mode (iOS 8.1.3 and later). */
        public ?bool $keyboardBlockPredictive = null,
        /** Indicates whether or not to block keyboard shortcuts when the device is in supervised mode (iOS 9.0 and later). */
        public ?bool $keyboardBlockShortcuts = null,
        /** Indicates whether or not to block keyboard spell-checking when the device is in supervised mode (iOS 8.1.3 and later). */
        public ?bool $keyboardBlockSpellCheck = null,
        /** Indicates whether or not to allow assistive speak while in kiosk mode. */
        public ?bool $kioskModeAllowAssistiveSpeak = null,
        /** Indicates whether or not to allow access to the Assistive Touch Settings while in kiosk mode. */
        public ?bool $kioskModeAllowAssistiveTouchSettings = null,
        /** Indicates whether or not to allow device auto lock while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockAutoLock instead. */
        public ?bool $kioskModeAllowAutoLock = null,
        /** Indicates whether or not to allow access to the Color Inversion Settings while in kiosk mode. */
        public ?bool $kioskModeAllowColorInversionSettings = null,
        /** Indicates whether or not to allow use of the ringer switch while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockRingerSwitch instead. */
        public ?bool $kioskModeAllowRingerSwitch = null,
        /** Indicates whether or not to allow screen rotation while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockScreenRotation instead. */
        public ?bool $kioskModeAllowScreenRotation = null,
        /** Indicates whether or not to allow use of the sleep button while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockSleepButton instead. */
        public ?bool $kioskModeAllowSleepButton = null,
        /** Indicates whether or not to allow use of the touchscreen while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockTouchscreen instead. */
        public ?bool $kioskModeAllowTouchscreen = null,
        /** Indicates whether or not to allow access to the voice over settings while in kiosk mode. */
        public ?bool $kioskModeAllowVoiceOverSettings = null,
        /** Indicates whether or not to allow use of the volume buttons while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockVolumeButtons instead. */
        public ?bool $kioskModeAllowVolumeButtons = null,
        /** Indicates whether or not to allow access to the zoom settings while in kiosk mode. */
        public ?bool $kioskModeAllowZoomSettings = null,
        /** URL in the app store to the app to use for kiosk mode. Use if KioskModeManagedAppId is not known. */
        public ?string $kioskModeAppStoreUrl = null,
        /** ID for built-in apps to use for kiosk mode. Used when KioskModeManagedAppId and KioskModeAppStoreUrl are not set. */
        public ?string $kioskModeBuiltInAppId = null,
        /** Managed app id of the app to use for kiosk mode. If KioskModeManagedAppId is specified then KioskModeAppStoreUrl will be ignored. */
        public ?string $kioskModeManagedAppId = null,
        /** Indicates whether or not to require assistive touch while in kiosk mode. */
        public ?bool $kioskModeRequireAssistiveTouch = null,
        /** Indicates whether or not to require color inversion while in kiosk mode. */
        public ?bool $kioskModeRequireColorInversion = null,
        /** Indicates whether or not to require mono audio while in kiosk mode. */
        public ?bool $kioskModeRequireMonoAudio = null,
        /** Indicates whether or not to require voice over while in kiosk mode. */
        public ?bool $kioskModeRequireVoiceOver = null,
        /** Indicates whether or not to require zoom while in kiosk mode. */
        public ?bool $kioskModeRequireZoom = null,
        /** Indicates whether or not to block the user from using control center on the lock screen. */
        public ?bool $lockScreenBlockControlCenter = null,
        /** Indicates whether or not to block the user from using the notification view on the lock screen. */
        public ?bool $lockScreenBlockNotificationView = null,
        /** Indicates whether or not to block the user from using passbook when the device is locked. */
        public ?bool $lockScreenBlockPassbook = null,
        /** Indicates whether or not to block the user from using the Today View on the lock screen. */
        public ?bool $lockScreenBlockTodayView = null,
        /**  */
        public ?string $mediaContentRatingApps = null,
        /** Media content rating settings for Australia */
        public ?string $mediaContentRatingAustralia = null,
        /** Media content rating settings for Canada */
        public ?string $mediaContentRatingCanada = null,
        /** Media content rating settings for France */
        public ?string $mediaContentRatingFrance = null,
        /** Media content rating settings for Germany */
        public ?string $mediaContentRatingGermany = null,
        /** Media content rating settings for Ireland */
        public ?string $mediaContentRatingIreland = null,
        /** Media content rating settings for Japan */
        public ?string $mediaContentRatingJapan = null,
        /** Media content rating settings for New Zealand */
        public ?string $mediaContentRatingNewZealand = null,
        /** Media content rating settings for United Kingdom */
        public ?string $mediaContentRatingUnitedKingdom = null,
        /** Media content rating settings for United States */
        public ?string $mediaContentRatingUnitedStates = null,
        /** Indicates whether or not to block the user from using the Messages app on the supervised device. */
        public ?bool $messagesBlocked = null,
        /** List of managed apps and the network rules that applies to them. This collection can contain a maximum of 1000 elements. */
        public array $networkUsageRules = [],
        /** Indicates whether or not to allow notifications settings modification (iOS 9.3 and later). */
        public ?bool $notificationsBlockSettingsModification = null,
        /** Block modification of registered Touch ID fingerprints when in supervised mode. */
        public ?bool $passcodeBlockFingerprintModification = null,
        /** Indicates whether or not to block fingerprint unlock. */
        public ?bool $passcodeBlockFingerprintUnlock = null,
        /** Indicates whether or not to allow passcode modification on the supervised device (iOS 9.0 and later). */
        public ?bool $passcodeBlockModification = null,
        /** Indicates whether or not to block simple passcodes. */
        public ?bool $passcodeBlockSimple = null,
        /** Number of days before the passcode expires. Valid values 1 to 65535 */
        public ?float $passcodeExpirationDays = null,
        /** Number of character sets a passcode must contain. Valid values 0 to 4 */
        public ?float $passcodeMinimumCharacterSetCount = null,
        /** Minimum length of passcode. Valid values 4 to 14 */
        public ?float $passcodeMinimumLength = null,
        /** Minutes of inactivity before a passcode is required. */
        public ?float $passcodeMinutesOfInactivityBeforeLock = null,
        /** Minutes of inactivity before the screen times out. */
        public ?float $passcodeMinutesOfInactivityBeforeScreenTimeout = null,
        /** Number of previous passcodes to block. Valid values 1 to 24 */
        public ?float $passcodePreviousPasscodeBlockCount = null,
        /** Indicates whether or not to require a passcode. */
        public ?bool $passcodeRequired = null,
        /**  */
        public ?string $passcodeRequiredType = null,
        /** Number of sign in failures allowed before wiping the device. Valid values 2 to 11 */
        public ?float $passcodeSignInFailureCountBeforeWipe = null,
        /** Indicates whether or not to block the user from using podcasts on the supervised device (iOS 8.0 and later). */
        public ?bool $podcastsBlocked = null,
        /** Indicates whether or not to block the user from using Auto fill in Safari. Requires a supervised device for iOS 13 and later. */
        public ?bool $safariBlockAutofill = null,
        /** Indicates whether or not to block the user from using Safari. Requires a supervised device for iOS 13 and later. */
        public ?bool $safariBlocked = null,
        /** Indicates whether or not to block JavaScript in Safari. */
        public ?bool $safariBlockJavaScript = null,
        /** Indicates whether or not to block popups in Safari. */
        public ?bool $safariBlockPopups = null,
        /**  */
        public ?string $safariCookieSettings = null,
        /** @var string[] URLs matching the patterns listed here will be considered managed. */
        public array $safariManagedDomains = [],
        /** @var string[] Users can save passwords in Safari only from URLs matching the patterns listed here. Applies to devices in supervised mode (iOS 9.3 and later). */
        public array $safariPasswordAutoFillDomains = [],
        /** Indicates whether or not to require fraud warning in Safari. */
        public ?bool $safariRequireFraudWarning = null,
        /** Indicates whether or not to block the user from taking Screenshots. */
        public ?bool $screenCaptureBlocked = null,
        /** Indicates whether or not to block the user from using Siri. */
        public ?bool $siriBlocked = null,
        /** Indicates whether or not to block the user from using Siri when locked. */
        public ?bool $siriBlockedWhenLocked = null,
        /** Indicates whether or not to block Siri from querying user-generated content when used on a supervised device. */
        public ?bool $siriBlockUserGeneratedContent = null,
        /** Indicates whether or not to prevent Siri from dictating, or speaking profane language on supervised device. */
        public ?bool $siriRequireProfanityFilter = null,
        /** Indicates whether or not to block Spotlight search from returning internet results on supervised device. */
        public ?bool $spotlightBlockInternetResults = null,
        /** Indicates whether or not to block voice dialing. */
        public ?bool $voiceDialingBlocked = null,
        /** Indicates whether or not to allow wallpaper modification on supervised device (iOS 9.0 and later) . */
        public ?bool $wallpaperBlockModification = null,
        /** This topic provides descriptions of the declared methods, properties and relationships exposed by the iosGeneralDeviceConfiguration resource. */
        public ?string $wiFiConnectOnlyToConfiguredNetworks = null
    ) {}
}
