<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedAppPolicyDeploymentSummary resources
 *
 * Available select fields:
 */
class ManagedAppPolicyDeploymentSummaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedAppPolicyDeploymentSummary
     */

    /**
     * Select specific ManagedAppPolicyDeploymentSummary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
