<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartAxisFormat
 */
class WorkbookChartAxisFormat
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Represents the font attributes (font name, font size, color, etc.) for a chart axis element. Read-only. */
        public ?WorkbookChartFont $font = null,
        /** Represents chart line formatting. Read-only. */
        public ?WorkbookChartLineFormat $line = null
    ) {}
}
