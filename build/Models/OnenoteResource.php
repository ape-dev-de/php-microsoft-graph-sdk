<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnenoteResource
 */
class OnenoteResource
{
    /**
     * The content stream
     */
    private ?string $content;

    /**
     * The URL for downloading the content
     */
    private ?string $contentUrl;


    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function getContentUrl(): ?string
    {
        return $this->contentUrl;
    }

    public function setContentUrl(?string $contentUrl): self
    {
        $this->contentUrl = $contentUrl;
        return $this;
    }

}
