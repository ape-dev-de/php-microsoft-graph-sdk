<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookRange
 */
class WorkbookRange
{
    /**
     * Represents the range reference in A1-style. Address value contains the Sheet reference (for example, Sheet1!A1:B4). Read-only.
     */
    private ?string $address;

    /**
     * Represents range reference for the specified range in the language of the user. Read-only.
     */
    private ?string $addressLocal;

    /**
     * Number of cells in the range. Read-only.
     */
    private ?float $cellCount;

    /**
     * Represents the total number of columns in the range. Read-only.
     */
    private ?float $columnCount;

    /**
     * Indicates whether all columns of the current range are hidden.
     */
    private ?bool $columnHidden;

    /**
     * Represents the column number of the first cell in the range. Zero-indexed. Read-only.
     */
    private ?float $columnIndex;

    /**
     * Represents the formula in A1-style notation.
     */
    private ?string $formulas;

    /**
     * Represents the formula in A1-style notation, in the user''s language and number-formatting locale.  For example, the English ''=SUM(A1, 1.5)'' formula would become ''=SUMME(A1; 1,5)'' in German.
     */
    private ?string $formulasLocal;

    /**
     * Represents the formula in R1C1-style notation.
     */
    private ?string $formulasR1C1;

    /**
     * Represents if all cells of the current range are hidden. Read-only.
     */
    private ?bool $hidden;

    /**
     * Represents Excel's number format code for the given cell.
     */
    private ?string $numberFormat;

    /**
     * Returns the total number of rows in the range. Read-only.
     */
    private ?float $rowCount;

    /**
     * Indicates whether all rows of the current range are hidden.
     */
    private ?bool $rowHidden;

    /**
     * Returns the row number of the first cell in the range. Zero-indexed. Read-only.
     */
    private ?float $rowIndex;

    /**
     * Text values of the specified range. The Text value doesn''t depend on the cell width. The # sign substitution that happens in Excel UI doesn''t affect the text value returned by the API. Read-only.
     */
    private ?string $text;

    /**
     * Represents the raw values of the specified range. The data returned can be of type string, number, or a Boolean. Cell that contains an error returns the error string.
     */
    private ?string $values;

    /**
     * Represents the type of data of each cell. The possible values are: Unknown, Empty, String, Integer, Double, Boolean, Error. Read-only.
     */
    private ?string $valueTypes;

    /**
     * Returns a format object, encapsulating the range''s font, fill, borders, alignment, and other properties. Read-only.
     */
    private ?string $format;

    /**
     * The worksheet containing the current range. Read-only.
     */
    private ?string $sort;

    /**
     * The worksheet containing the current range. Read-only.
     */
    private ?string $worksheet;

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;
        return $this;
    }

    public function getAddressLocal(): ?string
    {
        return $this->addressLocal;
    }

    public function setAddressLocal(?string $addressLocal): self
    {
        $this->addressLocal = $addressLocal;
        return $this;
    }

    public function getCellCount(): ?float
    {
        return $this->cellCount;
    }

    public function setCellCount(?float $cellCount): self
    {
        $this->cellCount = $cellCount;
        return $this;
    }

    public function getColumnCount(): ?float
    {
        return $this->columnCount;
    }

    public function setColumnCount(?float $columnCount): self
    {
        $this->columnCount = $columnCount;
        return $this;
    }

    public function getColumnHidden(): ?bool
    {
        return $this->columnHidden;
    }

    public function setColumnHidden(?bool $columnHidden): self
    {
        $this->columnHidden = $columnHidden;
        return $this;
    }

    public function getColumnIndex(): ?float
    {
        return $this->columnIndex;
    }

    public function setColumnIndex(?float $columnIndex): self
    {
        $this->columnIndex = $columnIndex;
        return $this;
    }

    public function getFormulas(): ?string
    {
        return $this->formulas;
    }

    public function setFormulas(?string $formulas): self
    {
        $this->formulas = $formulas;
        return $this;
    }

    public function getFormulasLocal(): ?string
    {
        return $this->formulasLocal;
    }

    public function setFormulasLocal(?string $formulasLocal): self
    {
        $this->formulasLocal = $formulasLocal;
        return $this;
    }

    public function getFormulasR1C1(): ?string
    {
        return $this->formulasR1C1;
    }

    public function setFormulasR1C1(?string $formulasR1C1): self
    {
        $this->formulasR1C1 = $formulasR1C1;
        return $this;
    }

    public function getHidden(): ?bool
    {
        return $this->hidden;
    }

    public function setHidden(?bool $hidden): self
    {
        $this->hidden = $hidden;
        return $this;
    }

    public function getNumberFormat(): ?string
    {
        return $this->numberFormat;
    }

    public function setNumberFormat(?string $numberFormat): self
    {
        $this->numberFormat = $numberFormat;
        return $this;
    }

    public function getRowCount(): ?float
    {
        return $this->rowCount;
    }

    public function setRowCount(?float $rowCount): self
    {
        $this->rowCount = $rowCount;
        return $this;
    }

    public function getRowHidden(): ?bool
    {
        return $this->rowHidden;
    }

    public function setRowHidden(?bool $rowHidden): self
    {
        $this->rowHidden = $rowHidden;
        return $this;
    }

    public function getRowIndex(): ?float
    {
        return $this->rowIndex;
    }

    public function setRowIndex(?float $rowIndex): self
    {
        $this->rowIndex = $rowIndex;
        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;
        return $this;
    }

    public function getValues(): ?string
    {
        return $this->values;
    }

    public function setValues(?string $values): self
    {
        $this->values = $values;
        return $this;
    }

    public function getValueTypes(): ?string
    {
        return $this->valueTypes;
    }

    public function setValueTypes(?string $valueTypes): self
    {
        $this->valueTypes = $valueTypes;
        return $this;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(?string $format): self
    {
        $this->format = $format;
        return $this;
    }

    public function getSort(): ?string
    {
        return $this->sort;
    }

    public function setSort(?string $sort): self
    {
        $this->sort = $sort;
        return $this;
    }

    public function getWorksheet(): ?string
    {
        return $this->worksheet;
    }

    public function setWorksheet(?string $worksheet): self
    {
        $this->worksheet = $worksheet;
        return $this;
    }

}
