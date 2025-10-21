<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MacOSCompliancePolicy
 */
class MacOSCompliancePolicy
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
        public ?DeviceComplianceDeviceOverview $deviceStatusOverview = null,
        /** The list of scheduled action per rule for this compliance policy. This is a required property when creating any individual per-platform compliance policies. */
        public array $scheduledActionsForRule = [],
        /** List of DeviceComplianceUserStatus. */
        public array $userStatuses = [],
        /** Device compliance users status overview */
        public ?DeviceComplianceUserOverview $userStatusOverview = null,
        /** Require that devices have enabled device threat protection. */
        public ?bool $deviceThreatProtectionEnabled = null,
        /**  */
        public ?DeviceThreatProtectionLevel $deviceThreatProtectionRequiredSecurityLevel = null,
        /** Corresponds to the 'Block all incoming connections' option. */
        public ?bool $firewallBlockAllIncoming = null,
        /** Whether the firewall should be enabled or not. */
        public ?bool $firewallEnabled = null,
        /** Corresponds to 'Enable stealth mode.' */
        public ?bool $firewallEnableStealthMode = null,
        /** Maximum MacOS version. */
        public ?string $osMaximumVersion = null,
        /** Minimum MacOS version. */
        public ?string $osMinimumVersion = null,
        /** Indicates whether or not to block simple passwords. */
        public ?bool $passwordBlockSimple = null,
        /** Number of days before the password expires. Valid values 1 to 65535 */
        public ?float $passwordExpirationDays = null,
        /** The number of character sets required in the password. */
        public ?float $passwordMinimumCharacterSetCount = null,
        /** Minimum length of password. Valid values 4 to 14 */
        public ?float $passwordMinimumLength = null,
        /** Minutes of inactivity before a password is required. */
        public ?float $passwordMinutesOfInactivityBeforeLock = null,
        /** Number of previous passwords to block. Valid values 1 to 24 */
        public ?float $passwordPreviousPasswordBlockCount = null,
        /** Whether or not to require a password. */
        public ?bool $passwordRequired = null,
        /**  */
        public ?RequiredPasswordType $passwordRequiredType = null,
        /** Require encryption on Mac OS devices. */
        public ?bool $storageRequireEncryption = null,
        /** Require that devices have enabled system integrity protection. */
        public ?bool $systemIntegrityProtectionEnabled = null
    ) {}
}
