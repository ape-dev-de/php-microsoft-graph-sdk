<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TargetedManagedAppConfiguration
 */
class TargetedManagedAppConfiguration
{
    /**
     * Count of apps to which the current policy is deployed.
     */
    private ?float $deployedAppCount;

    /**
     * Indicates if the policy is deployed to any inclusion groups or not.
     */
    private ?bool $isAssigned;

    /**
     * List of apps to which the policy is deployed.
     */
    private array $apps = [];

    /**
     * Navigation property to list of inclusion and exclusion groups to which the policy is deployed.
     */
    private array $assignments = [];

    /**
     * Configuration used to deliver a set of custom settings as-is to all users in the targeted security group
     */
    private ?string $deploymentSummary;


    public function getDeployedAppCount(): ?float
    {
        return $this->deployedAppCount;
    }

    public function setDeployedAppCount(?float $deployedAppCount): self
    {
        $this->deployedAppCount = $deployedAppCount;
        return $this;
    }

    public function getIsAssigned(): ?bool
    {
        return $this->isAssigned;
    }

    public function setIsAssigned(?bool $isAssigned): self
    {
        $this->isAssigned = $isAssigned;
        return $this;
    }

    public function getApps(): array
    {
        return $this->apps;
    }

    public function setApps(array $apps): self
    {
        $this->apps = $apps;
        return $this;
    }

    public function getAssignments(): array
    {
        return $this->assignments;
    }

    public function setAssignments(array $assignments): self
    {
        $this->assignments = $assignments;
        return $this;
    }

    public function getDeploymentSummary(): ?string
    {
        return $this->deploymentSummary;
    }

    public function setDeploymentSummary(?string $deploymentSummary): self
    {
        $this->deploymentSummary = $deploymentSummary;
        return $this;
    }

}
