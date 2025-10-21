<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosCompliancePolicy
 */
class IosCompliancePolicy
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
        /** This is the base class for Compliance policy. Compliance policies are platform specific and individual per-platform compliance policies inherit from here.  */
        public ?string $userStatusOverview = null,
        /** Require that devices have enabled device threat protection . */
        public ?bool $deviceThreatProtectionEnabled = null,
        /**  */
        public ?string $deviceThreatProtectionRequiredSecurityLevel = null,
        /** Indicates whether or not to require a managed email profile. */
        public ?bool $managedEmailProfileRequired = null,
        /** Maximum IOS version. */
        public ?string $osMaximumVersion = null,
        /** Minimum IOS version. */
        public ?string $osMinimumVersion = null,
        /** Indicates whether or not to block simple passcodes. */
        public ?bool $passcodeBlockSimple = null,
        /** Number of days before the passcode expires. Valid values 1 to 65535 */
        public ?float $passcodeExpirationDays = null,
        /** The number of character sets required in the password. */
        public ?float $passcodeMinimumCharacterSetCount = null,
        /** Minimum length of passcode. Valid values 4 to 14 */
        public ?float $passcodeMinimumLength = null,
        /** Minutes of inactivity before a passcode is required. */
        public ?float $passcodeMinutesOfInactivityBeforeLock = null,
        /** Number of previous passcodes to block. Valid values 1 to 24 */
        public ?float $passcodePreviousPasscodeBlockCount = null,
        /** Indicates whether or not to require a passcode. */
        public ?bool $passcodeRequired = null,
        /**  */
        public ?string $passcodeRequiredType = null,
        /** This class contains compliance settings for IOS. */
        public ?string $securityBlockJailbrokenDevices = null
    ) {}
}
