<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleManagementPolicyAssignment
 */
class UnifiedRoleManagementPolicyAssignment
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The id of the policy. Inherited from entity. */
        public ?string $policyId = null,
        /** For Microsoft Entra roles policy, it's the identifier of the role definition object where the policy applies. For PIM for Groups membership and ownership, it's either member or owner. Supports $filter (eq). */
        public ?string $roleDefinitionId = null,
        /** The identifier of the scope where the policy is assigned. Can be / for the tenant or a group ID. Required. */
        public ?string $scopeId = null,
        /** The type of the scope where the policy is assigned. One of Directory, DirectoryRole, Group. Required. */
        public ?string $scopeType = null,
        /** The policy that's associated with a policy assignment. Supports $expand and a nested $expand of the rules and effectiveRules relationships for the policy. */
        public ?string $policy = null
    ) {}
}
