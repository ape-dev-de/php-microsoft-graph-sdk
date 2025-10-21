<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RbacApplication
 */
class RbacApplication
{
    public function __construct(
        /**  */
        public array $resourceNamespaces = [],
        /** Resource to grant access to users or groups. */
        public array $roleAssignments = [],
        /** Instances for active role assignments. */
        public array $roleAssignmentScheduleInstances = [],
        /** Requests for active role assignments to principals through PIM. */
        public array $roleAssignmentScheduleRequests = [],
        /** Schedules for active role assignment operations. */
        public array $roleAssignmentSchedules = [],
        /** Resource representing the roles allowed by RBAC providers and the permissions assigned to the roles. */
        public array $roleDefinitions = [],
        /** Instances for role eligibility requests. */
        public array $roleEligibilityScheduleInstances = [],
        /** Requests for role eligibilities for principals through PIM. */
        public array $roleEligibilityScheduleRequests = [],
        /** @var string[] Schedules for role eligibility operations. */
        public array $roleEligibilitySchedules = []
    ) {}
}
