<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedApp resources
 *
 * Available select fields:
 */
class ManagedAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedApp
     */

    /**
     * Select specific ManagedApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
