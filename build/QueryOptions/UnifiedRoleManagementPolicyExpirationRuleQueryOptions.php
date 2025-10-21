<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleManagementPolicyExpirationRule resources
 *
 * Available select fields:
 */
class UnifiedRoleManagementPolicyExpirationRuleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UnifiedRoleManagementPolicyExpirationRule
     */

    /**
     * Select specific UnifiedRoleManagementPolicyExpirationRule properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
