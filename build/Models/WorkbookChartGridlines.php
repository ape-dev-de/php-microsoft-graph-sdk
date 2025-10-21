<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartGridlines
 */
class WorkbookChartGridlines
{
    public function __construct(
        /** Indicates whether the axis gridlines are visible. */
        public ?bool $visible = null,
        /** Represents the formatting of chart gridlines. Read-only. */
        public ?string $format = null
    ) {}
}
