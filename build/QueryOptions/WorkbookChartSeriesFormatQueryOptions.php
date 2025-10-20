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
    public const FIELD_FILL = 'fill';
    public const FIELD_LINE = 'line';

    /**
     * Select specific WorkbookChartSeriesFormat properties
     * 
     * @param array<string> $select Use WorkbookChartSeriesFormatQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
