<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChatMembersNotificationRecipient resources
 *
 * Available select fields:
 * - chatId
 */
class ChatMembersNotificationRecipientQueryOptions extends QueryOptions
{
    public const FIELD_CHAT_ID = 'chatId';

    /**
     * Select specific ChatMembersNotificationRecipient properties
     * 
     * @param array<string> $select Use ChatMembersNotificationRecipientQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
