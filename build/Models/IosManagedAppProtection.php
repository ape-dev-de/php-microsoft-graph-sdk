<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosManagedAppProtection
 */
class IosManagedAppProtection
{
    public function __construct(
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
        /** Policy used to configure detailed management settings targeted to specific security groups and for a specified set of apps on an iOS device */
        public ?string $deploymentSummary = null
    ) {}
}
