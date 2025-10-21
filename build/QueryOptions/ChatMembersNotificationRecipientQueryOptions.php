<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChatMembersNotificationRecipient resources
 *
 * Available select fields:
 */
class ChatMembersNotificationRecipientQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChatMembersNotificationRecipient
     */

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
