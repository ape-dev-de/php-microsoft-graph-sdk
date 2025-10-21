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
        public ?string $application = null,
        /** Optional. The device associated with this action. */
        public ?string $device = null,
        /** Optional. The user associated with this action. */
        public ?string $user = null,
        /** If present, represents a conversation (for example, team, channel, or chat) @mentioned in a message. */
        public ?string $conversation = null
    ) {}
}
