<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows10CompliancePolicy
 */
class Windows10CompliancePolicy
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
        /** Require devices to be reported healthy by Windows Device Health Attestation - bit locker is enabled */
        public ?bool $bitLockerEnabled = null,
        /** Require devices to be reported as healthy by Windows Device Health Attestation. */
        public ?bool $codeIntegrityEnabled = null,
        /** Require devices to be reported as healthy by Windows Device Health Attestation - early launch antimalware driver is enabled. */
        public ?bool $earlyLaunchAntiMalwareDriverEnabled = null,
        /** Maximum Windows Phone version. */
        public ?string $mobileOsMaximumVersion = null,
        /** Minimum Windows Phone version. */
        public ?string $mobileOsMinimumVersion = null,
        /** Maximum Windows 10 version. */
        public ?string $osMaximumVersion = null,
        /** Minimum Windows 10 version. */
        public ?string $osMinimumVersion = null,
        /** Indicates whether or not to block simple password. */
        public ?bool $passwordBlockSimple = null,
        /** The password expiration in days. */
        public ?float $passwordExpirationDays = null,
        /** The number of character sets required in the password. */
        public ?float $passwordMinimumCharacterSetCount = null,
        /** The minimum password length. */
        public ?float $passwordMinimumLength = null,
        /** Minutes of inactivity before a password is required. */
        public ?float $passwordMinutesOfInactivityBeforeLock = null,
        /** The number of previous passwords to prevent re-use of. */
        public ?float $passwordPreviousPasswordBlockCount = null,
        /** Require a password to unlock Windows device. */
        public ?bool $passwordRequired = null,
        /** Require a password to unlock an idle device. */
        public ?bool $passwordRequiredToUnlockFromIdle = null,
        /**  */
        public ?string $passwordRequiredType = null,
        /** Require devices to be reported as healthy by Windows Device Health Attestation. */
        public ?bool $requireHealthyDeviceReport = null,
        /** Require devices to be reported as healthy by Windows Device Health Attestation - secure boot is enabled. */
        public ?bool $secureBootEnabled = null,
        /** This class contains compliance settings for Windows 10. */
        public ?string $storageRequireEncryption = null
    ) {}
}
