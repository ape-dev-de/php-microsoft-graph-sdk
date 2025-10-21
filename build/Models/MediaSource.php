<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MediaSource
 */
class MediaSource
{
    /**
     * Enumeration value that indicates the media content category.
     */
    private ?string $contentCategory;


    public function getContentCategory(): ?string
    {
        return $this->contentCategory;
    }

    public function setContentCategory(?string $contentCategory): self
    {
        $this->contentCategory = $contentCategory;
        return $this;
    }

}
