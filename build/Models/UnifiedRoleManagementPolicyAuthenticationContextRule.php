<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleManagementPolicyAuthenticationContextRule
 */
class UnifiedRoleManagementPolicyAuthenticationContextRule
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Defines details of scope that's targeted by role management policy rule. The details can include the principal type, the role assignment type, and actions affecting a role. Supports $filter (eq, ne).
     * @var UnifiedRoleManagementPolicyRuleTarget|\stdClass|null
     */
    public UnifiedRoleManagementPolicyRuleTarget|\stdClass|null $target = null;

    /** The value of the authentication context claim. */
    public ?string $claimValue = null;

    /** Determines whether this rule is enabled. */
    public ?bool $isEnabled = null;


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
        if (isset($data['target'])) {
            $this->target = is_array($data['target']) ? new UnifiedRoleManagementPolicyRuleTarget($data['target']) : $data['target'];
        }
        if (isset($data['claimValue'])) {
            $this->claimValue = $data['claimValue'];
        }
        if (isset($data['isEnabled'])) {
            $this->isEnabled = is_bool($data['isEnabled']) ? $data['isEnabled'] : (bool)$data['isEnabled'];
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
