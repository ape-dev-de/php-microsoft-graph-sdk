<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceUserSummary
 */
class IdentityGovernanceUserSummary
{
    /**
     * The number of failed tasks for users in a user summary.
     */
    private ?float $failedTasks;

    /**
     * The number of failed users in a user summary.
     */
    private ?float $failedUsers;

    /**
     * The number of successful users in a user summary.
     */
    private ?float $successfulUsers;

    /**
     * The total tasks of users in a user summary.
     */
    private ?float $totalTasks;

    /**
     * The total number of users in a user summary
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
