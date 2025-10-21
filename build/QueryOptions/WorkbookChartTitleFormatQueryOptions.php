<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartTitleFormat resources
 *
 * Available select fields:
 */
class WorkbookChartTitleFormatQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookChartTitleFormat
     */

    /**
     * Select specific WorkbookChartTitleFormat properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
