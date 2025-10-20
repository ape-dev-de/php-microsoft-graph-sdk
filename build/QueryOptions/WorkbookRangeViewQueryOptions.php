<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookRangeView resources
 *
 * Available select fields:
 * - cellAddresses
 * - columnCount
 * - formulas
 * - formulasLocal
 * - formulasR1C1
 * - index
 * - numberFormat
 * - rowCount
 * - text
 * - values
 * - valueTypes
 * - rows
 */
class WorkbookRangeViewQueryOptions extends QueryOptions
{
    public const FIELD_CELL_ADDRESSES = 'cellAddresses';
    public const FIELD_COLUMN_COUNT = 'columnCount';
    public const FIELD_FORMULAS = 'formulas';
    public const FIELD_FORMULAS_LOCAL = 'formulasLocal';
    public const FIELD_FORMULAS_R1C1 = 'formulasR1C1';
    public const FIELD_INDEX = 'index';
    public const FIELD_NUMBER_FORMAT = 'numberFormat';
    public const FIELD_ROW_COUNT = 'rowCount';
    public const FIELD_TEXT = 'text';
    public const FIELD_VALUES = 'values';
    public const FIELD_VALUE_TYPES = 'valueTypes';
    public const FIELD_ROWS = 'rows';

    /**
     * Select specific WorkbookRangeView properties
     * 
     * @param array<string> $select Use WorkbookRangeViewQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
