<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IpNamedLocation resources
 *
 * Available select fields:
 */
class IpNamedLocationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IpNamedLocation
     */

    /**
     * Select specific IpNamedLocation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
