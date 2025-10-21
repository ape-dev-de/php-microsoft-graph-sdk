<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartAxis resources
 *
 * Available select fields:
 */
class WorkbookChartAxisQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookChartAxis
     */

    /**
     * Select specific WorkbookChartAxis properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
