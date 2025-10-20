<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DataPolicyOperation resources
 *
 * Available select fields:
 * - completedDateTime
 * - progress
 * - status
 * - storageLocation
 * - submittedDateTime
 * - userId
 */
class DataPolicyOperationQueryOptions extends QueryOptions
{
    public const FIELD_COMPLETED_DATE_TIME = 'completedDateTime';
    public const FIELD_PROGRESS = 'progress';
    public const FIELD_STATUS = 'status';
    public const FIELD_STORAGE_LOCATION = 'storageLocation';
    public const FIELD_SUBMITTED_DATE_TIME = 'submittedDateTime';
    public const FIELD_USER_ID = 'userId';

    /**
     * Select specific DataPolicyOperation properties
     * 
     * @param array<string> $select Use DataPolicyOperationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
