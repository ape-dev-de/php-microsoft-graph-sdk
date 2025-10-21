<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventsRoot resources
 *
 * Available select fields:
 */
class VirtualEventsRootQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VirtualEventsRoot
     */

    /**
     * Select specific VirtualEventsRoot properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
