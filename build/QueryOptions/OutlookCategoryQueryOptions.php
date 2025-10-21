<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OutlookCategory resources
 *
 * Available select fields:
 */
class OutlookCategoryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OutlookCategory
     */

    /**
     * Select specific OutlookCategory properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
