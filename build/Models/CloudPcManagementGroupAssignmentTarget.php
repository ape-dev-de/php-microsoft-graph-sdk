<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcManagementGroupAssignmentTarget
 */
class CloudPcManagementGroupAssignmentTarget
{
    /** The ID of the target group for the assignment. */
    public ?string $groupId = null;

    /** The unique identifier for the service plan that indicates which size of the Cloud PC to provision for the user. Use a null value, when the provisioningType is dedicated. */
    public ?string $servicePlanId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['groupId'])) {
            $this->groupId = $data['groupId'];
        }
        if (isset($data['servicePlanId'])) {
            $this->servicePlanId = $data['servicePlanId'];
        }
    }
}
