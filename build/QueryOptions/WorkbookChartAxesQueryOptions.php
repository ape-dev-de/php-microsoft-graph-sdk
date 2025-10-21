<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartAxes resources
 *
 * Available select fields:
 */
class WorkbookChartAxesQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookChartAxes
     */

    /**
     * Select specific WorkbookChartAxes properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
