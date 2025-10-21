<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartDataLabelFormat
 */
class WorkbookChartDataLabelFormat
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Represents the fill format of the current chart data label. Read-only. */
        public ?string $fill = null,
        /** Represents the font attributes (font name, font size, color, etc.) for a chart data label. Read-only. */
        public ?string $font = null
    ) {}
}
