<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceLifecycleWorkflowsContainer resources
 *
 * Available select fields:
 */
class IdentityGovernanceLifecycleWorkflowsContainerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceLifecycleWorkflowsContainer
     */

    /**
     * Select specific IdentityGovernanceLifecycleWorkflowsContainer properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
