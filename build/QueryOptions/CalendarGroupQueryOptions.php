<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CalendarGroup resources
 *
 * Available select fields:
 */
class CalendarGroupQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CalendarGroup
     */

    /**
     * Select specific CalendarGroup properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
