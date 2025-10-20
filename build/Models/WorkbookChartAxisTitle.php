<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartAxisTitle
 */
class WorkbookChartAxisTitle
{
    /**
     * Represents the axis title.
     */
    private ?string $text;

    /**
     * A Boolean that specifies the visibility of an axis title.
     */
    private ?bool $visible;

    /**
     * Represents the formatting of chart axis title. Read-only.
     */
    private ?string $format;

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
