<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChannelAddedEventMessageDetail
 */
class ChannelAddedEventMessageDetail
{
    public function __construct(
        /** Display name of the channel. */
        public ?string $channelDisplayName = null,
        /** Unique identifier of the channel. */
        public ?string $channelId = null,
        /** Initiator of the event. */
        public ?string $initiator = null
    ) {}
}
