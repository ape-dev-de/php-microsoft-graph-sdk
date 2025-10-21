<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RoleAssignment resources
 *
 * Available select fields:
 */
class RoleAssignmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RoleAssignment
     */

    /**
     * Select specific RoleAssignment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
