<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostReputation resources
 *
 * Available select fields:
 */
class SecurityHostReputationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityHostReputation
     */

    /**
     * Select specific SecurityHostReputation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
