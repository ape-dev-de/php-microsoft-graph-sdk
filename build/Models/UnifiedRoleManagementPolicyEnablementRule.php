<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleManagementPolicyEnablementRule
 */
class UnifiedRoleManagementPolicyEnablementRule
{
    /**
     * The collection of rules that are enabled for this policy rule. For example, MultiFactorAuthentication, Ticketing, and Justification.
     */
    private ?string $enabledRules;

    public function getEnabledRules(): ?string
    {
        return $this->enabledRules;
    }

    public function setEnabledRules(?string $enabledRules): self
    {
        $this->enabledRules = $enabledRules;
        return $this;
    }

}
