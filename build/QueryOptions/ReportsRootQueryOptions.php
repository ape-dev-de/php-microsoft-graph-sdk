<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ReportsRoot resources
 *
 * Available select fields:
 */
class ReportsRootQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ReportsRoot
     */

    /**
     * Select specific ReportsRoot properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
