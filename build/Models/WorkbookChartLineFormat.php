<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartLineFormat
 */
class WorkbookChartLineFormat
{
    public function __construct(
        /** The HTML color code that represents the color of lines in the chart. */
        public ?string $color = null
    ) {}
}
