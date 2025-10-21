<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CalendarSharingMessage resources
 *
 * Available select fields:
 */
class CalendarSharingMessageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CalendarSharingMessage
     */

    /**
     * Select specific CalendarSharingMessage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
