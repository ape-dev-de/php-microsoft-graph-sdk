<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OutlookUser resources
 *
 * Available select fields:
 */
class OutlookUserQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OutlookUser
     */

    /**
     * Select specific OutlookUser properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
