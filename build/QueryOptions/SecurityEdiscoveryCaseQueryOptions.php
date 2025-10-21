<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoveryCase resources
 *
 * Available select fields:
 */
class SecurityEdiscoveryCaseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityEdiscoveryCase
     */

    /**
     * Select specific SecurityEdiscoveryCase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
