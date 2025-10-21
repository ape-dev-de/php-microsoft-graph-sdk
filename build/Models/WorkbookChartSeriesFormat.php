<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartSeriesFormat
 */
class WorkbookChartSeriesFormat
{
    public function __construct(
        /** Represents the fill format of a chart series, which includes background formatting information. Read-only. */
        public ?string $fill = null,
        /** Represents line formatting. Read-only. */
        public ?string $line = null
    ) {}
}
