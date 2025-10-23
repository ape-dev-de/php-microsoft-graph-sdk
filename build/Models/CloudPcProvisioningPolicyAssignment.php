<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcProvisioningPolicyAssignment
 */
class CloudPcProvisioningPolicyAssignment
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The assignment target for the provisioning policy. Currently, the only target supported for this policy is a user group. For details, see cloudPcManagementGroupAssignmentTarget.
     * @var CloudPcManagementAssignmentTarget|\stdClass|null
     */
    public mixed $target = null;

    /** 
     * The assignment targeted users for the provisioning policy. This list of users is computed based on assignments, licenses, group memberships, and policies. Read-only. Supports$expand.
     * @var User[]
     */
    public array $assignedUsers = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['target'])) {
            $this->target = $data['target'];
        }
        if (isset($data['assignedUsers'])) {
            $this->assignedUsers = $data['assignedUsers'];
        }
    }
}
