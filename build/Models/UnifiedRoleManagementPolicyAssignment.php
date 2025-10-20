<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleManagementPolicyAssignment
 */
class UnifiedRoleManagementPolicyAssignment
{
    /**
     * The id of the policy. Inherited from entity.
     */
    private ?string $policyId;

    /**
     * For Microsoft Entra roles policy, it''s the identifier of the role definition object where the policy applies. For PIM for Groups membership and ownership, it''s either member or owner. Supports $filter (eq).
     */
    private ?string $roleDefinitionId;

    /**
     * The identifier of the scope where the policy is assigned. Can be / for the tenant or a group ID. Required.
     */
    private ?string $scopeId;

    /**
     * The type of the scope where the policy is assigned. One of Directory, DirectoryRole, Group. Required.
     */
    private ?string $scopeType;

    /**
     * The policy that's associated with a policy assignment. Supports $expand and a nested $expand of the rules and effectiveRules relationships for the policy.
     */
    private ?string $policy;

    public function getPolicyId(): ?string
    {
        return $this->policyId;
    }

    public function setPolicyId(?string $policyId): self
    {
        $this->policyId = $policyId;
        return $this;
    }

    public function getRoleDefinitionId(): ?string
    {
        return $this->roleDefinitionId;
    }

    public function setRoleDefinitionId(?string $roleDefinitionId): self
    {
        $this->roleDefinitionId = $roleDefinitionId;
        return $this;
    }

    public function getScopeId(): ?string
    {
        return $this->scopeId;
    }

    public function setScopeId(?string $scopeId): self
    {
        $this->scopeId = $scopeId;
        return $this;
    }

    public function getScopeType(): ?string
    {
        return $this->scopeType;
    }

    public function setScopeType(?string $scopeType): self
    {
        $this->scopeType = $scopeType;
        return $this;
    }

    public function getPolicy(): ?string
    {
        return $this->policy;
    }

    public function setPolicy(?string $policy): self
    {
        $this->policy = $policy;
        return $this;
    }

}
