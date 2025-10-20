<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChannelSetAsFavoriteByDefaultEventMessageDetail resources
 *
 * Available select fields:
 * - channelId
 * - initiator
 */
class ChannelSetAsFavoriteByDefaultEventMessageDetailQueryOptions extends QueryOptions
{
    public const FIELD_CHANNEL_ID = 'channelId';
    public const FIELD_INITIATOR = 'initiator';

    /**
     * Select specific ChannelSetAsFavoriteByDefaultEventMessageDetail properties
     * 
     * @param array<string> $select Use ChannelSetAsFavoriteByDefaultEventMessageDetailQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
