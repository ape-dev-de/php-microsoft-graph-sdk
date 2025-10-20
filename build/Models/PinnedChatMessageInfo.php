<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PinnedChatMessageInfo
 */
class PinnedChatMessageInfo
{
    /**
     * Represents details about the chat message that is pinned.
     */
    private ?string $message;

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }

}
