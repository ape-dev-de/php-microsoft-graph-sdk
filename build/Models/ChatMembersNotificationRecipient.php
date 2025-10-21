<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMembersNotificationRecipient
 */
class ChatMembersNotificationRecipient
{
    public function __construct(
        /** The unique identifier for the chat whose members should receive the notifications. */
        public ?string $chatId = null
    ) {}
}
