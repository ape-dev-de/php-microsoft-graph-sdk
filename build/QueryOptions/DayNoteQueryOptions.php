<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DayNote resources
 *
 * Available select fields:
 */
class DayNoteQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DayNote
     */

    /**
     * Select specific DayNote properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
