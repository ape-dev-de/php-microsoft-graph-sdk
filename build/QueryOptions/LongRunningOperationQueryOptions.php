<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LongRunningOperation resources
 *
 * Available select fields:
 * - createdDateTime
 * - lastActionDateTime
 * - resourceLocation
 * - status
 * - statusDetail
 */
class LongRunningOperationQueryOptions extends QueryOptions
{
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_LAST_ACTION_DATE_TIME = 'lastActionDateTime';
    public const FIELD_RESOURCE_LOCATION = 'resourceLocation';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_DETAIL = 'statusDetail';

    /**
     * Select specific LongRunningOperation properties
     * 
     * @param array<string> $select Use LongRunningOperationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
