<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleManagementPolicy resources
 *
 * Available select fields:
 */
class UnifiedRoleManagementPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UnifiedRoleManagementPolicy
     */

    /**
     * Select specific UnifiedRoleManagementPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
