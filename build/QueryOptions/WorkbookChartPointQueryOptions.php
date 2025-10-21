<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartPoint resources
 *
 * Available select fields:
 */
class WorkbookChartPointQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookChartPoint
     */

    /**
     * Select specific WorkbookChartPoint properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
