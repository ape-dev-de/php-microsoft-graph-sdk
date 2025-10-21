<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DocumentSetVersion
 */
class DocumentSetVersion
{
    /**
     * Comment about the captured version.
     */
    private ?string $comment;

    /**
     * User who captured the version.
     */
    private ?string $createdBy;

    /**
     * Date and time when this version was created.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Items within the document set that are captured as part of this version.
     */
    private array $items = [];

    /**
     * If true, minor versions of items are also captured; otherwise, only major versions are captured. The default value is false.
     */
    private ?string $shouldCaptureMinorVersion;


    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function setItems(array $items): self
    {
        $this->items = $items;
        return $this;
    }

    public function getShouldCaptureMinorVersion(): ?string
    {
        return $this->shouldCaptureMinorVersion;
    }

    public function setShouldCaptureMinorVersion(?string $shouldCaptureMinorVersion): self
    {
        $this->shouldCaptureMinorVersion = $shouldCaptureMinorVersion;
        return $this;
    }

}
