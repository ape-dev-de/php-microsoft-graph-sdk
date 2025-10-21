<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AiInteractionMentionedIdentitySet
 */
class AiInteractionMentionedIdentitySet
{
    /**
     */
    private ?string $conversation;

    /**
     */
    private ?string $tag;


    public function getConversation(): ?string
    {
        return $this->conversation;
    }

    public function setConversation(?string $conversation): self
    {
        $this->conversation = $conversation;
        return $this;
    }

    public function getTag(): ?string
    {
        return $this->tag;
    }

    public function setTag(?string $tag): self
    {
        $this->tag = $tag;
        return $this;
    }

}
