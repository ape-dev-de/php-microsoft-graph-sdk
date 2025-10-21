<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookCommentReply
 */
class WorkbookCommentReply
{
    /**
     * The content of the reply.
     */
    private ?string $content;

    /**
     * The content type for the reply.
     */
    private ?string $contentType;


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

}
