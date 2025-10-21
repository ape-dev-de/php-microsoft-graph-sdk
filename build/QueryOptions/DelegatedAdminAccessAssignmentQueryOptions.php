<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DelegatedAdminAccessAssignment resources
 *
 * Available select fields:
 */
class DelegatedAdminAccessAssignmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DelegatedAdminAccessAssignment
     */

    /**
     * Select specific DelegatedAdminAccessAssignment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
