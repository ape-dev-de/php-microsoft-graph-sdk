<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintDocument
 */
class PrintDocument
{
    /**
     * The document's content (MIME) type. Read-only.
     */
    private ?string $contentType;

    /**
     * The document's name. Read-only.
     */
    private ?string $displayName;

    /**
     * The time the document was downloaded. Read-only
     */
    private ?\DateTimeInterface $downloadedDateTime;

    /**
     * The document's size in bytes. Read-only.
     */
    private ?float $size;

    /**
     * The time the document was uploaded. Read-only
     */
    private ?\DateTimeInterface $uploadedDateTime;

    public function getContentType(): ?string
    {
        return $this->contentType;
    }

    public function setContentType(?string $contentType): self
    {
        $this->contentType = $contentType;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getDownloadedDateTime(): ?\DateTimeInterface
    {
        return $this->downloadedDateTime;
    }

    public function setDownloadedDateTime(?\DateTimeInterface $downloadedDateTime): self
    {
        $this->downloadedDateTime = $downloadedDateTime;
        return $this;
    }

    public function getSize(): ?float
    {
        return $this->size;
    }

    public function setSize(?float $size): self
    {
        $this->size = $size;
        return $this;
    }

    public function getUploadedDateTime(): ?\DateTimeInterface
    {
        return $this->uploadedDateTime;
    }

    public function setUploadedDateTime(?\DateTimeInterface $uploadedDateTime): self
    {
        $this->uploadedDateTime = $uploadedDateTime;
        return $this;
    }

}
