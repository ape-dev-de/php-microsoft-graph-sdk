<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AndroidGeneralDeviceConfiguration
 */
class AndroidGeneralDeviceConfiguration
{
    public function __construct(
        /** Indicates whether or not to block clipboard sharing to copy and paste between applications. */
        public ?bool $appsBlockClipboardSharing = null,
        /** Indicates whether or not to block copy and paste within applications. */
        public ?bool $appsBlockCopyPaste = null,
        /** Indicates whether or not to block the YouTube app. */
        public ?bool $appsBlockYouTube = null,
        /** List of apps to be hidden on the KNOX device. This collection can contain a maximum of 500 elements. */
        public array $appsHideList = [],
        /** List of apps which can be installed on the KNOX device. This collection can contain a maximum of 500 elements. */
        public array $appsInstallAllowList = [],
        /** List of apps which are blocked from being launched on the KNOX device. This collection can contain a maximum of 500 elements. */
        public array $appsLaunchBlockList = [],
        /** Indicates whether or not to block Bluetooth. */
        public ?bool $bluetoothBlocked = null,
        /** Indicates whether or not to block the use of the camera. */
        public ?bool $cameraBlocked = null,
        /** Indicates whether or not to block data roaming. */
        public ?bool $cellularBlockDataRoaming = null,
        /** Indicates whether or not to block SMS/MMS messaging. */
        public ?bool $cellularBlockMessaging = null,
        /** Indicates whether or not to block voice roaming. */
        public ?bool $cellularBlockVoiceRoaming = null,
        /** Indicates whether or not to block syncing Wi-Fi tethering. */
        public ?bool $cellularBlockWiFiTethering = null,
        /**  */
        public ?string $compliantAppListType = null,
        /** List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements. */
        public array $compliantAppsList = [],
        /** Indicates whether or not to allow device sharing mode. */
        public ?bool $deviceSharingAllowed = null,
        /** Indicates whether or not to block diagnostic data submission. */
        public ?bool $diagnosticDataBlockSubmission = null,
        /** Indicates whether or not to block user performing a factory reset. */
        public ?bool $factoryResetBlocked = null,
        /** Indicates whether or not to block Google account auto sync. */
        public ?bool $googleAccountBlockAutoSync = null,
        /** Indicates whether or not to block the Google Play store. */
        public ?bool $googlePlayStoreBlocked = null,
        /** A list of apps that will be allowed to run when the device is in Kiosk Mode. This collection can contain a maximum of 500 elements. */
        public array $kioskModeApps = [],
        /** Indicates whether or not to block the screen sleep button while in Kiosk Mode. */
        public ?bool $kioskModeBlockSleepButton = null,
        /** Indicates whether or not to block the volume buttons while in Kiosk Mode. */
        public ?bool $kioskModeBlockVolumeButtons = null,
        /** Indicates whether or not to block location services. */
        public ?bool $locationServicesBlocked = null,
        /** Indicates whether or not to block Near-Field Communication. */
        public ?bool $nfcBlocked = null,
        /** Indicates whether or not to block fingerprint unlock. */
        public ?bool $passwordBlockFingerprintUnlock = null,
        /** Indicates whether or not to block Smart Lock and other trust agents. */
        public ?bool $passwordBlockTrustAgents = null,
        /** Number of days before the password expires. Valid values 1 to 365 */
        public ?float $passwordExpirationDays = null,
        /** Minimum length of passwords. Valid values 4 to 16 */
        public ?float $passwordMinimumLength = null,
        /** Minutes of inactivity before the screen times out. */
        public ?float $passwordMinutesOfInactivityBeforeScreenTimeout = null,
        /** Number of previous passwords to block. Valid values 0 to 24 */
        public ?float $passwordPreviousPasswordBlockCount = null,
        /** Indicates whether or not to require a password. */
        public ?bool $passwordRequired = null,
        /**  */
        public ?string $passwordRequiredType = null,
        /** Number of sign in failures allowed before factory reset. Valid values 1 to 16 */
        public ?float $passwordSignInFailureCountBeforeFactoryReset = null,
        /** Indicates whether or not to block powering off the device. */
        public ?bool $powerOffBlocked = null,
        /** Indicates whether or not to block screenshots. */
        public ?bool $screenCaptureBlocked = null,
        /** Require the Android Verify apps feature is turned on. */
        public ?bool $securityRequireVerifyApps = null,
        /** Indicates whether or not to block Google Backup. */
        public ?bool $storageBlockGoogleBackup = null,
        /** Indicates whether or not to block removable storage usage. */
        public ?bool $storageBlockRemovableStorage = null,
        /** Indicates whether or not to require device encryption. */
        public ?bool $storageRequireDeviceEncryption = null,
        /** Indicates whether or not to require removable storage encryption. */
        public ?bool $storageRequireRemovableStorageEncryption = null,
        /** Indicates whether or not to block the use of the Voice Assistant. */
        public ?bool $voiceAssistantBlocked = null,
        /** Indicates whether or not to block voice dialing. */
        public ?bool $voiceDialingBlocked = null,
        /** Indicates whether or not to block the web browser's auto fill feature. */
        public ?bool $webBrowserBlockAutofill = null,
        /** Indicates whether or not to block the web browser. */
        public ?bool $webBrowserBlocked = null,
        /** Indicates whether or not to block JavaScript within the web browser. */
        public ?bool $webBrowserBlockJavaScript = null,
        /** Indicates whether or not to block popups within the web browser. */
        public ?bool $webBrowserBlockPopups = null,
        /**  */
        public ?string $webBrowserCookieSettings = null,
        /** This topic provides descriptions of the declared methods, properties and relationships exposed by the androidGeneralDeviceConfiguration resource. */
        public ?string $wiFiBlocked = null
    ) {}
}
