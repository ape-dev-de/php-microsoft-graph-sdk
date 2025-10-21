<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MacOSDmgApp resources
 *
 * Available select fields:
 */
class MacOSDmgAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MacOSDmgApp
     */

    /**
     * Select specific MacOSDmgApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
