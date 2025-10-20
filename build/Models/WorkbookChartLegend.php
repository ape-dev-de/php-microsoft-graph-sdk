<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartLegend
 */
class WorkbookChartLegend
{
    /**
     * Indicates whether the chart legend should overlap with the main body of the chart.
     */
    private ?bool $overlay;

    /**
     * Represents the position of the legend on the chart. The possible values are: Top, Bottom, Left, Right, Corner, Custom.
     */
    private ?string $position;

    /**
     * Indicates whether the chart legend is visible.
     */
    private ?bool $visible;

    /**
     * Represents the formatting of a chart legend, which includes fill and font formatting. Read-only.
     */
    private ?string $format;

    public function getOverlay(): ?bool
    {
        return $this->overlay;
    }

    public function setOverlay(?bool $overlay): self
    {
        $this->overlay = $overlay;
        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(?string $position): self
    {
        $this->position = $position;
        return $this;
    }

    public function getVisible(): ?bool
    {
        return $this->visible;
    }

    public function setVisible(?bool $visible): self
    {
        $this->visible = $visible;
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
