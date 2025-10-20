<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartGridlinesFormat
 */
class WorkbookChartGridlinesFormat
{
    /**
     * Represents chart line formatting. Read-only.
     */
    private ?string $line;

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
