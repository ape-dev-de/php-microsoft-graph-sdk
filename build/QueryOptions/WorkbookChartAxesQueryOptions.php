<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartAxes resources
 *
 * Available select fields:
 * - categoryAxis
 * - seriesAxis
 * - valueAxis
 */
class WorkbookChartAxesQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookChartAxes
     */
    public const FIELD_CATEGORY_AXIS = 'categoryAxis';
    public const FIELD_SERIES_AXIS = 'seriesAxis';
    public const FIELD_VALUE_AXIS = 'valueAxis';

    /**
     * Select specific WorkbookChartAxes properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
