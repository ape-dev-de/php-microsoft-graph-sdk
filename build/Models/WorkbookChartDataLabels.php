<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartDataLabels
 */
class WorkbookChartDataLabels
{
    public function __construct(
        /** DataLabelPosition value that represents the position of the data label. The possible values are: None, Center, InsideEnd, InsideBase, OutsideEnd, Left, Right, Top, Bottom, BestFit, Callout. */
        public ?string $position = null,
        /** String that represents the separator used for the data labels on a chart. */
        public ?string $separator = null,
        /** Boolean value that represents whether the data label bubble size is visible. */
        public ?bool $showBubbleSize = null,
        /** Boolean value that represents whether the data label category name is visible. */
        public ?bool $showCategoryName = null,
        /** Boolean value that represents whether the data label legend key is visible. */
        public ?bool $showLegendKey = null,
        /** Boolean value that represents whether the data label percentage is visible. */
        public ?bool $showPercentage = null,
        /** Boolean value that represents whether the data label series name is visible. */
        public ?bool $showSeriesName = null,
        /** Boolean value that represents whether the data label value is visible. */
        public ?bool $showValue = null,
        /** Represents the format of chart data labels, which includes fill and font formatting. Read-only. */
        public ?string $format = null
    ) {}
}
