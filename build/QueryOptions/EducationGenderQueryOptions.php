<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationGender resources
 *
 * Available select fields:
 */
class EducationGenderQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationGender
     */

    /**
     * Select specific EducationGender properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
