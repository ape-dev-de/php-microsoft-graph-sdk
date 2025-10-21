<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamworkConversationIdentity
 */
class TeamworkConversationIdentity
{
    public function __construct(
        /** Unique identifier for the identity or actor. For example, in the access reviews decisions API, this property might record the id of the principal, that is, the group, user, or application that''s subject to review. */
        public ?string $id = null,
        /** The display name of the identity.For drive items, the display name might not always be available or up to date. For example, if a user changes their display name the API might show the new value in a future response, but the items associated with the user don''t show up as changed when using delta. */
        public ?string $displayName = null,
        /** Type of conversation. Possible values are: team, channel, chat, and unknownFutureValue. */
        public ?string $conversationIdentityType = null
    ) {}
}
