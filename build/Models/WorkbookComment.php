<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookComment
 */
class WorkbookComment
{
    /**
     * The content of the comment.
     */
    private ?string $content;

    /**
     * The content type of the comment.
     */
    private ?string $contentType;

    /**
     * The list of replies to the comment. Read-only. Nullable.
     */
    private ?string $replies;

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

    public function getReplies(): ?string
    {
        return $this->replies;
    }

    public function setReplies(?string $replies): self
    {
        $this->replies = $replies;
        return $this;
    }

}
