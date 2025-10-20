<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookTable
 */
class WorkbookTable
{
    /**
     * Indicates whether the first column contains special formatting.
     */
    private ?bool $highlightFirstColumn;

    /**
     * Indicates whether the last column contains special formatting.
     */
    private ?bool $highlightLastColumn;

    /**
     * A legacy identifier used in older Excel clients. The value of the identifier remains the same even when the table is renamed. This property should be interpreted as an opaque string value and shouldn't be parsed to any other type. Read-only.
     */
    private ?string $legacyId;

    /**
     * The name of the table.
     */
    private ?string $name;

    /**
     * Indicates whether the columns show banded formatting in which odd columns are highlighted differently from even ones to make reading the table easier.
     */
    private ?bool $showBandedColumns;

    /**
     * Indicates whether the rows show banded formatting in which odd rows are highlighted differently from even ones to make reading the table easier.
     */
    private ?bool $showBandedRows;

    /**
     * Indicates whether the filter buttons are visible at the top of each column header. Setting this is only allowed if the table contains a header row.
     */
    private ?bool $showFilterButton;

    /**
     * Indicates whether the header row is visible or not. This value can be set to show or remove the header row.
     */
    private ?bool $showHeaders;

    /**
     * Indicates whether the total row is visible or not. This value can be set to show or remove the total row.
     */
    private ?bool $showTotals;

    /**
     * A constant value that represents the Table style. Possible values are: TableStyleLight1 through TableStyleLight21, TableStyleMedium1 through TableStyleMedium28, TableStyleStyleDark1 through TableStyleStyleDark11. A custom user-defined style present in the workbook can also be specified.
     */
    private ?string $style;

    /**
     * The list of all the columns in the table. Read-only.
     */
    private array $columns = [];

    /**
     * The list of all the rows in the table. Read-only.
     */
    private array $rows = [];

    /**
     * The sorting for the table. Read-only.
     */
    private ?string $sort;

    /**
     * The worksheet containing the current table. Read-only.
     */
    private ?string $worksheet;

    public function getHighlightFirstColumn(): ?bool
    {
        return $this->highlightFirstColumn;
    }

    public function setHighlightFirstColumn(?bool $highlightFirstColumn): self
    {
        $this->highlightFirstColumn = $highlightFirstColumn;
        return $this;
    }

    public function getHighlightLastColumn(): ?bool
    {
        return $this->highlightLastColumn;
    }

    public function setHighlightLastColumn(?bool $highlightLastColumn): self
    {
        $this->highlightLastColumn = $highlightLastColumn;
        return $this;
    }

    public function getLegacyId(): ?string
    {
        return $this->legacyId;
    }

    public function setLegacyId(?string $legacyId): self
    {
        $this->legacyId = $legacyId;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getShowBandedColumns(): ?bool
    {
        return $this->showBandedColumns;
    }

    public function setShowBandedColumns(?bool $showBandedColumns): self
    {
        $this->showBandedColumns = $showBandedColumns;
        return $this;
    }

    public function getShowBandedRows(): ?bool
    {
        return $this->showBandedRows;
    }

    public function setShowBandedRows(?bool $showBandedRows): self
    {
        $this->showBandedRows = $showBandedRows;
        return $this;
    }

    public function getShowFilterButton(): ?bool
    {
        return $this->showFilterButton;
    }

    public function setShowFilterButton(?bool $showFilterButton): self
    {
        $this->showFilterButton = $showFilterButton;
        return $this;
    }

    public function getShowHeaders(): ?bool
    {
        return $this->showHeaders;
    }

    public function setShowHeaders(?bool $showHeaders): self
    {
        $this->showHeaders = $showHeaders;
        return $this;
    }

    public function getShowTotals(): ?bool
    {
        return $this->showTotals;
    }

    public function setShowTotals(?bool $showTotals): self
    {
        $this->showTotals = $showTotals;
        return $this;
    }

    public function getStyle(): ?string
    {
        return $this->style;
    }

    public function setStyle(?string $style): self
    {
        $this->style = $style;
        return $this;
    }

    public function getColumns(): array
    {
        return $this->columns;
    }

    public function setColumns(array $columns): self
    {
        $this->columns = $columns;
        return $this;
    }

    public function getRows(): array
    {
        return $this->rows;
    }

    public function setRows(array $rows): self
    {
        $this->rows = $rows;
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
