<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartPoint
 */
class WorkbookChartPoint
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The value of a chart point. Read-only. */
        public ?string $value = null,
        /** The format properties of the chart point. Read-only. */
        public ?string $format = null
    ) {}
}
