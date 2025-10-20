<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookRange resources
 *
 * Available select fields:
 * - address
 * - addressLocal
 * - cellCount
 * - columnCount
 * - columnHidden
 * - columnIndex
 * - formulas
 * - formulasLocal
 * - formulasR1C1
 * - hidden
 * - numberFormat
 * - rowCount
 * - rowHidden
 * - rowIndex
 * - text
 * - values
 * - valueTypes
 * - format
 * - sort
 * - worksheet
 */
class WorkbookRangeQueryOptions extends QueryOptions
{
    public const FIELD_ADDRESS = 'address';
    public const FIELD_ADDRESS_LOCAL = 'addressLocal';
    public const FIELD_CELL_COUNT = 'cellCount';
    public const FIELD_COLUMN_COUNT = 'columnCount';
    public const FIELD_COLUMN_HIDDEN = 'columnHidden';
    public const FIELD_COLUMN_INDEX = 'columnIndex';
    public const FIELD_FORMULAS = 'formulas';
    public const FIELD_FORMULAS_LOCAL = 'formulasLocal';
    public const FIELD_FORMULAS_R1C1 = 'formulasR1C1';
    public const FIELD_HIDDEN = 'hidden';
    public const FIELD_NUMBER_FORMAT = 'numberFormat';
    public const FIELD_ROW_COUNT = 'rowCount';
    public const FIELD_ROW_HIDDEN = 'rowHidden';
    public const FIELD_ROW_INDEX = 'rowIndex';
    public const FIELD_TEXT = 'text';
    public const FIELD_VALUES = 'values';
    public const FIELD_VALUE_TYPES = 'valueTypes';
    public const FIELD_FORMAT = 'format';
    public const FIELD_SORT = 'sort';
    public const FIELD_WORKSHEET = 'worksheet';

    /**
     * Select specific WorkbookRange properties
     * 
     * @param array<string> $select Use WorkbookRangeQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
