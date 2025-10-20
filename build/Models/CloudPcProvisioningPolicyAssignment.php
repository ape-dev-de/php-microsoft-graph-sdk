<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcProvisioningPolicyAssignment
 */
class CloudPcProvisioningPolicyAssignment
{
    /**
     * The assignment target for the provisioning policy. Currently, the only target supported for this policy is a user group. For details, see cloudPcManagementGroupAssignmentTarget.
     */
    private ?string $target;

    /**
     * The assignment targeted users for the provisioning policy. This list of users is computed based on assignments, licenses, group memberships, and policies. Read-only. Supports$expand.
     */
    private ?string $assignedUsers;

    public function getTarget(): ?string
    {
        return $this->target;
    }

    public function setTarget(?string $target): self
    {
        $this->target = $target;
        return $this;
    }

    public function getAssignedUsers(): ?string
    {
        return $this->assignedUsers;
    }

    public function setAssignedUsers(?string $assignedUsers): self
    {
        $this->assignedUsers = $assignedUsers;
        return $this;
    }

}
