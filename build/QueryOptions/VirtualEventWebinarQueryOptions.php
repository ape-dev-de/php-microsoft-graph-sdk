<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventWebinar resources
 *
 * Available select fields:
 */
class VirtualEventWebinarQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VirtualEventWebinar
     */

    /**
     * Select specific VirtualEventWebinar properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
