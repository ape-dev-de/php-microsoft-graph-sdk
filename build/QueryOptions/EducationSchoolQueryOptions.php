<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationSchool resources
 *
 * Available select fields:
 */
class EducationSchoolQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationSchool
     */

    /**
     * Select specific EducationSchool properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
