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
    /**
     * Available select fields for ChatMembersNotificationRecipient
     */
    public const FIELD_CHAT_ID = 'chatId';

    /**
     * Select specific ChatMembersNotificationRecipient properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
