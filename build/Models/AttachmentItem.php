<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttachmentItem
 */
class AttachmentItem
{
    /**
     * The type of attachment. Possible values are: file, item, reference. Required.
     */
    private ?string $attachmentType;

    /**
     * The CID or Content-Id of the attachment for referencing for the in-line attachments using the <img src='cid:contentId'> tag in HTML messages. Optional.
     */
    private ?string $contentId;

    /**
     * The nature of the data in the attachment. Optional.
     */
    private ?string $contentType;

    /**
     * true if the attachment is an inline attachment; otherwise, false. Optional.
     */
    private ?bool $isInline;

    /**
     * The display name of the attachment. This can be a descriptive string and doesn't have to be the actual file name. Required.
     */
    private ?string $name;

    /**
     * The length of the attachment in bytes. Required.
     */
    private ?string $size;

    public function getAttachmentType(): ?string
    {
        return $this->attachmentType;
    }

    public function setAttachmentType(?string $attachmentType): self
    {
        $this->attachmentType = $attachmentType;
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

    public function getContentType(): ?string
    {
        return $this->contentType;
    }

    public function setContentType(?string $contentType): self
    {
        $this->contentType = $contentType;
        return $this;
    }

    public function getIsInline(): ?bool
    {
        return $this->isInline;
    }

    public function setIsInline(?bool $isInline): self
    {
        $this->isInline = $isInline;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
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
