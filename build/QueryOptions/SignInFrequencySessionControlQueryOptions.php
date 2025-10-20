<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SignInFrequencySessionControl resources
 *
 * Available select fields:
 * - authenticationType
 * - frequencyInterval
 * - type
 * - value
 */
class SignInFrequencySessionControlQueryOptions extends QueryOptions
{
    public const FIELD_AUTHENTICATION_TYPE = 'authenticationType';
    public const FIELD_FREQUENCY_INTERVAL = 'frequencyInterval';
    public const FIELD_TYPE = 'type';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SignInFrequencySessionControl properties
     * 
     * @param array<string> $select Use SignInFrequencySessionControlQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
