<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CalendarRoleType resources
 *
 * Available select fields:
 */
class CalendarRoleTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CalendarRoleType
     */

    /**
     * Select specific CalendarRoleType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
