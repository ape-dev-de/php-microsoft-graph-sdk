<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartLegendFormat
 */
class WorkbookChartLegendFormat
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Represents the fill format of an object, which includes background formating information. Read-only. */
        public ?string $fill = null,
        /** Represents the font attributes such as font name, font size, color, etc. of a chart legend. Read-only. */
        public ?string $font = null
    ) {}
}
