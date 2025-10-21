<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartDataLabelFormat resources
 *
 * Available select fields:
 */
class WorkbookChartDataLabelFormatQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookChartDataLabelFormat
     */

    /**
     * Select specific WorkbookChartDataLabelFormat properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
