<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceLifecycleWorkflowProcessingStatus resources
 *
 * Available select fields:
 */
class IdentityGovernanceLifecycleWorkflowProcessingStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceLifecycleWorkflowProcessingStatus
     */

    /**
     * Select specific IdentityGovernanceLifecycleWorkflowProcessingStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
