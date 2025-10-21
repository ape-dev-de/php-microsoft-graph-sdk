<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedMobileApp resources
 *
 * Available select fields:
 */
class ManagedMobileAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedMobileApp
     */

    /**
     * Select specific ManagedMobileApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
