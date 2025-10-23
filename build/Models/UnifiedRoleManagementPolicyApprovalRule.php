<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleManagementPolicyApprovalRule
 */
class UnifiedRoleManagementPolicyApprovalRule
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Defines details of scope that's targeted by role management policy rule. The details can include the principal type, the role assignment type, and actions affecting a role. Supports $filter (eq, ne).
     * @var UnifiedRoleManagementPolicyRuleTarget|\stdClass|null
     */
    public mixed $target = null;

    /** 
     * The settings for approval of the role assignment.
     * @var ApprovalSettings|\stdClass|null
     */
    public mixed $setting = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['target'])) {
            $this->target = $data['target'];
        }
        if (isset($data['setting'])) {
            $this->setting = $data['setting'];
        }
    }
}
