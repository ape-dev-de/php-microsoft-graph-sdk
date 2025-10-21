<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DefaultManagedAppProtection
 */
class DefaultManagedAppProtection
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The date and time the policy was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The policy's description. */
        public ?string $description = null,
        /** Policy display name. */
        public ?string $displayName = null,
        /** Last time the policy was modified. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Version of the entity. */
        public ?string $version = null,
        /** Data storage locations where a user may store managed data. */
        public array $allowedDataStorageLocations = [],
        /**  */
        public ?string $allowedInboundDataTransferSources = null,
        /**  */
        public ?string $allowedOutboundClipboardSharingLevel = null,
        /**  */
        public ?string $allowedOutboundDataTransferDestinations = null,
        /** Indicates whether contacts can be synced to the user's device. */
        public ?bool $contactSyncBlocked = null,
        /** Indicates whether the backup of a managed app's data is blocked. */
        public ?bool $dataBackupBlocked = null,
        /** Indicates whether device compliance is required. */
        public ?bool $deviceComplianceRequired = null,
        /** Indicates whether use of the app pin is required if the device pin is set. */
        public ?bool $disableAppPinIfDevicePinIsSet = null,
        /** Indicates whether use of the fingerprint reader is allowed in place of a pin if PinRequired is set to True. */
        public ?bool $fingerprintBlocked = null,
        /**  */
        public ?string $managedBrowser = null,
        /** Indicates whether internet links should be opened in the managed browser app, or any custom browser specified by CustomBrowserProtocol (for iOS) or CustomBrowserPackageId/CustomBrowserDisplayName (for Android) */
        public ?bool $managedBrowserToOpenLinksRequired = null,
        /** Maximum number of incorrect pin retry attempts before the managed app is either blocked or wiped. */
        public ?float $maximumPinRetries = null,
        /** Minimum pin length required for an app-level pin if PinRequired is set to True */
        public ?float $minimumPinLength = null,
        /** Versions less than the specified version will block the managed app from accessing company data. */
        public ?string $minimumRequiredAppVersion = null,
        /** Versions less than the specified version will block the managed app from accessing company data. */
        public ?string $minimumRequiredOsVersion = null,
        /** Versions less than the specified version will result in warning message on the managed app. */
        public ?string $minimumWarningAppVersion = null,
        /** Versions less than the specified version will result in warning message on the managed app from accessing company data. */
        public ?string $minimumWarningOsVersion = null,
        /** Indicates whether organizational credentials are required for app use. */
        public ?bool $organizationalCredentialsRequired = null,
        /** TimePeriod before the all-level pin must be reset if PinRequired is set to True. */
        public ?string $periodBeforePinReset = null,
        /** The period after which access is checked when the device is not connected to the internet. */
        public ?string $periodOfflineBeforeAccessCheck = null,
        /** The amount of time an app is allowed to remain disconnected from the internet before all managed data it is wiped. */
        public ?string $periodOfflineBeforeWipeIsEnforced = null,
        /** The period after which access is checked when the device is connected to the internet. */
        public ?string $periodOnlineBeforeAccessCheck = null,
        /**  */
        public ?string $pinCharacterSet = null,
        /** Indicates whether an app-level pin is required. */
        public ?bool $pinRequired = null,
        /** Indicates whether printing is allowed from managed apps. */
        public ?bool $printBlocked = null,
        /** Indicates whether users may use the 'Save As' menu item to save a copy of protected files. */
        public ?bool $saveAsBlocked = null,
        /** Indicates whether simplePin is blocked. */
        public ?bool $simplePinBlocked = null,
        /**  */
        public ?string $appDataEncryptionType = null,
        /** A set of string key and string value pairs to be sent to the affected users, unalterned by this service */
        public array $customSettings = [],
        /** Count of apps to which the current policy is deployed. */
        public ?float $deployedAppCount = null,
        /** When this setting is enabled, app level encryption is disabled if device level encryption is enabled. (Android only) */
        public ?bool $disableAppEncryptionIfDeviceEncryptionIsEnabled = null,
        /** Indicates whether managed-app data should be encrypted. (Android only) */
        public ?bool $encryptAppData = null,
        /** Indicates whether use of the FaceID is allowed in place of a pin if PinRequired is set to True. (iOS Only) */
        public ?bool $faceIdBlocked = null,
        /** Define the oldest required Android security patch level a user can have to gain secure access to the app. (Android only) */
        public ?string $minimumRequiredPatchVersion = null,
        /** Versions less than the specified version will block the managed app from accessing company data. (iOS Only) */
        public ?string $minimumRequiredSdkVersion = null,
        /** Define the oldest recommended Android security patch level a user can have for secure access to the app. (Android only) */
        public ?string $minimumWarningPatchVersion = null,
        /** Indicates whether screen capture is blocked. (Android only) */
        public ?bool $screenCaptureBlocked = null,
        /** List of apps to which the policy is deployed. */
        public array $apps = [],
        /** Navigation property to deployment summary of the configuration. */
        public ?string $deploymentSummary = null
    ) {}
}
