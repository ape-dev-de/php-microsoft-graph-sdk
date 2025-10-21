<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleManagementPolicyApprovalRule
 */
class UnifiedRoleManagementPolicyApprovalRule
{
    public function __construct(
        /** The settings for approval of the role assignment. */
        public ?string $setting = null
    ) {}
}
