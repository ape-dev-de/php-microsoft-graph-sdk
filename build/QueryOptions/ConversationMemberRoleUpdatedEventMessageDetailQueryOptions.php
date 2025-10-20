<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConversationMemberRoleUpdatedEventMessageDetail resources
 *
 * Available select fields:
 * - conversationMemberRoles
 * - conversationMemberUser
 * - initiator
 */
class ConversationMemberRoleUpdatedEventMessageDetailQueryOptions extends QueryOptions
{
    public const FIELD_CONVERSATION_MEMBER_ROLES = 'conversationMemberRoles';
    public const FIELD_CONVERSATION_MEMBER_USER = 'conversationMemberUser';
    public const FIELD_INITIATOR = 'initiator';

    /**
     * Select specific ConversationMemberRoleUpdatedEventMessageDetail properties
     * 
     * @param array<string> $select Use ConversationMemberRoleUpdatedEventMessageDetailQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
