<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ItemActivityStat resources
 *
 * Available select fields:
 */
class ItemActivityStatQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ItemActivityStat
     */

    /**
     * Select specific ItemActivityStat properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
