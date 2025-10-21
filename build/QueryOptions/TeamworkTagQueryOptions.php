<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamworkTag resources
 *
 * Available select fields:
 */
class TeamworkTagQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamworkTag
     */

    /**
     * Select specific TeamworkTag properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
