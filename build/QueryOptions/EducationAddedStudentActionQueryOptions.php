<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationAddedStudentAction resources
 *
 * Available select fields:
 */
class EducationAddedStudentActionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationAddedStudentAction
     */

    /**
     * Select specific EducationAddedStudentAction properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
