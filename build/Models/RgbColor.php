<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RgbColor
 */
class RgbColor
{
    /**
     * Blue value
     */
    private ?float $b;

    /**
     * Green value
     */
    private ?float $g;

    /**
     * Color in RGB.
     */
    private ?string $r;


    public function getB(): ?float
    {
        return $this->b;
    }

    public function setB(?float $b): self
    {
        $this->b = $b;
        return $this;
    }

    public function getG(): ?float
    {
        return $this->g;
    }

    public function setG(?float $g): self
    {
        $this->g = $g;
        return $this;
    }

    public function getR(): ?string
    {
        return $this->r;
    }

    public function setR(?string $r): self
    {
        $this->r = $r;
        return $this;
    }

}
