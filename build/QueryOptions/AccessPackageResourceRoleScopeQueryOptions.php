<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageResourceRoleScope resources
 *
 * Available select fields:
 */
class AccessPackageResourceRoleScopeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageResourceRoleScope
     */

    /**
     * Select specific AccessPackageResourceRoleScope properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
