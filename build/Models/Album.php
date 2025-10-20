<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Album
 */
class Album
{
    /**
     * Unique identifier of the driveItem that is the cover of the album.
     */
    private ?string $coverImageItemId;

    public function getCoverImageItemId(): ?string
    {
        return $this->coverImageItemId;
    }

    public function setCoverImageItemId(?string $coverImageItemId): self
    {
        $this->coverImageItemId = $coverImageItemId;
        return $this;
    }

}
