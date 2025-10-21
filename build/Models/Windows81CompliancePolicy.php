<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows81CompliancePolicy
 */
class Windows81CompliancePolicy
{
    public function __construct(
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
        /** This class contains compliance settings for Windows 8.1. */
        public ?string $storageRequireEncryption = null
    ) {}
}
