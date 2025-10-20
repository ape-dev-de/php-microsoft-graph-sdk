<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MacOSCompliancePolicy resources
 *
 * Available select fields:
 * - deviceThreatProtectionEnabled
 * - deviceThreatProtectionRequiredSecurityLevel
 * - firewallBlockAllIncoming
 * - firewallEnabled
 * - firewallEnableStealthMode
 * - osMaximumVersion
 * - osMinimumVersion
 * - passwordBlockSimple
 * - passwordExpirationDays
 * - passwordMinimumCharacterSetCount
 * - passwordMinimumLength
 * - passwordMinutesOfInactivityBeforeLock
 * - passwordPreviousPasswordBlockCount
 * - passwordRequired
 * - passwordRequiredType
 * - storageRequireEncryption
 * - systemIntegrityProtectionEnabled
 */
class MacOSCompliancePolicyQueryOptions extends QueryOptions
{
    public const FIELD_DEVICE_THREAT_PROTECTION_ENABLED = 'deviceThreatProtectionEnabled';
    public const FIELD_DEVICE_THREAT_PROTECTION_REQUIRED_SECURITY_LEVEL = 'deviceThreatProtectionRequiredSecurityLevel';
    public const FIELD_FIREWALL_BLOCK_ALL_INCOMING = 'firewallBlockAllIncoming';
    public const FIELD_FIREWALL_ENABLED = 'firewallEnabled';
    public const FIELD_FIREWALL_ENABLE_STEALTH_MODE = 'firewallEnableStealthMode';
    public const FIELD_OS_MAXIMUM_VERSION = 'osMaximumVersion';
    public const FIELD_OS_MINIMUM_VERSION = 'osMinimumVersion';
    public const FIELD_PASSWORD_BLOCK_SIMPLE = 'passwordBlockSimple';
    public const FIELD_PASSWORD_EXPIRATION_DAYS = 'passwordExpirationDays';
    public const FIELD_PASSWORD_MINIMUM_CHARACTER_SET_COUNT = 'passwordMinimumCharacterSetCount';
    public const FIELD_PASSWORD_MINIMUM_LENGTH = 'passwordMinimumLength';
    public const FIELD_PASSWORD_MINUTES_OF_INACTIVITY_BEFORE_LOCK = 'passwordMinutesOfInactivityBeforeLock';
    public const FIELD_PASSWORD_PREVIOUS_PASSWORD_BLOCK_COUNT = 'passwordPreviousPasswordBlockCount';
    public const FIELD_PASSWORD_REQUIRED = 'passwordRequired';
    public const FIELD_PASSWORD_REQUIRED_TYPE = 'passwordRequiredType';
    public const FIELD_STORAGE_REQUIRE_ENCRYPTION = 'storageRequireEncryption';
    public const FIELD_SYSTEM_INTEGRITY_PROTECTION_ENABLED = 'systemIntegrityProtectionEnabled';

    /**
     * Select specific MacOSCompliancePolicy properties
     * 
     * @param array<string> $select Use MacOSCompliancePolicyQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
