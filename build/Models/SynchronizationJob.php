<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationJob
 */
class SynchronizationJob
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Schedule used to run the job. Read-only.
     * @var SynchronizationSchedule|\stdClass|null
     */
    public mixed $schedule = null;

    /** 
     * Status of the job, which includes when the job was last run, current job state, and errors.
     * @var SynchronizationStatus|\stdClass|null
     */
    public mixed $status = null;

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
    public mixed $bulkUpload = null;

    /** 
     * The synchronization schema configured for the job.
     * @var SynchronizationSchema|\stdClass|null
     */
    public mixed $schema = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['schedule'])) {
            $this->schedule = $data['schedule'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['synchronizationJobSettings'])) {
            $this->synchronizationJobSettings = $data['synchronizationJobSettings'];
        }
        if (isset($data['templateId'])) {
            $this->templateId = $data['templateId'];
        }
        if (isset($data['bulkUpload'])) {
            $this->bulkUpload = $data['bulkUpload'];
        }
        if (isset($data['schema'])) {
            $this->schema = $data['schema'];
        }
    }
}
