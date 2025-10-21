<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EligibilityScheduleFilterByCurrentUserOptions resources
 *
 * Available select fields:
 */
class EligibilityScheduleFilterByCurrentUserOptionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EligibilityScheduleFilterByCurrentUserOptions
     */

    /**
     * Select specific EligibilityScheduleFilterByCurrentUserOptions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
