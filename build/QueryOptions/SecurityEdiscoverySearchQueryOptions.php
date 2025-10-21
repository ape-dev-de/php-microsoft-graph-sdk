<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoverySearch resources
 *
 * Available select fields:
 */
class SecurityEdiscoverySearchQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityEdiscoverySearch
     */

    /**
     * Select specific SecurityEdiscoverySearch properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
