<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookTable resources
 *
 * Available select fields:
 * - highlightFirstColumn
 * - highlightLastColumn
 * - legacyId
 * - name
 * - showBandedColumns
 * - showBandedRows
 * - showFilterButton
 * - showHeaders
 * - showTotals
 * - style
 * - columns
 * - rows
 * - sort
 * - worksheet
 */
class WorkbookTableQueryOptions extends QueryOptions
{
    public const FIELD_HIGHLIGHT_FIRST_COLUMN = 'highlightFirstColumn';
    public const FIELD_HIGHLIGHT_LAST_COLUMN = 'highlightLastColumn';
    public const FIELD_LEGACY_ID = 'legacyId';
    public const FIELD_NAME = 'name';
    public const FIELD_SHOW_BANDED_COLUMNS = 'showBandedColumns';
    public const FIELD_SHOW_BANDED_ROWS = 'showBandedRows';
    public const FIELD_SHOW_FILTER_BUTTON = 'showFilterButton';
    public const FIELD_SHOW_HEADERS = 'showHeaders';
    public const FIELD_SHOW_TOTALS = 'showTotals';
    public const FIELD_STYLE = 'style';
    public const FIELD_COLUMNS = 'columns';
    public const FIELD_ROWS = 'rows';
    public const FIELD_SORT = 'sort';
    public const FIELD_WORKSHEET = 'worksheet';

    /**
     * Select specific WorkbookTable properties
     * 
     * @param array<string> $select Use WorkbookTableQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
