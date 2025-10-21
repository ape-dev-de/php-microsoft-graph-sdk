<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamworkConversationIdentityType resources
 *
 * Available select fields:
 */
class TeamworkConversationIdentityTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamworkConversationIdentityType
     */

    /**
     * Select specific TeamworkConversationIdentityType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
