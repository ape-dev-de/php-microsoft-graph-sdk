<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartDataLabels resources
 *
 * Available select fields:
 */
class WorkbookChartDataLabelsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookChartDataLabels
     */

    /**
     * Select specific WorkbookChartDataLabels properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
