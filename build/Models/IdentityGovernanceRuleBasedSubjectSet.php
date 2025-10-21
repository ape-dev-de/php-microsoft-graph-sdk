<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceRuleBasedSubjectSet
 */
class IdentityGovernanceRuleBasedSubjectSet
{
    /**
     * The rule for the subject set. Lifecycle Workflows supports a rich set of user properties for configuring the rules using $filter query expressions. For more information, see supported user and query parameters.
     */
    private ?string $rule;


    public function getRule(): ?string
    {
        return $this->rule;
    }

    public function setRule(?string $rule): self
    {
        $this->rule = $rule;
        return $this;
    }

}
