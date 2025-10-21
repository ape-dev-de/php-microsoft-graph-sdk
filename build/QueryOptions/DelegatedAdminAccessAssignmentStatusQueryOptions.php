<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DelegatedAdminAccessAssignmentStatus resources
 *
 * Available select fields:
 */
class DelegatedAdminAccessAssignmentStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DelegatedAdminAccessAssignmentStatus
     */

    /**
     * Select specific DelegatedAdminAccessAssignmentStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
