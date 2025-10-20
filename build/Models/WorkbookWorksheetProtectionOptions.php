<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookWorksheetProtectionOptions
 */
class WorkbookWorksheetProtectionOptions
{
    /**
     * Indicates whether the worksheet protection option to allow the use of the autofilter feature is enabled.
     */
    private ?bool $allowAutoFilter;

    /**
     * Indicates whether the worksheet protection option to allow deleting columns is enabled.
     */
    private ?bool $allowDeleteColumns;

    /**
     * Indicates whether the worksheet protection option to allow deleting rows is enabled.
     */
    private ?bool $allowDeleteRows;

    /**
     * Indicates whether the worksheet protection option to allow formatting cells is enabled.
     */
    private ?bool $allowFormatCells;

    /**
     * Indicates whether the worksheet protection option to allow formatting columns is enabled.
     */
    private ?bool $allowFormatColumns;

    /**
     * Indicates whether the worksheet protection option to allow formatting rows is enabled.
     */
    private ?bool $allowFormatRows;

    /**
     * Indicates whether the worksheet protection option to allow inserting columns is enabled.
     */
    private ?bool $allowInsertColumns;

    /**
     * Indicates whether the worksheet protection option to allow inserting hyperlinks is enabled.
     */
    private ?bool $allowInsertHyperlinks;

    /**
     * Indicates whether the worksheet protection option to allow inserting rows is enabled.
     */
    private ?bool $allowInsertRows;

    /**
     * Indicates whether the worksheet protection option to allow the use of the pivot table feature is enabled.
     */
    private ?bool $allowPivotTables;

    /**
     * Indicates whether the worksheet protection option to allow the use of the sort feature is enabled.
     */
    private ?string $allowSort;

    public function getAllowAutoFilter(): ?bool
    {
        return $this->allowAutoFilter;
    }

    public function setAllowAutoFilter(?bool $allowAutoFilter): self
    {
        $this->allowAutoFilter = $allowAutoFilter;
        return $this;
    }

    public function getAllowDeleteColumns(): ?bool
    {
        return $this->allowDeleteColumns;
    }

    public function setAllowDeleteColumns(?bool $allowDeleteColumns): self
    {
        $this->allowDeleteColumns = $allowDeleteColumns;
        return $this;
    }

    public function getAllowDeleteRows(): ?bool
    {
        return $this->allowDeleteRows;
    }

    public function setAllowDeleteRows(?bool $allowDeleteRows): self
    {
        $this->allowDeleteRows = $allowDeleteRows;
        return $this;
    }

    public function getAllowFormatCells(): ?bool
    {
        return $this->allowFormatCells;
    }

    public function setAllowFormatCells(?bool $allowFormatCells): self
    {
        $this->allowFormatCells = $allowFormatCells;
        return $this;
    }

    public function getAllowFormatColumns(): ?bool
    {
        return $this->allowFormatColumns;
    }

    public function setAllowFormatColumns(?bool $allowFormatColumns): self
    {
        $this->allowFormatColumns = $allowFormatColumns;
        return $this;
    }

    public function getAllowFormatRows(): ?bool
    {
        return $this->allowFormatRows;
    }

    public function setAllowFormatRows(?bool $allowFormatRows): self
    {
        $this->allowFormatRows = $allowFormatRows;
        return $this;
    }

    public function getAllowInsertColumns(): ?bool
    {
        return $this->allowInsertColumns;
    }

    public function setAllowInsertColumns(?bool $allowInsertColumns): self
    {
        $this->allowInsertColumns = $allowInsertColumns;
        return $this;
    }

    public function getAllowInsertHyperlinks(): ?bool
    {
        return $this->allowInsertHyperlinks;
    }

    public function setAllowInsertHyperlinks(?bool $allowInsertHyperlinks): self
    {
        $this->allowInsertHyperlinks = $allowInsertHyperlinks;
        return $this;
    }

    public function getAllowInsertRows(): ?bool
    {
        return $this->allowInsertRows;
    }

    public function setAllowInsertRows(?bool $allowInsertRows): self
    {
        $this->allowInsertRows = $allowInsertRows;
        return $this;
    }

    public function getAllowPivotTables(): ?bool
    {
        return $this->allowPivotTables;
    }

    public function setAllowPivotTables(?bool $allowPivotTables): self
    {
        $this->allowPivotTables = $allowPivotTables;
        return $this;
    }

    public function getAllowSort(): ?string
    {
        return $this->allowSort;
    }

    public function setAllowSort(?string $allowSort): self
    {
        $this->allowSort = $allowSort;
        return $this;
    }

}
