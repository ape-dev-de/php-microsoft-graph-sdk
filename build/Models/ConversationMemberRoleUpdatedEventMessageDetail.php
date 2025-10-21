<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConversationMemberRoleUpdatedEventMessageDetail
 */
class ConversationMemberRoleUpdatedEventMessageDetail
{
    public function __construct(
        /** @var string[] Roles for the coversation member user. */
        public array $conversationMemberRoles = [],
        /** Identity of the conversation member user. */
        public ?TeamworkUserIdentity $conversationMemberUser = null,
        /** Initiator of the event. */
        public ?IdentitySet $initiator = null
    ) {}
}
