<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartAxisTitleFormat
 */
class WorkbookChartAxisTitleFormat
{
    /**
     * Represents the font attributes, such as font name, font size, color, etc. of chart axis title object. Read-only.
     */
    private ?string $font;


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
