<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedIOSStoreApp resources
 *
 * Available select fields:
 */
class ManagedIOSStoreAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedIOSStoreApp
     */

    /**
     * Select specific ManagedIOSStoreApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
