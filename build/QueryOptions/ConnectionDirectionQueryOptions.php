<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConnectionDirection resources
 *
 * Available select fields:
 */
class ConnectionDirectionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ConnectionDirection
     */

    /**
     * Select specific ConnectionDirection properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
