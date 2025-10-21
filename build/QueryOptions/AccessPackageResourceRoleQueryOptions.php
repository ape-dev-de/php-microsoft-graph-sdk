<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageResourceRole resources
 *
 * Available select fields:
 */
class AccessPackageResourceRoleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageResourceRole
     */

    /**
     * Select specific AccessPackageResourceRole properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
