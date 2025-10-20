<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintJob resources
 *
 * Available select fields:
 * - acknowledgedDateTime
 * - configuration
 * - createdBy
 * - createdDateTime
 * - errorCode
 * - isFetchable
 * - redirectedFrom
 * - redirectedTo
 * - status
 * - documents
 * - tasks
 */
class PrintJobQueryOptions extends QueryOptions
{
    public const FIELD_ACKNOWLEDGED_DATE_TIME = 'acknowledgedDateTime';
    public const FIELD_CONFIGURATION = 'configuration';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_ERROR_CODE = 'errorCode';
    public const FIELD_IS_FETCHABLE = 'isFetchable';
    public const FIELD_REDIRECTED_FROM = 'redirectedFrom';
    public const FIELD_REDIRECTED_TO = 'redirectedTo';
    public const FIELD_STATUS = 'status';
    public const FIELD_DOCUMENTS = 'documents';
    public const FIELD_TASKS = 'tasks';

    /**
     * Select specific PrintJob properties
     * 
     * @param array<string> $select Use PrintJobQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
