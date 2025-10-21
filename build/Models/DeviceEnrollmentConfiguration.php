<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceEnrollmentConfiguration
 */
class DeviceEnrollmentConfiguration
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
        /** @var string[] The Base Class of Device Enrollment Configuration */
        public array $assignments = []
    ) {}
}
