<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedAndroidStoreApp resources
 *
 * Available select fields:
 */
class ManagedAndroidStoreAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedAndroidStoreApp
     */

    /**
     * Select specific ManagedAndroidStoreApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
