<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartSeries resources
 *
 * Available select fields:
 * - name
 * - format
 * - points
 */
class WorkbookChartSeriesQueryOptions extends QueryOptions
{
    public const FIELD_NAME = 'name';
    public const FIELD_FORMAT = 'format';
    public const FIELD_POINTS = 'points';

    /**
     * Select specific WorkbookChartSeries properties
     * 
     * @param array<string> $select Use WorkbookChartSeriesQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
