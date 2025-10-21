<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConversationMember resources
 *
 * Available select fields:
 */
class ConversationMemberQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ConversationMember
     */

    /**
     * Select specific ConversationMember properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
