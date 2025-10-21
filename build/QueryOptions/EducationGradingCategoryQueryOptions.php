<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationGradingCategory resources
 *
 * Available select fields:
 */
class EducationGradingCategoryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationGradingCategory
     */

    /**
     * Select specific EducationGradingCategory properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
