<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationStatus
 */
class SynchronizationStatus
{
    public function __construct(
        /**  */
        public ?SynchronizationStatusCode $code = null,
        /** Number of consecutive times this job failed. */
        public ?float $countSuccessiveCompleteFailures = null,
        /** true if the job's escrows (object-level errors) were pruned during initial synchronization. Escrows can be pruned if during the initial synchronization, you reach the threshold of errors that would normally put the job in quarantine. Instead of going into quarantine, the synchronization process clears the job's errors and continues until the initial synchronization is completed. When the initial synchronization is completed, the job will pause and wait for the customer to clean up the errors. */
        public ?bool $escrowsPruned = null,
        /** Details of the last execution of the job. */
        public ?SynchronizationTaskExecution $lastExecution = null,
        /** Details of the last execution of this job, which didn't have any errors. */
        public ?SynchronizationTaskExecution $lastSuccessfulExecution = null,
        /** Details of the last execution of the job, which exported objects into the target directory. */
        public ?SynchronizationTaskExecution $lastSuccessfulExecutionWithExports = null,
        /** Details of the progress of a job toward completion. */
        public array $progress = [],
        /** If job is in quarantine, quarantine details. */
        public ?SynchronizationQuarantine $quarantine = null,
        /** The time when steady state (no more changes to the process) was first achieved. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $steadyStateFirstAchievedTime = null,
        /** The time when steady state (no more changes to the process) was last achieved. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $steadyStateLastAchievedTime = null,
        /** Count of synchronized objects, listed by object type. */
        public array $synchronizedEntryCountByType = [],
        /** In the event of an error, the URL with the troubleshooting steps for the issue. */
        public ?string $troubleshootingUrl = null
    ) {}
}
