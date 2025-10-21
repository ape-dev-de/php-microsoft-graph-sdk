<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookSortField
 */
class WorkbookSortField
{
    /**
     * Represents whether the sorting is done in an ascending fashion.
     */
    private ?bool $ascending;

    /**
     * Represents the color that is the target of the condition if the sorting is on font or cell color.
     */
    private ?string $color;

    /**
     * Represents additional sorting options for this field. The possible values are: Normal, TextAsNumber.
     */
    private ?string $dataOption;

    /**
     * Represents the icon that is the target of the condition if the sorting is on the cell's icon.
     */
    private ?string $icon;

    /**
     * Represents the column (or row, depending on the sort orientation) that the condition is on. Represented as an offset from the first column (or row).
     */
    private ?float $key;

    /**
     * Represents the type of sorting of this condition. The possible values are: Value, CellColor, FontColor, Icon.
     */
    private ?string $sortOn;


    public function getAscending(): ?bool
    {
        return $this->ascending;
    }

    public function setAscending(?bool $ascending): self
    {
        $this->ascending = $ascending;
        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;
        return $this;
    }

    public function getDataOption(): ?string
    {
        return $this->dataOption;
    }

    public function setDataOption(?string $dataOption): self
    {
        $this->dataOption = $dataOption;
        return $this;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setIcon(?string $icon): self
    {
        $this->icon = $icon;
        return $this;
    }

    public function getKey(): ?float
    {
        return $this->key;
    }

    public function setKey(?float $key): self
    {
        $this->key = $key;
        return $this;
    }

    public function getSortOn(): ?string
    {
        return $this->sortOn;
    }

    public function setSortOn(?string $sortOn): self
    {
        $this->sortOn = $sortOn;
        return $this;
    }

}
