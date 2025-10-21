<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosCompliancePolicy resources
 *
 * Available select fields:
 * - deviceThreatProtectionEnabled
 * - deviceThreatProtectionRequiredSecurityLevel
 * - managedEmailProfileRequired
 * - osMaximumVersion
 * - osMinimumVersion
 * - passcodeBlockSimple
 * - passcodeExpirationDays
 * - passcodeMinimumCharacterSetCount
 * - passcodeMinimumLength
 * - passcodeMinutesOfInactivityBeforeLock
 * - passcodePreviousPasscodeBlockCount
 * - passcodeRequired
 * - passcodeRequiredType
 * - securityBlockJailbrokenDevices
 */
class IosCompliancePolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosCompliancePolicy
     */
    public const FIELD_DEVICE_THREAT_PROTECTION_ENABLED = 'deviceThreatProtectionEnabled';
    public const FIELD_DEVICE_THREAT_PROTECTION_REQUIRED_SECURITY_LEVEL = 'deviceThreatProtectionRequiredSecurityLevel';
    public const FIELD_MANAGED_EMAIL_PROFILE_REQUIRED = 'managedEmailProfileRequired';
    public const FIELD_OS_MAXIMUM_VERSION = 'osMaximumVersion';
    public const FIELD_OS_MINIMUM_VERSION = 'osMinimumVersion';
    public const FIELD_PASSCODE_BLOCK_SIMPLE = 'passcodeBlockSimple';
    public const FIELD_PASSCODE_EXPIRATION_DAYS = 'passcodeExpirationDays';
    public const FIELD_PASSCODE_MINIMUM_CHARACTER_SET_COUNT = 'passcodeMinimumCharacterSetCount';
    public const FIELD_PASSCODE_MINIMUM_LENGTH = 'passcodeMinimumLength';
    public const FIELD_PASSCODE_MINUTES_OF_INACTIVITY_BEFORE_LOCK = 'passcodeMinutesOfInactivityBeforeLock';
    public const FIELD_PASSCODE_PREVIOUS_PASSCODE_BLOCK_COUNT = 'passcodePreviousPasscodeBlockCount';
    public const FIELD_PASSCODE_REQUIRED = 'passcodeRequired';
    public const FIELD_PASSCODE_REQUIRED_TYPE = 'passcodeRequiredType';
    public const FIELD_SECURITY_BLOCK_JAILBROKEN_DEVICES = 'securityBlockJailbrokenDevices';

    /**
     * Select specific IosCompliancePolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
