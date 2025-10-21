<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TimeOffItem resources
 *
 * Available select fields:
 */
class TimeOffItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TimeOffItem
     */

    /**
     * Select specific TimeOffItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
