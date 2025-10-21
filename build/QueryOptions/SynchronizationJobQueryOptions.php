<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SynchronizationJob resources
 *
 * Available select fields:
 * - schedule
 * - status
 * - synchronizationJobSettings
 * - templateId
 * - bulkUpload
 * - schema
 */
class SynchronizationJobQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SynchronizationJob
     */
    public const FIELD_SCHEDULE = 'schedule';
    public const FIELD_STATUS = 'status';
    public const FIELD_SYNCHRONIZATION_JOB_SETTINGS = 'synchronizationJobSettings';
    public const FIELD_TEMPLATE_ID = 'templateId';
    public const FIELD_BULK_UPLOAD = 'bulkUpload';
    public const FIELD_SCHEMA = 'schema';

    /**
     * Select specific SynchronizationJob properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
