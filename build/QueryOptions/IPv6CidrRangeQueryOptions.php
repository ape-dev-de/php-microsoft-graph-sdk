<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IPv6CidrRange resources
 *
 * Available select fields:
 */
class IPv6CidrRangeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IPv6CidrRange
     */

    /**
     * Select specific IPv6CidrRange properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
