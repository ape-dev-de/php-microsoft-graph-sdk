<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedAppPolicy resources
 *
 * Available select fields:
 */
class ManagedAppPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedAppPolicy
     */

    /**
     * Select specific ManagedAppPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
