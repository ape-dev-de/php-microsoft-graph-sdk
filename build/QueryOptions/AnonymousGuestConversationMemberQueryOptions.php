<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AnonymousGuestConversationMember resources
 *
 * Available select fields:
 */
class AnonymousGuestConversationMemberQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AnonymousGuestConversationMember
     */

    /**
     * Select specific AnonymousGuestConversationMember properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
