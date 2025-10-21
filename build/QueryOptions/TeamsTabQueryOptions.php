<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamsTab resources
 *
 * Available select fields:
 */
class TeamsTabQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamsTab
     */

    /**
     * Select specific TeamsTab properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
