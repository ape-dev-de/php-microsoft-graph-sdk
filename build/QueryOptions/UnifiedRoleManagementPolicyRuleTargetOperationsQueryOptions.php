<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleManagementPolicyRuleTargetOperations resources
 *
 * Available select fields:
 */
class UnifiedRoleManagementPolicyRuleTargetOperationsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UnifiedRoleManagementPolicyRuleTargetOperations
     */

    /**
     * Select specific UnifiedRoleManagementPolicyRuleTargetOperations properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
