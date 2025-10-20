<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatViewpoint
 */
class ChatViewpoint
{
    /**
     * Indicates whether the chat is hidden for the current user.
     */
    private ?bool $isHidden;

    /**
     * Represents the dateTime up until which the current user has read chatMessages in a specific chat.
     */
    private ?\DateTimeInterface $lastMessageReadDateTime;

    public function getIsHidden(): ?bool
    {
        return $this->isHidden;
    }

    public function setIsHidden(?bool $isHidden): self
    {
        $this->isHidden = $isHidden;
        return $this;
    }

    public function getLastMessageReadDateTime(): ?\DateTimeInterface
    {
        return $this->lastMessageReadDateTime;
    }

    public function setLastMessageReadDateTime(?\DateTimeInterface $lastMessageReadDateTime): self
    {
        $this->lastMessageReadDateTime = $lastMessageReadDateTime;
        return $this;
    }

}
