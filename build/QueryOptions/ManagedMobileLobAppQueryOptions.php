<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedMobileLobApp resources
 *
 * Available select fields:
 */
class ManagedMobileLobAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedMobileLobApp
     */

    /**
     * Select specific ManagedMobileLobApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
