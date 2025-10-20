<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationGradingCategory resources
 *
 * Available select fields:
 * - displayName
 * - percentageWeight
 */
class EducationGradingCategoryQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_PERCENTAGE_WEIGHT = 'percentageWeight';

    /**
     * Select specific EducationGradingCategory properties
     * 
     * @param array<string> $select Use EducationGradingCategoryQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
