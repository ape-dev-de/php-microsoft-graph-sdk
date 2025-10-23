<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintJob
 */
class PrintJob
{
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
    public mixed $createdBy = null;

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
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['acknowledgedDateTime'])) {
            $this->acknowledgedDateTime = $data['acknowledgedDateTime'];
        }
        if (isset($data['configuration'])) {
            $this->configuration = $data['configuration'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['errorCode'])) {
            $this->errorCode = $data['errorCode'];
        }
        if (isset($data['isFetchable'])) {
            $this->isFetchable = $data['isFetchable'];
        }
        if (isset($data['redirectedFrom'])) {
            $this->redirectedFrom = $data['redirectedFrom'];
        }
        if (isset($data['redirectedTo'])) {
            $this->redirectedTo = $data['redirectedTo'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['documents'])) {
            $this->documents = $data['documents'];
        }
        if (isset($data['tasks'])) {
            $this->tasks = $data['tasks'];
        }
    }
}
