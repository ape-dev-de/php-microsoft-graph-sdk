<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartPointFormat
 */
class WorkbookChartPointFormat
{
    /**
     * Represents the fill format of a chart, which includes background formatting information. Read-only.
     */
    private ?string $fill;

    public function getFill(): ?string
    {
        return $this->fill;
    }

    public function setFill(?string $fill): self
    {
        $this->fill = $fill;
        return $this;
    }

}
