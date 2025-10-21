<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SynchronizationScheduleState resources
 *
 * Available select fields:
 */
class SynchronizationScheduleStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SynchronizationScheduleState
     */

    /**
     * Select specific SynchronizationScheduleState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
