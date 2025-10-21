<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Place resources
 *
 * Available select fields:
 */
class PlaceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Place
     */

    /**
     * Select specific Place properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
