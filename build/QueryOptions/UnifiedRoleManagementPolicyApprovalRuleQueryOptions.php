<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleManagementPolicyApprovalRule resources
 *
 * Available select fields:
 * - setting
 */
class UnifiedRoleManagementPolicyApprovalRuleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UnifiedRoleManagementPolicyApprovalRule
     */
    public const FIELD_SETTING = 'setting';

    /**
     * Select specific UnifiedRoleManagementPolicyApprovalRule properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
