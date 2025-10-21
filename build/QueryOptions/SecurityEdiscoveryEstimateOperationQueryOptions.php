<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoveryEstimateOperation resources
 *
 * Available select fields:
 */
class SecurityEdiscoveryEstimateOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityEdiscoveryEstimateOperation
     */

    /**
     * Select specific SecurityEdiscoveryEstimateOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
