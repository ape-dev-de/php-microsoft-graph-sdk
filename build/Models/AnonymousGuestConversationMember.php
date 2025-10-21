<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AnonymousGuestConversationMember
 */
class AnonymousGuestConversationMember
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The display name of the user. */
        public ?string $displayName = null,
        /** @var string[] The roles for that user. This property contains more qualifiers only when relevant - for example, if the member has owner privileges, the roles property contains owner as one of the values. Similarly, if the member is an in-tenant guest, the roles property contains guest as one of the values. A basic member shouldn''t have any values specified in the roles property. An Out-of-tenant external member is assigned the owner role. */
        public array $roles = [],
        /** The timestamp denoting how far back a conversation's history is shared with the conversation member. This property is settable only for members of a chat. */
        public ?\DateTimeInterface $visibleHistoryStartDateTime = null,
        /** Unique ID that represents the user. Note: This ID can change if the user leaves and rejoins the meeting, or joins from a different device. */
        public ?string $anonymousGuestId = null
    ) {}
}
