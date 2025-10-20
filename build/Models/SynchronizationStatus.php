<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationStatus
 */
class SynchronizationStatus
{
    /**
     */
    private ?string $code;

    /**
     * Number of consecutive times this job failed.
     */
    private ?float $countSuccessiveCompleteFailures;

    /**
     * true if the job''s escrows (object-level errors) were pruned during initial synchronization. Escrows can be pruned if during the initial synchronization, you reach the threshold of errors that would normally put the job in quarantine. Instead of going into quarantine, the synchronization process clears the job''s errors and continues until the initial synchronization is completed. When the initial synchronization is completed, the job will pause and wait for the customer to clean up the errors.
     */
    private ?bool $escrowsPruned;

    /**
     * Details of the last execution of the job.
     */
    private ?string $lastExecution;

    /**
     * Details of the last execution of this job, which didn''t have any errors.
     */
    private ?string $lastSuccessfulExecution;

    /**
     * Details of the last execution of the job, which exported objects into the target directory.
     */
    private ?string $lastSuccessfulExecutionWithExports;

    /**
     * Details of the progress of a job toward completion.
     */
    private array $progress = [];

    /**
     * If job is in quarantine, quarantine details.
     */
    private ?string $quarantine;

    /**
     * The time when steady state (no more changes to the process) was first achieved. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $steadyStateFirstAchievedTime;

    /**
     * The time when steady state (no more changes to the process) was last achieved. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $steadyStateLastAchievedTime;

    /**
     * Count of synchronized objects, listed by object type.
     */
    private array $synchronizedEntryCountByType = [];

    /**
     * In the event of an error, the URL with the troubleshooting steps for the issue.
     */
    private ?string $troubleshootingUrl;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;
        return $this;
    }

    public function getCountSuccessiveCompleteFailures(): ?float
    {
        return $this->countSuccessiveCompleteFailures;
    }

    public function setCountSuccessiveCompleteFailures(?float $countSuccessiveCompleteFailures): self
    {
        $this->countSuccessiveCompleteFailures = $countSuccessiveCompleteFailures;
        return $this;
    }

    public function getEscrowsPruned(): ?bool
    {
        return $this->escrowsPruned;
    }

    public function setEscrowsPruned(?bool $escrowsPruned): self
    {
        $this->escrowsPruned = $escrowsPruned;
        return $this;
    }

    public function getLastExecution(): ?string
    {
        return $this->lastExecution;
    }

    public function setLastExecution(?string $lastExecution): self
    {
        $this->lastExecution = $lastExecution;
        return $this;
    }

    public function getLastSuccessfulExecution(): ?string
    {
        return $this->lastSuccessfulExecution;
    }

    public function setLastSuccessfulExecution(?string $lastSuccessfulExecution): self
    {
        $this->lastSuccessfulExecution = $lastSuccessfulExecution;
        return $this;
    }

    public function getLastSuccessfulExecutionWithExports(): ?string
    {
        return $this->lastSuccessfulExecutionWithExports;
    }

    public function setLastSuccessfulExecutionWithExports(?string $lastSuccessfulExecutionWithExports): self
    {
        $this->lastSuccessfulExecutionWithExports = $lastSuccessfulExecutionWithExports;
        return $this;
    }

    public function getProgress(): array
    {
        return $this->progress;
    }

    public function setProgress(array $progress): self
    {
        $this->progress = $progress;
        return $this;
    }

    public function getQuarantine(): ?string
    {
        return $this->quarantine;
    }

    public function setQuarantine(?string $quarantine): self
    {
        $this->quarantine = $quarantine;
        return $this;
    }

    public function getSteadyStateFirstAchievedTime(): ?\DateTimeInterface
    {
        return $this->steadyStateFirstAchievedTime;
    }

    public function setSteadyStateFirstAchievedTime(?\DateTimeInterface $steadyStateFirstAchievedTime): self
    {
        $this->steadyStateFirstAchievedTime = $steadyStateFirstAchievedTime;
        return $this;
    }

    public function getSteadyStateLastAchievedTime(): ?\DateTimeInterface
    {
        return $this->steadyStateLastAchievedTime;
    }

    public function setSteadyStateLastAchievedTime(?\DateTimeInterface $steadyStateLastAchievedTime): self
    {
        $this->steadyStateLastAchievedTime = $steadyStateLastAchievedTime;
        return $this;
    }

    public function getSynchronizedEntryCountByType(): array
    {
        return $this->synchronizedEntryCountByType;
    }

    public function setSynchronizedEntryCountByType(array $synchronizedEntryCountByType): self
    {
        $this->synchronizedEntryCountByType = $synchronizedEntryCountByType;
        return $this;
    }

    public function getTroubleshootingUrl(): ?string
    {
        return $this->troubleshootingUrl;
    }

    public function setTroubleshootingUrl(?string $troubleshootingUrl): self
    {
        $this->troubleshootingUrl = $troubleshootingUrl;
        return $this;
    }

}
