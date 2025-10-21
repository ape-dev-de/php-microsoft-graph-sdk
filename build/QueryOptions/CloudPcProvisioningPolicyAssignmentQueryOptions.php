<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcProvisioningPolicyAssignment resources
 *
 * Available select fields:
 * - target
 * - assignedUsers
 */
class CloudPcProvisioningPolicyAssignmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CloudPcProvisioningPolicyAssignment
     */
    public const FIELD_TARGET = 'target';
    public const FIELD_ASSIGNED_USERS = 'assignedUsers';

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
