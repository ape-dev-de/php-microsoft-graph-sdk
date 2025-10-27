<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationTaskExecution
 */
class SynchronizationTaskExecution
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
    public SynchronizationError|\stdClass|null $error = null;

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
        $this->rawData = $data;
        if (isset($data['activityIdentifier'])) {
            $this->activityIdentifier = $data['activityIdentifier'];
        }
        if (isset($data['countEntitled'])) {
            $this->countEntitled = is_numeric($data['countEntitled']) ? (float)$data['countEntitled'] : $data['countEntitled'];
        }
        if (isset($data['countEntitledForProvisioning'])) {
            $this->countEntitledForProvisioning = is_numeric($data['countEntitledForProvisioning']) ? (float)$data['countEntitledForProvisioning'] : $data['countEntitledForProvisioning'];
        }
        if (isset($data['countEscrowed'])) {
            $this->countEscrowed = is_numeric($data['countEscrowed']) ? (float)$data['countEscrowed'] : $data['countEscrowed'];
        }
        if (isset($data['countEscrowedRaw'])) {
            $this->countEscrowedRaw = is_numeric($data['countEscrowedRaw']) ? (float)$data['countEscrowedRaw'] : $data['countEscrowedRaw'];
        }
        if (isset($data['countExported'])) {
            $this->countExported = is_numeric($data['countExported']) ? (float)$data['countExported'] : $data['countExported'];
        }
        if (isset($data['countExports'])) {
            $this->countExports = is_numeric($data['countExports']) ? (float)$data['countExports'] : $data['countExports'];
        }
        if (isset($data['countImported'])) {
            $this->countImported = is_numeric($data['countImported']) ? (float)$data['countImported'] : $data['countImported'];
        }
        if (isset($data['countImportedDeltas'])) {
            $this->countImportedDeltas = is_numeric($data['countImportedDeltas']) ? (float)$data['countImportedDeltas'] : $data['countImportedDeltas'];
        }
        if (isset($data['countImportedReferenceDeltas'])) {
            $this->countImportedReferenceDeltas = is_numeric($data['countImportedReferenceDeltas']) ? (float)$data['countImportedReferenceDeltas'] : $data['countImportedReferenceDeltas'];
        }
        if (isset($data['error'])) {
            $this->error = is_array($data['error']) ? new SynchronizationError($data['error']) : $data['error'];
        }
        if (isset($data['state'])) {
            $this->state = is_array($data['state']) ? new SynchronizationTaskExecutionResult($data['state']) : $data['state'];
        }
        if (isset($data['timeBegan'])) {
            $this->timeBegan = is_string($data['timeBegan']) ? new \DateTimeImmutable($data['timeBegan']) : $data['timeBegan'];
        }
        if (isset($data['timeEnded'])) {
            $this->timeEnded = is_string($data['timeEnded']) ? new \DateTimeImmutable($data['timeEnded']) : $data['timeEnded'];
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
