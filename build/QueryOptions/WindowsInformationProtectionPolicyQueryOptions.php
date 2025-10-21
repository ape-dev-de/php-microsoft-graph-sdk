<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsInformationProtectionPolicy resources
 *
 * Available select fields:
 * - daysWithoutContactBeforeUnenroll
 * - mdmEnrollmentUrl
 * - minutesOfInactivityBeforeDeviceLock
 * - numberOfPastPinsRemembered
 * - passwordMaximumAttemptCount
 * - pinExpirationDays
 * - pinLowercaseLetters
 * - pinMinimumLength
 * - pinSpecialCharacters
 * - pinUppercaseLetters
 * - revokeOnMdmHandoffDisabled
 * - windowsHelloForBusinessBlocked
 */
class WindowsInformationProtectionPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsInformationProtectionPolicy
     */
    public const FIELD_DAYS_WITHOUT_CONTACT_BEFORE_UNENROLL = 'daysWithoutContactBeforeUnenroll';
    public const FIELD_MDM_ENROLLMENT_URL = 'mdmEnrollmentUrl';
    public const FIELD_MINUTES_OF_INACTIVITY_BEFORE_DEVICE_LOCK = 'minutesOfInactivityBeforeDeviceLock';
    public const FIELD_NUMBER_OF_PAST_PINS_REMEMBERED = 'numberOfPastPinsRemembered';
    public const FIELD_PASSWORD_MAXIMUM_ATTEMPT_COUNT = 'passwordMaximumAttemptCount';
    public const FIELD_PIN_EXPIRATION_DAYS = 'pinExpirationDays';
    public const FIELD_PIN_LOWERCASE_LETTERS = 'pinLowercaseLetters';
    public const FIELD_PIN_MINIMUM_LENGTH = 'pinMinimumLength';
    public const FIELD_PIN_SPECIAL_CHARACTERS = 'pinSpecialCharacters';
    public const FIELD_PIN_UPPERCASE_LETTERS = 'pinUppercaseLetters';
    public const FIELD_REVOKE_ON_MDM_HANDOFF_DISABLED = 'revokeOnMdmHandoffDisabled';
    public const FIELD_WINDOWS_HELLO_FOR_BUSINESS_BLOCKED = 'windowsHelloForBusinessBlocked';

    /**
     * Select specific WindowsInformationProtectionPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
