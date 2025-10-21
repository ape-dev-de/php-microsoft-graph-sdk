<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LearningAssignment resources
 *
 * Available select fields:
 */
class LearningAssignmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for LearningAssignment
     */

    /**
     * Select specific LearningAssignment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
