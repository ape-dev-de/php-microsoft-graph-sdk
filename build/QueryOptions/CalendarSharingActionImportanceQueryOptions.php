<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CalendarSharingActionImportance resources
 *
 * Available select fields:
 */
class CalendarSharingActionImportanceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CalendarSharingActionImportance
     */

    /**
     * Select specific CalendarSharingActionImportance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
