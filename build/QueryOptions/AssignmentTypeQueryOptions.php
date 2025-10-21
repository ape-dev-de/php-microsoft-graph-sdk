<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AssignmentType resources
 *
 * Available select fields:
 */
class AssignmentTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AssignmentType
     */

    /**
     * Select specific AssignmentType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
