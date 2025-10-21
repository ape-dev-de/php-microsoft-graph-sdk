<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessageMention
 */
class ChatMessageMention
{
    public function __construct(
        /** Index of an entity being mentioned in the specified chatMessage. Matches the {index} value in the corresponding <at id='{index}'> tag in the message body. */
        public ?float $id = null,
        /** The entity (user, application, team, channel, or chat) that was @mentioned. */
        public ?ChatMessageMentionedIdentitySet $mentioned = null,
        /** String used to represent the mention. For example, a user's display name, a team name. */
        public ?string $mentionText = null
    ) {}
}
