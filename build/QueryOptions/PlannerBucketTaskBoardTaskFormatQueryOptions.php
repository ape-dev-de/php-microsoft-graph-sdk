<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerBucketTaskBoardTaskFormat resources
 *
 * Available select fields:
 * - orderHint
 */
class PlannerBucketTaskBoardTaskFormatQueryOptions extends QueryOptions
{
    public const FIELD_ORDER_HINT = 'orderHint';

    /**
     * Select specific PlannerBucketTaskBoardTaskFormat properties
     * 
     * @param array<string> $select Use PlannerBucketTaskBoardTaskFormatQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
