<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleManagementPolicyAssignment resources
 *
 * Available select fields:
 * - policyId
 * - roleDefinitionId
 * - scopeId
 * - scopeType
 * - policy
 */
class UnifiedRoleManagementPolicyAssignmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UnifiedRoleManagementPolicyAssignment
     */
    public const FIELD_POLICY_ID = 'policyId';
    public const FIELD_ROLE_DEFINITION_ID = 'roleDefinitionId';
    public const FIELD_SCOPE_ID = 'scopeId';
    public const FIELD_SCOPE_TYPE = 'scopeType';
    public const FIELD_POLICY = 'policy';

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
