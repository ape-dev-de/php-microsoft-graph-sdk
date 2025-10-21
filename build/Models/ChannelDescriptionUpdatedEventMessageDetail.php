<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChannelDescriptionUpdatedEventMessageDetail
 */
class ChannelDescriptionUpdatedEventMessageDetail
{
    public function __construct(
        /** The updated description of the channel. */
        public ?string $channelDescription = null,
        /** Unique identifier of the channel. */
        public ?string $channelId = null,
        /** Initiator of the event. */
        public ?IdentitySet $initiator = null
    ) {}
}
