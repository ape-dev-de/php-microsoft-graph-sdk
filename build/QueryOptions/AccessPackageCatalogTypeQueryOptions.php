<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageCatalogType resources
 *
 * Available select fields:
 */
class AccessPackageCatalogTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageCatalogType
     */

    /**
     * Select specific AccessPackageCatalogType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
