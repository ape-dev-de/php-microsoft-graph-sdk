<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PhysicalAddressType resources
 *
 * Available select fields:
 */
class PhysicalAddressTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PhysicalAddressType
     */

    /**
     * Select specific PhysicalAddressType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
