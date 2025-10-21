<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartLegend
 */
class WorkbookChartLegend
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Indicates whether the chart legend should overlap with the main body of the chart. */
        public ?bool $overlay = null,
        /** Represents the position of the legend on the chart. The possible values are: Top, Bottom, Left, Right, Corner, Custom. */
        public ?string $position = null,
        /** Indicates whether the chart legend is visible. */
        public ?bool $visible = null,
        /** Represents the formatting of a chart legend, which includes fill and font formatting. Read-only. */
        public ?string $format = null
    ) {}
}
