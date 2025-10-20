<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharingDetail
 */
class SharingDetail
{
    /**
     * The user who shared the document.
     */
    private ?string $sharedBy;

    /**
     * The date and time the file was last shared. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     */
    private ?\DateTimeInterface $sharedDateTime;

    /**
     * Reference properties of the document, such as the URL and type of the document. Read-only
     */
    private ?string $sharingReference;

    /**
     * The subject with which the document was shared.
     */
    private ?string $sharingSubject;

    /**
     * Determines the way the document was shared. Can be by a 1Link1, 1Attachment1, 1Group1, 1Site1.
     */
    private ?string $sharingType;

    public function getSharedBy(): ?string
    {
        return $this->sharedBy;
    }

    public function setSharedBy(?string $sharedBy): self
    {
        $this->sharedBy = $sharedBy;
        return $this;
    }

    public function getSharedDateTime(): ?\DateTimeInterface
    {
        return $this->sharedDateTime;
    }

    public function setSharedDateTime(?\DateTimeInterface $sharedDateTime): self
    {
        $this->sharedDateTime = $sharedDateTime;
        return $this;
    }

    public function getSharingReference(): ?string
    {
        return $this->sharingReference;
    }

    public function setSharingReference(?string $sharingReference): self
    {
        $this->sharingReference = $sharingReference;
        return $this;
    }

    public function getSharingSubject(): ?string
    {
        return $this->sharingSubject;
    }

    public function setSharingSubject(?string $sharingSubject): self
    {
        $this->sharingSubject = $sharingSubject;
        return $this;
    }

    public function getSharingType(): ?string
    {
        return $this->sharingType;
    }

    public function setSharingType(?string $sharingType): self
    {
        $this->sharingType = $sharingType;
        return $this;
    }

}
