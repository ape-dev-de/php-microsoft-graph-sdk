<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartSeries resources
 *
 * Available select fields:
 */
class WorkbookChartSeriesQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookChartSeries
     */

    /**
     * Select specific WorkbookChartSeries properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
