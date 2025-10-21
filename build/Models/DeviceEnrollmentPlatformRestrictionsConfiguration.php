<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceEnrollmentPlatformRestrictionsConfiguration
 */
class DeviceEnrollmentPlatformRestrictionsConfiguration
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Created date time in UTC of the device enrollment configuration */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The description of the device enrollment configuration */
        public ?string $description = null,
        /** The display name of the device enrollment configuration */
        public ?string $displayName = null,
        /** Last modified date time in UTC of the device enrollment configuration */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Priority is used when a user exists in multiple groups that are assigned enrollment configuration. Users are subject only to the configuration with the lowest priority value. */
        public ?float $priority = null,
        /** The version of the device enrollment configuration */
        public ?float $version = null,
        /** The list of group assignments for the device configuration profile */
        public array $assignments = [],
        /** Android restrictions based on platform, platform operating system version, and device ownership */
        public ?string $androidRestriction = null,
        /** Ios restrictions based on platform, platform operating system version, and device ownership */
        public ?string $iosRestriction = null,
        /** Mac restrictions based on platform, platform operating system version, and device ownership */
        public ?string $macOSRestriction = null,
        /** Windows mobile restrictions based on platform, platform operating system version, and device ownership */
        public ?string $windowsMobileRestriction = null,
        /** Windows restrictions based on platform, platform operating system version, and device ownership */
        public ?string $windowsRestriction = null
    ) {}
}
