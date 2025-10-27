<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookRange
 */
class WorkbookRange
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Represents the range reference in A1-style. Address value contains the Sheet reference (for example, Sheet1!A1:B4). Read-only. */
    public ?string $address = null;

    /** Represents range reference for the specified range in the language of the user. Read-only. */
    public ?string $addressLocal = null;

    /** Number of cells in the range. Read-only. */
    public ?float $cellCount = null;

    /** Represents the total number of columns in the range. Read-only. */
    public ?float $columnCount = null;

    /** Indicates whether all columns of the current range are hidden. */
    public ?bool $columnHidden = null;

    /** Represents the column number of the first cell in the range. Zero-indexed. Read-only. */
    public ?float $columnIndex = null;

    /** Represents the formula in A1-style notation. */
    public ?string $formulas = null;

    /** Represents the formula in A1-style notation, in the user's language and number-formatting locale.  For example, the English '=SUM(A1, 1.5)' formula would become '=SUMME(A1; 1,5)' in German. */
    public ?string $formulasLocal = null;

    /** Represents the formula in R1C1-style notation. */
    public ?string $formulasR1C1 = null;

    /** Represents if all cells of the current range are hidden. Read-only. */
    public ?bool $hidden = null;

    /** Represents Excel's number format code for the given cell. */
    public ?string $numberFormat = null;

    /** Returns the total number of rows in the range. Read-only. */
    public ?float $rowCount = null;

    /** Indicates whether all rows of the current range are hidden. */
    public ?bool $rowHidden = null;

    /** Returns the row number of the first cell in the range. Zero-indexed. Read-only. */
    public ?float $rowIndex = null;

    /** Text values of the specified range. The Text value doesn't depend on the cell width. The # sign substitution that happens in Excel UI doesn't affect the text value returned by the API. Read-only. */
    public ?string $text = null;

    /** Represents the raw values of the specified range. The data returned can be of type string, number, or a Boolean. Cell that contains an error returns the error string. */
    public ?string $values = null;

    /** Represents the type of data of each cell. The possible values are: Unknown, Empty, String, Integer, Double, Boolean, Error. Read-only. */
    public ?string $valueTypes = null;

    /** 
     * Returns a format object, encapsulating the range's font, fill, borders, alignment, and other properties. Read-only.
     * @var WorkbookRangeFormat|\stdClass|null
     */
    public WorkbookRangeFormat|\stdClass|null $format = null;

    /** 
     * The worksheet containing the current range. Read-only.
     * @var WorkbookRangeSort|\stdClass|null
     */
    public WorkbookRangeSort|\stdClass|null $sort = null;

    /** 
     * The worksheet containing the current range. Read-only.
     * @var WorkbookWorksheet|\stdClass|null
     */
    public WorkbookWorksheet|\stdClass|null $worksheet = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['address'])) {
            $this->address = $data['address'];
        }
        if (isset($data['addressLocal'])) {
            $this->addressLocal = $data['addressLocal'];
        }
        if (isset($data['cellCount'])) {
            $this->cellCount = is_numeric($data['cellCount']) ? (float)$data['cellCount'] : $data['cellCount'];
        }
        if (isset($data['columnCount'])) {
            $this->columnCount = is_numeric($data['columnCount']) ? (float)$data['columnCount'] : $data['columnCount'];
        }
        if (isset($data['columnHidden'])) {
            $this->columnHidden = is_bool($data['columnHidden']) ? $data['columnHidden'] : (bool)$data['columnHidden'];
        }
        if (isset($data['columnIndex'])) {
            $this->columnIndex = is_numeric($data['columnIndex']) ? (float)$data['columnIndex'] : $data['columnIndex'];
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
        if (isset($data['hidden'])) {
            $this->hidden = is_bool($data['hidden']) ? $data['hidden'] : (bool)$data['hidden'];
        }
        if (isset($data['numberFormat'])) {
            $this->numberFormat = $data['numberFormat'];
        }
        if (isset($data['rowCount'])) {
            $this->rowCount = is_numeric($data['rowCount']) ? (float)$data['rowCount'] : $data['rowCount'];
        }
        if (isset($data['rowHidden'])) {
            $this->rowHidden = is_bool($data['rowHidden']) ? $data['rowHidden'] : (bool)$data['rowHidden'];
        }
        if (isset($data['rowIndex'])) {
            $this->rowIndex = is_numeric($data['rowIndex']) ? (float)$data['rowIndex'] : $data['rowIndex'];
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
        if (isset($data['format'])) {
            $this->format = is_array($data['format']) ? new WorkbookRangeFormat($data['format']) : $data['format'];
        }
        if (isset($data['sort'])) {
            $this->sort = is_array($data['sort']) ? new WorkbookRangeSort($data['sort']) : $data['sort'];
        }
        if (isset($data['worksheet'])) {
            $this->worksheet = is_array($data['worksheet']) ? new WorkbookWorksheet($data['worksheet']) : $data['worksheet'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
