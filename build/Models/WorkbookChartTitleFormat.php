<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartTitleFormat
 */
class WorkbookChartTitleFormat
{
    /**
     * Represents the fill format of an object, which includes background formatting information. Read-only.
     */
    private ?string $fill;

    /**
     * Represents the font attributes (font name, font size, color, etc.) for the current object. Read-only.
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
