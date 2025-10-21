<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrivilegedAccessGroupAssignmentType resources
 *
 * Available select fields:
 */
class PrivilegedAccessGroupAssignmentTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrivilegedAccessGroupAssignmentType
     */

    /**
     * Select specific PrivilegedAccessGroupAssignmentType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
