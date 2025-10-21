<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RestrictionAction resources
 *
 * Available select fields:
 */
class RestrictionActionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RestrictionAction
     */

    /**
     * Select specific RestrictionAction properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
