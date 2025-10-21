<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Calendar resources
 *
 * Available select fields:
 */
class CalendarQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Calendar
     */

    /**
     * Select specific Calendar properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
