<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookRangeSort resources
 *
 * Available select fields:
 */
class WorkbookRangeSortQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookRangeSort
     */

    /**
     * Select specific WorkbookRangeSort properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
