<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChannelRenamedEventMessageDetail resources
 *
 * Available select fields:
 * - channelDisplayName
 * - channelId
 * - initiator
 */
class ChannelRenamedEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChannelRenamedEventMessageDetail
     */
    public const FIELD_CHANNEL_DISPLAY_NAME = 'channelDisplayName';
    public const FIELD_CHANNEL_ID = 'channelId';
    public const FIELD_INITIATOR = 'initiator';

    /**
     * Select specific ChannelRenamedEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
