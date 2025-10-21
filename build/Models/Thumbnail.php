<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Thumbnail
 */
class Thumbnail
{
    /**
     * The content stream for the thumbnail.
     */
    private ?string $content;

    /**
     * The height of the thumbnail, in pixels.
     */
    private ?float $height;

    /**
     * The unique identifier of the item that provided the thumbnail. This is only available when a folder thumbnail is requested.
     */
    private ?string $sourceItemId;

    /**
     * The URL used to fetch the thumbnail content.
     */
    private ?string $url;

    /**
     * The width of the thumbnail, in pixels.
     */
    private ?string $width;


    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function getHeight(): ?float
    {
        return $this->height;
    }

    public function setHeight(?float $height): self
    {
        $this->height = $height;
        return $this;
    }

    public function getSourceItemId(): ?string
    {
        return $this->sourceItemId;
    }

    public function setSourceItemId(?string $sourceItemId): self
    {
        $this->sourceItemId = $sourceItemId;
        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;
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
