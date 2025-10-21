<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookRange
 */
class WorkbookRange
{
    public function __construct(
        /** Represents the range reference in A1-style. Address value contains the Sheet reference (for example, Sheet1!A1:B4). Read-only. */
        public ?string $address = null,
        /** Represents range reference for the specified range in the language of the user. Read-only. */
        public ?string $addressLocal = null,
        /** Number of cells in the range. Read-only. */
        public ?float $cellCount = null,
        /** Represents the total number of columns in the range. Read-only. */
        public ?float $columnCount = null,
        /** Indicates whether all columns of the current range are hidden. */
        public ?bool $columnHidden = null,
        /** Represents the column number of the first cell in the range. Zero-indexed. Read-only. */
        public ?float $columnIndex = null,
        /** Represents the formula in A1-style notation. */
        public ?string $formulas = null,
        /** Represents the formula in A1-style notation, in the user''s language and number-formatting locale.  For example, the English ''=SUM(A1, 1.5)'' formula would become ''=SUMME(A1; 1,5)'' in German. */
        public ?string $formulasLocal = null,
        /** Represents the formula in R1C1-style notation. */
        public ?string $formulasR1C1 = null,
        /** Represents if all cells of the current range are hidden. Read-only. */
        public ?bool $hidden = null,
        /** Represents Excel's number format code for the given cell. */
        public ?string $numberFormat = null,
        /** Returns the total number of rows in the range. Read-only. */
        public ?float $rowCount = null,
        /** Indicates whether all rows of the current range are hidden. */
        public ?bool $rowHidden = null,
        /** Returns the row number of the first cell in the range. Zero-indexed. Read-only. */
        public ?float $rowIndex = null,
        /** Text values of the specified range. The Text value doesn''t depend on the cell width. The # sign substitution that happens in Excel UI doesn''t affect the text value returned by the API. Read-only. */
        public ?string $text = null,
        /** Represents the raw values of the specified range. The data returned can be of type string, number, or a Boolean. Cell that contains an error returns the error string. */
        public ?string $values = null,
        /** Represents the type of data of each cell. The possible values are: Unknown, Empty, String, Integer, Double, Boolean, Error. Read-only. */
        public ?string $valueTypes = null,
        /** Returns a format object, encapsulating the range''s font, fill, borders, alignment, and other properties. Read-only. */
        public ?string $format = null,
        /** The worksheet containing the current range. Read-only. */
        public ?string $sort = null,
        /** The worksheet containing the current range. Read-only. */
        public ?string $worksheet = null
    ) {}
}
