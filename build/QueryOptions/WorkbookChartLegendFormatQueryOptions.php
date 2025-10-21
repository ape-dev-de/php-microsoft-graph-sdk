<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartLegendFormat resources
 *
 * Available select fields:
 */
class WorkbookChartLegendFormatQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookChartLegendFormat
     */

    /**
     * Select specific WorkbookChartLegendFormat properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
