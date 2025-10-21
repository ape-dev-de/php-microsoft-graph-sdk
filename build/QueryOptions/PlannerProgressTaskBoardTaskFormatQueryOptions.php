<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerProgressTaskBoardTaskFormat resources
 *
 * Available select fields:
 * - orderHint
 */
class PlannerProgressTaskBoardTaskFormatQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PlannerProgressTaskBoardTaskFormat
     */
    public const FIELD_ORDER_HINT = 'orderHint';

    /**
     * Select specific PlannerProgressTaskBoardTaskFormat properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
