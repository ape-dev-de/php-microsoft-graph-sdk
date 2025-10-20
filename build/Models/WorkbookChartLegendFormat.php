<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartLegendFormat
 */
class WorkbookChartLegendFormat
{
    /**
     * Represents the fill format of an object, which includes background formating information. Read-only.
     */
    private ?string $fill;

    /**
     * Represents the font attributes such as font name, font size, color, etc. of a chart legend. Read-only.
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
