<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PolicyScopeBase
 */
class PolicyScopeBase
{
    /**
     */
    private ?string $activities;

    /**
     */
    private ?string $executionMode;

    /**
     * The locations (like domains or URLs) to be protected. Required.
     */
    private array $locations = [];

    /**
     * The enforcement actions to take if the policy conditions are met within this scope. Required.
     * @var string[]
     */
    private array $policyActions = [];


    public function getActivities(): ?string
    {
        return $this->activities;
    }

    public function setActivities(?string $activities): self
    {
        $this->activities = $activities;
        return $this;
    }

    public function getExecutionMode(): ?string
    {
        return $this->executionMode;
    }

    public function setExecutionMode(?string $executionMode): self
    {
        $this->executionMode = $executionMode;
        return $this;
    }

    public function getLocations(): array
    {
        return $this->locations;
    }

    public function setLocations(array $locations): self
    {
        $this->locations = $locations;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getPolicyActions(): array
    {
        return $this->policyActions;
    }

    /**
     * @param string[] $policyActions
     */
    public function setPolicyActions(array $policyActions): self
    {
        $this->policyActions = $policyActions;
        return $this;
    }

}
