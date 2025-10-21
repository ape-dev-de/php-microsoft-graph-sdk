<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Windows10CompliancePolicy resources
 *
 * Available select fields:
 * - bitLockerEnabled
 * - codeIntegrityEnabled
 * - earlyLaunchAntiMalwareDriverEnabled
 * - mobileOsMaximumVersion
 * - mobileOsMinimumVersion
 * - osMaximumVersion
 * - osMinimumVersion
 * - passwordBlockSimple
 * - passwordExpirationDays
 * - passwordMinimumCharacterSetCount
 * - passwordMinimumLength
 * - passwordMinutesOfInactivityBeforeLock
 * - passwordPreviousPasswordBlockCount
 * - passwordRequired
 * - passwordRequiredToUnlockFromIdle
 * - passwordRequiredType
 * - requireHealthyDeviceReport
 * - secureBootEnabled
 * - storageRequireEncryption
 */
class Windows10CompliancePolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Windows10CompliancePolicy
     */
    public const FIELD_BIT_LOCKER_ENABLED = 'bitLockerEnabled';
    public const FIELD_CODE_INTEGRITY_ENABLED = 'codeIntegrityEnabled';
    public const FIELD_EARLY_LAUNCH_ANTI_MALWARE_DRIVER_ENABLED = 'earlyLaunchAntiMalwareDriverEnabled';
    public const FIELD_MOBILE_OS_MAXIMUM_VERSION = 'mobileOsMaximumVersion';
    public const FIELD_MOBILE_OS_MINIMUM_VERSION = 'mobileOsMinimumVersion';
    public const FIELD_OS_MAXIMUM_VERSION = 'osMaximumVersion';
    public const FIELD_OS_MINIMUM_VERSION = 'osMinimumVersion';
    public const FIELD_PASSWORD_BLOCK_SIMPLE = 'passwordBlockSimple';
    public const FIELD_PASSWORD_EXPIRATION_DAYS = 'passwordExpirationDays';
    public const FIELD_PASSWORD_MINIMUM_CHARACTER_SET_COUNT = 'passwordMinimumCharacterSetCount';
    public const FIELD_PASSWORD_MINIMUM_LENGTH = 'passwordMinimumLength';
    public const FIELD_PASSWORD_MINUTES_OF_INACTIVITY_BEFORE_LOCK = 'passwordMinutesOfInactivityBeforeLock';
    public const FIELD_PASSWORD_PREVIOUS_PASSWORD_BLOCK_COUNT = 'passwordPreviousPasswordBlockCount';
    public const FIELD_PASSWORD_REQUIRED = 'passwordRequired';
    public const FIELD_PASSWORD_REQUIRED_TO_UNLOCK_FROM_IDLE = 'passwordRequiredToUnlockFromIdle';
    public const FIELD_PASSWORD_REQUIRED_TYPE = 'passwordRequiredType';
    public const FIELD_REQUIRE_HEALTHY_DEVICE_REPORT = 'requireHealthyDeviceReport';
    public const FIELD_SECURE_BOOT_ENABLED = 'secureBootEnabled';
    public const FIELD_STORAGE_REQUIRE_ENCRYPTION = 'storageRequireEncryption';

    /**
     * Select specific Windows10CompliancePolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
