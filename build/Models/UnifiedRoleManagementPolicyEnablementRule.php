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
     * @var string[]
     */
    private array $enabledRules = [];


    /**
     * @return string[]
     */
    public function getEnabledRules(): array
    {
        return $this->enabledRules;
    }

    /**
     * @param string[] $enabledRules
     */
    public function setEnabledRules(array $enabledRules): self
    {
        $this->enabledRules = $enabledRules;
        return $this;
    }

}
