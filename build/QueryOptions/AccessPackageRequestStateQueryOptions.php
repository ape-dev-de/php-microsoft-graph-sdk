<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageRequestState resources
 *
 * Available select fields:
 */
class AccessPackageRequestStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageRequestState
     */

    /**
     * Select specific AccessPackageRequestState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
