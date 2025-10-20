<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DriveItemVersion
 */
class DriveItemVersion
{
    /**
     * The content stream for this version of the item.
     */
    private ?string $content;

    /**
     * Indicates the size of the content stream for this version of the item.
     */
    private ?string $size;

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function setSize(?string $size): self
    {
        $this->size = $size;
        return $this;
    }

}
