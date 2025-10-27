<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleManagementPolicyAssignment
 */
class UnifiedRoleManagementPolicyAssignment
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The id of the policy. Inherited from entity. */
    public ?string $policyId = null;

    /** For Microsoft Entra roles policy, it's the identifier of the role definition object where the policy applies. For PIM for Groups membership and ownership, it's either member or owner. Supports $filter (eq). */
    public ?string $roleDefinitionId = null;

    /** The identifier of the scope where the policy is assigned. Can be / for the tenant or a group ID. Required. */
    public ?string $scopeId = null;

    /** The type of the scope where the policy is assigned. One of Directory, DirectoryRole, Group. Required. */
    public ?string $scopeType = null;

    /** 
     * The policy that's associated with a policy assignment. Supports $expand and a nested $expand of the rules and effectiveRules relationships for the policy.
     * @var UnifiedRoleManagementPolicy|\stdClass|null
     */
    public UnifiedRoleManagementPolicy|\stdClass|null $policy = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['policyId'])) {
            $this->policyId = $data['policyId'];
        }
        if (isset($data['roleDefinitionId'])) {
            $this->roleDefinitionId = $data['roleDefinitionId'];
        }
        if (isset($data['scopeId'])) {
            $this->scopeId = $data['scopeId'];
        }
        if (isset($data['scopeType'])) {
            $this->scopeType = $data['scopeType'];
        }
        if (isset($data['policy'])) {
            $this->policy = is_array($data['policy']) ? new UnifiedRoleManagementPolicy($data['policy']) : $data['policy'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
