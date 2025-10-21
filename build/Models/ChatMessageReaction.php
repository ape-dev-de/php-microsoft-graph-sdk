<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessageReaction
 */
class ChatMessageReaction
{
    /**
     * The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The name of the reaction.
     */
    private ?string $displayName;

    /**
     * The hosted content URL for the custom reaction type.
     */
    private ?string $reactionContentUrl;

    /**
     * The reaction type. Supported values include Unicode characters, custom, and some backward-compatible reaction types, such as like, angry, sad, laugh, heart, and surprised.
     */
    private ?string $reactionType;

    /**
     */
    private ?string $user;


    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
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

    public function getReactionContentUrl(): ?string
    {
        return $this->reactionContentUrl;
    }

    public function setReactionContentUrl(?string $reactionContentUrl): self
    {
        $this->reactionContentUrl = $reactionContentUrl;
        return $this;
    }

    public function getReactionType(): ?string
    {
        return $this->reactionType;
    }

    public function setReactionType(?string $reactionType): self
    {
        $this->reactionType = $reactionType;
        return $this;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(?string $user): self
    {
        $this->user = $user;
        return $this;
    }

}
