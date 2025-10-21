<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationAssignmentResource resources
 *
 * Available select fields:
 */
class EducationAssignmentResourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationAssignmentResource
     */

    /**
     * Select specific EducationAssignmentResource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
