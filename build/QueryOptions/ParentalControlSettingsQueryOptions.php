<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ParentalControlSettings resources
 *
 * Available select fields:
 * - countriesBlockedForMinors
 * - legalAgeGroupRule
 */
class ParentalControlSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ParentalControlSettings
     */
    public const FIELD_COUNTRIES_BLOCKED_FOR_MINORS = 'countriesBlockedForMinors';
    public const FIELD_LEGAL_AGE_GROUP_RULE = 'legalAgeGroupRule';

    /**
     * Select specific ParentalControlSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
