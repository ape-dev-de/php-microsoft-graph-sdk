<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationCategory resources
 *
 * Available select fields:
 */
class EducationCategoryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationCategory
     */

    /**
     * Select specific EducationCategory properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
