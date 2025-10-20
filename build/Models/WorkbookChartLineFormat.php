<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartLineFormat
 */
class WorkbookChartLineFormat
{
    /**
     * The HTML color code that represents the color of lines in the chart.
     */
    private ?string $color;

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;
        return $this;
    }

}
