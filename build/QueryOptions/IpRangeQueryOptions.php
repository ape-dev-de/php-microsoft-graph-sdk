<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IpRange resources
 *
 * Available select fields:
 */
class IpRangeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IpRange
     */

    /**
     * Select specific IpRange properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
