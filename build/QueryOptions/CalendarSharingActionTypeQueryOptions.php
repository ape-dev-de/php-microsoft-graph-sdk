<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CalendarSharingActionType resources
 *
 * Available select fields:
 */
class CalendarSharingActionTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CalendarSharingActionType
     */

    /**
     * Select specific CalendarSharingActionType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
