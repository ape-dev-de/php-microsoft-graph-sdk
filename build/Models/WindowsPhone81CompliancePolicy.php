<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsPhone81CompliancePolicy
 */
class WindowsPhone81CompliancePolicy
{
    public function __construct(
        /** Maximum Windows Phone version. */
        public ?string $osMaximumVersion = null,
        /** Minimum Windows Phone version. */
        public ?string $osMinimumVersion = null,
        /** Whether or not to block syncing the calendar. */
        public ?bool $passwordBlockSimple = null,
        /** Number of days before the password expires. */
        public ?float $passwordExpirationDays = null,
        /** The number of character sets required in the password. */
        public ?float $passwordMinimumCharacterSetCount = null,
        /** Minimum length of passwords. */
        public ?float $passwordMinimumLength = null,
        /** Minutes of inactivity before a password is required. */
        public ?float $passwordMinutesOfInactivityBeforeLock = null,
        /** Number of previous passwords to block. Valid values 0 to 24 */
        public ?float $passwordPreviousPasswordBlockCount = null,
        /** Whether or not to require a password. */
        public ?bool $passwordRequired = null,
        /**  */
        public ?string $passwordRequiredType = null,
        /** This class contains compliance settings for Windows 8.1 Mobile. */
        public ?string $storageRequireEncryption = null
    ) {}
}
