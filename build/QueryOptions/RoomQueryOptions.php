<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Room resources
 *
 * Available select fields:
 */
class RoomQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Room
     */

    /**
     * Select specific Room properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
