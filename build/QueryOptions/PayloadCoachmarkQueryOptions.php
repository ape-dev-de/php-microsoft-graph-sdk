<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PayloadCoachmark resources
 *
 * Available select fields:
 * - coachmarkLocation
 * - description
 * - indicator
 * - isValid
 * - language
 * - order
 */
class PayloadCoachmarkQueryOptions extends QueryOptions
{
    public const FIELD_COACHMARK_LOCATION = 'coachmarkLocation';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_INDICATOR = 'indicator';
    public const FIELD_IS_VALID = 'isValid';
    public const FIELD_LANGUAGE = 'language';
    public const FIELD_ORDER = 'order';

    /**
     * Select specific PayloadCoachmark properties
     * 
     * @param array<string> $select Use PayloadCoachmarkQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
