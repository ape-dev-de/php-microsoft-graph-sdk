<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceTriggerAndScopeBasedConditions
 */
class IdentityGovernanceTriggerAndScopeBasedConditions
{
    /**
     * Defines who the workflow runs for.
     */
    private ?string $scope;

    /**
     * What triggers a workflow to run.
     */
    private ?string $trigger;

    public function getScope(): ?string
    {
        return $this->scope;
    }

    public function setScope(?string $scope): self
    {
        $this->scope = $scope;
        return $this;
    }

    public function getTrigger(): ?string
    {
        return $this->trigger;
    }

    public function setTrigger(?string $trigger): self
    {
        $this->trigger = $trigger;
        return $this;
    }

}
