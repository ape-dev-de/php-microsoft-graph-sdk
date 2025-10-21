<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartAxis
 */
class WorkbookChartAxis
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Represents the interval between two major tick marks. Can be set to a numeric value or an empty string.  The returned value is always a number. */
        public ?string $majorUnit = null,
        /** Represents the maximum value on the value axis.  Can be set to a numeric value or an empty string (for automatic axis values).  The returned value is always a number. */
        public ?string $maximum = null,
        /** Represents the minimum value on the value axis. Can be set to a numeric value or an empty string (for automatic axis values).  The returned value is always a number. */
        public ?string $minimum = null,
        /** Represents the interval between two minor tick marks. 'Can be set to a numeric value or an empty string (for automatic axis values). The returned value is always a number. */
        public ?string $minorUnit = null,
        /** Represents the formatting of a chart object, which includes line and font formatting. Read-only. */
        public ?WorkbookChartAxisFormat $format = null,
        /** Returns a gridlines object that represents the major gridlines for the specified axis. Read-only. */
        public ?WorkbookChartGridlines $majorGridlines = null,
        /** Returns a Gridlines object that represents the minor gridlines for the specified axis. Read-only. */
        public ?WorkbookChartGridlines $minorGridlines = null,
        /** Represents the axis title. Read-only. */
        public ?WorkbookChartAxisTitle $title = null
    ) {}
}
