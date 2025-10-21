<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceWorkflowExecutionConditions resources
 *
 * Available select fields:
 */
class IdentityGovernanceWorkflowExecutionConditionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceWorkflowExecutionConditions
     */

    /**
     * Select specific IdentityGovernanceWorkflowExecutionConditions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
