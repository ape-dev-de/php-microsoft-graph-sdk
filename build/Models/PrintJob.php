<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintJob
 */
class PrintJob
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The dateTimeOffset when the job was acknowledged. Read-only. */
    public ?\DateTimeInterface $acknowledgedDateTime = null;

    /**  */
    public ?PrintJobConfiguration $configuration = null;

    /** 
     * 
     * @var UserIdentity|\stdClass|null
     */
    public UserIdentity|\stdClass|null $createdBy = null;

    /** The DateTimeOffset when the job was created. Read-only. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The error code of the print job. Read-only. */
    public ?float $errorCode = null;

    /** If true, document can be fetched by printer. */
    public ?bool $isFetchable = null;

    /** Contains the source job URL, if the job has been redirected from another printer. */
    public ?string $redirectedFrom = null;

    /** Contains the destination job URL, if the job has been redirected to another printer. */
    public ?string $redirectedTo = null;

    /**  */
    public ?PrintJobStatus $status = null;

    /** 
     * 
     * @var PrintDocument[]
     */
    public array $documents = [];

    /** 
     * A list of printTasks that were triggered by this print job.
     * @var PrintTask[]
     */
    public array $tasks = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['acknowledgedDateTime'])) {
            $this->acknowledgedDateTime = is_string($data['acknowledgedDateTime']) ? new \DateTimeImmutable($data['acknowledgedDateTime']) : $data['acknowledgedDateTime'];
        }
        if (isset($data['configuration'])) {
            $this->configuration = is_array($data['configuration']) ? new PrintJobConfiguration($data['configuration']) : $data['configuration'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = is_array($data['createdBy']) ? new UserIdentity($data['createdBy']) : $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['errorCode'])) {
            $this->errorCode = is_numeric($data['errorCode']) ? (float)$data['errorCode'] : $data['errorCode'];
        }
        if (isset($data['isFetchable'])) {
            $this->isFetchable = is_bool($data['isFetchable']) ? $data['isFetchable'] : (bool)$data['isFetchable'];
        }
        if (isset($data['redirectedFrom'])) {
            $this->redirectedFrom = $data['redirectedFrom'];
        }
        if (isset($data['redirectedTo'])) {
            $this->redirectedTo = $data['redirectedTo'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new PrintJobStatus($data['status']) : $data['status'];
        }
        if (isset($data['documents'])) {
            $this->documents = $data['documents'];
        }
        if (isset($data['tasks'])) {
            $this->tasks = $data['tasks'];
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
