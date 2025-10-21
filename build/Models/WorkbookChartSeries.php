<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartSeries
 */
class WorkbookChartSeries
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The name of a series in a chart. */
        public ?string $name = null,
        /** The formatting of a chart series, which includes fill and line formatting. Read-only. */
        public ?WorkbookChartSeriesFormat $format = null,
        /** A collection of all points in the series. Read-only. */
        public array $points = []
    ) {}
}
