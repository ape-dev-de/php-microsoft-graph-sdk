<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamworkConversationIdentity resources
 *
 * Available select fields:
 * - conversationIdentityType
 */
class TeamworkConversationIdentityQueryOptions extends QueryOptions
{
    public const FIELD_CONVERSATION_IDENTITY_TYPE = 'conversationIdentityType';

    /**
     * Select specific TeamworkConversationIdentity properties
     * 
     * @param array<string> $select Use TeamworkConversationIdentityQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
