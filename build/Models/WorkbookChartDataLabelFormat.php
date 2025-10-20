<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartDataLabelFormat
 */
class WorkbookChartDataLabelFormat
{
    /**
     * Represents the fill format of the current chart data label. Read-only.
     */
    private ?string $fill;

    /**
     * Represents the font attributes (font name, font size, color, etc.) for a chart data label. Read-only.
     */
    private ?string $font;

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

}
