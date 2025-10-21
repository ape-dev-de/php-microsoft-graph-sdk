<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookPivotTable
 */
class WorkbookPivotTable
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The name of the pivot table. */
        public ?string $name = null,
        /** The worksheet that contains the current pivot table. Read-only. */
        public ?WorkbookWorksheet $worksheet = null
    ) {}
}
