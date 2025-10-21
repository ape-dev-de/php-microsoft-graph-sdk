<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleAssignment resources
 *
 * Available select fields:
 */
class UnifiedRoleAssignmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UnifiedRoleAssignment
     */

    /**
     * Select specific UnifiedRoleAssignment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
