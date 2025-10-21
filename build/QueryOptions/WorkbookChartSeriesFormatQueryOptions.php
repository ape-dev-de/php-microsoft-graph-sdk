<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartSeriesFormat resources
 *
 * Available select fields:
 * - fill
 * - line
 */
class WorkbookChartSeriesFormatQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookChartSeriesFormat
     */
    public const FIELD_FILL = 'fill';
    public const FIELD_LINE = 'line';

    /**
     * Select specific WorkbookChartSeriesFormat properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
