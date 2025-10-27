<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationStatus
 */
class SynchronizationStatus
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /**  */
    public ?SynchronizationStatusCode $code = null;

    /** Number of consecutive times this job failed. */
    public ?float $countSuccessiveCompleteFailures = null;

    /** true if the job's escrows (object-level errors) were pruned during initial synchronization. Escrows can be pruned if during the initial synchronization, you reach the threshold of errors that would normally put the job in quarantine. Instead of going into quarantine, the synchronization process clears the job's errors and continues until the initial synchronization is completed. When the initial synchronization is completed, the job will pause and wait for the customer to clean up the errors. */
    public ?bool $escrowsPruned = null;

    /** 
     * Details of the last execution of the job.
     * @var SynchronizationTaskExecution|\stdClass|null
     */
    public SynchronizationTaskExecution|\stdClass|null $lastExecution = null;

    /** 
     * Details of the last execution of this job, which didn't have any errors.
     * @var SynchronizationTaskExecution|\stdClass|null
     */
    public SynchronizationTaskExecution|\stdClass|null $lastSuccessfulExecution = null;

    /** 
     * Details of the last execution of the job, which exported objects into the target directory.
     * @var SynchronizationTaskExecution|\stdClass|null
     */
    public SynchronizationTaskExecution|\stdClass|null $lastSuccessfulExecutionWithExports = null;

    /** 
     * Details of the progress of a job toward completion.
     * @var SynchronizationProgress[]
     */
    public array $progress = [];

    /** 
     * If job is in quarantine, quarantine details.
     * @var SynchronizationQuarantine|\stdClass|null
     */
    public SynchronizationQuarantine|\stdClass|null $quarantine = null;

    /** The time when steady state (no more changes to the process) was first achieved. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $steadyStateFirstAchievedTime = null;

    /** The time when steady state (no more changes to the process) was last achieved. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $steadyStateLastAchievedTime = null;

    /** 
     * Count of synchronized objects, listed by object type.
     * @var StringKeyLongValuePair[]
     */
    public array $synchronizedEntryCountByType = [];

    /** In the event of an error, the URL with the troubleshooting steps for the issue. */
    public ?string $troubleshootingUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['code'])) {
            $this->code = is_array($data['code']) ? new SynchronizationStatusCode($data['code']) : $data['code'];
        }
        if (isset($data['countSuccessiveCompleteFailures'])) {
            $this->countSuccessiveCompleteFailures = is_numeric($data['countSuccessiveCompleteFailures']) ? (float)$data['countSuccessiveCompleteFailures'] : $data['countSuccessiveCompleteFailures'];
        }
        if (isset($data['escrowsPruned'])) {
            $this->escrowsPruned = is_bool($data['escrowsPruned']) ? $data['escrowsPruned'] : (bool)$data['escrowsPruned'];
        }
        if (isset($data['lastExecution'])) {
            $this->lastExecution = is_array($data['lastExecution']) ? new SynchronizationTaskExecution($data['lastExecution']) : $data['lastExecution'];
        }
        if (isset($data['lastSuccessfulExecution'])) {
            $this->lastSuccessfulExecution = is_array($data['lastSuccessfulExecution']) ? new SynchronizationTaskExecution($data['lastSuccessfulExecution']) : $data['lastSuccessfulExecution'];
        }
        if (isset($data['lastSuccessfulExecutionWithExports'])) {
            $this->lastSuccessfulExecutionWithExports = is_array($data['lastSuccessfulExecutionWithExports']) ? new SynchronizationTaskExecution($data['lastSuccessfulExecutionWithExports']) : $data['lastSuccessfulExecutionWithExports'];
        }
        if (isset($data['progress'])) {
            $this->progress = $data['progress'];
        }
        if (isset($data['quarantine'])) {
            $this->quarantine = is_array($data['quarantine']) ? new SynchronizationQuarantine($data['quarantine']) : $data['quarantine'];
        }
        if (isset($data['steadyStateFirstAchievedTime'])) {
            $this->steadyStateFirstAchievedTime = is_string($data['steadyStateFirstAchievedTime']) ? new \DateTimeImmutable($data['steadyStateFirstAchievedTime']) : $data['steadyStateFirstAchievedTime'];
        }
        if (isset($data['steadyStateLastAchievedTime'])) {
            $this->steadyStateLastAchievedTime = is_string($data['steadyStateLastAchievedTime']) ? new \DateTimeImmutable($data['steadyStateLastAchievedTime']) : $data['steadyStateLastAchievedTime'];
        }
        if (isset($data['synchronizedEntryCountByType'])) {
            $this->synchronizedEntryCountByType = $data['synchronizedEntryCountByType'];
        }
        if (isset($data['troubleshootingUrl'])) {
            $this->troubleshootingUrl = $data['troubleshootingUrl'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
