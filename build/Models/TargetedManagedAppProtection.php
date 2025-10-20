<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TargetedManagedAppProtection
 */
class TargetedManagedAppProtection
{
    /**
     * Indicates if the policy is deployed to any inclusion groups or not.
     */
    private ?bool $isAssigned;

    /**
     * Policy used to configure detailed management settings targeted to specific security groups
     */
    private ?string $assignments;

    public function getIsAssigned(): ?bool
    {
        return $this->isAssigned;
    }

    public function setIsAssigned(?bool $isAssigned): self
    {
        $this->isAssigned = $isAssigned;
        return $this;
    }

    public function getAssignments(): ?string
    {
        return $this->assignments;
    }

    public function setAssignments(?string $assignments): self
    {
        $this->assignments = $assignments;
        return $this;
    }

}
