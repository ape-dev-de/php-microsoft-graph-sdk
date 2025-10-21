<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MicrosoftAccountUserConversationMember resources
 *
 * Available select fields:
 */
class MicrosoftAccountUserConversationMemberQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MicrosoftAccountUserConversationMember
     */

    /**
     * Select specific MicrosoftAccountUserConversationMember properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
