<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoveryTagOperation resources
 *
 * Available select fields:
 */
class SecurityEdiscoveryTagOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityEdiscoveryTagOperation
     */

    /**
     * Select specific SecurityEdiscoveryTagOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
