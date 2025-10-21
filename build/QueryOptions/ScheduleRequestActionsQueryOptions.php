<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ScheduleRequestActions resources
 *
 * Available select fields:
 */
class ScheduleRequestActionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ScheduleRequestActions
     */

    /**
     * Select specific ScheduleRequestActions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
