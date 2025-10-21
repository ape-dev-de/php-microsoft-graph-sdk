<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartAxes
 */
class WorkbookChartAxes
{
    public function __construct(
        /** Represents the category axis in a chart. Read-only. */
        public ?string $categoryAxis = null,
        /** Represents the series axis of a 3-dimensional chart. Read-only. */
        public ?string $seriesAxis = null,
        /** Represents the value axis in an axis. Read-only. */
        public ?string $valueAxis = null
    ) {}
}
