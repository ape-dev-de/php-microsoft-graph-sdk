<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChannelSetAsFavoriteByDefaultEventMessageDetail
 */
class ChannelSetAsFavoriteByDefaultEventMessageDetail
{
    public function __construct(
        /** Unique identifier of the channel. */
        public ?string $channelId = null,
        /** Initiator of the event. */
        public ?string $initiator = null
    ) {}
}
