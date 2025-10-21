<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcRegionGroup resources
 *
 * Available select fields:
 */
class CloudPcRegionGroupQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CloudPcRegionGroup
     */

    /**
     * Select specific CloudPcRegionGroup properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
