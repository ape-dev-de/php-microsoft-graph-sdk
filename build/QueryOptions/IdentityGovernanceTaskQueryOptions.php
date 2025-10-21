<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceTask resources
 *
 * Available select fields:
 */
class IdentityGovernanceTaskQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceTask
     */

    /**
     * Select specific IdentityGovernanceTask properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
