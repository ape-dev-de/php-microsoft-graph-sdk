<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ScheduleChangeState resources
 *
 * Available select fields:
 */
class ScheduleChangeStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ScheduleChangeState
     */

    /**
     * Select specific ScheduleChangeState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
