<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageResource resources
 *
 * Available select fields:
 */
class AccessPackageResourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageResource
     */

    /**
     * Select specific AccessPackageResource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
