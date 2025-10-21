<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Schedule resources
 *
 * Available select fields:
 */
class ScheduleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Schedule
     */

    /**
     * Select specific Schedule properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
