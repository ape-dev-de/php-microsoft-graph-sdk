<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookWorksheetProtectionOptions resources
 *
 * Available select fields:
 * - allowAutoFilter
 * - allowDeleteColumns
 * - allowDeleteRows
 * - allowFormatCells
 * - allowFormatColumns
 * - allowFormatRows
 * - allowInsertColumns
 * - allowInsertHyperlinks
 * - allowInsertRows
 * - allowPivotTables
 * - allowSort
 */
class WorkbookWorksheetProtectionOptionsQueryOptions extends QueryOptions
{
    public const FIELD_ALLOW_AUTO_FILTER = 'allowAutoFilter';
    public const FIELD_ALLOW_DELETE_COLUMNS = 'allowDeleteColumns';
    public const FIELD_ALLOW_DELETE_ROWS = 'allowDeleteRows';
    public const FIELD_ALLOW_FORMAT_CELLS = 'allowFormatCells';
    public const FIELD_ALLOW_FORMAT_COLUMNS = 'allowFormatColumns';
    public const FIELD_ALLOW_FORMAT_ROWS = 'allowFormatRows';
    public const FIELD_ALLOW_INSERT_COLUMNS = 'allowInsertColumns';
    public const FIELD_ALLOW_INSERT_HYPERLINKS = 'allowInsertHyperlinks';
    public const FIELD_ALLOW_INSERT_ROWS = 'allowInsertRows';
    public const FIELD_ALLOW_PIVOT_TABLES = 'allowPivotTables';
    public const FIELD_ALLOW_SORT = 'allowSort';

    /**
     * Select specific WorkbookWorksheetProtectionOptions properties
     * 
     * @param array<string> $select Use WorkbookWorksheetProtectionOptionsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
