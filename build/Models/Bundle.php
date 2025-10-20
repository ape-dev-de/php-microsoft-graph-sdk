<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Bundle
 */
class Bundle
{
    /**
     * If the bundle is an album, then the album property is included
     */
    private ?string $album;

    /**
     * Number of children contained immediately within this container.
     */
    private ?string $childCount;

    public function getAlbum(): ?string
    {
        return $this->album;
    }

    public function setAlbum(?string $album): self
    {
        $this->album = $album;
        return $this;
    }

    public function getChildCount(): ?string
    {
        return $this->childCount;
    }

    public function setChildCount(?string $childCount): self
    {
        $this->childCount = $childCount;
        return $this;
    }

}
