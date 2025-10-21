<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcProvisioningPolicyAssignment resources
 *
 * Available select fields:
 */
class CloudPcProvisioningPolicyAssignmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CloudPcProvisioningPolicyAssignment
     */

    /**
     * Select specific CloudPcProvisioningPolicyAssignment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
