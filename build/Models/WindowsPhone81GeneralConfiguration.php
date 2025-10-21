<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsPhone81GeneralConfiguration
 */
class WindowsPhone81GeneralConfiguration
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
        public ?DeviceConfigurationDeviceOverview $deviceStatusOverview = null,
        /** Device configuration installation status by user. */
        public array $userStatuses = [],
        /** Device Configuration users status overview */
        public ?DeviceConfigurationUserOverview $userStatusOverview = null,
        /** Value indicating whether this policy only applies to Windows Phone 8.1. This property is read-only. */
        public ?bool $applyOnlyToWindowsPhone81 = null,
        /** Indicates whether or not to block copy paste. */
        public ?bool $appsBlockCopyPaste = null,
        /** Indicates whether or not to block bluetooth. */
        public ?bool $bluetoothBlocked = null,
        /** Indicates whether or not to block camera. */
        public ?bool $cameraBlocked = null,
        /** Indicates whether or not to block Wi-Fi tethering. Has no impact if Wi-Fi is blocked. */
        public ?bool $cellularBlockWifiTethering = null,
        /**  */
        public ?AppListType $compliantAppListType = null,
        /** List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements. */
        public array $compliantAppsList = [],
        /** Indicates whether or not to block diagnostic data submission. */
        public ?bool $diagnosticDataBlockSubmission = null,
        /** Indicates whether or not to block custom email accounts. */
        public ?bool $emailBlockAddingAccounts = null,
        /** Indicates whether or not to block location services. */
        public ?bool $locationServicesBlocked = null,
        /** Indicates whether or not to block using a Microsoft Account. */
        public ?bool $microsoftAccountBlocked = null,
        /** Indicates whether or not to block Near-Field Communication. */
        public ?bool $nfcBlocked = null,
        /** Indicates whether or not to block syncing the calendar. */
        public ?bool $passwordBlockSimple = null,
        /** Number of days before the password expires. */
        public ?float $passwordExpirationDays = null,
        /** Number of character sets a password must contain. */
        public ?float $passwordMinimumCharacterSetCount = null,
        /** Minimum length of passwords. */
        public ?float $passwordMinimumLength = null,
        /** Minutes of inactivity before screen timeout. */
        public ?float $passwordMinutesOfInactivityBeforeScreenTimeout = null,
        /** Number of previous passwords to block. Valid values 0 to 24 */
        public ?float $passwordPreviousPasswordBlockCount = null,
        /** Indicates whether or not to require a password. */
        public ?bool $passwordRequired = null,
        /**  */
        public ?RequiredPasswordType $passwordRequiredType = null,
        /** Number of sign in failures allowed before factory reset. */
        public ?float $passwordSignInFailureCountBeforeFactoryReset = null,
        /** Indicates whether or not to block screenshots. */
        public ?bool $screenCaptureBlocked = null,
        /** Indicates whether or not to block removable storage. */
        public ?bool $storageBlockRemovableStorage = null,
        /** Indicates whether or not to require encryption. */
        public ?bool $storageRequireEncryption = null,
        /** Indicates whether or not to block the web browser. */
        public ?bool $webBrowserBlocked = null,
        /** Indicates whether or not to block automatically connecting to Wi-Fi hotspots. Has no impact if Wi-Fi is blocked. */
        public ?bool $wifiBlockAutomaticConnectHotspots = null,
        /** Indicates whether or not to block Wi-Fi. */
        public ?bool $wifiBlocked = null,
        /** Indicates whether or not to block Wi-Fi hotspot reporting. Has no impact if Wi-Fi is blocked. */
        public ?bool $wifiBlockHotspotReporting = null,
        /** Indicates whether or not to block the Windows Store. */
        public ?bool $windowsStoreBlocked = null
    ) {}
}
