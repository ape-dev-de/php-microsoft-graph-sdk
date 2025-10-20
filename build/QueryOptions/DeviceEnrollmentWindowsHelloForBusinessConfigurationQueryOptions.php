<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceEnrollmentWindowsHelloForBusinessConfiguration resources
 *
 * Available select fields:
 * - enhancedBiometricsState
 * - pinExpirationInDays
 * - pinLowercaseCharactersUsage
 * - pinMaximumLength
 * - pinMinimumLength
 * - pinPreviousBlockCount
 * - pinSpecialCharactersUsage
 * - pinUppercaseCharactersUsage
 * - remotePassportEnabled
 * - securityDeviceRequired
 * - state
 * - unlockWithBiometricsEnabled
 */
class DeviceEnrollmentWindowsHelloForBusinessConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_ENHANCED_BIOMETRICS_STATE = 'enhancedBiometricsState';
    public const FIELD_PIN_EXPIRATION_IN_DAYS = 'pinExpirationInDays';
    public const FIELD_PIN_LOWERCASE_CHARACTERS_USAGE = 'pinLowercaseCharactersUsage';
    public const FIELD_PIN_MAXIMUM_LENGTH = 'pinMaximumLength';
    public const FIELD_PIN_MINIMUM_LENGTH = 'pinMinimumLength';
    public const FIELD_PIN_PREVIOUS_BLOCK_COUNT = 'pinPreviousBlockCount';
    public const FIELD_PIN_SPECIAL_CHARACTERS_USAGE = 'pinSpecialCharactersUsage';
    public const FIELD_PIN_UPPERCASE_CHARACTERS_USAGE = 'pinUppercaseCharactersUsage';
    public const FIELD_REMOTE_PASSPORT_ENABLED = 'remotePassportEnabled';
    public const FIELD_SECURITY_DEVICE_REQUIRED = 'securityDeviceRequired';
    public const FIELD_STATE = 'state';
    public const FIELD_UNLOCK_WITH_BIOMETRICS_ENABLED = 'unlockWithBiometricsEnabled';

    /**
     * Select specific DeviceEnrollmentWindowsHelloForBusinessConfiguration properties
     * 
     * @param array<string> $select Use DeviceEnrollmentWindowsHelloForBusinessConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
