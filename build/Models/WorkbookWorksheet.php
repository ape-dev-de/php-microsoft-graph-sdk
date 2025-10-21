<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookWorksheet
 */
class WorkbookWorksheet
{
    public function __construct(
        /** The display name of the worksheet. */
        public ?string $name = null,
        /** The zero-based position of the worksheet within the workbook. */
        public ?float $position = null,
        /** The visibility of the worksheet. The possible values are: Visible, Hidden, VeryHidden. */
        public ?string $visibility = null,
        /** The list of charts that are part of the worksheet. Read-only. */
        public array $charts = [],
        /** The list of names that are associated with the worksheet. Read-only. */
        public array $names = [],
        /** The list of piot tables that are part of the worksheet. */
        public array $pivotTables = [],
        /** The sheet protection object for a worksheet. Read-only. */
        public ?string $protection = null,
        /** @var string[] The list of tables that are part of the worksheet. Read-only. */
        public array $tables = []
    ) {}
}
