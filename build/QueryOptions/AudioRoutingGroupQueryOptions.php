<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AudioRoutingGroup resources
 *
 * Available select fields:
 */
class AudioRoutingGroupQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AudioRoutingGroup
     */

    /**
     * Select specific AudioRoutingGroup properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
