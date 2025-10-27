<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationJob
 */
class SynchronizationJob
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Schedule used to run the job. Read-only.
     * @var SynchronizationSchedule|\stdClass|null
     */
    public SynchronizationSchedule|\stdClass|null $schedule = null;

    /** 
     * Status of the job, which includes when the job was last run, current job state, and errors.
     * @var SynchronizationStatus|\stdClass|null
     */
    public SynchronizationStatus|\stdClass|null $status = null;

    /** 
     * Settings associated with the job. Some settings are inherited from the template.
     * @var KeyValuePair[]
     */
    public array $synchronizationJobSettings = [];

    /** Identifier of the synchronization template this job is based on. */
    public ?string $templateId = null;

    /** 
     * The bulk upload operation for the job.
     * @var BulkUpload|\stdClass|null
     */
    public BulkUpload|\stdClass|null $bulkUpload = null;

    /** 
     * The synchronization schema configured for the job.
     * @var SynchronizationSchema|\stdClass|null
     */
    public SynchronizationSchema|\stdClass|null $schema = null;


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
        if (isset($data['schedule'])) {
            $this->schedule = is_array($data['schedule']) ? new SynchronizationSchedule($data['schedule']) : $data['schedule'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new SynchronizationStatus($data['status']) : $data['status'];
        }
        if (isset($data['synchronizationJobSettings'])) {
            $this->synchronizationJobSettings = $data['synchronizationJobSettings'];
        }
        if (isset($data['templateId'])) {
            $this->templateId = $data['templateId'];
        }
        if (isset($data['bulkUpload'])) {
            $this->bulkUpload = is_array($data['bulkUpload']) ? new BulkUpload($data['bulkUpload']) : $data['bulkUpload'];
        }
        if (isset($data['schema'])) {
            $this->schema = is_array($data['schema']) ? new SynchronizationSchema($data['schema']) : $data['schema'];
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
