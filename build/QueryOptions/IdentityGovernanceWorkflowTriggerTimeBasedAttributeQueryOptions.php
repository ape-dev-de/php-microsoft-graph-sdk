<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceWorkflowTriggerTimeBasedAttribute resources
 *
 * Available select fields:
 */
class IdentityGovernanceWorkflowTriggerTimeBasedAttributeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceWorkflowTriggerTimeBasedAttribute
     */

    /**
     * Select specific IdentityGovernanceWorkflowTriggerTimeBasedAttribute properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
