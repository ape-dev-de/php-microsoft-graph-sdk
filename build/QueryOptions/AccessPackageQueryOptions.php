<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackage resources
 *
 * Available select fields:
 */
class AccessPackageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackage
     */

    /**
     * Select specific AccessPackage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
