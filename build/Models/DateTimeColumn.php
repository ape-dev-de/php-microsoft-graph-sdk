<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DateTimeColumn
 */
class DateTimeColumn
{
    /**
     * How the value should be presented in the UX. Must be one of default, friendly, or standard. See below for more details. If unspecified, treated as default.
     */
    private ?string $displayAs;

    /**
     * Indicates whether the value should be presented as a date only or a date and time. Must be one of dateOnly or dateTime
     */
    private ?string $format;


    public function getDisplayAs(): ?string
    {
        return $this->displayAs;
    }

    public function setDisplayAs(?string $displayAs): self
    {
        $this->displayAs = $displayAs;
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
