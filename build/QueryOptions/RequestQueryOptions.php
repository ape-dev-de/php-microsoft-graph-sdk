<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Request resources
 *
 * Available select fields:
 * - approvalId
 * - completedDateTime
 * - createdBy
 * - createdDateTime
 * - customData
 * - status
 */
class RequestQueryOptions extends QueryOptions
{
    public const FIELD_APPROVAL_ID = 'approvalId';
    public const FIELD_COMPLETED_DATE_TIME = 'completedDateTime';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_CUSTOM_DATA = 'customData';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific Request properties
     * 
     * @param array<string> $select Use RequestQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
