<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AssignedTrainingInfo
 */
class AssignedTrainingInfo
{
    /**
     * Number of users who were assigned the training in an attack simulation and training campaign.
     */
    private ?float $assignedUserCount;

    /**
     * Number of users who completed the training in an attack simulation and training campaign.
     */
    private ?float $completedUserCount;

    /**
     * Display name of the training in an attack simulation and training campaign.
     */
    private ?string $displayName;


    public function getAssignedUserCount(): ?float
    {
        return $this->assignedUserCount;
    }

    public function setAssignedUserCount(?float $assignedUserCount): self
    {
        $this->assignedUserCount = $assignedUserCount;
        return $this;
    }

    public function getCompletedUserCount(): ?float
    {
        return $this->completedUserCount;
    }

    public function setCompletedUserCount(?float $completedUserCount): self
    {
        $this->completedUserCount = $completedUserCount;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

}
