<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnenotePagePreview
 */
class OnenotePagePreview
{
    /**
     */
    private ?string $links;

    /**
     */
    private ?string $previewText;


    public function getLinks(): ?string
    {
        return $this->links;
    }

    public function setLinks(?string $links): self
    {
        $this->links = $links;
        return $this;
    }

    public function getPreviewText(): ?string
    {
        return $this->previewText;
    }

    public function setPreviewText(?string $previewText): self
    {
        $this->previewText = $previewText;
        return $this;
    }

}
