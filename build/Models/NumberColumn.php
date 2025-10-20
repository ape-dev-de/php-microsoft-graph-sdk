<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * NumberColumn
 */
class NumberColumn
{
    /**
     * How many decimal places to display. See below for information about the possible values.
     */
    private ?string $decimalPlaces;

    /**
     * How the value should be presented in the UX. Must be one of number or percentage. If unspecified, treated as number.
     */
    private ?string $displayAs;

    /**
     * The maximum permitted value.
     */
    private ?string $maximum;

    /**
     * The minimum permitted value.
     */
    private ?string $minimum;

    public function getDecimalPlaces(): ?string
    {
        return $this->decimalPlaces;
    }

    public function setDecimalPlaces(?string $decimalPlaces): self
    {
        $this->decimalPlaces = $decimalPlaces;
        return $this;
    }

    public function getDisplayAs(): ?string
    {
        return $this->displayAs;
    }

    public function setDisplayAs(?string $displayAs): self
    {
        $this->displayAs = $displayAs;
        return $this;
    }

    public function getMaximum(): ?string
    {
        return $this->maximum;
    }

    public function setMaximum(?string $maximum): self
    {
        $this->maximum = $maximum;
        return $this;
    }

    public function getMinimum(): ?string
    {
        return $this->minimum;
    }

    public function setMinimum(?string $minimum): self
    {
        $this->minimum = $minimum;
        return $this;
    }

}
