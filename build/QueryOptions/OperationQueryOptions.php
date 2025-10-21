<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Operation resources
 *
 * Available select fields:
 * - createdDateTime
 * - lastActionDateTime
 * - status
 */
class OperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Operation
     */
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_LAST_ACTION_DATE_TIME = 'lastActionDateTime';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific Operation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
