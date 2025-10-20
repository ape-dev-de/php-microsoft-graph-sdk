<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartDataLabels
 */
class WorkbookChartDataLabels
{
    /**
     * DataLabelPosition value that represents the position of the data label. The possible values are: None, Center, InsideEnd, InsideBase, OutsideEnd, Left, Right, Top, Bottom, BestFit, Callout.
     */
    private ?string $position;

    /**
     * String that represents the separator used for the data labels on a chart.
     */
    private ?string $separator;

    /**
     * Boolean value that represents whether the data label bubble size is visible.
     */
    private ?bool $showBubbleSize;

    /**
     * Boolean value that represents whether the data label category name is visible.
     */
    private ?bool $showCategoryName;

    /**
     * Boolean value that represents whether the data label legend key is visible.
     */
    private ?bool $showLegendKey;

    /**
     * Boolean value that represents whether the data label percentage is visible.
     */
    private ?bool $showPercentage;

    /**
     * Boolean value that represents whether the data label series name is visible.
     */
    private ?bool $showSeriesName;

    /**
     * Boolean value that represents whether the data label value is visible.
     */
    private ?bool $showValue;

    /**
     * Represents the format of chart data labels, which includes fill and font formatting. Read-only.
     */
    private ?string $format;

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(?string $position): self
    {
        $this->position = $position;
        return $this;
    }

    public function getSeparator(): ?string
    {
        return $this->separator;
    }

    public function setSeparator(?string $separator): self
    {
        $this->separator = $separator;
        return $this;
    }

    public function getShowBubbleSize(): ?bool
    {
        return $this->showBubbleSize;
    }

    public function setShowBubbleSize(?bool $showBubbleSize): self
    {
        $this->showBubbleSize = $showBubbleSize;
        return $this;
    }

    public function getShowCategoryName(): ?bool
    {
        return $this->showCategoryName;
    }

    public function setShowCategoryName(?bool $showCategoryName): self
    {
        $this->showCategoryName = $showCategoryName;
        return $this;
    }

    public function getShowLegendKey(): ?bool
    {
        return $this->showLegendKey;
    }

    public function setShowLegendKey(?bool $showLegendKey): self
    {
        $this->showLegendKey = $showLegendKey;
        return $this;
    }

    public function getShowPercentage(): ?bool
    {
        return $this->showPercentage;
    }

    public function setShowPercentage(?bool $showPercentage): self
    {
        $this->showPercentage = $showPercentage;
        return $this;
    }

    public function getShowSeriesName(): ?bool
    {
        return $this->showSeriesName;
    }

    public function setShowSeriesName(?bool $showSeriesName): self
    {
        $this->showSeriesName = $showSeriesName;
        return $this;
    }

    public function getShowValue(): ?bool
    {
        return $this->showValue;
    }

    public function setShowValue(?bool $showValue): self
    {
        $this->showValue = $showValue;
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

}
