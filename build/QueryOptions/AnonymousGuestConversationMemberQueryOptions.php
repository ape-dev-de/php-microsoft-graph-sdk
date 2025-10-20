<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AnonymousGuestConversationMember resources
 *
 * Available select fields:
 * - anonymousGuestId
 */
class AnonymousGuestConversationMemberQueryOptions extends QueryOptions
{
    public const FIELD_ANONYMOUS_GUEST_ID = 'anonymousGuestId';

    /**
     * Select specific AnonymousGuestConversationMember properties
     * 
     * @param array<string> $select Use AnonymousGuestConversationMemberQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
