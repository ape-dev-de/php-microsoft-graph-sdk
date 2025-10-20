<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerAssignment resources
 *
 * Available select fields:
 * - assignedBy
 * - assignedDateTime
 * - orderHint
 */
class PlannerAssignmentQueryOptions extends QueryOptions
{
    public const FIELD_ASSIGNED_BY = 'assignedBy';
    public const FIELD_ASSIGNED_DATE_TIME = 'assignedDateTime';
    public const FIELD_ORDER_HINT = 'orderHint';

    /**
     * Select specific PlannerAssignment properties
     * 
     * @param array<string> $select Use PlannerAssignmentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
