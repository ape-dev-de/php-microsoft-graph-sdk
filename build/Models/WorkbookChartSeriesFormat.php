<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartSeriesFormat
 */
class WorkbookChartSeriesFormat
{
    /**
     * Represents the fill format of a chart series, which includes background formatting information. Read-only.
     */
    private ?string $fill;

    /**
     * Represents line formatting. Read-only.
     */
    private ?string $line;


    public function getFill(): ?string
    {
        return $this->fill;
    }

    public function setFill(?string $fill): self
    {
        $this->fill = $fill;
        return $this;
    }

    public function getLine(): ?string
    {
        return $this->line;
    }

    public function setLine(?string $line): self
    {
        $this->line = $line;
        return $this;
    }

}
