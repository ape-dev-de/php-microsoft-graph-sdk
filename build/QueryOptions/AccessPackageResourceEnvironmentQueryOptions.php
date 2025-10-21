<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageResourceEnvironment resources
 *
 * Available select fields:
 */
class AccessPackageResourceEnvironmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageResourceEnvironment
     */

    /**
     * Select specific AccessPackageResourceEnvironment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
