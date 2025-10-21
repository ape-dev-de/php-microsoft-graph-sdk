<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageExternalUserLifecycleAction resources
 *
 * Available select fields:
 */
class AccessPackageExternalUserLifecycleActionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageExternalUserLifecycleAction
     */

    /**
     * Select specific AccessPackageExternalUserLifecycleAction properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
