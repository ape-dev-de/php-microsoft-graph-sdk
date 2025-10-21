<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageResourceRequest resources
 *
 * Available select fields:
 */
class AccessPackageResourceRequestQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageResourceRequest
     */

    /**
     * Select specific AccessPackageResourceRequest properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
