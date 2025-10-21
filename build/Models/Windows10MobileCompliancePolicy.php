<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows10MobileCompliancePolicy
 */
class Windows10MobileCompliancePolicy
{
    public function __construct(
        /** Require devices to be reported healthy by Windows Device Health Attestation - bit locker is enabled */
        public ?bool $bitLockerEnabled = null,
        /** Require devices to be reported as healthy by Windows Device Health Attestation. */
        public ?bool $codeIntegrityEnabled = null,
        /** Require devices to be reported as healthy by Windows Device Health Attestation - early launch antimalware driver is enabled. */
        public ?bool $earlyLaunchAntiMalwareDriverEnabled = null,
        /** Maximum Windows Phone version. */
        public ?string $osMaximumVersion = null,
        /** Minimum Windows Phone version. */
        public ?string $osMinimumVersion = null,
        /** Whether or not to block syncing the calendar. */
        public ?bool $passwordBlockSimple = null,
        /** Number of days before password expiration. Valid values 1 to 255 */
        public ?float $passwordExpirationDays = null,
        /** The number of character sets required in the password. */
        public ?float $passwordMinimumCharacterSetCount = null,
        /** Minimum password length. Valid values 4 to 16 */
        public ?float $passwordMinimumLength = null,
        /** Minutes of inactivity before a password is required. */
        public ?float $passwordMinutesOfInactivityBeforeLock = null,
        /** The number of previous passwords to prevent re-use of. */
        public ?float $passwordPreviousPasswordBlockCount = null,
        /** Require a password to unlock Windows Phone device. */
        public ?bool $passwordRequired = null,
        /**  */
        public ?string $passwordRequiredType = null,
        /** Require a password to unlock an idle device. */
        public ?bool $passwordRequireToUnlockFromIdle = null,
        /** Require devices to be reported as healthy by Windows Device Health Attestation - secure boot is enabled. */
        public ?bool $secureBootEnabled = null,
        /** This class contains compliance settings for Windows 10 Mobile. */
        public ?string $storageRequireEncryption = null
    ) {}
}
