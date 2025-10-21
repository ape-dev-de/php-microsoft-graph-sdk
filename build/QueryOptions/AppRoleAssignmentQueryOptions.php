<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppRoleAssignment resources
 *
 * Available select fields:
 */
class AppRoleAssignmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AppRoleAssignment
     */

    /**
     * Select specific AppRoleAssignment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
