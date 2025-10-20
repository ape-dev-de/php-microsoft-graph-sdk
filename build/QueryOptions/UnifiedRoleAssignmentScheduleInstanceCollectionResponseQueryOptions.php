<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleAssignmentScheduleInstanceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UnifiedRoleAssignmentScheduleInstanceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UnifiedRoleAssignmentScheduleInstanceCollectionResponse properties
     * 
     * @param array<string> $select Use UnifiedRoleAssignmentScheduleInstanceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
