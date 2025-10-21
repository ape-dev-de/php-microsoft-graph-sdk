<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartAreaFormat
 */
class WorkbookChartAreaFormat
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Represents the fill format of an object, which includes background formatting information. Read-only. */
        public ?WorkbookChartFill $fill = null,
        /** Represents the font attributes (font name, font size, color, etc.) for the current object. Read-only. */
        public ?WorkbookChartFont $font = null
    ) {}
}
