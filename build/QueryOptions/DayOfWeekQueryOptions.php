<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DayOfWeek resources
 *
 * Available select fields:
 */
class DayOfWeekQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DayOfWeek
     */

    /**
     * Select specific DayOfWeek properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
