<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows81CompliancePolicy
 */
class Windows81CompliancePolicy
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
        /** The collection of assignments for this compliance policy. */
        public array $assignments = [],
        /** Compliance Setting State Device Summary */
        public array $deviceSettingStateSummaries = [],
        /** List of DeviceComplianceDeviceStatus. */
        public array $deviceStatuses = [],
        /** Device compliance devices status overview */
        public ?string $deviceStatusOverview = null,
        /** The list of scheduled action per rule for this compliance policy. This is a required property when creating any individual per-platform compliance policies. */
        public array $scheduledActionsForRule = [],
        /** List of DeviceComplianceUserStatus. */
        public array $userStatuses = [],
        /** Device compliance users status overview */
        public ?string $userStatusOverview = null,
        /** Maximum Windows 8.1 version. */
        public ?string $osMaximumVersion = null,
        /** Minimum Windows 8.1 version. */
        public ?string $osMinimumVersion = null,
        /** Indicates whether or not to block simple password. */
        public ?bool $passwordBlockSimple = null,
        /** Password expiration in days. */
        public ?float $passwordExpirationDays = null,
        /** The number of character sets required in the password. */
        public ?float $passwordMinimumCharacterSetCount = null,
        /** The minimum password length. */
        public ?float $passwordMinimumLength = null,
        /** Minutes of inactivity before a password is required. */
        public ?float $passwordMinutesOfInactivityBeforeLock = null,
        /** The number of previous passwords to prevent re-use of. Valid values 0 to 24 */
        public ?float $passwordPreviousPasswordBlockCount = null,
        /** Require a password to unlock Windows device. */
        public ?bool $passwordRequired = null,
        /**  */
        public ?string $passwordRequiredType = null,
        /** Indicates whether or not to require encryption on a windows 8.1 device. */
        public ?bool $storageRequireEncryption = null
    ) {}
}
