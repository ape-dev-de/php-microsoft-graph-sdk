<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharePointIdentitySet resources
 *
 * Available select fields:
 */
class SharePointIdentitySetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SharePointIdentitySet
     */

    /**
     * Select specific SharePointIdentitySet properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
