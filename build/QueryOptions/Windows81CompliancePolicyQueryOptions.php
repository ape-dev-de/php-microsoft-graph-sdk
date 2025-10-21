<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Windows81CompliancePolicy resources
 *
 * Available select fields:
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
 */
class Windows81CompliancePolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Windows81CompliancePolicy
     */
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

    /**
     * Select specific Windows81CompliancePolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
