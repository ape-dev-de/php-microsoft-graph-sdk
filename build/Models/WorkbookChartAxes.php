<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartAxes
 */
class WorkbookChartAxes
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Represents the category axis in a chart. Read-only. */
        public ?WorkbookChartAxis $categoryAxis = null,
        /** Represents the series axis of a 3-dimensional chart. Read-only. */
        public ?WorkbookChartAxis $seriesAxis = null,
        /** Represents the value axis in an axis. Read-only. */
        public ?WorkbookChartAxis $valueAxis = null
    ) {}
}
