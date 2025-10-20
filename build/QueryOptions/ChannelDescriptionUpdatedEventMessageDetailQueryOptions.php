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
    public const FIELD_CHANNEL_DESCRIPTION = 'channelDescription';
    public const FIELD_CHANNEL_ID = 'channelId';
    public const FIELD_INITIATOR = 'initiator';

    /**
     * Select specific ChannelDescriptionUpdatedEventMessageDetail properties
     * 
     * @param array<string> $select Use ChannelDescriptionUpdatedEventMessageDetailQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
