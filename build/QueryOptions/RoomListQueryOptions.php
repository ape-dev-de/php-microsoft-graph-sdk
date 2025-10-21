<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RoomList resources
 *
 * Available select fields:
 */
class RoomListQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RoomList
     */

    /**
     * Select specific RoomList properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
