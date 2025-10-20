<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatRenamedEventMessageDetail
 */
class ChatRenamedEventMessageDetail
{
    /**
     * The updated name of the chat.
     */
    private ?string $chatDisplayName;

    /**
     * Unique identifier of the chat.
     */
    private ?string $chatId;

    /**
     * Initiator of the event.
     */
    private ?string $initiator;

    public function getChatDisplayName(): ?string
    {
        return $this->chatDisplayName;
    }

    public function setChatDisplayName(?string $chatDisplayName): self
    {
        $this->chatDisplayName = $chatDisplayName;
        return $this;
    }

    public function getChatId(): ?string
    {
        return $this->chatId;
    }

    public function setChatId(?string $chatId): self
    {
        $this->chatId = $chatId;
        return $this;
    }

    public function getInitiator(): ?string
    {
        return $this->initiator;
    }

    public function setInitiator(?string $initiator): self
    {
        $this->initiator = $initiator;
        return $this;
    }

}
