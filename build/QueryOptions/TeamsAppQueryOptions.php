<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamsApp resources
 *
 * Available select fields:
 */
class TeamsAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamsApp
     */

    /**
     * Select specific TeamsApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
