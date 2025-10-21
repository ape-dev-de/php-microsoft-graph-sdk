<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageCatalogState resources
 *
 * Available select fields:
 */
class AccessPackageCatalogStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageCatalogState
     */

    /**
     * Select specific AccessPackageCatalogState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
