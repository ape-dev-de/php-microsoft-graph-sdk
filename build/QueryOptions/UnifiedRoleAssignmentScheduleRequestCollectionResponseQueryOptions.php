<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleAssignmentScheduleRequestCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UnifiedRoleAssignmentScheduleRequestCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UnifiedRoleAssignmentScheduleRequestCollectionResponse properties
     * 
     * @param array<string> $select Use UnifiedRoleAssignmentScheduleRequestCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
