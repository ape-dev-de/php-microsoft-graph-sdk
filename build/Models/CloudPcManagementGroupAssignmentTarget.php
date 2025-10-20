<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcManagementGroupAssignmentTarget
 */
class CloudPcManagementGroupAssignmentTarget
{
    /**
     * The ID of the target group for the assignment.
     */
    private ?string $groupId;

    /**
     * The unique identifier for the service plan that indicates which size of the Cloud PC to provision for the user. Use a null value, when the provisioningType is dedicated.
     */
    private ?string $servicePlanId;

    public function getGroupId(): ?string
    {
        return $this->groupId;
    }

    public function setGroupId(?string $groupId): self
    {
        $this->groupId = $groupId;
        return $this;
    }

    public function getServicePlanId(): ?string
    {
        return $this->servicePlanId;
    }

    public function setServicePlanId(?string $servicePlanId): self
    {
        $this->servicePlanId = $servicePlanId;
        return $this;
    }

}
