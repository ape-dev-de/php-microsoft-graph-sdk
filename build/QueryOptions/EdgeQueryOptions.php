<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Edge resources
 *
 * Available select fields:
 */
class EdgeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Edge
     */

    /**
     * Select specific Edge properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
