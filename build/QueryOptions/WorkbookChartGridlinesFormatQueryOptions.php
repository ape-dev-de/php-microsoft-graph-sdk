<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartGridlinesFormat resources
 *
 * Available select fields:
 * - line
 */
class WorkbookChartGridlinesFormatQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookChartGridlinesFormat
     */
    public const FIELD_LINE = 'line';

    /**
     * Select specific WorkbookChartGridlinesFormat properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
