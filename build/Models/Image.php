<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Image
 */
class Image
{
    /**
     * Optional. Height of the image, in pixels. Read-only.
     */
    private ?float $height;

    /**
     * Optional. Width of the image, in pixels. Read-only.
     */
    private ?string $width;


    public function getHeight(): ?float
    {
        return $this->height;
    }

    public function setHeight(?float $height): self
    {
        $this->height = $height;
        return $this;
    }

    public function getWidth(): ?string
    {
        return $this->width;
    }

    public function setWidth(?string $width): self
    {
        $this->width = $width;
        return $this;
    }

}
