<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoveryCustodian resources
 *
 * Available select fields:
 */
class SecurityEdiscoveryCustodianQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityEdiscoveryCustodian
     */

    /**
     * Select specific SecurityEdiscoveryCustodian properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
