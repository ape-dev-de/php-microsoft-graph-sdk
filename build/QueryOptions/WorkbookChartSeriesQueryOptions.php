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
    /**
     * Available select fields for WorkbookChartSeries
     */
    public const FIELD_NAME = 'name';
    public const FIELD_FORMAT = 'format';
    public const FIELD_POINTS = 'points';

    /**
     * Select specific WorkbookChartSeries properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
