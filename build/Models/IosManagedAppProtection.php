<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosManagedAppProtection
 */
class IosManagedAppProtection
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
        /** Indicates if the policy is deployed to any inclusion groups or not. */
        public ?bool $isAssigned = null,
        /** Navigation property to list of inclusion and exclusion groups to which the policy is deployed. */
        public array $assignments = [],
        /**  */
        public ?string $appDataEncryptionType = null,
        /** A custom browser protocol to open weblink on iOS. When this property is configured, ManagedBrowserToOpenLinksRequired should be true. */
        public ?string $customBrowserProtocol = null,
        /** Count of apps to which the current policy is deployed. */
        public ?float $deployedAppCount = null,
        /** Indicates whether use of the FaceID is allowed in place of a pin if PinRequired is set to True. */
        public ?bool $faceIdBlocked = null,
        /** Versions less than the specified version will block the managed app from accessing company data. */
        public ?string $minimumRequiredSdkVersion = null,
        /** List of apps to which the policy is deployed. */
        public array $apps = [],
        /** Navigation property to deployment summary of the configuration. */
        public ?string $deploymentSummary = null
    ) {}
}
