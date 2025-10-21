<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WeekIndex resources
 *
 * Available select fields:
 */
class WeekIndexQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WeekIndex
     */

    /**
     * Select specific WeekIndex properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
