<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SystemFacet resources
 *
 * Available select fields:
 */
class SystemFacetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SystemFacet
     */

    /**
     * Select specific SystemFacet properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
