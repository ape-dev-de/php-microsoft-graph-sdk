<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessageMentionedIdentitySet
 */
class ChatMessageMentionedIdentitySet
{
    /**
     * If present, represents a conversation (for example, team, channel, or chat) @mentioned in a message.
     */
    private ?string $conversation;


    public function getConversation(): ?string
    {
        return $this->conversation;
    }

    public function setConversation(?string $conversation): self
    {
        $this->conversation = $conversation;
        return $this;
    }

}
