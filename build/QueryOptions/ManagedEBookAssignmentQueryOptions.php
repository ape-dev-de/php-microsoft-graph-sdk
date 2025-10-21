<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedEBookAssignment resources
 *
 * Available select fields:
 */
class ManagedEBookAssignmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedEBookAssignment
     */

    /**
     * Select specific ManagedEBookAssignment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
