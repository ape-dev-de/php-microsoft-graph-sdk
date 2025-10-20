<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleManagementPolicyApprovalRuleCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UnifiedRoleManagementPolicyApprovalRuleCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UnifiedRoleManagementPolicyApprovalRuleCollectionResponse properties
     * 
     * @param array<string> $select Use UnifiedRoleManagementPolicyApprovalRuleCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
