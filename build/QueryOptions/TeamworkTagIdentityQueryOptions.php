<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamworkTagIdentity resources
 *
 * Available select fields:
 */
class TeamworkTagIdentityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamworkTagIdentity
     */

    /**
     * Select specific TeamworkTagIdentity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
