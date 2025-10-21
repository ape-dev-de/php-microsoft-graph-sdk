<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartAxisTitleFormat
 */
class WorkbookChartAxisTitleFormat
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Represents the font attributes, such as font name, font size, color, etc. of chart axis title object. Read-only. */
        public ?string $font = null
    ) {}
}
