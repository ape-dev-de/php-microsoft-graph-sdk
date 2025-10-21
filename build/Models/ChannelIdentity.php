<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChannelIdentity
 */
class ChannelIdentity
{
    public function __construct(
        /** The identity of the channel in which the message was posted. */
        public ?string $channelId = null,
        /** The identity of the team in which the message was posted. */
        public ?string $teamId = null
    ) {}
}
