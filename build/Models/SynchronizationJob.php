<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationJob
 */
class SynchronizationJob
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Schedule used to run the job. Read-only. */
        public ?SynchronizationSchedule $schedule = null,
        /** Status of the job, which includes when the job was last run, current job state, and errors. */
        public ?SynchronizationStatus $status = null,
        /** Settings associated with the job. Some settings are inherited from the template. */
        public array $synchronizationJobSettings = [],
        /** Identifier of the synchronization template this job is based on. */
        public ?string $templateId = null,
        /** The bulk upload operation for the job. */
        public ?BulkUpload $bulkUpload = null,
        /** The synchronization schema configured for the job. */
        public ?SynchronizationSchema $schema = null
    ) {}
}
