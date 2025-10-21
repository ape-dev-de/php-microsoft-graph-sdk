<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleManagementPolicyRuleTarget
 */
class UnifiedRoleManagementPolicyRuleTarget
{
    public function __construct(
        /** The type of caller that's the target of the policy rule. Allowed values are: None, Admin, EndUser. */
        public ?string $caller = null,
        /** @var string[] The list of role settings that are enforced and cannot be overridden by child scopes. Use All for all settings. */
        public array $enforcedSettings = [],
        /** @var string[] The list of role settings that can be inherited by child scopes. Use All for all settings. */
        public array $inheritableSettings = [],
        /** The role assignment type that's the target of policy rule. Allowed values are: Eligibility, Assignment. */
        public ?string $level = null,
        /** The role management operations that are the target of the policy rule. Allowed values are: All, Activate, Deactivate, Assign, Update, Remove, Extend, Renew. */
        public array $operations = [],
        /**  */
        public array $targetObjects = []
    ) {}
}
