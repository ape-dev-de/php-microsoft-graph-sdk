<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MacOSCompliancePolicy
 */
class MacOSCompliancePolicy
{
    public function __construct(
        /** Require that devices have enabled device threat protection. */
        public ?bool $deviceThreatProtectionEnabled = null,
        /**  */
        public ?string $deviceThreatProtectionRequiredSecurityLevel = null,
        /** Corresponds to the 'Block all incoming connections' option. */
        public ?bool $firewallBlockAllIncoming = null,
        /** Whether the firewall should be enabled or not. */
        public ?bool $firewallEnabled = null,
        /** Corresponds to 'Enable stealth mode. */
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
        public ?string $passwordRequiredType = null,
        /** Require encryption on Mac OS devices. */
        public ?bool $storageRequireEncryption = null,
        /** This class contains compliance settings for Mac OS. */
        public ?string $systemIntegrityProtectionEnabled = null
    ) {}
}
