<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationRubric resources
 *
 * Available select fields:
 */
class EducationRubricQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationRubric
     */

    /**
     * Select specific EducationRubric properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
