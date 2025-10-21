<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartAxisFormat resources
 *
 * Available select fields:
 */
class WorkbookChartAxisFormatQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookChartAxisFormat
     */

    /**
     * Select specific WorkbookChartAxisFormat properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
