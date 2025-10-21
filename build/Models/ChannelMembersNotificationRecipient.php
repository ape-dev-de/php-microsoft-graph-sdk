<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChannelMembersNotificationRecipient
 */
class ChannelMembersNotificationRecipient
{
    public function __construct(
        /** The unique identifier for the channel whose members should receive the notification. */
        public ?string $channelId = null,
        /** The unique identifier for the team under which the channel resides. */
        public ?string $teamId = null
    ) {}
}
