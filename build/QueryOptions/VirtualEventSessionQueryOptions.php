<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventSession resources
 *
 * Available select fields:
 */
class VirtualEventSessionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VirtualEventSession
     */

    /**
     * Select specific VirtualEventSession properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
