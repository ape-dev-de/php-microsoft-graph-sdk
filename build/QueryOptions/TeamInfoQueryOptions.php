<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamInfo resources
 *
 * Available select fields:
 */
class TeamInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamInfo
     */

    /**
     * Select specific TeamInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
