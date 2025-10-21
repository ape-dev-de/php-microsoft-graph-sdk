<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceRun resources
 *
 * Available select fields:
 */
class IdentityGovernanceRunQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceRun
     */

    /**
     * Select specific IdentityGovernanceRun properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
