<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMembersNotificationRecipient
 */
class ChatMembersNotificationRecipient
{
    /** The unique identifier for the chat whose members should receive the notifications. */
    public ?string $chatId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['chatId'])) {
            $this->chatId = $data['chatId'];
        }
    }
}
