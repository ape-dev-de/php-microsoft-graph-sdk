<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OutlierContainerType resources
 *
 * Available select fields:
 */
class OutlierContainerTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OutlierContainerType
     */

    /**
     * Select specific OutlierContainerType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
