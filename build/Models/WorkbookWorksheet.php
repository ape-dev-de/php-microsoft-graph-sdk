<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookWorksheet
 */
class WorkbookWorksheet
{
    /**
     * The display name of the worksheet.
     */
    private ?string $name;

    /**
     * The zero-based position of the worksheet within the workbook.
     */
    private ?float $position;

    /**
     * The visibility of the worksheet. The possible values are: Visible, Hidden, VeryHidden.
     */
    private ?string $visibility;

    /**
     * The list of charts that are part of the worksheet. Read-only.
     */
    private array $charts = [];

    /**
     * The list of names that are associated with the worksheet. Read-only.
     */
    private array $names = [];

    /**
     * The list of piot tables that are part of the worksheet.
     */
    private array $pivotTables = [];

    /**
     * The sheet protection object for a worksheet. Read-only.
     */
    private ?string $protection;

    /**
     * The list of tables that are part of the worksheet. Read-only.
     * @var string[]
     */
    private array $tables = [];


    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getPosition(): ?float
    {
        return $this->position;
    }

    public function setPosition(?float $position): self
    {
        $this->position = $position;
        return $this;
    }

    public function getVisibility(): ?string
    {
        return $this->visibility;
    }

    public function setVisibility(?string $visibility): self
    {
        $this->visibility = $visibility;
        return $this;
    }

    public function getCharts(): array
    {
        return $this->charts;
    }

    public function setCharts(array $charts): self
    {
        $this->charts = $charts;
        return $this;
    }

    public function getNames(): array
    {
        return $this->names;
    }

    public function setNames(array $names): self
    {
        $this->names = $names;
        return $this;
    }

    public function getPivotTables(): array
    {
        return $this->pivotTables;
    }

    public function setPivotTables(array $pivotTables): self
    {
        $this->pivotTables = $pivotTables;
        return $this;
    }

    public function getProtection(): ?string
    {
        return $this->protection;
    }

    public function setProtection(?string $protection): self
    {
        $this->protection = $protection;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTables(): array
    {
        return $this->tables;
    }

    /**
     * @param string[] $tables
     */
    public function setTables(array $tables): self
    {
        $this->tables = $tables;
        return $this;
    }

}
