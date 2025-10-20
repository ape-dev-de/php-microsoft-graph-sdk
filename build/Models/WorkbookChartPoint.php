<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartPoint
 */
class WorkbookChartPoint
{
    /**
     * The value of a chart point. Read-only.
     */
    private ?string $value;

    /**
     * The format properties of the chart point. Read-only.
     */
    private ?string $format;

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;
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
