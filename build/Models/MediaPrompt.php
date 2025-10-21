<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MediaPrompt
 */
class MediaPrompt
{
    /**
     */
    private ?string $mediaInfo;


    public function getMediaInfo(): ?string
    {
        return $this->mediaInfo;
    }

    public function setMediaInfo(?string $mediaInfo): self
    {
        $this->mediaInfo = $mediaInfo;
        return $this;
    }

}
