<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CalendarColor resources
 *
 * Available select fields:
 */
class CalendarColorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CalendarColor
     */

    /**
     * Select specific CalendarColor properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
