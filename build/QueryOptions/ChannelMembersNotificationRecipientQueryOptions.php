<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChannelMembersNotificationRecipient resources
 *
 * Available select fields:
 * - channelId
 * - teamId
 */
class ChannelMembersNotificationRecipientQueryOptions extends QueryOptions
{
    public const FIELD_CHANNEL_ID = 'channelId';
    public const FIELD_TEAM_ID = 'teamId';

    /**
     * Select specific ChannelMembersNotificationRecipient properties
     * 
     * @param array<string> $select Use ChannelMembersNotificationRecipientQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
