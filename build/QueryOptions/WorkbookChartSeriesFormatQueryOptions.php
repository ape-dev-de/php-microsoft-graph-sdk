<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartSeriesFormat resources
 *
 * Available select fields:
 */
class WorkbookChartSeriesFormatQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookChartSeriesFormat
     */

    /**
     * Select specific WorkbookChartSeriesFormat properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
