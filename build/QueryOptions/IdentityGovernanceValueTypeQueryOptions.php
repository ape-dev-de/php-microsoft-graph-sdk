<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceValueType resources
 *
 * Available select fields:
 */
class IdentityGovernanceValueTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceValueType
     */

    /**
     * Select specific IdentityGovernanceValueType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
