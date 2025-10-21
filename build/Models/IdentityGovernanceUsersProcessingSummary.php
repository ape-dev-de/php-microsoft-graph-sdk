<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceUsersProcessingSummary
 */
class IdentityGovernanceUsersProcessingSummary
{
    /**
     */
    private ?float $failedTasks;

    /**
     */
    private ?float $failedUsers;

    /**
     */
    private ?float $successfulUsers;

    /**
     */
    private ?float $totalTasks;

    /**
     */
    private ?string $totalUsers;


    public function getFailedTasks(): ?float
    {
        return $this->failedTasks;
    }

    public function setFailedTasks(?float $failedTasks): self
    {
        $this->failedTasks = $failedTasks;
        return $this;
    }

    public function getFailedUsers(): ?float
    {
        return $this->failedUsers;
    }

    public function setFailedUsers(?float $failedUsers): self
    {
        $this->failedUsers = $failedUsers;
        return $this;
    }

    public function getSuccessfulUsers(): ?float
    {
        return $this->successfulUsers;
    }

    public function setSuccessfulUsers(?float $successfulUsers): self
    {
        $this->successfulUsers = $successfulUsers;
        return $this;
    }

    public function getTotalTasks(): ?float
    {
        return $this->totalTasks;
    }

    public function setTotalTasks(?float $totalTasks): self
    {
        $this->totalTasks = $totalTasks;
        return $this;
    }

    public function getTotalUsers(): ?string
    {
        return $this->totalUsers;
    }

    public function setTotalUsers(?string $totalUsers): self
    {
        $this->totalUsers = $totalUsers;
        return $this;
    }

}
