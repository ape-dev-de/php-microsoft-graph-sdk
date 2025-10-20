<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceTaskReportSummary
 */
class IdentityGovernanceTaskReportSummary
{
    /**
     * The number of failed tasks in a report.
     */
    private ?float $failedTasks;

    /**
     * The total number of successful tasks in a report.
     */
    private ?float $successfulTasks;

    /**
     * The total number of tasks in a report.
     */
    private ?float $totalTasks;

    /**
     * The number of unprocessed tasks in a report.
     */
    private ?string $unprocessedTasks;

    public function getFailedTasks(): ?float
    {
        return $this->failedTasks;
    }

    public function setFailedTasks(?float $failedTasks): self
    {
        $this->failedTasks = $failedTasks;
        return $this;
    }

    public function getSuccessfulTasks(): ?float
    {
        return $this->successfulTasks;
    }

    public function setSuccessfulTasks(?float $successfulTasks): self
    {
        $this->successfulTasks = $successfulTasks;
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

    public function getUnprocessedTasks(): ?string
    {
        return $this->unprocessedTasks;
    }

    public function setUnprocessedTasks(?string $unprocessedTasks): self
    {
        $this->unprocessedTasks = $unprocessedTasks;
        return $this;
    }

}
