<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileAttachment
 */
class FileAttachment
{
    /**
     * The base64-encoded contents of the file.
     */
    private ?string $contentBytes;

    /**
     * The ID of the attachment in the Exchange store.
     */
    private ?string $contentId;

    /**
     * Don't use this property as it isn't supported.
     */
    private ?string $contentLocation;

    public function getContentBytes(): ?string
    {
        return $this->contentBytes;
    }

    public function setContentBytes(?string $contentBytes): self
    {
        $this->contentBytes = $contentBytes;
        return $this;
    }

    public function getContentId(): ?string
    {
        return $this->contentId;
    }

    public function setContentId(?string $contentId): self
    {
        $this->contentId = $contentId;
        return $this;
    }

    public function getContentLocation(): ?string
    {
        return $this->contentLocation;
    }

    public function setContentLocation(?string $contentLocation): self
    {
        $this->contentLocation = $contentLocation;
        return $this;
    }

}
