<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleManagementPolicyApprovalRule
 */
class UnifiedRoleManagementPolicyApprovalRule
{
    /**
     * The settings for approval of the role assignment.
     */
    private ?string $setting;

    public function getSetting(): ?string
    {
        return $this->setting;
    }

    public function setSetting(?string $setting): self
    {
        $this->setting = $setting;
        return $this;
    }

}
