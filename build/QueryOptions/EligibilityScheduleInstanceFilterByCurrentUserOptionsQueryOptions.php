<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EligibilityScheduleInstanceFilterByCurrentUserOptions resources
 *
 * Available select fields:
 */
class EligibilityScheduleInstanceFilterByCurrentUserOptionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EligibilityScheduleInstanceFilterByCurrentUserOptions
     */

    /**
     * Select specific EligibilityScheduleInstanceFilterByCurrentUserOptions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
