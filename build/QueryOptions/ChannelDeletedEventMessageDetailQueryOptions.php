<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChannelDeletedEventMessageDetail resources
 *
 * Available select fields:
 * - channelDisplayName
 * - channelId
 * - initiator
 */
class ChannelDeletedEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChannelDeletedEventMessageDetail
     */
    public const FIELD_CHANNEL_DISPLAY_NAME = 'channelDisplayName';
    public const FIELD_CHANNEL_ID = 'channelId';
    public const FIELD_INITIATOR = 'initiator';

    /**
     * Select specific ChannelDeletedEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
