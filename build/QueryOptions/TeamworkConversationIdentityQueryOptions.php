<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamworkConversationIdentity resources
 *
 * Available select fields:
 */
class TeamworkConversationIdentityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamworkConversationIdentity
     */

    /**
     * Select specific TeamworkConversationIdentity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
