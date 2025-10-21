<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationAssignment resources
 *
 * Available select fields:
 */
class EducationAssignmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationAssignment
     */

    /**
     * Select specific EducationAssignment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
