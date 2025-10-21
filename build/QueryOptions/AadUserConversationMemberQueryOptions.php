<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AadUserConversationMember resources
 *
 * Available select fields:
 */
class AadUserConversationMemberQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AadUserConversationMember
     */

    /**
     * Select specific AadUserConversationMember properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
