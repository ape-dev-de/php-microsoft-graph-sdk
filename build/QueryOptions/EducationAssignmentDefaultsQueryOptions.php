<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationAssignmentDefaults resources
 *
 * Available select fields:
 */
class EducationAssignmentDefaultsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationAssignmentDefaults
     */

    /**
     * Select specific EducationAssignmentDefaults properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
