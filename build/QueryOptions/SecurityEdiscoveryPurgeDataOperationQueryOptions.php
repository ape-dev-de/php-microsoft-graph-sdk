<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoveryPurgeDataOperation resources
 *
 * Available select fields:
 */
class SecurityEdiscoveryPurgeDataOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityEdiscoveryPurgeDataOperation
     */

    /**
     * Select specific SecurityEdiscoveryPurgeDataOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
