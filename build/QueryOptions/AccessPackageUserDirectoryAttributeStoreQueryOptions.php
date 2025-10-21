<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageUserDirectoryAttributeStore resources
 *
 * Available select fields:
 */
class AccessPackageUserDirectoryAttributeStoreQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageUserDirectoryAttributeStore
     */

    /**
     * Select specific AccessPackageUserDirectoryAttributeStore properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
