<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamworkHostedContent
 */
class TeamworkHostedContent
{
    /**
     * Write only. Bytes for the hosted content (such as images).
     */
    private ?string $contentBytes;

    /**
     * Write only. Content type. such as image/png, image/jpg.
     */
    private ?string $contentType;


    public function getContentBytes(): ?string
    {
        return $this->contentBytes;
    }

    public function setContentBytes(?string $contentBytes): self
    {
        $this->contentBytes = $contentBytes;
        return $this;
    }

    public function getContentType(): ?string
    {
        return $this->contentType;
    }

    public function setContentType(?string $contentType): self
    {
        $this->contentType = $contentType;
        return $this;
    }

}
