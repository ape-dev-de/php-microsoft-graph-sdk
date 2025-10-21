<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamworkTagMember resources
 *
 * Available select fields:
 */
class TeamworkTagMemberQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamworkTagMember
     */

    /**
     * Select specific TeamworkTagMember properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
