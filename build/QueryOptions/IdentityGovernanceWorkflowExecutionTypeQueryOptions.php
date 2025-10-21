<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceWorkflowExecutionType resources
 *
 * Available select fields:
 */
class IdentityGovernanceWorkflowExecutionTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceWorkflowExecutionType
     */

    /**
     * Select specific IdentityGovernanceWorkflowExecutionType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
