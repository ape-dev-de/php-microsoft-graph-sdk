<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoveryHoldOperation resources
 *
 * Available select fields:
 */
class SecurityEdiscoveryHoldOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityEdiscoveryHoldOperation
     */

    /**
     * Select specific SecurityEdiscoveryHoldOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
