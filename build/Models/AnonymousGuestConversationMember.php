<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AnonymousGuestConversationMember
 */
class AnonymousGuestConversationMember
{
    public function __construct(
        /** Unique ID that represents the user. Note: This ID can change if the user leaves and rejoins the meeting, or joins from a different device. */
        public ?string $anonymousGuestId = null
    ) {}
}
