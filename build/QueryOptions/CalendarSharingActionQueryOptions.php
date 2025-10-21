<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CalendarSharingAction resources
 *
 * Available select fields:
 */
class CalendarSharingActionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CalendarSharingAction
     */

    /**
     * Select specific CalendarSharingAction properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
