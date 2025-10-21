<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LocationType resources
 *
 * Available select fields:
 */
class LocationTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for LocationType
     */

    /**
     * Select specific LocationType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
