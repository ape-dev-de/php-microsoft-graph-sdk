<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceWorkflow resources
 *
 * Available select fields:
 */
class IdentityGovernanceWorkflowQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceWorkflow
     */

    /**
     * Select specific IdentityGovernanceWorkflow properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
