<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartPointFormat
 */
class WorkbookChartPointFormat
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Represents the fill format of a chart, which includes background formatting information. Read-only. */
        public ?string $fill = null
    ) {}
}
