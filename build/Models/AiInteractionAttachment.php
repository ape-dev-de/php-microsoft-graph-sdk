<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AiInteractionAttachment
 */
class AiInteractionAttachment
{
    /**
     */
    private ?string $attachmentId;

    /**
     */
    private ?string $content;

    /**
     */
    private ?string $contentType;

    /**
     */
    private ?string $contentUrl;

    /**
     */
    private ?string $name;


    public function getAttachmentId(): ?string
    {
        return $this->attachmentId;
    }

    public function setAttachmentId(?string $attachmentId): self
    {
        $this->attachmentId = $attachmentId;
        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;
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

    public function getContentUrl(): ?string
    {
        return $this->contentUrl;
    }

    public function setContentUrl(?string $contentUrl): self
    {
        $this->contentUrl = $contentUrl;
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

}
