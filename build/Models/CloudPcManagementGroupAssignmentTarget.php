<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcManagementGroupAssignmentTarget
 */
class CloudPcManagementGroupAssignmentTarget
{
    public function __construct(
        /** The ID of the target group for the assignment. */
        public ?string $groupId = null,
        /** The unique identifier for the service plan that indicates which size of the Cloud PC to provision for the user. Use a null value, when the provisioningType is dedicated. */
        public ?string $servicePlanId = null
    ) {}
}
