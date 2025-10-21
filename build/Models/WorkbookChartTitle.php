<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartTitle
 */
class WorkbookChartTitle
{
    public function __construct(
        /** Indicates whether the chart title will overlay the chart or not. */
        public ?bool $overlay = null,
        /** The title text of the chart. */
        public ?string $text = null,
        /** Indicates whether the chart title is visible. */
        public ?bool $visible = null,
        /** The formatting of a chart title, which includes fill and font formatting. Read-only. */
        public ?string $format = null
    ) {}
}
