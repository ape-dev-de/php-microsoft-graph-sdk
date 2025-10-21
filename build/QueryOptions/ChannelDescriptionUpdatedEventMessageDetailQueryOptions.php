<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChannelDescriptionUpdatedEventMessageDetail resources
 *
 * Available select fields:
 * - channelDescription
 * - channelId
 * - initiator
 */
class ChannelDescriptionUpdatedEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChannelDescriptionUpdatedEventMessageDetail
     */
    public const FIELD_CHANNEL_DESCRIPTION = 'channelDescription';
    public const FIELD_CHANNEL_ID = 'channelId';
    public const FIELD_INITIATOR = 'initiator';

    /**
     * Select specific ChannelDescriptionUpdatedEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
