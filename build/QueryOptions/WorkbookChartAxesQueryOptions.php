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
    public const FIELD_CATEGORY_AXIS = 'categoryAxis';
    public const FIELD_SERIES_AXIS = 'seriesAxis';
    public const FIELD_VALUE_AXIS = 'valueAxis';

    /**
     * Select specific WorkbookChartAxes properties
     * 
     * @param array<string> $select Use WorkbookChartAxesQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
