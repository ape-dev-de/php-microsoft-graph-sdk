<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationTaskExecution
 */
class SynchronizationTaskExecution
{
    /** Identifier of the job run. */
    public ?string $activityIdentifier = null;

    /** Count of processed entries that were assigned for this application. */
    public ?float $countEntitled = null;

    /** Count of processed entries that were assigned for provisioning. */
    public ?float $countEntitledForProvisioning = null;

    /** Count of entries that were escrowed (errors). */
    public ?float $countEscrowed = null;

    /** Count of entries that were escrowed, including system-generated escrows. */
    public ?float $countEscrowedRaw = null;

    /** Count of exported entries. */
    public ?float $countExported = null;

    /** Count of entries that were expected to be exported. */
    public ?float $countExports = null;

    /** Count of imported entries. */
    public ?float $countImported = null;

    /** Count of imported delta-changes. */
    public ?float $countImportedDeltas = null;

    /** Count of imported delta-changes pertaining to reference changes. */
    public ?float $countImportedReferenceDeltas = null;

    /** 
     * If an error was encountered, contains a synchronizationError object with details.
     * @var SynchronizationError|\stdClass|null
     */
    public mixed $error = null;

    /**  */
    public ?SynchronizationTaskExecutionResult $state = null;

    /** Time when this job run began. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $timeBegan = null;

    /** Time when this job run ended. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $timeEnded = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['activityIdentifier'])) {
            $this->activityIdentifier = $data['activityIdentifier'];
        }
        if (isset($data['countEntitled'])) {
            $this->countEntitled = $data['countEntitled'];
        }
        if (isset($data['countEntitledForProvisioning'])) {
            $this->countEntitledForProvisioning = $data['countEntitledForProvisioning'];
        }
        if (isset($data['countEscrowed'])) {
            $this->countEscrowed = $data['countEscrowed'];
        }
        if (isset($data['countEscrowedRaw'])) {
            $this->countEscrowedRaw = $data['countEscrowedRaw'];
        }
        if (isset($data['countExported'])) {
            $this->countExported = $data['countExported'];
        }
        if (isset($data['countExports'])) {
            $this->countExports = $data['countExports'];
        }
        if (isset($data['countImported'])) {
            $this->countImported = $data['countImported'];
        }
        if (isset($data['countImportedDeltas'])) {
            $this->countImportedDeltas = $data['countImportedDeltas'];
        }
        if (isset($data['countImportedReferenceDeltas'])) {
            $this->countImportedReferenceDeltas = $data['countImportedReferenceDeltas'];
        }
        if (isset($data['error'])) {
            $this->error = $data['error'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
        }
        if (isset($data['timeBegan'])) {
            $this->timeBegan = is_string($data['timeBegan']) ? new \DateTimeImmutable($data['timeBegan']) : $data['timeBegan'];
        }
        if (isset($data['timeEnded'])) {
            $this->timeEnded = is_string($data['timeEnded']) ? new \DateTimeImmutable($data['timeEnded']) : $data['timeEnded'];
        }
    }
}
