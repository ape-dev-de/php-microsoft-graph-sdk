<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SkypeForBusinessUserConversationMember resources
 *
 * Available select fields:
 */
class SkypeForBusinessUserConversationMemberQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SkypeForBusinessUserConversationMember
     */

    /**
     * Select specific SkypeForBusinessUserConversationMember properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
