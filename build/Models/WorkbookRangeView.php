<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookRangeView
 */
class WorkbookRangeView
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The cell addresses. */
    public ?string $cellAddresses = null;

    /** The number of visible columns. Read-only. */
    public ?float $columnCount = null;

    /** The formula in A1-style notation. */
    public ?string $formulas = null;

    /** The formula in A1-style notation, in the user's language and number-formatting locale. For example, the English '=SUM(A1, 1.5)' formula would become '=SUMME(A1; 1,5)' in German. */
    public ?string $formulasLocal = null;

    /** Represents the formula in R1C1-style notation. */
    public ?string $formulasR1C1 = null;

    /** The index of the range. */
    public ?float $index = null;

    /** Excel's number format code for the given cell. Read-only. */
    public ?string $numberFormat = null;

    /** The number of visible rows. Read-only. */
    public ?float $rowCount = null;

    /** The text values of the specified range. The Text value won't depend on the cell width. The # sign substitution that happens in Excel UI won't affect the text value returned by the API. Read-only. */
    public ?string $text = null;

    /** The raw values of the specified range view. The data returned could be of type string, number, or a Boolean. Cell that contains an error returns the error string. */
    public ?string $values = null;

    /** The type of data of each cell. Read-only. The possible values are: Unknown, Empty, String, Integer, Double, Boolean, Error. */
    public ?string $valueTypes = null;

    /** 
     * The collection of range views associated with the range. Read-only. Read-only.
     * @var WorkbookRangeView[]
     */
    public array $rows = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['cellAddresses'])) {
            $this->cellAddresses = $data['cellAddresses'];
        }
        if (isset($data['columnCount'])) {
            $this->columnCount = $data['columnCount'];
        }
        if (isset($data['formulas'])) {
            $this->formulas = $data['formulas'];
        }
        if (isset($data['formulasLocal'])) {
            $this->formulasLocal = $data['formulasLocal'];
        }
        if (isset($data['formulasR1C1'])) {
            $this->formulasR1C1 = $data['formulasR1C1'];
        }
        if (isset($data['index'])) {
            $this->index = $data['index'];
        }
        if (isset($data['numberFormat'])) {
            $this->numberFormat = $data['numberFormat'];
        }
        if (isset($data['rowCount'])) {
            $this->rowCount = $data['rowCount'];
        }
        if (isset($data['text'])) {
            $this->text = $data['text'];
        }
        if (isset($data['values'])) {
            $this->values = $data['values'];
        }
        if (isset($data['valueTypes'])) {
            $this->valueTypes = $data['valueTypes'];
        }
        if (isset($data['rows'])) {
            $this->rows = $data['rows'];
        }
    }
}
