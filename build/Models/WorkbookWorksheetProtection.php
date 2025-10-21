<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookWorksheetProtection
 */
class WorkbookWorksheetProtection
{
    /**
     * Worksheet protection options. Read-only.
     */
    private ?string $options;

    /**
     * Indicates whether the worksheet is protected.  Read-only.
     */
    private ?string $protected;


    public function getOptions(): ?string
    {
        return $this->options;
    }

    public function setOptions(?string $options): self
    {
        $this->options = $options;
        return $this;
    }

    public function getProtected(): ?string
    {
        return $this->protected;
    }

    public function setProtected(?string $protected): self
    {
        $this->protected = $protected;
        return $this;
    }

}
