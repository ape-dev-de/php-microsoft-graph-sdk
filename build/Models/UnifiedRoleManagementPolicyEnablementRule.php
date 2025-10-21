<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleManagementPolicyEnablementRule
 */
class UnifiedRoleManagementPolicyEnablementRule
{
    public function __construct(
        /** @var string[] The collection of rules that are enabled for this policy rule. For example, MultiFactorAuthentication, Ticketing, and Justification. */
        public array $enabledRules = []
    ) {}
}
