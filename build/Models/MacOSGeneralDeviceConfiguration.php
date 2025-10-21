<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MacOSGeneralDeviceConfiguration
 */
class MacOSGeneralDeviceConfiguration
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
        public ?string $deviceStatusOverview = null,
        /** Device configuration installation status by user. */
        public array $userStatuses = [],
        /** Device Configuration. */
        public ?string $userStatusOverview = null,
        /**  */
        public ?string $compliantAppListType = null,
        /** List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements. */
        public array $compliantAppsList = [],
        /** @var string[] An email address lacking a suffix that matches any of these strings will be considered out-of-domain. */
        public array $emailInDomainSuffixes = [],
        /** Block simple passwords. */
        public ?bool $passwordBlockSimple = null,
        /** Number of days before the password expires. */
        public ?float $passwordExpirationDays = null,
        /** Number of character sets a password must contain. Valid values 0 to 4 */
        public ?float $passwordMinimumCharacterSetCount = null,
        /** Minimum length of passwords. */
        public ?float $passwordMinimumLength = null,
        /** Minutes of inactivity required before a password is required. */
        public ?float $passwordMinutesOfInactivityBeforeLock = null,
        /** Minutes of inactivity required before the screen times out. */
        public ?float $passwordMinutesOfInactivityBeforeScreenTimeout = null,
        /** Number of previous passwords to block. */
        public ?float $passwordPreviousPasswordBlockCount = null,
        /** Whether or not to require a password. */
        public ?bool $passwordRequired = null,
        /** This topic provides descriptions of the declared methods, properties and relationships exposed by the macOSGeneralDeviceConfiguration resource. */
        public ?string $passwordRequiredType = null
    ) {}
}
