<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamworkConversationIdentity
 */
class TeamworkConversationIdentity
{
    public function __construct(
        /** Type of conversation. Possible values are: team, channel, chat, and unknownFutureValue. */
        public ?string $conversationIdentityType = null
    ) {}
}
