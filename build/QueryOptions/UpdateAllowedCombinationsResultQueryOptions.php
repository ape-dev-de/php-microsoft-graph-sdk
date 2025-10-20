<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UpdateAllowedCombinationsResult resources
 *
 * Available select fields:
 * - additionalInformation
 * - conditionalAccessReferences
 * - currentCombinations
 * - previousCombinations
 */
class UpdateAllowedCombinationsResultQueryOptions extends QueryOptions
{
    public const FIELD_ADDITIONAL_INFORMATION = 'additionalInformation';
    public const FIELD_CONDITIONAL_ACCESS_REFERENCES = 'conditionalAccessReferences';
    public const FIELD_CURRENT_COMBINATIONS = 'currentCombinations';
    public const FIELD_PREVIOUS_COMBINATIONS = 'previousCombinations';

    /**
     * Select specific UpdateAllowedCombinationsResult properties
     * 
     * @param array<string> $select Use UpdateAllowedCombinationsResultQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
