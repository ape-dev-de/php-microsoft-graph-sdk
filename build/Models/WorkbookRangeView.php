<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookRangeView
 */
class WorkbookRangeView
{
    public function __construct(
        /** The cell addresses. */
        public ?string $cellAddresses = null,
        /** The number of visible columns. Read-only. */
        public ?float $columnCount = null,
        /** The formula in A1-style notation. */
        public ?string $formulas = null,
        /** The formula in A1-style notation, in the user''s language and number-formatting locale. For example, the English ''=SUM(A1, 1.5)'' formula would become ''=SUMME(A1; 1,5)'' in German. */
        public ?string $formulasLocal = null,
        /** Represents the formula in R1C1-style notation. */
        public ?string $formulasR1C1 = null,
        /** The index of the range. */
        public ?float $index = null,
        /** Excel's number format code for the given cell. Read-only. */
        public ?string $numberFormat = null,
        /** The number of visible rows. Read-only. */
        public ?float $rowCount = null,
        /** The text values of the specified range. The Text value won''t depend on the cell width. The # sign substitution that happens in Excel UI won''t affect the text value returned by the API. Read-only. */
        public ?string $text = null,
        /** The raw values of the specified range view. The data returned could be of type string, number, or a Boolean. Cell that contains an error returns the error string. */
        public ?string $values = null,
        /** The type of data of each cell. Read-only. The possible values are: Unknown, Empty, String, Integer, Double, Boolean, Error. */
        public ?string $valueTypes = null,
        /** @var string[] The collection of range views associated with the range. Read-only. Read-only. */
        public array $rows = []
    ) {}
}
