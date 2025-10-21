<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityAlertComment
 */
class SecurityAlertComment
{
    /**
     * The comment text.
     */
    private ?string $comment;

    /**
     * The person or app name that submitted the comment.
     */
    private ?string $createdByDisplayName;

    /**
     * The time when the comment was submitted.
     */
    private ?\DateTimeInterface $createdDateTime;


    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }

    public function getCreatedByDisplayName(): ?string
    {
        return $this->createdByDisplayName;
    }

    public function setCreatedByDisplayName(?string $createdByDisplayName): self
    {
        $this->createdByDisplayName = $createdByDisplayName;
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

}
