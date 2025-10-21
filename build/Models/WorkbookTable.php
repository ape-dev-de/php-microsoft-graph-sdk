<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookTable
 */
class WorkbookTable
{
    public function __construct(
        /** Indicates whether the first column contains special formatting. */
        public ?bool $highlightFirstColumn = null,
        /** Indicates whether the last column contains special formatting. */
        public ?bool $highlightLastColumn = null,
        /** A legacy identifier used in older Excel clients. The value of the identifier remains the same even when the table is renamed. This property should be interpreted as an opaque string value and shouldn't be parsed to any other type. Read-only. */
        public ?string $legacyId = null,
        /** The name of the table. */
        public ?string $name = null,
        /** Indicates whether the columns show banded formatting in which odd columns are highlighted differently from even ones to make reading the table easier. */
        public ?bool $showBandedColumns = null,
        /** Indicates whether the rows show banded formatting in which odd rows are highlighted differently from even ones to make reading the table easier. */
        public ?bool $showBandedRows = null,
        /** Indicates whether the filter buttons are visible at the top of each column header. Setting this is only allowed if the table contains a header row. */
        public ?bool $showFilterButton = null,
        /** Indicates whether the header row is visible or not. This value can be set to show or remove the header row. */
        public ?bool $showHeaders = null,
        /** Indicates whether the total row is visible or not. This value can be set to show or remove the total row. */
        public ?bool $showTotals = null,
        /** A constant value that represents the Table style. Possible values are: TableStyleLight1 through TableStyleLight21, TableStyleMedium1 through TableStyleMedium28, TableStyleStyleDark1 through TableStyleStyleDark11. A custom user-defined style present in the workbook can also be specified. */
        public ?string $style = null,
        /** The list of all the columns in the table. Read-only. */
        public array $columns = [],
        /** The list of all the rows in the table. Read-only. */
        public array $rows = [],
        /** The sorting for the table. Read-only. */
        public ?string $sort = null,
        /** The worksheet containing the current table. Read-only. */
        public ?string $worksheet = null
    ) {}
}
