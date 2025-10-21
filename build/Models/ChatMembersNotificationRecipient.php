<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMembersNotificationRecipient
 */
class ChatMembersNotificationRecipient
{
    /**
     * The unique identifier for the chat whose members should receive the notifications.
     */
    private ?string $chatId;


    public function getChatId(): ?string
    {
        return $this->chatId;
    }

    public function setChatId(?string $chatId): self
    {
        $this->chatId = $chatId;
        return $this;
    }

}
