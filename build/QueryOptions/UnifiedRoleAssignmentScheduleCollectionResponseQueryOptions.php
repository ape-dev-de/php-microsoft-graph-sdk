<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleAssignmentScheduleCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UnifiedRoleAssignmentScheduleCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UnifiedRoleAssignmentScheduleCollectionResponse properties
     * 
     * @param array<string> $select Use UnifiedRoleAssignmentScheduleCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
