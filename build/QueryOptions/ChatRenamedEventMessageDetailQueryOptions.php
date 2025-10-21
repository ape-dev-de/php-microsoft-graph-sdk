<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChatRenamedEventMessageDetail resources
 *
 * Available select fields:
 * - chatDisplayName
 * - chatId
 * - initiator
 */
class ChatRenamedEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChatRenamedEventMessageDetail
     */
    public const FIELD_CHAT_DISPLAY_NAME = 'chatDisplayName';
    public const FIELD_CHAT_ID = 'chatId';
    public const FIELD_INITIATOR = 'initiator';

    /**
     * Select specific ChatRenamedEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
