<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookWorksheetProtectionOptions
 */
class WorkbookWorksheetProtectionOptions
{
    public function __construct(
        /** Indicates whether the worksheet protection option to allow the use of the autofilter feature is enabled. */
        public ?bool $allowAutoFilter = null,
        /** Indicates whether the worksheet protection option to allow deleting columns is enabled. */
        public ?bool $allowDeleteColumns = null,
        /** Indicates whether the worksheet protection option to allow deleting rows is enabled. */
        public ?bool $allowDeleteRows = null,
        /** Indicates whether the worksheet protection option to allow formatting cells is enabled. */
        public ?bool $allowFormatCells = null,
        /** Indicates whether the worksheet protection option to allow formatting columns is enabled. */
        public ?bool $allowFormatColumns = null,
        /** Indicates whether the worksheet protection option to allow formatting rows is enabled. */
        public ?bool $allowFormatRows = null,
        /** Indicates whether the worksheet protection option to allow inserting columns is enabled. */
        public ?bool $allowInsertColumns = null,
        /** Indicates whether the worksheet protection option to allow inserting hyperlinks is enabled. */
        public ?bool $allowInsertHyperlinks = null,
        /** Indicates whether the worksheet protection option to allow inserting rows is enabled. */
        public ?bool $allowInsertRows = null,
        /** Indicates whether the worksheet protection option to allow the use of the pivot table feature is enabled. */
        public ?bool $allowPivotTables = null,
        /** Indicates whether the worksheet protection option to allow the use of the sort feature is enabled. */
        public ?bool $allowSort = null
    ) {}
}
