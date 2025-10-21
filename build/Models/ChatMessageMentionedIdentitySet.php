<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessageMentionedIdentitySet
 */
class ChatMessageMentionedIdentitySet
{
    public function __construct(
        /** Optional. The application associated with this action. */
        public ?Identity $application = null,
        /** Optional. The device associated with this action. */
        public ?Identity $device = null,
        /** Optional. The user associated with this action. */
        public ?Identity $user = null,
        /** If present, represents a conversation (for example, team, channel, or chat) @mentioned in a message. */
        public ?TeamworkConversationIdentity $conversation = null
    ) {}
}
