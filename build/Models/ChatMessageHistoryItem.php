<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessageHistoryItem
 */
class ChatMessageHistoryItem
{
    /**
     */
    private ?string $actions;

    /**
     * The date and time when the message was modified.
     */
    private ?\DateTimeInterface $modifiedDateTime;

    /**
     * The reaction in the modified message.
     */
    private ?string $reaction;


    public function getActions(): ?string
    {
        return $this->actions;
    }

    public function setActions(?string $actions): self
    {
        $this->actions = $actions;
        return $this;
    }

    public function getModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->modifiedDateTime;
    }

    public function setModifiedDateTime(?\DateTimeInterface $modifiedDateTime): self
    {
        $this->modifiedDateTime = $modifiedDateTime;
        return $this;
    }

    public function getReaction(): ?string
    {
        return $this->reaction;
    }

    public function setReaction(?string $reaction): self
    {
        $this->reaction = $reaction;
        return $this;
    }

}
