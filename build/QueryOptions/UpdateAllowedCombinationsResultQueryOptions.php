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
    /**
     * Available select fields for UpdateAllowedCombinationsResult
     */
    public const FIELD_ADDITIONAL_INFORMATION = 'additionalInformation';
    public const FIELD_CONDITIONAL_ACCESS_REFERENCES = 'conditionalAccessReferences';
    public const FIELD_CURRENT_COMBINATIONS = 'currentCombinations';
    public const FIELD_PREVIOUS_COMBINATIONS = 'previousCombinations';

    /**
     * Select specific UpdateAllowedCombinationsResult properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
