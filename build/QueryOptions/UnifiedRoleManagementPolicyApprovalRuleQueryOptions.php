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
    public const FIELD_SETTING = 'setting';

    /**
     * Select specific UnifiedRoleManagementPolicyApprovalRule properties
     * 
     * @param array<string> $select Use UnifiedRoleManagementPolicyApprovalRuleQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
