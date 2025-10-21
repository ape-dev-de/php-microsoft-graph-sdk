<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ScopedRoleMembership resources
 *
 * Available select fields:
 */
class ScopedRoleMembershipQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ScopedRoleMembership
     */

    /**
     * Select specific ScopedRoleMembership properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
