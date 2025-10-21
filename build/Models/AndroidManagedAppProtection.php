<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AndroidManagedAppProtection
 */
class AndroidManagedAppProtection
{
    public function __construct(
        /** Friendly name of the preferred custom browser to open weblink on Android. When this property is configured, ManagedBrowserToOpenLinksRequired should be true. */
        public ?string $customBrowserDisplayName = null,
        /** Unique identifier of the preferred custom browser to open weblink on Android. When this property is configured, ManagedBrowserToOpenLinksRequired should be true. */
        public ?string $customBrowserPackageId = null,
        /** Count of apps to which the current policy is deployed. */
        public ?float $deployedAppCount = null,
        /** When this setting is enabled, app level encryption is disabled if device level encryption is enabled */
        public ?bool $disableAppEncryptionIfDeviceEncryptionIsEnabled = null,
        /** Indicates whether application data for managed apps should be encrypted */
        public ?bool $encryptAppData = null,
        /** Define the oldest required Android security patch level a user can have to gain secure access to the app. */
        public ?string $minimumRequiredPatchVersion = null,
        /** Define the oldest recommended Android security patch level a user can have for secure access to the app. */
        public ?string $minimumWarningPatchVersion = null,
        /** Indicates whether a managed user can take screen captures of managed apps */
        public ?bool $screenCaptureBlocked = null,
        /** List of apps to which the policy is deployed. */
        public array $apps = [],
        /** Policy used to configure detailed management settings targeted to specific security groups and for a specified set of apps on an Android device */
        public ?string $deploymentSummary = null
    ) {}
}
