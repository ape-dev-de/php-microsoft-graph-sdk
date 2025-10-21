<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WeeklySchedule resources
 *
 * Available select fields:
 */
class WeeklyScheduleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WeeklySchedule
     */

    /**
     * Select specific WeeklySchedule properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
