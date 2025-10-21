<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoveryIndexOperation resources
 *
 * Available select fields:
 */
class SecurityEdiscoveryIndexOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityEdiscoveryIndexOperation
     */

    /**
     * Select specific SecurityEdiscoveryIndexOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
