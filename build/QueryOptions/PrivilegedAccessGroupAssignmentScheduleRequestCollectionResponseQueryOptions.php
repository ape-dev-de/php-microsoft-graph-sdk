<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrivilegedAccessGroupAssignmentScheduleRequestCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PrivilegedAccessGroupAssignmentScheduleRequestCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PrivilegedAccessGroupAssignmentScheduleRequestCollectionResponse properties
     * 
     * @param array<string> $select Use PrivilegedAccessGroupAssignmentScheduleRequestCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
