<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Enablement resources
 *
 * Available select fields:
 */
class EnablementQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Enablement
     */

    /**
     * Select specific Enablement properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
