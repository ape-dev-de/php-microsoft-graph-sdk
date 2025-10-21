<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartGridlinesFormat
 */
class WorkbookChartGridlinesFormat
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Represents chart line formatting. Read-only. */
        public ?string $line = null
    ) {}
}
