<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationTaskExecution
 */
class SynchronizationTaskExecution
{
    public function __construct(
        /** Identifier of the job run. */
        public ?string $activityIdentifier = null,
        /** Count of processed entries that were assigned for this application. */
        public ?float $countEntitled = null,
        /** Count of processed entries that were assigned for provisioning. */
        public ?float $countEntitledForProvisioning = null,
        /** Count of entries that were escrowed (errors). */
        public ?float $countEscrowed = null,
        /** Count of entries that were escrowed, including system-generated escrows. */
        public ?float $countEscrowedRaw = null,
        /** Count of exported entries. */
        public ?float $countExported = null,
        /** Count of entries that were expected to be exported. */
        public ?float $countExports = null,
        /** Count of imported entries. */
        public ?float $countImported = null,
        /** Count of imported delta-changes. */
        public ?float $countImportedDeltas = null,
        /** Count of imported delta-changes pertaining to reference changes. */
        public ?float $countImportedReferenceDeltas = null,
        /** If an error was encountered, contains a synchronizationError object with details. */
        public ?SynchronizationError $error = null,
        /**  */
        public ?SynchronizationTaskExecutionResult $state = null,
        /** Time when this job run began. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $timeBegan = null,
        /** Time when this job run ended. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $timeEnded = null
    ) {}
}
