<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnenotePagePreviewLinks
 */
class OnenotePagePreviewLinks
{
    /**
     */
    private ?string $previewImageUrl;

    public function getPreviewImageUrl(): ?string
    {
        return $this->previewImageUrl;
    }

    public function setPreviewImageUrl(?string $previewImageUrl): self
    {
        $this->previewImageUrl = $previewImageUrl;
        return $this;
    }

}
