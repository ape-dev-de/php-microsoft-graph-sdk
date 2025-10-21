<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceOnDemandExecutionOnly resources
 *
 * Available select fields:
 */
class IdentityGovernanceOnDemandExecutionOnlyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceOnDemandExecutionOnly
     */

    /**
     * Select specific IdentityGovernanceOnDemandExecutionOnly properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
