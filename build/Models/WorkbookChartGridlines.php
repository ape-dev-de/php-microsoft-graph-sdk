<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartGridlines
 */
class WorkbookChartGridlines
{
    /**
     * Indicates whether the axis gridlines are visible.
     */
    private ?bool $visible;

    /**
     * Represents the formatting of chart gridlines. Read-only.
     */
    private ?string $format;

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
