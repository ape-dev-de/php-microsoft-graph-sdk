<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceLifecycleTaskCategory resources
 *
 * Available select fields:
 */
class IdentityGovernanceLifecycleTaskCategoryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceLifecycleTaskCategory
     */

    /**
     * Select specific IdentityGovernanceLifecycleTaskCategory properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
