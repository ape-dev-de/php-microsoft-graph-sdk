<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DefaultManagedAppProtection
 */
class DefaultManagedAppProtection
{
    public function __construct(
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
        /** Policy used to configure detailed management settings for a specified set of apps for all users not targeted by a TargetedManagedAppProtection Policy */
        public ?string $deploymentSummary = null
    ) {}
}
