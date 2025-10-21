<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CalendarPermission resources
 *
 * Available select fields:
 */
class CalendarPermissionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CalendarPermission
     */

    /**
     * Select specific CalendarPermission properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
