<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChart resources
 *
 * Available select fields:
 */
class WorkbookChartQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookChart
     */

    /**
     * Select specific WorkbookChart properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
