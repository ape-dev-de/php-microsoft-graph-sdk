<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ThumbnailSet
 */
class ThumbnailSet
{
    /**
     * A 1920x1920 scaled thumbnail.
     */
    private ?string $large;

    /**
     * A 176x176 scaled thumbnail.
     */
    private ?string $medium;

    /**
     * A 48x48 cropped thumbnail.
     */
    private ?string $small;

    /**
     * A custom thumbnail image or the original image used to generate other thumbnails.
     */
    private ?string $source;

    public function getLarge(): ?string
    {
        return $this->large;
    }

    public function setLarge(?string $large): self
    {
        $this->large = $large;
        return $this;
    }

    public function getMedium(): ?string
    {
        return $this->medium;
    }

    public function setMedium(?string $medium): self
    {
        $this->medium = $medium;
        return $this;
    }

    public function getSmall(): ?string
    {
        return $this->small;
    }

    public function setSmall(?string $small): self
    {
        $this->small = $small;
        return $this;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

}
