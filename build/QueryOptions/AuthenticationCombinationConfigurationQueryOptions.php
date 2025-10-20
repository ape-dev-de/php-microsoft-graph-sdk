<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationCombinationConfiguration resources
 *
 * Available select fields:
 * - appliesToCombinations
 */
class AuthenticationCombinationConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_APPLIES_TO_COMBINATIONS = 'appliesToCombinations';

    /**
     * Select specific AuthenticationCombinationConfiguration properties
     * 
     * @param array<string> $select Use AuthenticationCombinationConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
