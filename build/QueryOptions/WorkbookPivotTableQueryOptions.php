<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookPivotTable resources
 *
 * Available select fields:
 */
class WorkbookPivotTableQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookPivotTable
     */

    /**
     * Select specific WorkbookPivotTable properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
