<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IPv6Range resources
 *
 * Available select fields:
 */
class IPv6RangeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IPv6Range
     */

    /**
     * Select specific IPv6Range properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
