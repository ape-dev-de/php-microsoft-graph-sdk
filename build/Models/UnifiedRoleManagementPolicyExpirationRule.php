<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleManagementPolicyExpirationRule
 */
class UnifiedRoleManagementPolicyExpirationRule
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Defines details of scope that's targeted by role management policy rule. The details can include the principal type, the role assignment type, and actions affecting a role. Supports $filter (eq, ne).
     * @var UnifiedRoleManagementPolicyRuleTarget|\stdClass|null
     */
    public mixed $target = null;

    /** Indicates whether expiration is required or if it's a permanently active assignment or eligibility. */
    public ?bool $isExpirationRequired = null;

    /** The maximum duration allowed for eligibility or assignment that isn't permanent. Required when isExpirationRequired is true. */
    public ?string $maximumDuration = null;


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
        if (isset($data['isExpirationRequired'])) {
            $this->isExpirationRequired = $data['isExpirationRequired'];
        }
        if (isset($data['maximumDuration'])) {
            $this->maximumDuration = $data['maximumDuration'];
        }
    }
}
