<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleManagementPolicyEnablementRule
 */
class UnifiedRoleManagementPolicyEnablementRule
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Defines details of scope that's targeted by role management policy rule. The details can include the principal type, the role assignment type, and actions affecting a role. Supports $filter (eq, ne). */
        public ?UnifiedRoleManagementPolicyRuleTarget $target = null,
        /** @var string[] The collection of rules that are enabled for this policy rule. For example, MultiFactorAuthentication, Ticketing, and Justification. */
        public array $enabledRules = []
    ) {}
}
