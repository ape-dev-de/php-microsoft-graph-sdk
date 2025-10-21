<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartAreaFormat resources
 *
 * Available select fields:
 */
class WorkbookChartAreaFormatQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookChartAreaFormat
     */

    /**
     * Select specific WorkbookChartAreaFormat properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
