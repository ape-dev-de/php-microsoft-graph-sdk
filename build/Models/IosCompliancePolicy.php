<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosCompliancePolicy
 */
class IosCompliancePolicy
{
    public function __construct(
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
