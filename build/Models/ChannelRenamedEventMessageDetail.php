<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChannelRenamedEventMessageDetail
 */
class ChannelRenamedEventMessageDetail
{
    public function __construct(
        /** The updated name of the channel. */
        public ?string $channelDisplayName = null,
        /** Unique identifier of the channel. */
        public ?string $channelId = null,
        /** Initiator of the event. */
        public ?IdentitySet $initiator = null
    ) {}
}
