<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleManagementPolicyAuthenticationContextRule resources
 *
 * Available select fields:
 */
class UnifiedRoleManagementPolicyAuthenticationContextRuleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UnifiedRoleManagementPolicyAuthenticationContextRule
     */

    /**
     * Select specific UnifiedRoleManagementPolicyAuthenticationContextRule properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
