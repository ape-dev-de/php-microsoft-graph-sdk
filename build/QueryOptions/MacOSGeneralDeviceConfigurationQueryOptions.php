<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MacOSGeneralDeviceConfiguration resources
 *
 * Available select fields:
 * - compliantAppListType
 * - compliantAppsList
 * - emailInDomainSuffixes
 * - passwordBlockSimple
 * - passwordExpirationDays
 * - passwordMinimumCharacterSetCount
 * - passwordMinimumLength
 * - passwordMinutesOfInactivityBeforeLock
 * - passwordMinutesOfInactivityBeforeScreenTimeout
 * - passwordPreviousPasswordBlockCount
 * - passwordRequired
 * - passwordRequiredType
 */
class MacOSGeneralDeviceConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MacOSGeneralDeviceConfiguration
     */
    public const FIELD_COMPLIANT_APP_LIST_TYPE = 'compliantAppListType';
    public const FIELD_COMPLIANT_APPS_LIST = 'compliantAppsList';
    public const FIELD_EMAIL_IN_DOMAIN_SUFFIXES = 'emailInDomainSuffixes';
    public const FIELD_PASSWORD_BLOCK_SIMPLE = 'passwordBlockSimple';
    public const FIELD_PASSWORD_EXPIRATION_DAYS = 'passwordExpirationDays';
    public const FIELD_PASSWORD_MINIMUM_CHARACTER_SET_COUNT = 'passwordMinimumCharacterSetCount';
    public const FIELD_PASSWORD_MINIMUM_LENGTH = 'passwordMinimumLength';
    public const FIELD_PASSWORD_MINUTES_OF_INACTIVITY_BEFORE_LOCK = 'passwordMinutesOfInactivityBeforeLock';
    public const FIELD_PASSWORD_MINUTES_OF_INACTIVITY_BEFORE_SCREEN_TIMEOUT = 'passwordMinutesOfInactivityBeforeScreenTimeout';
    public const FIELD_PASSWORD_PREVIOUS_PASSWORD_BLOCK_COUNT = 'passwordPreviousPasswordBlockCount';
    public const FIELD_PASSWORD_REQUIRED = 'passwordRequired';
    public const FIELD_PASSWORD_REQUIRED_TYPE = 'passwordRequiredType';

    /**
     * Select specific MacOSGeneralDeviceConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
