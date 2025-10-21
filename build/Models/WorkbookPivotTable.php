<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookPivotTable
 */
class WorkbookPivotTable
{
    public function __construct(
        /** The name of the pivot table. */
        public ?string $name = null,
        /** The worksheet that contains the current pivot table. Read-only. */
        public ?string $worksheet = null
    ) {}
}
