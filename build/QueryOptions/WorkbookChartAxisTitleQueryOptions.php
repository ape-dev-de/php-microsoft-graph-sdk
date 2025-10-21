<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartAxisTitle resources
 *
 * Available select fields:
 */
class WorkbookChartAxisTitleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookChartAxisTitle
     */

    /**
     * Select specific WorkbookChartAxisTitle properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
