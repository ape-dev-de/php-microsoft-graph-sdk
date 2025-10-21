<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessageMentionedIdentitySet
 */
class ChatMessageMentionedIdentitySet
{
    public function __construct(
        /** If present, represents a conversation (for example, team, channel, or chat) @mentioned in a message. */
        public ?string $conversation = null
    ) {}
}
