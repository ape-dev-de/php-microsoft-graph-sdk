<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChannelUnsetAsFavoriteByDefaultEventMessageDetail
 */
class ChannelUnsetAsFavoriteByDefaultEventMessageDetail
{
    public function __construct(
        /** Unique identifier of the channel. */
        public ?string $channelId = null,
        /** Initiator of the event. */
        public ?IdentitySet $initiator = null
    ) {}
}
