<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookTableSort resources
 *
 * Available select fields:
 */
class WorkbookTableSortQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookTableSort
     */

    /**
     * Select specific WorkbookTableSort properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
