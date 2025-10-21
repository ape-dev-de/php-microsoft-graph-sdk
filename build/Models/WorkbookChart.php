<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChart
 */
class WorkbookChart
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Represents the height, in points, of the chart object. */
        public ?string $height = null,
        /** The distance, in points, from the left side of the chart to the worksheet origin. */
        public ?string $left = null,
        /** Represents the name of a chart object. */
        public ?string $name = null,
        /** Represents the distance, in points, from the top edge of the object to the top of row 1 (on a worksheet) or the top of the chart area (on a chart). */
        public ?string $top = null,
        /** Represents the width, in points, of the chart object. */
        public ?string $width = null,
        /** Represents chart axes. Read-only. */
        public ?string $axes = null,
        /** Represents the data labels on the chart. Read-only. */
        public ?string $dataLabels = null,
        /** Encapsulates the format properties for the chart area. Read-only. */
        public ?string $format = null,
        /** Represents the legend for the chart. Read-only. */
        public ?string $legend = null,
        /** Represents either a single series or collection of series in the chart. Read-only. */
        public array $series = [],
        /** Represents the title of the specified chart, including the text, visibility, position and formatting of the title. Read-only. */
        public ?string $title = null,
        /** The worksheet containing the current chart. Read-only. */
        public ?string $worksheet = null
    ) {}
}
