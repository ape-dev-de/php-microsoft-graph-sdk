<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChannelUnsetAsFavoriteByDefaultEventMessageDetail resources
 *
 * Available select fields:
 * - channelId
 * - initiator
 */
class ChannelUnsetAsFavoriteByDefaultEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChannelUnsetAsFavoriteByDefaultEventMessageDetail
     */
    public const FIELD_CHANNEL_ID = 'channelId';
    public const FIELD_INITIATOR = 'initiator';

    /**
     * Select specific ChannelUnsetAsFavoriteByDefaultEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
