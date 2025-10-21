<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RbacApplication resources
 *
 * Available select fields:
 */
class RbacApplicationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RbacApplication
     */

    /**
     * Select specific RbacApplication properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
