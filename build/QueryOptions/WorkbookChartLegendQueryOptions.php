<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartLegend resources
 *
 * Available select fields:
 */
class WorkbookChartLegendQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookChartLegend
     */

    /**
     * Select specific WorkbookChartLegend properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
