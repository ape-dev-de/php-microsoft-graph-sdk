<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * HyperlinkOrPictureColumn
 */
class HyperlinkOrPictureColumn
{
    /**
     * Specifies whether the display format used for URL columns is an image or a hyperlink.
     */
    private ?string $isPicture;

    public function getIsPicture(): ?string
    {
        return $this->isPicture;
    }

    public function setIsPicture(?string $isPicture): self
    {
        $this->isPicture = $isPicture;
        return $this;
    }

}
