<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartGridlines
 */
class WorkbookChartGridlines
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Indicates whether the axis gridlines are visible. */
        public ?bool $visible = null,
        /** Represents the formatting of chart gridlines. Read-only. */
        public ?WorkbookChartGridlinesFormat $format = null
    ) {}
}
