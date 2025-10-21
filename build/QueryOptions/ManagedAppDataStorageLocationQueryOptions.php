<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedAppDataStorageLocation resources
 *
 * Available select fields:
 */
class ManagedAppDataStorageLocationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedAppDataStorageLocation
     */

    /**
     * Select specific ManagedAppDataStorageLocation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
