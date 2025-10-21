<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IncludedUserRoles resources
 *
 * Available select fields:
 */
class IncludedUserRolesQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IncludedUserRoles
     */

    /**
     * Select specific IncludedUserRoles properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
