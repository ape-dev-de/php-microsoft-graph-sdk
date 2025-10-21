<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OutlookItem resources
 *
 * Available select fields:
 */
class OutlookItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OutlookItem
     */

    /**
     * Select specific OutlookItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
