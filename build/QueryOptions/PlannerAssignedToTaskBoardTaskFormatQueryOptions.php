<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerAssignedToTaskBoardTaskFormat resources
 *
 * Available select fields:
 * - orderHintsByAssignee
 * - unassignedOrderHint
 */
class PlannerAssignedToTaskBoardTaskFormatQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PlannerAssignedToTaskBoardTaskFormat
     */
    public const FIELD_ORDER_HINTS_BY_ASSIGNEE = 'orderHintsByAssignee';
    public const FIELD_UNASSIGNED_ORDER_HINT = 'unassignedOrderHint';

    /**
     * Select specific PlannerAssignedToTaskBoardTaskFormat properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
