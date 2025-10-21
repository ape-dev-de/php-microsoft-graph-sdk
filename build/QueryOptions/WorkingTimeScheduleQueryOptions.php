<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkingTimeSchedule resources
 *
 * Available select fields:
 */
class WorkingTimeScheduleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkingTimeSchedule
     */

    /**
     * Select specific WorkingTimeSchedule properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
