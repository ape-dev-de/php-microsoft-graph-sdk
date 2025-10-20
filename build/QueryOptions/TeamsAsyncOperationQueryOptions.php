<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamsAsyncOperation resources
 *
 * Available select fields:
 * - attemptsCount
 * - createdDateTime
 * - error
 * - lastActionDateTime
 * - operationType
 * - status
 * - targetResourceId
 * - targetResourceLocation
 */
class TeamsAsyncOperationQueryOptions extends QueryOptions
{
    public const FIELD_ATTEMPTS_COUNT = 'attemptsCount';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_ERROR = 'error';
    public const FIELD_LAST_ACTION_DATE_TIME = 'lastActionDateTime';
    public const FIELD_OPERATION_TYPE = 'operationType';
    public const FIELD_STATUS = 'status';
    public const FIELD_TARGET_RESOURCE_ID = 'targetResourceId';
    public const FIELD_TARGET_RESOURCE_LOCATION = 'targetResourceLocation';

    /**
     * Select specific TeamsAsyncOperation properties
     * 
     * @param array<string> $select Use TeamsAsyncOperationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
