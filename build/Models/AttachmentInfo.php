<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttachmentInfo
 */
class AttachmentInfo
{
    /**
     * The type of the attachment. The possible values are: file, item, reference. Required.
     */
    private ?string $attachmentType;

    /**
     * The nature of the data in the attachment. Optional.
     */
    private ?string $contentType;

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

    public function getContentType(): ?string
    {
        return $this->contentType;
    }

    public function setContentType(?string $contentType): self
    {
        $this->contentType = $contentType;
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
