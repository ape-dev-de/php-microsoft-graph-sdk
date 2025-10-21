<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ScheduleChangeRequest resources
 *
 * Available select fields:
 */
class ScheduleChangeRequestQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ScheduleChangeRequest
     */

    /**
     * Select specific ScheduleChangeRequest properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
