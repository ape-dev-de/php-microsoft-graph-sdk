<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookRangeView
 */
class WorkbookRangeView
{
    /**
     * The cell addresses.
     */
    private ?string $cellAddresses;

    /**
     * The number of visible columns. Read-only.
     */
    private ?float $columnCount;

    /**
     * The formula in A1-style notation.
     */
    private ?string $formulas;

    /**
     * The formula in A1-style notation, in the user''s language and number-formatting locale. For example, the English ''=SUM(A1, 1.5)'' formula would become ''=SUMME(A1; 1,5)'' in German.
     */
    private ?string $formulasLocal;

    /**
     * Represents the formula in R1C1-style notation.
     */
    private ?string $formulasR1C1;

    /**
     * The index of the range.
     */
    private ?float $index;

    /**
     * Excel's number format code for the given cell. Read-only.
     */
    private ?string $numberFormat;

    /**
     * The number of visible rows. Read-only.
     */
    private ?float $rowCount;

    /**
     * The text values of the specified range. The Text value won''t depend on the cell width. The # sign substitution that happens in Excel UI won''t affect the text value returned by the API. Read-only.
     */
    private ?string $text;

    /**
     * The raw values of the specified range view. The data returned could be of type string, number, or a Boolean. Cell that contains an error returns the error string.
     */
    private ?string $values;

    /**
     * The type of data of each cell. Read-only. The possible values are: Unknown, Empty, String, Integer, Double, Boolean, Error.
     */
    private ?string $valueTypes;

    /**
     * The collection of range views associated with the range. Read-only. Read-only.
     */
    private ?string $rows;

    public function getCellAddresses(): ?string
    {
        return $this->cellAddresses;
    }

    public function setCellAddresses(?string $cellAddresses): self
    {
        $this->cellAddresses = $cellAddresses;
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

    public function getIndex(): ?float
    {
        return $this->index;
    }

    public function setIndex(?float $index): self
    {
        $this->index = $index;
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

    public function getRows(): ?string
    {
        return $this->rows;
    }

    public function setRows(?string $rows): self
    {
        $this->rows = $rows;
        return $this;
    }

}
