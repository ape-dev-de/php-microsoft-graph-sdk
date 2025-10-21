<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookRangeFormat
 */
class WorkbookRangeFormat
{
    /**
     * The width of all columns within the range. If the column widths aren''t uniform, null will be returned.
     */
    private ?string $columnWidth;

    /**
     * The horizontal alignment for the specified object. Possible values are: General, Left, Center, Right, Fill, Justify, CenterAcrossSelection, Distributed.
     */
    private ?string $horizontalAlignment;

    /**
     * The height of all rows in the range. If the row heights aren't uniform null will be returned.
     */
    private ?string $rowHeight;

    /**
     * The vertical alignment for the specified object. Possible values are: Top, Center, Bottom, Justify, Distributed.
     */
    private ?string $verticalAlignment;

    /**
     * Indicates whether Excel wraps the text in the object. A null value indicates that the entire range doesn't have a uniform wrap setting.
     */
    private ?bool $wrapText;

    /**
     * Collection of border objects that apply to the overall range selected Read-only.
     */
    private array $borders = [];

    /**
     * Returns the fill object defined on the overall range. Read-only.
     */
    private ?string $fill;

    /**
     * Returns the font object defined on the overall range selected Read-only.
     */
    private ?string $font;

    /**
     * Returns the format protection object for a range. Read-only.
     */
    private ?string $protection;


    public function getColumnWidth(): ?string
    {
        return $this->columnWidth;
    }

    public function setColumnWidth(?string $columnWidth): self
    {
        $this->columnWidth = $columnWidth;
        return $this;
    }

    public function getHorizontalAlignment(): ?string
    {
        return $this->horizontalAlignment;
    }

    public function setHorizontalAlignment(?string $horizontalAlignment): self
    {
        $this->horizontalAlignment = $horizontalAlignment;
        return $this;
    }

    public function getRowHeight(): ?string
    {
        return $this->rowHeight;
    }

    public function setRowHeight(?string $rowHeight): self
    {
        $this->rowHeight = $rowHeight;
        return $this;
    }

    public function getVerticalAlignment(): ?string
    {
        return $this->verticalAlignment;
    }

    public function setVerticalAlignment(?string $verticalAlignment): self
    {
        $this->verticalAlignment = $verticalAlignment;
        return $this;
    }

    public function getWrapText(): ?bool
    {
        return $this->wrapText;
    }

    public function setWrapText(?bool $wrapText): self
    {
        $this->wrapText = $wrapText;
        return $this;
    }

    public function getBorders(): array
    {
        return $this->borders;
    }

    public function setBorders(array $borders): self
    {
        $this->borders = $borders;
        return $this;
    }

    public function getFill(): ?string
    {
        return $this->fill;
    }

    public function setFill(?string $fill): self
    {
        $this->fill = $fill;
        return $this;
    }

    public function getFont(): ?string
    {
        return $this->font;
    }

    public function setFont(?string $font): self
    {
        $this->font = $font;
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

}
