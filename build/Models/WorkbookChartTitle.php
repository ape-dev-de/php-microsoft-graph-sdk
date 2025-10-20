<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartTitle
 */
class WorkbookChartTitle
{
    /**
     * Indicates whether the chart title will overlay the chart or not.
     */
    private ?bool $overlay;

    /**
     * The title text of the chart.
     */
    private ?string $text;

    /**
     * Indicates whether the chart title is visible.
     */
    private ?bool $visible;

    /**
     * The formatting of a chart title, which includes fill and font formatting. Read-only.
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

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;
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
