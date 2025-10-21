<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceLifecycleWorkflowCategory resources
 *
 * Available select fields:
 */
class IdentityGovernanceLifecycleWorkflowCategoryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceLifecycleWorkflowCategory
     */

    /**
     * Select specific IdentityGovernanceLifecycleWorkflowCategory properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
