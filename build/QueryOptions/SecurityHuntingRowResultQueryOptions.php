<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHuntingRowResult resources
 *
 * Available select fields:
 */
class SecurityHuntingRowResultQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityHuntingRowResult
     */

    /**
     * Select specific SecurityHuntingRowResult properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
