<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AadUserConversationMemberResult resources
 *
 * Available select fields:
 */
class AadUserConversationMemberResultQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AadUserConversationMemberResult
     */

    /**
     * Select specific AadUserConversationMemberResult properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
