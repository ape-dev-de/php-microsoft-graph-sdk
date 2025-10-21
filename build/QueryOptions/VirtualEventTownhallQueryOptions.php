<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventTownhall resources
 *
 * Available select fields:
 */
class VirtualEventTownhallQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VirtualEventTownhall
     */

    /**
     * Select specific VirtualEventTownhall properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
