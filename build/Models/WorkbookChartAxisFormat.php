<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartAxisFormat
 */
class WorkbookChartAxisFormat
{
    /**
     * Represents the font attributes (font name, font size, color, etc.) for a chart axis element. Read-only.
     */
    private ?string $font;

    /**
     * Represents chart line formatting. Read-only.
     */
    private ?string $line;

    public function getFont(): ?string
    {
        return $this->font;
    }

    public function setFont(?string $font): self
    {
        $this->font = $font;
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
