<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleManagementPolicyAssignment resources
 *
 * Available select fields:
 */
class UnifiedRoleManagementPolicyAssignmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UnifiedRoleManagementPolicyAssignment
     */

    /**
     * Select specific UnifiedRoleManagementPolicyAssignment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
